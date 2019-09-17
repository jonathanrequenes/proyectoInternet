@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">HOLA MUNDO</div>

                <div class="card-body">
                  HOLA MUNDO EN VISTA CON HTML<br>

                  <ul>
                  @for($x =0; $x< 5; $x++)
                  <li>HOLA {{ $x * $x}} </li> <br>
                  @endfor
                  <ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
