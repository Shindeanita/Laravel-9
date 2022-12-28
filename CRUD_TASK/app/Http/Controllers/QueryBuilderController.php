<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QueryBuilderController extends Controller
{
    //
    function dbOperation(){
      //  echo "List all data from database\n";
        $data =  DB::table('members')->get();

        $data1 = DB::table('members')->where('id','15')->get();

        $data3 = DB::table('members')->find(26);

        $count = DB::table('members')->count();

        $insert = DB::table('members')
        ->insert([
            'member_name'=>'Anil',
            'email'=>'anil@gmail.com',
            'address'=>'Gujarat'
        ]);

        $delete = DB::table('members')->where('id','17')->delete();


        return view('queryPage',['data'=>$data,'data2'=>$data1,'data3'=>$data3,'data4'=>$count,'data5'=>$insert
            ,'data6'=>$delete
        ]); 
    }
}
