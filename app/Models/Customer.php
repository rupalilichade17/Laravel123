<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Customer extends Model
{
    use HasFactory;
    public $timestamps=false;

    // =========Accessor==========

    // public function getnameAttribute($value)
    // {
    //     return lcfirst($value);
    // }

    // public function getcityAttribute($value)
    // {
    //     return $value.', Goregaon';
    // }


    // ==========Mutator================

    // public function setnameAttribute($value)
    // {
    //     $this->attributes['name']='Mr '.$value;
         
    // }

    // ===========One To One Relationship===================

       public function getCompany()
       {
        //  return $this->hasOne('app\Models\Company');
        return $this->hasMany('App\Models\Company');
       }
}
