<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class FichaUser extends Model
{
    protected $table = "fichaUser";

    protected $fillable = ['nome', 'resumo', 'id_ficha', 'id_user', 'id_cronica','bonus', 'anotacoes', 'lastCronica', 'pronto'];
    public function getAllFichaUsersGeneric()
    {
        return DB::connection('mysql')->table('fichaUser as fu')
               ->join('ficha as f', 'f.id', '=', 'fu.id_ficha')
                ->join('classe as c', 'f.id_classe', '=', 'c.id')
               ->join('users as u', 'u.id', '=', 'fu.id_user')
                ->leftJoin('cronica as cr', 'cr.id','=','fu.id_cronica')
               ->select('fu.id','f.nome as titulo', 'fu.nome as nome', 'fu.resumo as anotacoes',
                       'fu.id as id_ficha', 'fu.id_cronica', 'u.name', 'fu.bonus', 
                       'c.nome as classe', 'cr.nome as nomeCronica')
                ->where('fu.pronto','=',1)
                ->orderBy('u.name')->get();
    }
    public function getAllFichaUsers($id)
    {
        return DB::connection('mysql')->table('fichaUser as fu')
               ->join('ficha as f', 'f.id', '=', 'fu.id_ficha')
                ->join('classe as c', 'f.id_classe', '=', 'c.id')
               ->join('users as u', 'u.id', '=', 'fu.id_user')
               ->select('fu.id','f.nome as titulo', 'f.resumo as resumo',
                       'fu.nome as nome', 'fu.resumo as anotacoes',
                       'fu.id as id_ficha', 'fu.id_cronica', 'u.name', 'fu.bonus','fu.pronto', 
                       'c.nome as classe')
                ->where('id_user','=',$id)->get();
    }
    public function getAllFichaCronica($id)
    {
        return DB::connection('mysql')->table('fichaUser as fu')
               ->join('ficha as f', 'f.id', '=', 'fu.id_ficha')
			   ->join('users as u', 'u.id', '=', 'fu.id_user')
               ->select('fu.id','f.nome as titulo', 'f.resumo as resumo',
                       'fu.nome as nome', 'fu.resumo as anotacoes',
                       'fu.id as id_ficha', 'fu.id_cronica', 'u.name', 'fu.id_user',
                       'fu.lastCronica')
                ->where('id_cronica','=',$id)->get();
    }
    public function getAllFichaUsersGeneral()
    {
        return DB::connection('mysql')->table('fichaUser as fu')
               ->join('ficha as f', 'f.id', '=', 'fu.id_ficha')
               ->join('users as u', 'u.id', '=', 'fu.id_user')
               ->join('classe as c', 'c.id', '=', 'f.id_classe')
               ->select('fu.id','f.nome as titulo', 'fu.resumo as resumo',
                       'fu.nome as nome', 'fu.anotacoes as anotacoes',
                       'f.id as id_ficha', 'fu.id_cronica', 'u.name', 'fu.bonus',
                       'c.nome as nome_classe','c.id as id_classe', 'u.id as id_user_ficha')
                ->orderByRaw('u.name')
                ->limit(2)
                ->where('fu.id','=',$id)->get();
    }
    public function getNumeroFichaUsers($id){
        return FichaUser::query()
                ->count()
                ->where('id_cronica','=',$id)->get();
    }
    public function remove($id){
        FichaUser::destroy($id);
    }
    public function store(array $options = [])
    {
        FichaUser::query()->insert($options);
    }
    public function storeGetId(array $options = [])
    {
        $id = FichaUser::query()->insertGetId($options);
        return $id;
    }
    public function getFichaUser($id)
    {
        return DB::connection('mysql')->table('fichaUser as fu')
               ->join('ficha as f', 'f.id', '=', 'fu.id_ficha')
               ->join('users as u', 'u.id', '=', 'fu.id_user')
               ->join('classe as c', 'c.id', '=', 'f.id_classe')
               ->select('fu.id','f.nome as titulo', 'fu.resumo as resumo',
                       'fu.nome as nome', 'fu.anotacoes as anotacoes',
                       'f.id as id_ficha', 'fu.id_cronica', 'u.name', 'fu.bonus',
                       'c.nome as nome_classe','c.id as id_classe', 'u.id as id_user_ficha',
                       'fu.lastCronica','fu.pronto')
                ->where('fu.id','=',$id)->first();
    }
    public function updateSemModel($id, Array $options)
    {
        FichaUser::query()->where('id', '=', $id)->update($options);
    }
}
