@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Cargar NPE</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}



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
@endsection