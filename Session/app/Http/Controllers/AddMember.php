<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class AddMember extends Controller
{
    //
    function addUser(Request $req){
        $req->validate([
            'name'=>'required',
            'password' =>'required',
            'email' => 'required'
        ]);

        
        $file = $req->file('avtar');
        $extention = $file->extension();
        $name=  $req->input('name') .'.' . $extention;
        $file=$file->storeAs('profile',$name);

        $data = $req->input('name');
        session()->flash('name');
        return redirect('addmember');
    }

    
}
