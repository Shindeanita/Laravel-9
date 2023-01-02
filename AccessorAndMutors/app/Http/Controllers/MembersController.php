<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MembersController extends Controller
{
    //
    function index(){
        $member = new Member;
        $member->member_name = 'Mr Vijay';
        $member->email = 'savita@gmail.com';
        $member->address = 'Modasa';
        $member->save();

        return  Member::all();
    }

    function getdata(){
        return Member::where('id','1')->get();
    }


    function getDeviceData(){
        return Member::find(1)->getDevice;
    }
}
