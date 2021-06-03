<?php

namespace App\Exports\Sheets;

use Maatwebsite\Excel\Concerns\FromQuery;
use App\Venta;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VentasxSucursalSheet implements FromQuery,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
	private $date;
	private $sucursal;
	
	public function __construct ($date,$sucursal){
		$this->date=$date;
		$this->sucursal=$sucursal;
		
	}
	
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
  'prueba',
          
        ];
    }
	
	
    public function query()
    {
        //
		return Venta::query()
		->whereDate('fecha_venta', $this->date)
		->where('sucursal_vta', $this->sucursal);
    }
}
