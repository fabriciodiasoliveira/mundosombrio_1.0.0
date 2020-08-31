<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Classe extends Model
{
    //
    protected $table = "classe";
    protected $fillable = ['nome', 'descricao', 'poderes', 'objetivo'];
    public function getAllClasses()
    {
        return Classe::query()->select('*')->get();
    }
//    public function getAllClasses()
//    {
//        return Classe::query()->select('*')
//                ->where('nome','=','Vampiro')
//                ->orWhere('nome','=','Lobisomem')->get();
//    }
    public function remove($id){
        Classe::destroy($id);
    }
    public function store(array $options = [])
    {
        Classe::query()->insert($options);
    }
    public function getClasse($id)
    {
        return $this->find($id);
    }
    public function updateSemModel($id, Array $options)
    {
        Classe::query()->where('id', '=', $id)->update($options);
    }
}
