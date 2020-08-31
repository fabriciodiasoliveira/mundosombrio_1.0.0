<?php
//teste
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Alternativa extends Model
{
    //
    protected $table = "alternativa";
    protected $fillable = ['id','alternativa', 'id_pergunta'];
    public function getAllAlternativasUser($id_pergunta){
        return DB::connection('mysql')->table('alternativa as a')
               ->leftJoin('voto as v', 'a.id', '=', 'v.id_alternativa')
               ->select(DB::raw('count(*) as total, alternativa'))
               ->where('a.id_pergunta','=',$id_pergunta)
               ->groupBy('a.alternativa')->get();
    }

    public function getAllAlternativas($id_pergunta)
    {
        return Alternativa::query()->select('*')
                ->where('id_pergunta', '=', $id_pergunta)
                ->get();
    }
    public function remove($id){
        Alternativa::destroy($id);
    }
    public function store(array $options = [])
    {
        Alternativa::query()->insert($options);
    }
    public function getAlternativa($id)
    {
        return $this->find($id);
    }
    public function getAlternativaPorNome($alternativa, $id_pergunta)
    {
        return Alternativa::query()->select('*')
                ->where('alternativa','=',$alternativa)
                ->where('id_pergunta', '=', $id_pergunta)
                ->first();
    }
    public function updateSemModel($id, Array $options)
    {
        Alternativa::query()->where('id', '=', $id)->update($options);
    }
    
}
