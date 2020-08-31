<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Visitas extends Model
{
    //
    protected $table = "visitas";
    protected $fillable = ['id','address', 'created_at'];
    public function getAllVisitas()
    {
        return Visitas::query()->select(DB::raw('count(*) as acessos,address'))
                ->groupBy('address')
                ->orderBy('acessos')
                ->get();
    }
    public function getAllVisitasUnique()
    {
        return Visitas::query()->select('address')
                ->distinct()
                ->get();
    }
    public function getAllVisitasDataUnique()
    {
        return Visitas::query()->select(DB::raw('DATE_FORMAT(created_at,"%m/%Y") AS dataDeAcesso'))
                ->distinct()
                ->get();
    }
    public function getAllVisitasData($data){
        return Visitas::query()->select(DB::raw('DATE_FORMAT(created_at,"%m/%Y") AS dataDeAcesso, address'))
                ->distinct()
                ->whereRaw('DATE_FORMAT(created_at,"%m/%Y")='.'"'.$data.'"')
                ->get();
    }
    public function getAllVisitasDataIndex($data){
        return Visitas::query()->select(DB::raw('DATE_FORMAT(created_at,"%m/%Y") AS dataDeAcesso, address'))
                ->whereRaw('DATE_FORMAT(created_at,"%m/%Y")='.'"'.$data.'"')
                ->get();
    }
    public function remove($id){
        Visitas::destroy($id);
    }
    public function store(array $options = [])
    {
        Visitas::query()->insert($options);
    }
    public function getVisita($id)
    {
        return $this->find($id);
    }
    
}
