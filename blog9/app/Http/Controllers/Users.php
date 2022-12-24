<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function index($user){
        echo "Hello-{$user} controller index function";
    }
    function getName($name){
        echo "Hi, my name is {$name}";
    }
}
