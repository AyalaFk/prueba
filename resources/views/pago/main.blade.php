<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" >
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" >


    <title>SSF</title>
  </head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="container-sm">
      <h1>
        Lista de Empleados
      </h1>
    </section>
    <!-- Main content -->
    <section class="container">
      <div class="row">
        <div class="col-sm">
          <div class="box">
            <div class="box-header with-border">
            </div>
            <div class="table-responsive-sm">
              <table id="id_test" class="table table-striped table-bordered" style="width:100%">
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
						  <th scope="row">{{ $pg->id }}</th>
						  <td>{{ $pg->codigo }}</td>
						  <td>{{ $pg->monto_a }}</td>
						  <td>{{ $pg->tipo_pago }}</td>
						  <td>{{ $pg->cuenta_nombre }}</td>
						  <td>{{ $pg->fecha }}</td>
						  <td>{{ $pg->hora }}</td>
						  <td>{{ $pg->vencimiento }}</td>
						  <td style="white-space:nowrap">{{ $pg->decodificado }}</td>
						</tr>
						@endforeach
					  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>  
  </div>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
    $('#id_test').DataTable({
		"serverSide": true
	});
} );
    </script>
</body>
</html>