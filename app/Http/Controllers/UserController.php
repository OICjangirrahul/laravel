<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// database class
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //
    function index(){
        return DB::select("select * from post");
    }
}
