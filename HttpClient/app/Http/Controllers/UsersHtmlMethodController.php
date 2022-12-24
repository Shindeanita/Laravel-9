<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersHtmlMethodController extends Controller
{
    //
    function testRequest(Request $req){
        return $req->input();
    }
}
