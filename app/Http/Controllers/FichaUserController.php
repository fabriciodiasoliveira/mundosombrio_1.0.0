<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FichaUser;

class FichaUserController extends Controller
{
    //
    private $model;
    function __construct() {
        $this->model=new FichaUser();
    }
    
}
