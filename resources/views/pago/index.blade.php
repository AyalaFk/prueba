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
													  
													  
													</tr>
												  </thead>

								</table>
							 </div>
						
					
				  </div>
			</div>
		</div>
	</div>
@section('scripts')
 <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('extra-libs/sweetalert2.dist/sweetalert2.all.min.js') }}"></script>

  <!-- Page level plugins -->
   <link  href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<script src="{{ asset('js/util/datatable.js') }}"></script>
    <script src="{{ asset('js/util/functions.js') }}"></script>
  <!-- Page level custom scripts -->
<script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
<script type="text/javascript">
</script>
<script>
        $(document).ready( function () {
            $('#id_test').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('obtenerpagos') }}",
                columns: [
                    { data: 'id'},
                    { data: 'npe'},
                    { data: 'decodificado'},
                    { data: 'fecha'},
                    { data: 'monto_a'},
                    { data: 'vencimiento'},
                ]
            });
        });
    </script>

	

@endsection


  
