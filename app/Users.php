<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $table='adduser';
    protected $primaryKey='userId';
    protected $guarded=[];

    public function roles(){

        return $this->belongsTo(Role::class,'roleId','userId');
    }


    public function anyRole($roles){

        if($this->roles()->where('roleId',$roles)->first())
        {
            return true;
        }
            return false;
    }
}
