<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ficha;
use App\Classe;

class FichaController extends Controller
{
    private $modelFicha;
    private $modelClasse;
    function __construct() {
        $this->modelFicha=new Ficha();
        $this->modelClasse=new Classe();
    }
    public function setData(Request $request){
        $data = [
            'nome' => $request['nome'],
            'resumo' => $request['resumo'],
            'id_classe' => $request['id_classe'],
            
        ];
        return $data;
    }
    public function index() {
        $fichas = $this->modelFicha->getAllFichas();
        return view('fichas.index', compact('fichas'));
    }
    public function create($id) {
        $classe=$this->modelClasse->getClasse($id);
        return view('fichas.create', compact('classe'));
    }

    public function store(Request $request) {
        $this->modelFicha->store($this->setData($request));
        $id=$request->id_classe;
        return redirect()->route('admin.classes.show', ['id' => $id])->with('success', 'Ficha adicionada');
    }

    public function show($id) {
        $ficha= $this->modelFicha->getFicha($id);
        return view('fichas.show', compact('ficha'));
    }

    public function edit($id) {
        $ficha= $this->modelFicha->getFicha($id);
        return view('fichas.edit', compact('ficha'));
    }

    public function update(Request $request, $id) {
        $this->modelFicha->updateSemModel($id, $this->setData($request));
        $id=$request->id_classe;
        return redirect()->route('admin.classes.show', ['id' => $id])->with('success', 'Ficha alterada com sucesso');
    }
    public function destroy($id) {
        $ficha= $this->modelFicha->getFicha($id);
        $id_ficha=$ficha->id_classe;
        $this->modelFicha->remove($id);
        return redirect()->route('admin.classes.show', ['id' => $id_ficha])->with('success', 'Ficha eliminada');
    }
}
