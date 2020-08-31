<?php
//Teste
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Visitas;
use App\User;
class AdminController extends Controller {
    private $modelVisitas;
    private $modelUsers;
    function __construct() {
        $this->modelVisitas = new Visitas();
        $this->modelUsers = new User();
    }
    public function getAllVisitas(){
        $visitas = $this->modelVisitas->getAllVisitas();
        return $visitas;
    }

    public function getVisitas(){
        $datas = $this->modelVisitas->getAllVisitasDataUnique();
        $array = array();
        foreach($datas as $data){
            $visitas = $this->modelVisitas->getAllVisitasData($data->dataDeAcesso);
            $array[$data->dataDeAcesso] = $visitas->count();
        }
        $keys= array_keys($array);
        $return=array();
        $return[]=$array;
        $return[]=$keys;
        return $return;
    }
    public function getVisitasIndex(){
        $datas = $this->modelVisitas->getAllVisitasDataUnique();
        $array = array();
        foreach($datas as $data){
            $visitas = $this->modelVisitas->getAllVisitasDataIndex($data->dataDeAcesso);
            $array[$data->dataDeAcesso] = $visitas->count();
        }
        $keys= array_keys($array);
        $return=array();
        $return[]=$array;
        $return[]=$keys;
        return $return;
    }
    public function getUsers(){
        $datas = $this->modelUsers->getAllUsersDataUnique();
        $array = array();
        foreach($datas as $data){
            $users = $this->modelUsers->getAllUsersData($data->dataDeAcesso);
            $array[$data->dataDeAcesso] = $users->count();
        }
        $keys= array_keys($array);
        $return=array();
        $return[]=$array;
        $return[]=$keys;
        return $return;
    }
    
    public function graphs(){
        $visitas = $this->getVisitas();
        $visitasIndex = $this->getVisitasIndex();
        $allVisitas = $this->getAllVisitas();
        return view('dashboard.graphs', compact('visitas', 'visitasIndex', 'allVisitas'));
    }
}
