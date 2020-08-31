<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Voto extends Model
{
    //
    protected $table = "voto";
    protected $fillable = ['id','address', 'id_alternativa'];
    public function getAllVotos($id_alternativa)
    {
        return Voto::query()->select('*')
                ->where('id_alternativa','=',$id_alternativa)
                ->get();
    }
    public function getCountAllVotos($id_alternativa)
    {
        return Voto::query()->select('*')
                ->where('id_alternativa','=',$id_alternativa)
                ->count();
    }
    public function remove($id){
        Voto::destroy($id);
    }
    public function store(array $options = [])
    {
        Voto::query()->insert($options);
    }
    public function getVoto($id)
    {
        return $this->find($id);
    }
    public function updateSemModel($id, Array $options)
    {
        Voto::query()->where('id', '=', $id)->update($options);
    }
    
}
