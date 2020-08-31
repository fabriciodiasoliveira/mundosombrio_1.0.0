<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pergunta extends Model
{
    //
    protected $table = "pergunta";
    protected $fillable = ['id','pergunta', 'ativa'];
    public function getAllPerguntas()
    {
        return Pergunta::query()->select('*')
                ->get();
    }
    
    public function remove($id){
        Pergunta::destroy($id);
    }
    public function store(array $options = [])
    {
        Pergunta::query()->insert($options);
    }
    public function getPergunta($id)
    {
        return $this->find($id);
    }
    public function getPerguntaAtiva()
    {
        return Pergunta::query()->select('*')
                ->where('ativa','=',1)
                ->first();
    }
    public function updateSemModel($id, Array $options)
    {
        Pergunta::query()->where('id', '=', $id)->update($options);
    }
}
