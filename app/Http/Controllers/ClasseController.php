<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classe;
use App\Ficha;

class ClasseController extends Controller {

    private $modelClasse;
    private $modelFicha;

    function __construct() {
        $this->modelClasse = new Classe();
        $this->modelFicha = new Ficha();
    }

    public function setData(Request $request) {
        $data = [
            'nome' => $request['nome'],
            'descricao' => $request['descricao'],
            'poderes' => $request['poderes'],
            'objetivo' => $request['objetivo']
        ];
        return $data;
    }

    public function index() {
        $classes = $this->modelClasse->getAllClasses();
        return view('classes.index', compact('classes'));
    }

    public function create() {
        return view('classes.create');
    }

    public function store(Request $request) {
        $this->modelClasse->store($this->setData($request));
        return redirect('/admin/classes')->with('success', 'Classe adicionada');
    }

    public function show($id) {
        $classe = $this->modelClasse->getClasse($id);
        $fichas= $this->modelFicha->getAllFichasClasse($id);
        return view('classes.show', compact('classe', 'fichas'));
    }

    public function edit($id) {
        $classe = $this->modelClasse->getClasse($id);
        return view('classes.edit', compact('classe'));
    }

    public function update(Request $request, $id) {
        $this->modelClasse->updateSemModel($id, $this->setData($request));
        return redirect('/admin/classes')->with('success', 'Classe alterada com sucesso');
    }

    public function destroy($id) {
        $this->modelClasse->remove($id);
        return redirect('/admin/classes')->with('success', 'Classe eliminada');
    }
    public function descricao($id) {
        $classe = $this->modelClasse->getClasse($id);
        $fichas = $this->modelFicha->getAllFichasClasse($classe->id);
        return view('textos.descricao', compact('classe','fichas'));
    }

}
