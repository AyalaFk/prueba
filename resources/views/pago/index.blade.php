@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
	<a href="{{route('pago.create')}}">Decodificar Pago</a>
	<button type="button" class="btn btn-primary" onclick="window.location='{{ url("pago/create") }}'" > Decodificar Pago</button>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>Pagos Decodificados</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
					<div class="row">
					<div class="col-md-12">
					<table class="table table-striped data-table">
						<thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Codigo</th>
								  <th scope="col">Monto</th>
								  <th scope="col">Tipo</th>
								  <th scope="col">Cuenta</th>
								  <th scope="col">Fecha</th>
								  <th scope="col">Hora</th>
								  <th scope="col">Vencimiento</th>
								  <th scope="col">Decodificado</th>
								  
								</tr>
							  </thead>
							<tbody>
								@foreach($pagos as $pg) 
								<tr>
								  <th scope="row">1</th>
								  <td>{{ $pg->codigo }}</td>
								  <td>{{ $pg->monto_a }}</td>
								  <td>{{ $pg->tipo_pago }}</td>
								  <td>{{ $pg->cuenta_nombre }}</td>
								  <td>{{ $pg->fecha }}</td>
								  <td>{{ $pg->hora }}</td>
								  <td>{{ $pg->vencimiento }}</td>
								  <td>{{ $pg->decodificado }}</td>
								</tr>
								@endforeach
							  </tbody>
						</table>



                   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection