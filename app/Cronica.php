<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cronica extends Model
{
    //
    protected $table = "cronica";
    protected $fillable = ['nome', 'resumo', 'id_user', 'finalizada', 'fechada'];
    public function getAllCronicas()
    {
        return DB::connection('mysql')->table('cronica as c')
                ->orderBy('fechada', 'asc')
                ->orderBy('finalizada', 'asc')
               ->select('*')->get();
    }
    public function getAllCronicasUser($id)
    {
        return DB::connection('mysql')->table('cronica as c')
               ->select('c.*')
                ->orderBy('fechada', 'asc')
                ->orderBy('finalizada', 'asc')
                ->where('c.id_user','=',$id)->get();
    } 
   public function getAllCronicasNonUser($id)
    {
        return DB::connection('mysql')->table('cronica as c')
               ->select('c.*')
                ->orderBy('fechada', 'asc')
                ->orderBy('finalizada', 'asc')
                ->where('c.id_user','<>',$id)
                ->where('fechada','=',0)
                ->where('finalizada','=',0)->get();
    }
    public function getAllCronicasParaJogar()
    {
        return DB::connection('mysql')->table('cronica as c')
               ->select('c.*')
               ->where('finalizada','=',0)
               ->where('fechada','=',0)
               ->get();
    }
    public function getCronicaEmAndamento($id)
    {
        return Cronica::query()->select('*')
                ->where('id', '=', $id)
                ->first();
    }
    public function remove($id){
        Cronica::destroy($id);
    }
    public function store(array $options = [])
    {
        Cronica::query()->insert($options);
    }
    public function getCronica($id)
    {
        return $this->find($id);
    }
    public function updateSemModel($id, Array $options)
    {
        Cronica::query()->where('id', '=', $id)->update($options);
    }
}
