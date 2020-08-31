<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Chat extends Model
{
    //
    protected $table = "chat";
    protected $fillable = ['id','nome','texto','id_cronica','link', 'created_at'];
    public function getAllChatsCronica($id_cronica, $ultima)
    {
        return Chat::query()->select('*')
                ->where('id','>',$ultima)
                ->where('id_cronica','=',$id_cronica)
                ->get();
    }
    public function getAllChats($id_cronica)
    {
        return Chat::query()->select('*')
                ->where('id_cronica','=',$id_cronica)
                ->get();
    }
    public function getAllPages()
    {
        return Chat::query()->select('*')
                ->where('id_cronica','=',-2)
                ->get();
    }
    public function getAllChatsPrincipal(){
        return Chat::query()->select(DB::raw("*, DATE_FORMAT(created_at,'%d/%m/%Y - %H:%i') as data"))
                ->where('id_cronica','=',0)
                ->orderBy('id', 'desc')
                ->limit(5)
                ->get();
    }
    public function getAllNotice(){
        return Chat::query()->select(DB::raw("*, DATE_FORMAT(created_at,'%d/%m/%Y - %H:%i') as data"))
                ->where('id_cronica','=',-1)
                ->orderBy('id', 'desc')
                ->limit(5)
                ->get();
    }
    public function remove($id){
        Chat::destroy($id);
    }
    public function store(array $options = [])
    {
        Chat::query()->insert($options);
    }
    public function getChat($id)
    {
        return $this->find($id);
    }
    
}
