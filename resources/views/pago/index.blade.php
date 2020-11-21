@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
			  <div class="card-header">
				Pagos Decodificados
			  </div>
				  <div class="card-body">
				    <a href="{{ route('pago.create') }}" class="btn btn-primary"> Decodificar Pagos </a>
					<h5 class="card-title">Pagos Electrónicos Decodificados</h5>
						
							<div class="col-md-12">
								<table id="id_test" class="table table-striped data-table">
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

								</table>
							 </div>
						
					
				  </div>
			</div>
		</div>
	</div>
@section('scripts')
@endsection

<div class="container">
    <div class="row justify-content-center">
	
   

   
<a href="{{route('pago.create')}}">Decodificar Pago</a>
<a href="{{ url("pago/create") }}" class="btn btn-primary"> Decodificar Pago </a>
<a href="{{ route('pago.create') }}" class="btn btn-primary"> Decodificar Pago </a>
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
							
			</table>
         </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
    $('#id_test').DataTable();
} );
    </script>
@endsection