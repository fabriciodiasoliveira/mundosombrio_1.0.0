<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Services\Arquetipos;
use App\Classe;
use App\Ficha;
use App\FichaUser;
use App\Cronica;
use App\Postagem;
use App\User;
use App\Valor;
use App\Augurio;
use App\Raca;
use App\Caracteristica;
use App\Chat;
use Illuminate\Support\Facades\Auth;

class JogoController extends Controller {
    private $arquetipos;
    private $modelClasse;
    private $modelFicha;
    private $modelFichaUser;
    private $modelCronica;
    private $modelPostagem;
    private $modelUser;
    private $modelValor;
    private $modelCaracteristica;
    private $modelAugurio;
    private $modelRaca;
    private $modelChat;

    function __construct() {
        $this->arquetipos = new Arquetipos();
        $this->modelClasse = new Classe();
        $this->modelFicha = new Ficha();
        $this->modelFichaUser = new FichaUser();
        $this->modelCronica = new Cronica();
        $this->modelPostagem = new Postagem();
        $this->modelUser = new User();
        $this->modelCaracteristica = new Caracteristica();
        $this->modelValor = new Valor();
        $this->modelAugurio = new Augurio();
        $this->modelRaca = new Raca();
        $this->modelChat = new Chat();
    }

    public function setValor(Request $request) {
        $data = [
            'valor' => $request['valor'],
            'id_fichaUser' => $request['id_fichaUser'],
            'id_caracteristica' => $request['id_caracteristica'],
        ];
        return $data;
    }

    public function setDataFichaUser(Request $request) {
        $data = [
            'nome' => $request['nome'],
            'resumo' => $request['resumo'],
            'id_ficha' => $request['id_ficha'],
            'id_user' => Auth::user()->id,
            'id_cronica' => $request['id_cronica'],
            'anotacoes' => $request['anotacoes']
        ];
        return $data;
    }

    public function setDataPostagem(Request $request) {
        $data = [
            'id_fichaUser' => $request['id_fichaUser'],
            'post' => $request['post'],
            'id_cronica' => $request['id_cronica'],
        ];
        return $data;
    }

    public function index() {
        $classes = $this->modelClasse->getAllClasses();
        return view('jogo.classes.index', compact('classes'));
    }

    public function showClasse($id) {
        $classe = $this->modelClasse->getClasse($id);
        $fichas = $this->modelFicha->getAllFichasClasse($id);
        return view('jogo.classes.show', compact('classe', 'fichas'));
    }

    public function showFicha($id, $id_fichaUser) {
        $arquetipos = $this->arquetipos->getArquetipos();
        if($id_fichaUser!=0){
            $fichaUser = $this->modelFichaUser->getFichaUser($id_fichaUser);
            $id=$fichaUser->id_ficha;
            if($fichaUser->pronto==1){
                return redirect()->route('home')->with('info', 'Sua ficha já está pronta.');
            }
        }
        $ficha = $this->modelFicha->getFicha($id);
        $classe = $this->modelClasse->getClasse($ficha->id_classe);
        $caracteristicas = $this->modelCaracteristica->getAllCaracteristicaClasse($classe->id);
        if ($classe->id == 1) {
            $valores = 0;
            $valoresFicha = 0;
            $fichaUser = 0;
            $id = 0;
            if ($id_fichaUser == 0) {
                //dd('criou');
                $id = $this->insertFichaUser($ficha->id);
                $fichaUser = $this->modelFichaUser->getFichaUser($id);
                $this->insertValores($caracteristicas, $fichaUser);
                return redirect()->route('jogo.fichas.show', ['id' => 0, 'id_fichaUser' => $fichaUser->id]);
            } else {
                //dd('não criou');
                $fichaUser = $this->modelFichaUser->getFichaUser($id_fichaUser);
                $id = $id_fichaUser;
            }
            $valoresFisico = $this->modelValor->getAllValorCaracteristicaComum(1, $id);
            $valoresMental = $this->modelValor->getAllValorCaracteristicaComum(2, $id);
            $valoresSocial = $this->modelValor->getAllValorCaracteristicaComum(3, $id);
            $valoresTalento = $this->modelValor->getAllValorCaracteristicaComum(4, $id);
            $valoresPericia = $this->modelValor->getAllValorCaracteristicaComum(5, $id);
            $valoresConhecimento = $this->modelValor->getAllValorCaracteristicaComum(6, $id);
            $valoresVirtude = $this->modelValor->getAllValorCaracteristicaComum(8, $id);
            $valoresAntecedentes = $this->modelValor->getAllValorAntecedentes($id);
            $valoresFicha = $this->modelValor->getAllValorCaracteristicaFicha($ficha->id, $id);
            $valores = $this->modelValor->getAllValorCaracteristica($fichaUser->id);
            $this->modelUser->updateSemModel(Auth::user()->id, ['id_fichaUser' => $fichaUser->id]);
            //dd($valoresAntecedentes);
            return view('jogo.fichas.show', compact('ficha', 'arquetipos', 'classe', 'valores', 
                    'fichaUser', 'valoresFicha', 'valoresFisico', 'valoresMental', 'valoresSocial', 
                    'valoresTalento', 'valoresPericia', 'valoresConhecimento', 'valoresVirtude','valoresAntecedentes'));
        } elseif ($classe->id == 2) {
            $valores = 0;
            $valoresFicha = 0;
            $fichaUser = 0;
            $id = 0;
            if ($id_fichaUser == 0) {
                $id = $this->insertFichaUser($ficha->id);
                $fichaUser = $this->modelFichaUser->getFichaUser($id);
                $this->insertValores($caracteristicas, $fichaUser);
                return redirect()->route('jogo.fichas.show', ['id' => 0, 'id_fichaUser' => $fichaUser->id]);
            } else {
                $fichaUser = $this->modelFichaUser->getFichaUser($id_fichaUser);
                $id = $id_fichaUser;
            }

            $valoresFisico = $this->modelValor->getAllValorCaracteristicaComum(1, $id);
            $valoresMental = $this->modelValor->getAllValorCaracteristicaComum(2, $id);
            $valoresSocial = $this->modelValor->getAllValorCaracteristicaComum(3, $id);
            $valoresTalento = $this->modelValor->getAllValorCaracteristicaComum(4, $id);
            $valoresPericia = $this->modelValor->getAllValorCaracteristicaComum(5, $id);
            $valoresConhecimento = $this->modelValor->getAllValorCaracteristicaComum(6, $id);
            $valoresFicha = $this->modelValor->getAllValorCaracteristicaFicha($ficha->id, $id);
            $valores = $this->modelValor->getAllValorCaracteristica($fichaUser->id);
            $augurios = $this->modelAugurio->getAllAugurios();
            $racas = $this->modelRaca->getAllRacas();
            $ragabash = $this->modelValor->getAllValorCaracteristicaAugurio(1, $id);
            $theurge = $this->modelValor->getAllValorCaracteristicaAugurio(2, $id);
            $galiard = $this->modelValor->getAllValorCaracteristicaAugurio(3, $id);
            $philodox = $this->modelValor->getAllValorCaracteristicaAugurio(4, $id);
            $ahroun = $this->modelValor->getAllValorCaracteristicaAugurio(5, $id);
            $lupus = $this->modelValor->getAllValorCaracteristicaRaca(1, $id);
            $impuro = $this->modelValor->getAllValorCaracteristicaRaca(2, $id);
            $hominideo = $this->modelValor->getAllValorCaracteristicaRaca(3, $id);
            $valoresAntecedentes = $this->modelValor->getAllValorAntecedentes($id);
            $this->modelUser->updateSemModel(Auth::user()->id, ['id_fichaUser' => $fichaUser->id]);
            //dd($valoresAntecedentes);
            return view('jogo.fichas.show', compact('ficha', 'arquetipos', 'classe', 'valores', 'fichaUser', 
                    'valoresFicha', 'valoresFisico', 'valoresMental', 'valoresSocial', 'valoresTalento', 
                    'valoresPericia', 'valoresConhecimento', 'augurios', 'racas', 'ragabash', 'theurge', 
                    'galiard', 'philodox', 'ahroun', 'lupus', 'impuro', 'hominideo','valoresAntecedentes'));
        }
        elseif ($classe->id == 3) {
            $valores = 0;
            $valoresFicha = 0;
            $fichaUser = 0;
            $id = 0;
            if ($id_fichaUser == 0) {
                $id = $this->insertFichaUser($ficha->id);
                $fichaUser = $this->modelFichaUser->getFichaUser($id);
                $this->insertValores($caracteristicas, $fichaUser);
                return redirect()->route('jogo.fichas.show', ['id' => 0, 'id_fichaUser' => $fichaUser->id]);
            } else {
                $fichaUser = $this->modelFichaUser->getFichaUser($id_fichaUser);
                $id = $id_fichaUser;
            }

            $valoresFisico = $this->modelValor->getAllValorCaracteristicaComum(1, $id);
            $valoresMental = $this->modelValor->getAllValorCaracteristicaComum(2, $id);
            $valoresSocial = $this->modelValor->getAllValorCaracteristicaComum(3, $id);
            $valoresTalento = $this->modelValor->getAllValorCaracteristicaComum(4, $id);
            $valoresPericia = $this->modelValor->getAllValorCaracteristicaComum(5, $id);
            $valoresConhecimento = $this->modelValor->getAllValorCaracteristicaComum(6, $id);
            $valoresFicha = $this->modelValor->getAllValorEsfera($id);
            $valores = $this->modelValor->getAllValorCaracteristica($fichaUser->id);
            $valoresAntecedentes = $this->modelValor->getAllValorAntecedentes($id);
            $this->modelUser->updateSemModel(Auth::user()->id, ['id_fichaUser' => $fichaUser->id]);
            //dd($valoresAntecedentes);
            return view('jogo.fichas.show', compact('ficha', 'arquetipos', 'classe', 'valores', 'fichaUser', 
                    'valoresFicha', 'valoresFisico', 'valoresMental', 'valoresSocial', 'valoresTalento', 
                    'valoresPericia', 'valoresConhecimento','valoresAntecedentes'));
        }
    }

    public function storeFicha(Request $request) {
        $this->modelFichaUser->store($this->setDataFichaUser($request));
        return redirect()->route('jogo.fichas.listfichas', ['id' => Auth::user()->id])->with('success', 'Ficha criada');
    }

    public function updateFicha(Request $request) {
        $this->modelFichaUser->updateSemModel($request['id_fichaUser'], $this->setDataFichaUser($request));
        $this->modelUser->updateSemModel(Auth::user()->id, ['id_fichaUser' => 0,]);
        $this->modelFichaUser->updateSemModel($request['id_fichaUser'], ['pronto' => 1]);
        return redirect()->route('home')->with('success', 'Ficha criada');
    }

    public function listFichas($id) {
        $fichasJogador = $this->modelFichaUser->getAllFichaUsers($id);
        return view('jogo.fichas.listfichas', compact('fichasJogador'));
    }

    public function showFichaUser($id) {
        $fichaJogador = $this->modelFichaUser->getFichaUser($id);
        if ($fichaJogador->id_cronica == null)
            $fichaJogador->id_cronica = 0;
        $ficha = $this->modelFicha->getFicha($fichaJogador->id_ficha);
        $classe = $this->modelClasse->getClasse($ficha->id_classe);
        $cronicas = $this->modelCronica->getAllCronicasNonUser(Auth::user()->id);
        $myFichaUsers = $this->modelFichaUser->getAllFichaUsers(Auth::user()->id);
        $cronicasPode = array();
        foreach($cronicas as $cronica){
            $array = array();
            $i=0;
            foreach($myFichaUsers as $fichaUser){
                if($cronica->id == $fichaUser->id_cronica){
                    $i=1;
                }
            }
            $array[]=$cronica;
            $array[]=$i;
            $cronicasPode[] = $array;
        }
        
        $cronicaFicha = $this->modelCronica->getCronicaEmAndamento($fichaJogador->id_cronica);
        return view('jogo.fichas.showfichauser', compact('ficha', 'classe', 'fichaJogador', 'cronicasPode', 'cronicaFicha', 'cronicas'));
    }
    public function listFichasUser(){
        $fichasUser = $this->modelFichaUser->getAllFichaUsersGeneric();
        return view('jogo.fichas.listfichasgeneric', compact('fichasUser'));
    }

    public function showFichaUserJogo($id_fichaUser, $id_cronica) {
        $fichaJogador = $this->modelFichaUser->getFichaUser($id_fichaUser);
        $ficha = $this->modelFicha->getFicha($fichaJogador->id_ficha);
        $classe = $this->modelClasse->getClasse($ficha->id_classe);
        if ($classe->id == 1) {
            if ($id_cronica != 0)
                $cronica = $this->modelCronica->getCronica($id_cronica);
            $id = $fichaJogador->id;
            $valoresFisico = $this->modelValor->getAllValorCaracteristicaComum(1, $id);
            $valoresMental = $this->modelValor->getAllValorCaracteristicaComum(2, $id);
            $valoresSocial = $this->modelValor->getAllValorCaracteristicaComum(3, $id);
            $valoresTalento = $this->modelValor->getAllValorCaracteristicaComum(4, $id);
            $valoresPericia = $this->modelValor->getAllValorCaracteristicaComum(5, $id);
            $valoresConhecimento = $this->modelValor->getAllValorCaracteristicaComum(6, $id);
            $valoresVirtude = $this->modelValor->getAllValorCaracteristicaComum(8, $id);
            
            $valoresAntecedentes = $this->modelValor->getAllValorAntecedentes($id);
            $valores = $this->modelValor->getAllValorCaracteristica($id);
            $valorForcaVontade = $this->modelValor->getValorNome('Força de vontade', $id);
            $valorForcaVontadeJogo = $this->modelValor->getValorNome('Força de vontade no jogo', $id);
            $valorDano = $this->modelValor->getValorNome('Dano', $id);
            $valorPontosSangue = $this->modelValor->getValorNome('Pontos de sangue', $id);
            $valorHumanidade = $this->modelValor->getValorNome('Humanidade', $id);
            $valoresFicha = $this->modelValor->getAllValorCaracteristicaFicha($ficha->id, $id);
            $cronicas = 0;
            //dd($valoresAntecedentes);
            if (!Auth::guest())
                $cronicas = $this->modelCronica->getAllCronicasNonUser(Auth::user()->id);
            if (isset($cronica))
                return view('jogo.fichas.showfichauserjogo', compact('ficha', 'classe', 'fichaJogador', 'cronicas', 'valores', 
                        'valoresFicha', 'valoresFisico', 'valoresMental', 'valoresSocial', 'valoresTalento', 'valoresPericia', 
                        'valoresConhecimento', 'valoresVirtude', 'cronica',  'valorForcaVontade', 'valorForcaVontadeJogo', 
                        'valorHumanidade', 'valorDano', 'valorPontosSangue','valoresAntecedentes'));
            else
                return view('jogo.fichas.showfichauserjogo', compact('ficha', 'classe', 'fichaJogador', 'cronicas', 'valores', 
                        'valoresFicha', 'valoresFisico', 'valoresMental', 'valoresSocial', 'valoresTalento', 'valoresPericia', 
                        'valoresConhecimento', 'valoresVirtude',  'valorForcaVontade', 'valorForcaVontadeJogo', 'valorHumanidade', 'valorDano', 
                        'valorPontosSangue','valoresAntecedentes'));
        }
        elseif ($classe->id == 2) {
            if ($id_cronica != 0)
                $cronica = $this->modelCronica->getCronica($id_cronica);
            $id = $fichaJogador->id;
            $valoresFisico = $this->modelValor->getAllValorCaracteristicaComum(1, $id);
            $valoresMental = $this->modelValor->getAllValorCaracteristicaComum(2, $id);
            $valoresSocial = $this->modelValor->getAllValorCaracteristicaComum(3, $id);
            $valoresTalento = $this->modelValor->getAllValorCaracteristicaComum(4, $id);
            $valoresPericia = $this->modelValor->getAllValorCaracteristicaComum(5, $id);
            $valoresConhecimento = $this->modelValor->getAllValorCaracteristicaComum(6, $id);
            
            $valoresAntecedentes = $this->modelValor->getAllValorAntecedentes($id);
            $valorFuria = $this->modelValor->getValorNome('Fúria', $id);
            $valorFuriaJogo = $this->modelValor->getValorNome('Fúria no jogo', $id);
            $valorGnose = $this->modelValor->getValorNome('Gnose', $id);
            $valorGnoseJogo = $this->modelValor->getValorNome('Gnose no jogo', $id);
            $valorForcaVontade = $this->modelValor->getValorNome('Força de vontade', $id);
            $valorForcaVontadeJogo = $this->modelValor->getValorNome('Força de vontade no jogo', $id);
            
            $valorGloria = $this->modelValor->getValorNome('Glória', $id);
            $valorHonra = $this->modelValor->getValorNome('Honra', $id);
            $valorSabedoria = $this->modelValor->getValorNome('Sabedoria', $id);
            $valorGloriaGanha = $this->modelValor->getValorNome('Glória ganha', $id);
            $valorHonraGanha = $this->modelValor->getValorNome('Honra ganha', $id);
            $valorSabedoriaGanha = $this->modelValor->getValorNome('Sabedoria ganha', $id);
            
            $valorDano = $this->modelValor->getValorNome('Dano', $id);
            
            $valores = $this->modelValor->getAllValorCaracteristica($id);
            $domRaca = $this->modelValor->getDomRaca($id);
            $domAugurio = $this->modelValor->getDomAugurio($id);
            $domTribo = $this->modelValor->getDomTribo($id);
            $valoresFicha = $this->modelValor->getAllValorCaracteristicaFicha($ficha->id, $id);
            $cronicas = 0;
            //dd($valoresAntecedentes);
            if (!Auth::guest())
                $cronicas = $this->modelCronica->getAllCronicasNonUser(Auth::user()->id);
            if (isset($cronica))
                return view('jogo.fichas.showfichauserjogo', compact('ficha', 'classe', 'fichaJogador', 'cronicas', 'valores', 
                        'valoresFicha', 'valoresFisico', 'valoresMental', 'valoresSocial', 'valoresTalento', 'valoresPericia', 
                        'valoresConhecimento', 'cronica', 'domRaca', 'domAugurio', 'domTribo', 'valorFuria', 'valorFuriaJogo', 
                        'valorGnose', 'valorGnoseJogo', 'valorForcaVontade', 'valorForcaVontadeJogo', 'valorGloria', 'valorHonra', 
                        'valorSabedoria', 'valorGloriaGanha', 'valorHonraGanha', 'valorSabedoriaGanha', 'valorDano','valoresAntecedentes'));
            else
                return view('jogo.fichas.showfichauserjogo', compact('ficha', 'classe', 'fichaJogador', 'cronicas', 'valores', 
                        'valoresFicha', 'valoresFisico', 'valoresMental', 'valoresSocial', 'valoresTalento', 'valoresPericia', 
                        'valoresConhecimento', 'domRaca', 'domAugurio', 'domTribo', 'valorFuria', 'valorFuriaJogo', 'valorGnose', 
                        'valorGnoseJogo', 'valorForcaVontade', 'valorForcaVontadeJogo', 'valorGloria', 'valorHonra', 'valorSabedoria', 
                        'valorGloriaGanha', 'valorHonraGanha', 'valorSabedoriaGanha', 'valorDano','valoresAntecedentes'));
        }
        elseif ($classe->id == 3) {
            if ($id_cronica != 0)
                $cronica = $this->modelCronica->getCronica($id_cronica);
            $id = $fichaJogador->id;
            $valoresFisico = $this->modelValor->getAllValorCaracteristicaComum(1, $id);
            $valoresMental = $this->modelValor->getAllValorCaracteristicaComum(2, $id);
            $valoresSocial = $this->modelValor->getAllValorCaracteristicaComum(3, $id);
            $valoresTalento = $this->modelValor->getAllValorCaracteristicaComum(4, $id);
            $valoresPericia = $this->modelValor->getAllValorCaracteristicaComum(5, $id);
            $valoresConhecimento = $this->modelValor->getAllValorCaracteristicaComum(6, $id);
            
            $valoresAntecedentes = $this->modelValor->getAllValorAntecedentes($id);
            $valores = $this->modelValor->getAllValorCaracteristica($id);
            $valorForcaVontade = $this->modelValor->getValorNome('Força de vontade', $id);
            $valorForcaVontadeJogo = $this->modelValor->getValorNome('Força de vontade no jogo', $id);
            $valorDano = $this->modelValor->getValorNome('Dano', $id);
            $valorQuintessencia = $this->modelValor->getValorNome('Quintessência', $id);
            $valorArete = $this->modelValor->getValorNome('Arete', $id);
            $valorAvatar = $this->modelValor->getValorNome('Avatar', $id);
            $valorParadoxo = $this->modelValor->getValorNome('Paradoxo', $id);
            $valoresFicha = $this->modelValor->getAllValorEsfera($id);
            $cronicas = 0;
            //dd($valoresAntecedentes);
            if (!Auth::guest())
                $cronicas = $this->modelCronica->getAllCronicasNonUser(Auth::user()->id);
            if (isset($cronica))
                return view('jogo.fichas.showfichauserjogo', compact('ficha', 'classe', 'fichaJogador', 'cronicas', 'valores', 
                        'valoresFicha', 'valoresFisico', 'valoresMental', 'valoresSocial', 'valoresTalento', 'valoresPericia', 
                        'valoresConhecimento', 'cronica',  'valorForcaVontade', 'valorForcaVontadeJogo', 'valorQuintessencia', 
                        'valorDano', 'valorParadoxo', 'valorArete', 'valorAvatar','valoresAntecedentes'));
            else
                return view('jogo.fichas.showfichauserjogo', compact('ficha', 'classe', 'fichaJogador', 'cronicas', 'valores', 
                        'valoresFicha', 'valoresFisico', 'valoresMental', 'valoresSocial', 'valoresTalento', 'valoresPericia', 
                        'valoresConhecimento',  'valorForcaVontade', 'valorForcaVontadeJogo', 'valorQuintessencia', 'valorDano', 
                        'valorParadoxo', 'valorArete', 'valorAvatar','valoresAntecedentes'));
        }
    }

    public function showCronica(Request $request) {
        $cronica = $this->modelCronica->getCronica($request->id_cronica);
        try{
            $user = $this->modelUser->getUser($cronica->id_user);
        }catch(\Exception $e){
            return redirect()->route('home')->with('info', 'Essa crônica foi eliminada.');
        }
        $ficha = $this->modelFichaUser->getFichaUser($request->id_fichaUser);
        if($ficha->lastCronica==$cronica->id){
            return redirect()->route('home')->with('info', 'Você acabou de sair dessa crônica.');
        }
        if($cronica->finalizada==1){
            return redirect()->route('home')->with('info', 'Essa crônica já acabou.');
        }
        if ($ficha->id_classe == 1) {
            if ($ficha->id_cronica == 0 || $ficha->id_cronica == null) {
                $valorVontade = $this->modelValor->getValorNome('Força de Vontade', $ficha->id);
                $valorVontadeJogo = $this->modelValor->getValorNome('Força de vontade no jogo', $ficha->id);
                $valorPontosSangue = $this->modelValor->getValorNome('Pontos de sangue', $ficha->id);
                $valorDano = $this->modelValor->getValorNome('Dano', $ficha->id);
                $this->modelValor->updateSemModel($valorDano->id_valor, ['valor' => 0]);
                $this->modelValor->updateSemModel($valorPontosSangue->id_valor, ['valor' => 10]);
                $this->modelValor->updateSemModel($valorVontadeJogo->id_valor, ['valor' => $valorVontade->valor]);
            }
            $postagens = $this->modelPostagem->getAllPostagensCronica($request->id_cronica);
            $this->modelFichaUser->updateSemModel($ficha->id, $this->setDataFichaUser($request));
            $ultima = '';
            $fichasJogador = $this->modelFichaUser->getAllFichaCronica($request->id_cronica);
            
            $ficha = $this->modelFichaUser->getFichaUser($request->id_fichaUser);
            foreach ($postagens as $postagem) {
                $ultima = $postagem->id_postagem;
            }
            return view('jogo.cronicas.show', compact('ultima', 'cronica', 'user', 'postagens', 'ficha', 'fichasJogador'));
        }
        if ($ficha->id_classe == 2) {
            if ($ficha->id_cronica == 0 || $ficha->id_cronica == null) {
                $valorVontade = $this->modelValor->getValorNome('Força de Vontade', $ficha->id);
                $valorVontadeJogo = $this->modelValor->getValorNome('Força de vontade no jogo', $ficha->id);
                $valorFuriaJogo = $this->modelValor->getValorNome('Fúria no jogo', $ficha->id);
                $valorFuria = $this->modelValor->getValorNome('Fúria', $ficha->id);
                $valorGnose = $this->modelValor->getValorNome('Gnose', $ficha->id);
                $valorDano = $this->modelValor->getValorNome('Dano', $ficha->id);
                $valorGnoseJogo = $this->modelValor->getValorNome('Gnose no jogo', $ficha->id);
                $this->modelValor->updateSemModel($valorDano->id_valor, ['valor' => 0]);
                $this->modelValor->updateSemModel($valorFuriaJogo->id_valor, ['valor' => $valorFuria->valor]);
                $this->modelValor->updateSemModel($valorGnoseJogo->id_valor, ['valor' => $valorGnose->valor]);
                $this->modelValor->updateSemModel($valorVontadeJogo->id_valor, ['valor' => $valorVontade->valor]);
            }
            $postagens = $this->modelPostagem->getAllPostagensCronica($request->id_cronica);
            $this->modelFichaUser->updateSemModel($ficha->id, $this->setDataFichaUser($request));
            $ultima = 0;
            $fichasJogador = $this->modelFichaUser->getAllFichaCronica($request->id_cronica);
            
            $ficha = $this->modelFichaUser->getFichaUser($request->id_fichaUser);
            foreach ($postagens as $postagem) {
                $ultima = $postagem->id_postagem;
            }
            return view('jogo.cronicas.show', compact('ultima', 'cronica', 'user', 'postagens', 'ficha', 'fichasJogador'));
        }
        if ($ficha->id_classe == 3) {
            if ($ficha->id_cronica == 0 || $ficha->id_cronica == null) {
                $valorVontade = $this->modelValor->getValorNome('Força de Vontade', $ficha->id);
                $valorVontadeJogo = $this->modelValor->getValorNome('Força de vontade no jogo', $ficha->id);
                $valorDano = $this->modelValor->getValorNome('Dano', $ficha->id);
                $this->modelValor->updateSemModel($valorDano->id_valor, ['valor' => 0]);
                $this->modelValor->updateSemModel($valorVontadeJogo->id_valor, ['valor' => $valorVontade->valor]);
            }
            $postagens = $this->modelPostagem->getAllPostagensCronica($request->id_cronica);
            $this->modelFichaUser->updateSemModel($ficha->id, $this->setDataFichaUser($request));
            $ultima = 0;
            $fichasJogador = $this->modelFichaUser->getAllFichaCronica($request->id_cronica);
            
            $ficha = $this->modelFichaUser->getFichaUser($request->id_fichaUser);
            foreach ($postagens as $postagem) {
                $ultima = $postagem->id_postagem;
            }
            return view('jogo.cronicas.show', compact('ultima', 'cronica', 'user', 'postagens', 'ficha', 'fichasJogador'));
        }
    }

    public function mestrar(Request $request) {
        $cronica = $this->modelCronica->getCronica($request->id_cronica);
        $user = $this->modelUser->getUser($cronica->id_user);
        $postagens = $this->modelPostagem->getAllPostagensCronica($request->id_cronica);
        $ultima = '';
        $fichasJogador = $this->modelFichaUser->getAllFichaCronica($request->id_cronica);
        foreach ($postagens as $postagem) {
            $ultima = $postagem->id_postagem;
        }
        $mestrar = 1;
        return view('jogo.cronicas.show', compact('ultima', 'cronica', 'user', 'postagens', 'fichasJogador', 'mestrar'));
    }

    public function atualizarValorCronica(Request $request) {
        $this->modelValor->updateSemModel($request['id'], ['valor' => $request->valor]);
        $valor = $this->getValor($request['id']);
        return $valor;
    }

    public function atualizarAnotacoesFicha(Request $request) {
        $this->modelFichaUser->updateSemModel($request['id_fichaUser'], ['anotacoes' => $request['anotacoes']]);
    }

    public function atualizarDom($Raca, $Augurio, $Tribo) {
        $this->modelValor->updateSemModel($Raca, ['valor' => 1]);
        $this->modelValor->updateSemModel($Augurio, ['valor' => 1]);
        $this->modelValor->updateSemModel($Tribo, ['valor' => 1]);
    }

    public function atualizarValor(Request $request) {
        $valor = $this->modelValor->getValor($request['id']);
        $caracteristica = $this->modelCaracteristica->getCaracteristica($valor->id_caracteristica);
        $fichaUser = $this->modelFichaUser->getFichaUser($valor->id_fichaUser);
        if (($valor->bonus > 0 && $request['sinal'] == '+') || $request['sinal'] === '-') {
            if($valor->id_classe==3 &&
                    $caracteristica->id_ficha==$fichaUser->id_ficha&&
                    $valor->valor==1&&$request['sinal'] === '-'){
                $valores = $this->getValor($request['id']) . '%$' . $valor->bonus;
                return $valores;
            }
            elseif (($valor->id_ficha > 0 && $valor->valor > 2 && $request['sinal'] === '+') ||
                    (($valor->id_comum == 1 || $valor->id_comum == 2 || $valor->id_comum == 3) && $request['sinal'] === '-' && $valor->valor == 1)) {
                $valores = $this->getValor($request['id']) . '%$' . $valor->bonus;
                return $valores;
            } else {
                $this->modelValor->updateSemModel($request['id'], ['valor' => $request->valor]);
                $valor = $this->modelValor->getValor($request['id']);
                $bonus = 0;
                if ($request['sinal'] === '-')
                    $bonus = $valor->bonus + 1;
                else
                    $bonus = $valor->bonus - 1;
                $this->modelFichaUser->updateSemModel($valor->id_fichaUser, ['bonus' => $bonus]);
                $valor = $this->modelValor->getValor($request['id']);
                $valores = $this->getValor($request['id']) . '%$' . $valor->bonus;
                return $valores;
            }
        }
    }

    public function getBonus($id) {
        $valor = $this->modelFichaUser->getFichaUser($id);
        $bonus = $valor->bonus;
        return $bonus;
    }

    public function getValor($id) {
        $valor = $this->modelValor->getValor($id);
        $html = '';
        for ($i = 0; $i < $valor->valor; $i++) {
            $html = $html . '✺';
        }
        return $html;
    }

    public function showCronicaVisitante($id) {
        $cronica = $this->modelCronica->getCronica($id);
        $postagens = $this->modelPostagem->getAllPostagensCronica($cronica->id);
        $mestre = $this->modelUser->getUser($cronica->id_user);
        $fichasJogador = $this->modelFichaUser->getAllFichaCronica($cronica->id);
        return view('jogo.cronicas.showvisitante', compact('cronica', 'postagens', 'mestre', 'fichasJogador'));
    }

    public function storePostagem(Request $request) {
        $fichaUser= $this->modelFichaUser->getFichaUser($request['id_fichaUser']);
        if($fichaUser==null||$fichaUser->lastCronica!=$request['id_cronica']){
            $this->modelPostagem->store($this->setDataPostagem($request));
        }
    }

    public function storePostagemChat(Request $request) {
        $this->modelChat->store(['texto' => $request['texto'],
            'id_cronica' => $request['id_cronica'],
            'nome' => $request['nome']]);
    }

    public function getUltimasPostagensChat($id, $id_cronica) {
        $postagens = $this->modelChat->getAllChatsCronica($id_cronica, $id);
        $html = '';
        foreach ($postagens as $postagem) {
            $html = $html . '<div class="row">';
            $html = $html . '<div class="col-md-12">';
            $html = $html . '<label>' . $postagem->nome . '</label> - ' . $postagem->texto;
            $id = $postagem->id;
        }
        $html = $html . '%$' . $id;
        return $html;
    }

    public function getUltimasPostagens($id, $id_cronica) {
        $postagens = $this->modelPostagem->getUltimasPostagensCronica($id, $id_cronica);
        $html = '';
        $ultima = $id;
        foreach ($postagens as $postagem) {
            $html = $html . '<div class="row">';
            $html = $html . '<div class="col-md-12">';
            if ($postagem->id_user != '')
        $html = $html . '<label><a href="' .route('jogo.fichas.showfichauserjogo', ['id' => $postagem->id_ficha, 'id_cronica' => $postagem->id_cronica]).'" target="_blank">' . $postagem->nome . '</a></label> - ';
            else
                $html = $html . '<label>Mestre &nbsp-&nbsp </label>';
            $html = $html . $postagem->post . '</div></div>';
            $ultima = $postagem->id_postagem;
        }
        $html = $html . '%$' . $ultima;
        return $html;
    }

    public function getPostagens($id_cronica) {
        $postagens = $this->modelPostagem->getAllPostagensCronica($id_cronica);
        $ultima = 0;
        foreach ($postagens as $postagem) {
            $ultima = $postagem->id_postagem;
        }
        return view('jogo.cronicas.postagens', compact('id_cronica', 'postagens', 'ultima'));
    }

    public function getPostagensChat($id_cronica) {
        $postagens = $this->modelChat->getAllChats($id_cronica);
        $ultima='';
        foreach ($postagens as $postagem) {
            $ultima = $postagem->id_postagem;
        }
        return view('jogo.cronicas.postagenschat', compact('id_cronica', 'postagens', 'ultima'));
    }

    public function finalizar($id) {
        $fichaUsers = $this->modelFichaUser->getAllFichaCronica($id);
        foreach ($fichaUsers as $ficha) {
            $this->retirarFicha($ficha->id);
        }
        $this->modelCronica->updateSemModel($id, ['finalizada' => 1,]);
        $this->modelCronica->updateSemModel($id, ['fechada' => 1,]);
        return redirect()->route('home')->with('success','Cronica Finalizada');
    }
    public function finalizarAdmin($id) {
        $fichaUsers = $this->modelFichaUser->getAllFichaCronica($id);
        foreach ($fichaUsers as $ficha) {
            $this->retirarFicha($ficha->id);
        }
        $this->modelCronica->updateSemModel($id, ['finalizada' => 1,]);
        $this->modelCronica->updateSemModel($id, ['fechada' => 1,]);
        return back()->with('info','Cronica Finalizada');
    }
    public function getFinalizada($id){
        $cronica = $this->modelCronica->getCronica($id);
        return $cronica->finalizada;
    }
    public function getSituacao($id){
        $ficha = $this->modelFichaUser->getFichaUser($id);
        return $ficha->lastCronica;
    }
    public function iniciar($id) {
        $this->modelCronica->updateSemModel($id, ['fechada' => 1]);
    }
    public function reabrir($id) {
        $this->modelCronica->updateSemModel($id, ['fechada' => 0]);
    }

    public function insertFichaUser($id_ficha) {
        $id = $this->modelFichaUser->storeGetId(
                [   'id_ficha' => $id_ficha,
                    'id_user' => Auth::user()->id,
        ]);
        return $id;
    }

    public function removeValores($fichaUser) {
        $valores = $this->modelValor->getAllValor($fichaUser->id);
        foreach ($valores as $valor) {
            $this->modelValor->remove($valor->id);
        }
    }

    public function insertValores($caracteristicas, $fichaUser) {
        $i = 0;
        foreach ($caracteristicas as $caracteristica) {
            $valor = 0;
            if ($caracteristica->nome === 'Humanidade' ||
                    $caracteristica->nome === 'Força de Vontade' ||
                    $caracteristica->nome === 'Gnose' ||
                    $caracteristica->nome === 'Fúria') {
                $valor = 5;
            }
            if ($caracteristica->id_classe==3&&
                    $caracteristica->id_ficha==$fichaUser->id_ficha) {
                $valor = 1;
            }
            if ($caracteristica->id_comum === 1 ||
                    $caracteristica->id_comum === 2 ||
                    $caracteristica->id_comum === 3) {
                $valor = 1;
            }
            if ($fichaUser->id_ficha == 7 && $caracteristica->nome === 'Aparencia')
                $valor = 0;
            $this->modelValor->store([
                'valor' => $valor,
                'id_caracteristica' => $caracteristica->id,
                'id_fichaUser' => $fichaUser->id,
            ]);
        }
    }

    public function concluir($id) {
        $this->modelUser->updateSemModel(Auth::user()->id, ['id_fichaUser' => 0,]);
        $this->modelFichaUser->updateSemModel($id, ['pronto' => 1]);
        return redirect()->route('home')->with('success', 'Ficha criada');
    }
    public function retirarFicha($id){
        $fichaJogador = $this->modelFichaUser->getFichaUser($id);
        $idCronica = $fichaJogador->id_cronica;
        $cronica = $this->modelCronica->getCronica($fichaJogador->id_cronica);
        $this->modelFichaUser->updateSemModel($id, ['id_cronica' => 0, 'lastCronica' => $idCronica]);
        $this->modelUser->updateSemModel($fichaJogador->id_user_ficha, ['id_fichaUser' => 0]);
        $fichasJogador = $this->modelFichaUser->getAllFichaCronica($idCronica);
        return view('components.jogo.listfichasvisitante', compact('cronica', 'fichasJogador'));
    }
    public function getFichas($id){
        $idCronica = $id;
        $expulso = 0;
        $cronica = $this->modelCronica->getCronica($id);
        $fichasJogador = $this->modelFichaUser->getAllFichaCronica($idCronica);
        if(count($fichasJogador)==0)
            $expulso = 1;
        foreach($fichasJogador as $ficha){
            $expulso = 1;
            if($ficha->id_user == Auth::user()->id){
                $expulso = 0;
                break;
            }
        }
        return view('components.jogo.listfichasvisitante', compact('cronica', 'fichasJogador', 'expulso'));
    }
    public function deleteFicha($id){
        $ficha = $this->modelFichaUser->getFichaUser($id);
        $valores = $this->modelValor->getAllValor($id);
        foreach ($valores as $valor){
            $this->modelValor->remove($valor->id);
        }
        $this->modelFichaUser->remove($id);
        $this->modelUser->updateSemModel($ficha->id_user_ficha, ['id_fichaUser' => 0]);
        $fichasUser = $this->modelFichaUser->getAllFichaUsersGeneric();
        return view('jogo.fichas.listfichasgeneric', compact('fichasUser'));
    }
}
