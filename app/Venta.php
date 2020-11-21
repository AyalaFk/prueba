<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
	protected $table = 'reporte_venta';
    protected $fillable = [ 
  'fecha_venta',
  'tiket',
  'categoria',
  'codigo',
  'producto',
  'cantida_receta',
  'precio_prom',
  'costo_total',
  'tiket_max',
  'tiket_min',
  'sucursal_vta', 		
    ];
}
