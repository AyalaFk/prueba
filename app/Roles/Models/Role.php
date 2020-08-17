<?php

namespace App\Roles\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
        'name','slug','descripcion', 'acceso-total',     
    ];

    public function users(){
    	return $this->belongsToMany('App\User')->withTimesTamps();
    }

    public function permisos(){
    	return $this->belongsToMany('App\Roles\Models\Permiso')->withTimesTamps();
    }
}
