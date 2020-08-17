<?php

namespace App\Roles\Models;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    //
    protected $fillable = [
        'name','slug','descripcion',    
    ];



    public function roles(){
        return $this->belongsToMany('App\Roles\Models\Role')->withTimesTamps();
    }

}
