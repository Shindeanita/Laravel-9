<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserHtmlController extends Controller
{
    //
    function getData(Request $req){
        
        $req->validate([
            'username'=>'required | max:5',
            'upass'=>'required | min:5'
        ]);

        return $req->input();
        
        //return  "Form Data";
    }
}
