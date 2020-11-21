<?php

namespace App\Exports;

use App\Venta;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VentasExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
  'ID',
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
    public function collection()
    {
         //$ventas = DB::table('reporte_venta')->where('sucursal_vta', '=', 107)->get();
		 $ventas = DB::table('reporte_venta')->get();
		 //$ventas=Venta::all();
         return $ventas;

    }
}