<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
class Ficha extends Model
{
    protected $table = "ficha";

    protected $fillable = ['nome', 'resumo', 'id_classe'];
    public function getAllFichasClasse($id)
    {
        return Ficha::query()->select('*')->where('id_classe', '=', $id)->orderBy('nome', 'asc')->get();
    }
    public function getAllFichasUser($id)
    {
        return Ficha::query()->select('*')->where('id_user', '=', $id)->orderBy('nome', 'asc')->get();
    }
    public function remove($id){
        Ficha::destroy($id);
    }
    public function store(array $options = [])
    {
        Ficha::query()->insert($options);
    }
    public function getFicha($id)
    {
        return $this->find($id);
    }
    public function updateSemModel($id, Array $options)
    {
        Ficha::query()->where('id', '=', $id)->update($options);
    }
}
