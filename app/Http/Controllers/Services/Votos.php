<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Services;
use App\Pergunta;
use App\Alternativa;
use App\Voto;
/**
 * Description of Votos
 *
 * @author fabricio
 */
class Votos {
    //put your code here
    private $modelPergunta;
    private $modelAlternativa;
    private $modelVoto;
    private $address;

    function __construct() {
        $this->modelPergunta = new Pergunta();
        $this->modelAlternativa = new Alternativa();
        $this->modelVoto = new Voto();
        $this->address = new Address();
    }
    public function getVotos(){
        $pergunta = $this->modelPergunta->getPerguntaAtiva();
        if($pergunta!=null){
            $alternativasNãoProntas = $this->modelAlternativa->getAllAlternativas($pergunta->id);
            $alternativas=array();
            $cont=0;
            foreach($alternativasNãoProntas as $alternativa){
                $alternativas[$cont]['total'] = $this->modelVoto->getCountAllVotos($alternativa->id);
                $alternativas[$cont]['alternativa'] = $alternativa->alternativa;
                $cont++;
            }
            return view('components.votacao.formvotos',compact('alternativas','pergunta'));
        }
    }
}
