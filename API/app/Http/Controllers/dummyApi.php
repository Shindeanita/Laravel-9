<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;

class dummyApi extends Controller
{
    //
    //API always return in json format. 
    function getData(){

        return Device::all();
        //return ["name"=>"anita","email"=>"anita@test.com"];
    }
    function getDevice(Device $key){
        return $key;
    }

    function add(Request $req){
        $device = new Device;

        $device->device_name = $req->device_name;
        $device->member_id = $req->member_id;
        $result = $device->save();
        if ($result){
            return ["Result"=>'Data has been added sucessfully'];
        }else{
            return ["Result"=>'Operation failed'];
        }
        
    }

    function update(Request $req){
        $device = Device::find($req->id);
        $device->member_id = $req->member_id;
        $device->device_name = $req->device_name;
        $result = $device->save();
        if ($result){
            return ["Result"=>'Data has been updated sucessfully'];
        }else{
            return ["Result"=>'Operation failed'];
        }
    }


    function delete(Request $req){
        $device = Device::find($req->id);
        $result = $device->delete();
        if ($result){
            return ["Result"=>'Data has been deleted sucessfully'];
        }else{
            return ["Result"=>'Operation failed'];
        } 


    }

    function search($name){

        return Device::where("device_name","like","%".$name."%")->get();

    }

    function testData(Request $req){
        $rules = array(
            "member_id"=>"required|min:2|max:3",
            "device_name"=>"required",
        );
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
        }
        else{
            return ["x"=>"y"];
        }
    }
}
