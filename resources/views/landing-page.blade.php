@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">BIENVENIDA</div>

                <div class="card-body">
                  HOLA {{ $nombre }} {{$apellido ?? 'No Indicó Apellido'}} Edad: {{$edad}}<br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
