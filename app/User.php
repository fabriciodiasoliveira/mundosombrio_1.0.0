<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "users";
    protected $fillable = [
        'name', 'email', 'password', 'tipo', 'id_fichaUser',  'created_at'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getAllUsers()
    {
        return User::query()->select('*')->get();
    }
    public function getAllUsersDataUnique()
    {
        return User::query()->select(DB::raw('DATE_FORMAT(created_at,"%d/%m/%Y") AS dataDeAcesso'))
                ->distinct()
                ->get();
    }
    public function getAllUsersData($data)
    {
        return User::query()->select(DB::raw('DATE_FORMAT(created_at,"%d/%m/%Y") AS dataDeAcesso, name'))
                ->distinct()
                ->whereRaw('DATE_FORMAT(created_at,"%d/%m/%Y")='.'"'.$data.'"')
                ->get();
    }
    public function getUserEmail($email)
    {
        return User::query()->select('*')
                ->where('email','=',$email)
                ->first();
    }
    public function getUserResset($email,$password)
    {
        return User::query()->select('*')
                ->where('email','=',$email)
                ->where('password','=',$password)
                ->first();
    }
    public function remove($id){
        User::destroy($id);
    }
    public function store(array $options = [])
    {
        User::query()->insert($options);
    }
    public function storeGetId(array $options = [])
    {
        $id = User::query()->insertGetId($options);
        return $id;
    }
    public function getUser($id)
    {
        return $this->find($id);
    }
    public function updateSemModel($id, Array $options)
    {
        User::query()->where('id', '=', $id)->update($options);
    }
}
