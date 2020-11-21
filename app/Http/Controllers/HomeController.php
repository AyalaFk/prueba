<?php

namespace App\Http\Controllers;
use App\Venta;
use DB;
use Illuminate\Http\Request;
use App\Exports\VentasExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
	
	 public function export(){
        return Excel::download(new VentasExport, 'ventas.xlsx');
    }
	
	
	public function exportExcel()
    {
        /** Fuente de Datos Eloquent */
        $data = DB::table('reporte_venta')->get();
		$datalt = DB::table('reporte_venta')->where('sucursal_vta', '=', 107)->get();
		$databp = DB::table('reporte_venta')->where('sucursal_vta', '=', 106)->get();
		$databa = DB::table('reporte_venta')->where('sucursal_vta', '=', 3)->get();

        /** Creamos nuestro archivo Excel */
        Excel::create('ventas', function ($excel) use ($data) {

            /** Creamos una hoja */
            $excel->sheet('Hoja Uno', function ($sheet) use ($data) {
                /**
                 * Insertamos los datos en la hoja con el método with/fromArray
                 * Parametros: (
                 * Datos,
                 * Valores del encabezado de la columna,
                 * Celda de Inicio,
                 * Comparación estricta de los valores del encabezado
                 * Impresión de los encabezados
                 * )*/
                $sheet->with($data, null, 'A1', false, false);
            });

            /** Descargamos nuestro archivo pasandole la extensión deseada (xls, xlsx) */
        })->download('xlsx');
    }
}
