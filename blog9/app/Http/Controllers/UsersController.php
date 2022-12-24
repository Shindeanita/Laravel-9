<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    function index(){

        return DB::select("select * from laraveluser");
    }
    function loadView($name){
        return view('users',['name'=>$name]);
    }

    function viewLoad(){
        //return view('users',['users'=>['anita','aditi']]);
        $data = ['anita','aditi','mahesh','ganesh'];
        return view('users',['users'=>$data]);
    }
}
