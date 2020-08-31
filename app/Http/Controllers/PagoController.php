<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pago;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$pagos= Pago::all();
		//return (compact('pagos'));
        return view ('pago.index', compact('pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

		return view ('pago.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //prueba
        $file = $request->file('archivo');
        $url = $file->getClientOriginalName();
        //$file->store('public');
        //Recibimos el archivo y lo guardamos en la carpeta storage/app/public
        //$request->file('archivo')->store('public');

       
        //$npe->save();

        $contents = array();
        $prueba=fopen($file,"r") or die ("Error al leer");
        while (!feof($prueba)) {

            # code...
            $linea=fgets($prueba);
            $saltodelinea=nl2br($linea);
            //if(strlen($linea)>=92){}
            $contents[] = preg_replace('/\s+/', '', $linea);

        }
        fclose($prueba);


        

        // npe corto 91 y npe largo 118

        foreach ($contents as $val) {
          print $val;
          $valorfg=$val;

          if(strlen($val)==118){
            $contentss[] = preg_replace('/\s+/', '', $val);
			
            $hora=substr($val, 7, 8);
            $fecha=substr($val, 15, 8);
            $monto_a=substr($val, 50, 4);
			$entero=substr($val, 50, 2);
			$decimal=substr($val, 52, 2);
			$punto=".";
			$monto_dolar=$entero.$punto.$decimal;
            $monto_b=substr($val, 83, 4);
            $vencimiento=substr($val, 89, 8);
            $codigo=substr($val, 101, 6);
            $anio_cuota=substr($val, 107, 6);
            $cuenta=substr($val, 113, 2);
			
			$npe= new Pago();
			$npe->npe=(string)$url;
			$npe->decodificado=$val;
			//$npe->created_at = date('Y-m-d H:m:s');
			//$npe->updated_at = date('Y-m-d H:m:s');H:i:s
			$horaf =date('H:m:s',strtotime($hora));
			$npe->hora=$horaf;
			$fechad =date('Y-m-d',strtotime($fecha));
			$npe->fecha=$fechad;
			$npe->monto_a=(float)$monto_dolar;
			$npe->monto_b=$monto_b;
			$fechav =date('Y-m-d',strtotime($vencimiento));
			$npe->vencimiento=$fechav;
			$npe->codigo=$codigo;
			$npe->anio_cuota=$anio_cuota;
			$npe->cuenta=$cuenta;
						switch ($cuenta) {
					case 14:
						$npe->cuenta_nombre="Nueva Mayor de 35";
						break;
					case 15:
						$npe->cuenta_nombre="Nueva Menor de 35";
						break;
					case 16:
						$npe->cuenta_nombre="Nueva Departamental";
						break;
					case 17:
						$npe->cuenta_nombre="Nueva Sin Prestaciones";
						break;
					case 18:
						$npe->cuenta_nombre="Nueva Ausente";
						break;
				}
			$npe->tipo_pago='BAR';	
			$npe->save();
			
            $datos[] = ['hora' => $hora, 'fecha' => $fecha, 'monto_a' => $monto_a, 'monto_b' => $monto_b, 'vencimiento' => $vencimiento,
             'codigo' => $codigo, 'anio_cuota' => $anio_cuota, 'cuenta' => $cuenta];
            
            

          }


          if (strlen($val)==91){
            $contentss[] = preg_replace('/\s+/', '', $val);
            $hora=substr($val, 7, 8);
            $fecha=substr($val, 15, 8);
            $monto_a=substr($val, 50, 4);
			$entero=substr($val, 50, 2);
			$decimal=substr($val, 52, 2);
			$punto=".";
			$monto_dolar=$entero.$punto.$decimal;
            $monto_b=substr($val, 60, 4);
            $vencimiento=substr($val, 64, 8);
            $codigo=substr($val, 73, 6);
            $anio_cuota=substr($val, 79, 6);
            $cuenta=substr($val, 85, 2);
            $datos[] = ['hora' => $hora, 'fecha' => $fecha, 'monto_a' => $monto_a, 'monto_b' => $monto_b, 'vencimiento' => $vencimiento,
             'codigo' => $codigo, 'anio_cuota' => $anio_cuota, 'cuenta' => $cuenta];
            $npe= new Pago();
			$npe->npe=(string)$url;
			$npe->decodificado=$val;
			//$npe->created_at = date('Y-m-d H:m:s');
			//$npe->updated_at = date('Y-m-d H:m:s');H:i:s
			$horaf =date('H:m:s',strtotime($hora));
			$npe->hora=$horaf;
			$fechad =date('Y-m-d',strtotime($fecha));
			$npe->fecha=$fechad;
			$npe->monto_a=(float)$monto_dolar;
			$npe->monto_b=$monto_b;
			$fechav =date('Y-m-d',strtotime($vencimiento));
			$npe->vencimiento=$fechav;
			$npe->codigo=$codigo;
			$npe->anio_cuota=$anio_cuota;
			$npe->cuenta=$cuenta;
			switch ($cuenta) {
					case 14:
						$npe->cuenta_nombre="Nueva Mayor de 35";
						break;
					case 15:
						$npe->cuenta_nombre="Nueva Menor de 35";
						break;
					case 16:
						$npe->cuenta_nombre="Nueva Departamental";
						break;
					case 17:
						$npe->cuenta_nombre="Nueva Sin Prestaciones";
						break;
					case 18:
						$npe->cuenta_nombre="Nueva Ausente";
						break;
				}
			$npe->tipo_pago='NPE';	
			$npe->save();
          
      }

          
          $valorfh=preg_replace('/\s+/', '', $val);}
      
      



        //$contents = array();
        //foreach( $file as $line) {

          //       $contents[] = $line;
            //    }

          //dd ($datos);
          //return compact(hora,fecha,monto_a,monto_b,vencimiento,codigo,anio_cuota,cuenta);
		  return redirect()->action('PagoController@index');
        //dd($contentss);
        
         //dd( strlen($saltodelinea));
        //dd("Guardado con exito");
        //dd("subido y guardado");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
