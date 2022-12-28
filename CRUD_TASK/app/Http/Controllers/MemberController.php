<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //List the records.
    function show(){

        //return view('list');
        $data =  Member::paginate(5);
        return view('list',['members'=>$data]);
    }

    // This function is used to insert record
    function store(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required',

        ]);

        $member = new Member;
        $member->member_name=$req->name;
        $member->email = $req->email;
        $member->address=$req->address;
        $member->save();


        session()->flash('user',$req->input('name'));
        return redirect('list');
    }

    //Delete records

    function delete($id){
        // $member = new Member;
        // $member->id = $id;
        // $member->where('id',$id)->delete();
        
    
        $data = Member::find($id);
        session()->flash('userdelete',$data['member_name']);
        $data->delete();
        return redirect('list');
    }


    //update Records
    function showData($id){

        $data=Member::find($id);

        return view('updatemember',['data'=>$data]);


    }

    function updateData(Request $req){

        //First way to write update query
        $id = $req->id;
        // $member = new Member;
        
        // $member->where('id',$id)->update(['member_name'=>$req->name,'email'=>$req->email,'address'=>$req->address]);
        // return redirect('list');

        //Second way to write update

        $data = Member::find($id);
        $data->member_name = $req->name;
        $data->email = $req->email;
        $data->address = $req->address;

        $data->save();
        return redirect('list');


    }
}
