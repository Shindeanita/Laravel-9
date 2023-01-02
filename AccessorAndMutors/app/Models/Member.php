<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps = false;
    // public function getMemberNameAttribute($val){
    //     return ucfirst($val);
    // }

    protected function prefixName($value){
        if(substr($value,0,2)=='Mr'){
            return $value;
        }
        else{
            return 'Mr '.$value;
        }
    }
    protected function memberName():Attribute{
        return Attribute::make(
            get: fn ($value) => strtoupper($value),
            set: fn ($value) =>  Member::prefixName($value),
        );
    }
    

    public function getAddressAttribute($val){
        return $val.', India';
    }


    // Relationship

    public function getCompany(){
        return $this->hasOne('App\Models\Company');

    }

    public function getDevice(){
        return $this->hasMany(Device::class);
    }
}
