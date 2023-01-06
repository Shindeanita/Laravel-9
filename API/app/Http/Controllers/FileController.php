<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    function upload(Request $req){
        $file = $req->file('file');
        //$name = $file->getClientOriginalName();
        $name = $file->hashName();
        //$extension = $file->getClientOriginalExtension();
        $extension = $file->extension();
        $result  = $req->file('file')->storeAs('appDocs',$name);
        
        return ["message"=>$result];
    }
}
