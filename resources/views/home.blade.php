@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
			  <div class="card-header">
				Pagos Electronicos 
			  </div>
				  <div class="card-body">
					<h5 class="card-title">Pagos Electrónicos Banco Agricola</h5>

					<a href="{{ url("pago") }}" class="btn btn-primary"> Ver Pagos </a>
					<a href="{{ url("exportar")}}">exportar</a>
					
					<a href="{{ url("exportarexcel")}}">exportar hojas</a>
					<a href="{{ url("exportarexcel2")}}">exportar hojas</a>
				  </div>
			</div>
		</div>
	</div>			
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
				
				
				<div class="container">
					<div class="content">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="col-md-4 col-md-offset-4">
									<form action='../exportarexcel3' method="post">
									   
										<label for="date">Fecha</label>
										<input type="text" class="form-control datepicker" name="date">
										<button type="submit" class="btn btn-default btn-primary">Enviar</button>
										<button type="button" class="btn btn-info btn-sm" onclick="window.location.href='/exportarexcel3'" style="width: 300px;">Regresar</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>			
</div>
@endsection
@section('javascript')
<script>
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        language: "es",
        autoclose: true
    });
</script>
<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
@endsection
