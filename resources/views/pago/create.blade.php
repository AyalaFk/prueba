@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Cargar NPE</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{route('pago.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <label for="archivo"><b>Archivo: </b></label><br>
                      <input type="file" name="archivo" required>
                      <input class="btn btn-success" type="submit" value="Enviar" >
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>FECHA DE REPORTE: </h2></div>

                <div class="card-body">
                    <form method="POST" action="{{route('export3')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <label for="archivo"><b>Archivo: </b></label><br>
                      <input type="file" name="archivo">
					  <label for="date">Fecha</label>
					  <input type="text" class="form-control datepicker" name="date">
                      <input class="btn btn-success" type="submit" value="Enviar" >
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection