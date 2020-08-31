<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Valor extends Model
{
    //
    protected $table = "valor";
    protected $fillable = ['valor', 'id_fichaUser', 'id_caracteristica'];
    public function getAllValor($id)
    {
        return Valor::query()->select('*')
                ->where('id_fichaUser', '=', $id)
                ->get();
    }
   public function getAllValorCaracteristica($id_fichaUser)
    {
       return DB::connection('mysql')->table('valor as v')
               ->join('caracteristica as c', 'c.id', '=', 'v.id_caracteristica')
               ->select('c.*','v.*','v.id as id_valor')
               ->where('v.id_fichaUser', '=', $id_fichaUser)
               ->where('id_augurio','=',0)
                ->where('id_comum','=',0)
                ->where('id_raca','=',0)
               ->where('id_ficha','=',0)
               ->whereIn('c.nome', ["Pontos de Sangue","Humanidade","Fúria","Gnose","Arete","Força de Vontade"])
                ->get();
    }
    public function getAllValorEsfera($id_fichaUser)
    {
       return DB::connection('mysql')->table('valor as v')
               ->join('caracteristica as c', 'c.id', '=', 'v.id_caracteristica')
               ->select('c.*','v.*','v.id as id_valor')
               ->where('v.id_fichaUser', '=', $id_fichaUser)
               ->where('id_augurio','=',0)
                ->where('id_comum','=',0)
                ->where('id_raca','=',0)
               ->where('id_ficha','<>',0)
                ->get();
    }
    public function getAllValorCaracteristicaFicha($id_ficha, $id_fichaUser)
    {
        //dd($id_ficha);
       return DB::connection('mysql')->table('valor as v')
               ->join('caracteristica as c', 'c.id', '=', 'v.id_caracteristica')
               ->join('fichaUser as fu', 'v.id_fichaUser', '=', 'fu.id')
               ->select('c.*','v.*','v.id as id_valor','c.id_ficha')
               ->where('v.id_fichaUser', '=', $id_fichaUser)
               ->where('c.id_ficha', '=', $id_ficha)
               ->get();
    }
    public function getAllValorCaracteristicaComum($id_comum, $id_fichaUser)
    {
        //dd($id_ficha);
       return DB::connection('mysql')->table('valor as v')
               ->join('caracteristica as c', 'c.id', '=', 'v.id_caracteristica')
               ->join('fichaUser as fu', 'v.id_fichaUser', '=', 'fu.id')
               ->select('c.*','v.*','v.id as id_valor')
               ->where('v.id_fichaUser', '=', $id_fichaUser)
               ->where('c.id_comum', '=', $id_comum)
               ->get();
    }
    public function getAllValorAntecedentes($id_fichaUser)
    {
        //dd($id_ficha);
       return DB::connection('mysql')->table('valor as v')
               ->join('caracteristica as c', 'c.id', '=', 'v.id_caracteristica')
               ->join('fichaUser as fu', 'v.id_fichaUser', '=', 'fu.id')
               ->select('c.*','v.*','v.id as id_valor')
               ->where('v.id_fichaUser', '=', $id_fichaUser)
               ->where('c.id_comum', '=', 0)
               ->where('c.id_ficha', '=', 0)
               ->where('c.id_augurio', '=', 0)
               ->where('c.id_raca', '=', 0)
               ->whereNotIn('c.nome', ["Pontos de Sangue","Humanidade","Fúria","Gnose","Arete","Força de Vontade"])
               ->get();
    }
    public function getAllValorCaracteristicaAugurio($id_augurio, $id_fichaUser)
    {
        //dd($id_ficha);
       return DB::connection('mysql')->table('valor as v')
               ->join('caracteristica as c', 'c.id', '=', 'v.id_caracteristica')
               ->join('fichaUser as fu', 'v.id_fichaUser', '=', 'fu.id')
               ->join('augurio as a', 'c.id_augurio', '=', 'a.id')
               ->select('c.*','v.*','v.id as id_valor')
               ->where('v.id_fichaUser', '=', $id_fichaUser)
               ->where('c.id_augurio', '=', $id_augurio)
               ->get();
    }
    public function getAllValorCaracteristicaRaca($id_raca, $id_fichaUser)
    {
        //dd($id_ficha);
       return DB::connection('mysql')->table('valor as v')
               ->join('caracteristica as c', 'c.id', '=', 'v.id_caracteristica')
               ->join('fichaUser as fu', 'v.id_fichaUser', '=', 'fu.id')
               ->join('raca as r', 'c.id_raca', '=', 'r.id')
               ->select('c.*','v.*','v.id as id_valor')
               ->where('v.id_fichaUser', '=', $id_fichaUser)
               ->where('c.id_raca', '=', $id_raca)
               ->get();
    }
    public function getDomAugurio($id_fichaUser)
    {
        //dd($id_ficha);
       return DB::connection('mysql')->table('valor as v')
               ->join('caracteristica as c', 'c.id', '=', 'v.id_caracteristica')
               ->join('fichaUser as fu', 'v.id_fichaUser', '=', 'fu.id')
               ->join('augurio as a', 'c.id_augurio', '=', 'a.id')
               ->select('c.*','v.*','v.id as id_valor','a.nome as nomeAugurio')
               ->where('v.id_fichaUser', '=', $id_fichaUser)
               ->where('v.valor','=',1)
               ->first();
    }
    public function getDomRaca($id_fichaUser)
    {
        //dd($id_ficha);
       return DB::connection('mysql')->table('valor as v')
               ->join('caracteristica as c', 'c.id', '=', 'v.id_caracteristica')
               ->join('fichaUser as fu', 'v.id_fichaUser', '=', 'fu.id')
               ->join('raca as r', 'c.id_raca', '=', 'r.id')
               ->select('c.*','v.*','v.id as id_valor','r.nome as nomeRaca')
               ->where('v.id_fichaUser', '=', $id_fichaUser)
               ->where('v.valor','=',1)
               ->first();
    }
    public function getDomTribo($id_fichaUser)
    {
        //dd($id_ficha);
       return DB::connection('mysql')->table('valor as v')
               ->join('caracteristica as c', 'c.id', '=', 'v.id_caracteristica')
               ->join('fichaUser as fu', 'v.id_fichaUser', '=', 'fu.id')
               ->select('c.*','v.*','v.id as id_valor')
               ->where('v.id_fichaUser', '=', $id_fichaUser)
               ->where('v.valor', '=', 1)
               ->where('c.id_ficha', '<>', 0)
               ->first();
    }
    public function remove($id){
        Valor::destroy($id);
    }
    public function store(array $options = [])
    {
        Valor::query()->insert($options);
    }
    public function getValor($id)
    {
        return DB::connection('mysql')->table('valor as v')
               ->join('caracteristica as c', 'c.id', '=', 'v.id_caracteristica')
               ->join('fichaUser as fu', 'v.id_fichaUser', '=', 'fu.id')
               ->leftJoin('comum as com', 'com.id', '=', 'c.id_comum')
               ->select('c.*','v.*','v.id as id_valor',
                       'fu.bonus')
               ->where('v.id', '=', $id)->first();
    }
    public function getValorNome($nome,$id_fichaUser)
    {
        return DB::connection('mysql')->table('valor as v')
               ->join('caracteristica as c', 'c.id', '=', 'v.id_caracteristica')
               ->join('fichaUser as fu', 'v.id_fichaUser', '=', 'fu.id')
               ->select('c.*','v.*','v.id as id_valor',
                       'fu.bonus')
                ->where('fu.id', '=', $id_fichaUser)
               ->where('c.nome', '=', $nome)->first();
    }
    public function updateSemModel($id, Array $options)
    {
        Valor::query()->where('id', '=', $id)->update($options);
    }
}
