<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Augurio extends Model
{
    //
    protected $table = "augurio";
    protected $fillable = ['nome'];
    public function getAllAugurios()
    {
        return Augurio::query()->select('*')->get();
    }
    public function remove($id){
        Augurio::destroy($id);
    }
    public function store(array $options = [])
    {
        Augurio::query()->insert($options);
    }
    public function getAugurio($id)
    {
        return $this->find($id);
    }
    public function updateSemModel($id, Array $options)
    {
        Augurio::query()->where('id', '=', $id)->update($options);
    }
}
