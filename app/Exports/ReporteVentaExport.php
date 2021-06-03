<?php

namespace App\Exports;

use App\Venta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Exports\Sheets\VentasxSucursalSheet;




class ReporteVentaExport implements WithMultipleSheets
{
    /**
    * @return \Illuminate\Support\Collection
    */
	use Exportable;
	private $date;
	
	public function forDate($date){
		$this->date=$date;
		return $this;
		
	}
    public function collection()
    {
        return Venta::all();
    }
	
	public function sheets(): array
	{
		$sheets=[];
		$array = array(3, 106, 107);
		foreach ($array as $sucursal){
			
			$sheets[]=new VentasxSucursalSheet($this->date, $sucursal);
		}
		return $sheets;
	}
	

}
