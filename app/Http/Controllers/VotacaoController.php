<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pergunta;
use App\Alternativa;
use App\Voto;
use App\Http\Controllers\Services\Votos;
use App\Http\Controllers\Services\Address;

class VotacaoController extends Controller {

    private $modelPergunta;
    private $modelAlternativa;
    private $modelVoto;
    private $address;
    private $votos;

    function __construct() {
        $this->modelPergunta = new Pergunta();
        $this->modelAlternativa = new Alternativa();
        $this->modelVoto = new Voto();
        $this->address = new Address();
        $this->votos = new Votos();
    }

    public function setDataPergunta(Request $request) {
        $data = [
            'pergunta' => $request['pergunta'],
            'ativa' => 1
        ];
        return $data;
    }
    public function setDataAlternativa(Request $request) {
        $data = [
            'alternativa' => $request['alternativa'],
            'id_pergunta' => $request['id_pergunta']
        ];
        return $data;
    }
    public function setDataVoto(Request $request) {
        $data = [
            'address' => $this->address->getUserIpAddr(),
            'id_alternativa' => $request['id_alternativa']
        ];
        return $data;
    }

    public function index() {
        $perguntas = $this->modelPergunta->getAllPerguntas();
        return view('votacao.index', compact('perguntas'));
    }

    public function create() {
        return view('votacao.create');
    }

    public function store(Request $request) {
        $pergunta = $this->modelPergunta->getPerguntaAtiva();
        if($pergunta!=null){
            $this->modelPergunta->updateSemModel($pergunta->id, ['ativa'=>0]);
        }
        $this->modelPergunta->store($this->setDataPergunta($request));
        return redirect('/admin/perguntas')->with('success', 'Pergunta adicionada com sucesso');
    }
    
    public function storeAlternativa(Request $request) {
        $this->modelAlternativa->store($this->setDataAlternativa($request));
        $alternativas = $this->modelAlternativa->getAllAlternativas($request['id_pergunta']);
        $pergunta = $this->modelPergunta->getPergunta($request['id_pergunta']);
        return view('components.votacao.listalternativas',compact('pergunta','alternativas'));
    }

    public function show($id) {
        $pergunta = $this->modelPergunta->getPergunta($id);
        $alternativas = $this->modelAlternativa->getAllAlternativas($id);
        return view('votacao.show', compact('pergunta','alternativas'));
    }

    public function edit($id) {
        $pergunta = $this->modelPergunta->getPergunta($id);
        return view('votacao.edit', compact('pergunta'));
    }

    public function update(Request $request, $id) {
        $this->modelPergunta->updateSemModel($id, $this->setDataPergunta($request));
        return redirect('/admin/perguntas')->with('success', 'Pergunta alterada com sucesso');
    }

    public function destroy($id) {
        $this->modelPergunta->remove($id);
        return redirect('/admin/perguntas')->with('success', 'Pergunta eliminada');
    }
    public function destroyAlternativa(Request $request) {
        $alternativa = $this->modelAlternativa->getAlternativa($request->id);
        $this->modelAlternativa->remove($request->id);
        $votos = $this->modelVoto->getAllVotos($request->id);
        foreach ($votos as $voto){
            $this->modelVoto->remove($voto->id);
        }
        $alternativasNãoProntas = $this->modelAlternativa->getAllAlternativas($request->id);
        $alternativas=array();
        $cont=0;
        foreach($alternativasNãoProntas as $alternativa){
            $alternativas[$cont]['id'] = $alternativa->id;
            $alternativas[$cont]['alternativa'] = $alternativa->alternativa;
            $cont++;
        }
        $pergunta = $this->modelPergunta->getPergunta($alternativa->id_pergunta);
        return view('components.votacao.listalternativas',compact('pergunta','alternativas'));
    }
    public function testaIP(){
        $ip = $this->address->getUserIpAddr();
        $pergunta = $this->modelPergunta->getPerguntaAtiva();
        $alternativas = $this->modelAlternativa->getAllAlternativas($pergunta->id);
        $votou = false;
        foreach($alternativas as $alternativa){
            $votos = $this->modelVoto->getAllVotos($alternativa->id);
            foreach ($votos as $voto){
                if($ip == $voto->address){
                    $votou = true;
                }
            }
        }
//        dd($votou);
        return $votou;
    }
    public function getVotos(){
        return $this->votos->getVotos();
    }
    public function storeVoto($id_alternativa, $id_pergunta){
        $alternativa = $this->modelAlternativa->getAlternativaPorNome($id_alternativa, $id_pergunta);
        if(!$this->testaIP()){
            $this->modelVoto->store(['address'=>$this->address->getUserIpAddr(),'id_alternativa'=>$alternativa->id]);
        }
        $alternativasNãoProntas = $this->modelAlternativa->getAllAlternativas($id_pergunta);
        $alternativas=array();
        $cont=0;
        foreach($alternativasNãoProntas as $alternativa){
            $alternativas[$cont]['total'] = $this->modelVoto->getCountAllVotos($alternativa->id);
            $alternativas[$cont]['alternativa'] = $alternativa->alternativa;
            $cont++;            
        }
        $pergunta = $this->modelPergunta->getPergunta($id_pergunta);
        return view('components.votacao.formvotos',compact('pergunta','alternativas'));
    }
}
