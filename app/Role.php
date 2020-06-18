<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Role extends Model
{
    //
    protected $table='roles';
    protected $primaryKey='roleId';
    protected $guarded=[];


    public function users(){

        return $this->hasMany(Users::class,'userId','userId');
    }

  
}
