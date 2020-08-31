<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Raca extends Model
{
    //
    protected $table = "raca";
    protected $fillable = ['nome'];
    public function getAllRacas()
    {
        return Raca::query()->select('*')->get();
    }
    public function remove($id){
        Raca::destroy($id);
    }
    public function store(array $options = [])
    {
        Raca::query()->insert($options);
    }
    public function getRaca($id)
    {
        return $this->find($id);
    }
    public function updateSemModel($id, Array $options)
    {
        Raca::query()->where('id', '=', $id)->update($options);
    }
}
