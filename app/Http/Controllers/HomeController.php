<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cronica;
use App\FichaUser;
use App\Classe;
use App\Chat;
use App\Visitas;
use App\Http\Controllers\Services\Votos;
use App\Http\Controllers\Services\Address;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {

    private $modelCronica;
    private $modelFichaUser;
    private $modelClasse;
    private $modelChat;
    private $modelVisitas;
    private $address;
    private $votos;
    

    public function __construct() {
        $this->modelCronica = new Cronica();
        $this->modelFichaUser = new FichaUser();
        $this->modelClasse = new Classe();
        $this->modelChat = new Chat();
        $this->modelVisitas = new Visitas();
        $this->address = new Address();
        $this->votos = new Votos();
    }

    public function index() {
        $votos = $this->votos->getVotos();
        $classes = $this->modelClasse->getAllClasses();
        $postagens = $this->modelChat->getAllChatsPrincipal();
        $cronicasProntas = $this->modelCronica->getAllCronicasParaJogar();
        $notices = $this->getNotice();
        $pages = $this->getPages();
        //dd(gethostbyaddr($this->getUserIpAddr()));
        $this->storeVisita();
        if (Auth::user() == null)
            return view('welcome', compact('classes', 'postagens', 'cronicasProntas', 'notices', 'pages', 'votos'));
        else {
            $cronicasUser = $this->modelCronica->getAllCronicasUser(Auth::user()->id);
            $cronicas = $this->modelCronica->getAllCronicasNonUser(Auth::user()->id);
            $fichasJogador = $this->modelFichaUser->getAllFichaUsers(Auth::user()->id);
            if (Auth::user()->id_fichaUser != 0) {
                $myFicha = $this->modelFichaUser->getFichaUser(Auth::user()->id_fichaUser);
                return view('welcome', compact('cronicasUser', 'fichasJogador', 'cronicas', 'myFicha', 'classes', 'postagens', 'cronicasProntas', 'notices', 'pages', 'votos'));
            }
            return view('welcome', compact('cronicasUser', 'fichasJogador', 'cronicas', 'classes', 'postagens', 'cronicasProntas', 'notices', 'pages', 'votos'));
        }
    }

    
    public function storeVisita(){
        $address = $this->address->getUserIpAddr();
        $this->modelVisitas->store(['address' => $address]);
    }
    public function storeChat(Request $request) {
        $nome = '';
        if(Auth::guest()){
            $nome = 'Anônimo';
        }
        else{
            $nome = Auth::user()->name;
        }
        $this->modelChat->store(['nome' => $nome,
            'id_cronica' => 0,
            'texto' => $request['texto']]);
    }

    public function storeNotice(Request $request) {
        $this->modelChat->store(['nome' => Auth::user()->name,
            'id_cronica' => -1,
            'texto' => $request['texto'],
            'link' => $request['link']]);
        return redirect()->route('home');
    }

    public function storePage(Request $request) {
        $this->modelChat->store(['nome' => Auth::user()->name,
            'id_cronica' => -2,
            'texto' => $request['texto'],
            'link' => $request['link']]);
        return redirect()->route('home');
    }

    public function getPostagens() {
        $postagens = $this->modelChat->getAllChatsPrincipal();
        $html = '';
        foreach ($postagens as $postagem) {
            $html = $html. '<div class="row">' .
                    '<div class="col-md-12">' .
                    '<label>' . $postagem->nome . ' - </label>'
                    . $postagem->texto .
                    '<h6><i><u>' . $postagem->data . '</u></i></h6>' .
                    '</div>' .
                    '</div>';
        }
        return $html;
    }

    public function getNotice() {
        $postagens = $this->modelChat->getAllNotice();
        return $postagens;
    }

    public function getPages() {
        $postagens = $this->modelChat->getAllPages();
        return $postagens;
    }

    public function noaccess() {
        return view('noaccess');
    }

    public function links() {
        $pages = $this->getPages();
        return view('components.gerais.links', compact('pages'));
    }
    public function visitas() {
        return $this->modelVisitas->getAllVisitasUnique()->count();
    }
    public function visitasIndex() {
        return $this->modelVisitas->getAllVisitas()->count();
    }

}
