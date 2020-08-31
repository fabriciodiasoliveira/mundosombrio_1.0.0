<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Postagem extends Model
{
    //
    protected $table = "postagem";
    protected $fillable = [
        'post','id_fichaUser','id_cronica'
    ];
    public function getAllPostagensCronica($id_cronica)
    {
        return DB::connection('mysql')->table('postagem as p')
               ->leftJoin('fichaUser as f', 'f.id', '=', 'p.id_fichaUser')
               ->select('f.*','p.*','p.id as id_postagem','f.id_user as id_user', 'f.id as id_ficha')
                ->where('p.id_cronica','=',$id_cronica)
                ->orderBy('p.id')->get();
    }
    public function getUltimasPostagensCronica($id, $id_cronica)
    {   
        return DB::connection('mysql')->table('postagem as p')
               ->leftJoin('fichaUser as f', 'f.id', '=', 'p.id_fichaUser')
               ->select('f.*','p.*','p.id as id_postagem','f.id_user as id_user', 'f.id as id_ficha')
                ->where('p.id','>',$id)
                ->where('p.id_Cronica','=',$id_cronica)->orderBy('p.id')->get();
    }
    public function remove($id){
        Postagem::destroy($id);
    }
    public function store(array $options = [])
    {
        Postagem::query()->insert($options);
    }
    public function getPostagem($id)
    {
        return $this->find($id);
    }
    public function updateSemModel($id, Array $options)
    {
        Postagem::query()->where('id', '=', $id)->update($options);
    }
}
