<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class UserController extends Controller
{
    //
    function index(Request $req){
        //Check controller call or not
        //   return 'API data will be here.';

        $req=$req->header();
        $collection = Http::get('https://reqres.in/api/users?page=2');
        
        return view('users',['collection'=>$collection['data'],'header'=>$req]);

    }
}
