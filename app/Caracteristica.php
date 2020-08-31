<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Caracteristica extends Model
{
    //
    protected $table = "caracteristica";
    protected $fillable = ['nome','tipo', 'id_classe', 'id_augurio', 'id_comum', 'id_raca', 'id_ficha'];
    public function getAllCaracteristicaClasse($id)
    {
        return Caracteristica::query()->select('*')
                ->where('id_classe','=',$id)
                ->get();
    }
    public function getAllCaracteristicaAugurio($id)
    {
        return Caracteristica::query()->select('*')
                ->where('id_augurio', '=', $id)
                ->get();
    }
    public function getAllCaracteristicaRaca($id)
    {
        return Caracteristica::query()->select('*')
                ->where('id_raca', '=', $id)
                ->get();
    }
    public function getAllCaracteristicaComum($id)
    {
        return Caracteristica::query()->select('*')
                ->where('id_comum', '=', $id)
                ->get();
    }
    public function getAllCaracteristicaFicha($id)
    {
        return Caracteristica::query()->select('*')
                ->where('id_ficha', '=', $id)
                ->get();
    }
    public function remove($id){
        Caracteristica::destroy($id);
    }
    public function store(array $options = [])
    {
        Caracteristica::query()->insert($options);
    }
    public function getCaracteristica($id)
    {
        return $this->find($id);
    }
    public function getCaracteristicaNome($nome)
    {
        return Caracteristica::query()->select('*')
                ->where('nome', '=', $nome)
                ->get();
    }
    public function updateSemModel($id, Array $options)
    {
        Caracteristica::query()->where('id', '=', $id)->update($options);
    }
}
