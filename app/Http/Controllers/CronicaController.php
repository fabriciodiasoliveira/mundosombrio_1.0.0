<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cronica;
use App\Postagem;
use App\FichaUser;
use App\User;
use App\Chat;
use Illuminate\Support\Facades\Auth;

class CronicaController extends Controller {

    private $modelCronica;
    private $modelPostagem;
    private $modelFichaUser;
    private $modelUser;
    private $modelChat;

    function __construct() {
        $this->modelCronica = new Cronica();
        $this->modelPostagem = new Postagem();
        $this->modelFichaUser = new FichaUser();
        $this->modelUser = new User();
        $this->modelChat = new Chat();
    }

    public function setData(Request $request) {
        $data = [
            'nome' => $request['nome'],
            'resumo' => $request['resumo'],
            'id_user' => Auth::user()->id,
        ];
        return $data;
    }

    public function index() {
        $cronicas = $this->modelCronica->getAllCronicas();
        if (isset(Auth::user()->id)) {
            $cronicas_user = $this->modelCronica->getAllCronicasUser(Auth::user()->id);
            $cronicas_non_user = $this->modelCronica->getAllCronicasNonUser(Auth::user()->id);
            return view('cronicas.index', compact('cronicas', 'cronicas_user'));
        } else {
            return view('cronicas.index', compact('cronicas'));
        }
    }

    public function create() {
        return view('cronicas.create');
    }

    public function store(Request $request) {
        $this->modelCronica->store($this->setData($request));
        return redirect('home')->with('success', 'Cronica adicionada');
    }

    public function show($id) {
        $cronica = $this->modelCronica->getCronica($id);
        return view('cronicas.show', compact('cronica'));
    }

    public function edit($id) {
        $cronica = $this->modelCronica->getCronica($id);
        return view('cronicas.edit', compact('cronica'));
    }

    public function update(Request $request, $id) {
        $this->modelCronica->updateSemModel($id, $this->setData($request));
        return redirect('/admin/cronicas')->with('success', 'Cronica alterada com sucesso');
    }

    public function destroy($id) {
        $cronica = $this->modelCronica->getCronica($id);
        if ($cronica->finalizada === 1) {
            $postagens = $this->modelPostagem->getAllPostagensCronica($id);
            $fichaUsers = $this->modelFichaUser->getAllFichaCronica($id);
            $chats = $this->modelChat->getAllChats($id);
            foreach ($fichaUsers as $fichaUser) {
                $this->modelFichaUser->updateSemModel($fichaUser->id, ['id_cronica' => 0]);
                $this->modelUser->updateSemModel($fichaUser->id_user, ['id_fichaUser' => 0]);
            }
            foreach ($postagens as $postagem) {
                $this->modelPostagem->remove($postagem->id);
            }
            foreach ($chats as $chat) {
                $this->modelChat->remove($chat->id);
            }
            $this->modelCronica->remove($id);
            return redirect('cronicas/visitante')->with('success', 'Cronica eliminada');
        }
        else{
            return back()->with('info', 'A crônica não está finalizada');
        } 
   }

}
