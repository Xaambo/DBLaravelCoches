@extends('masters.master')

@section('pageTitle','Cotxes disponibles')

@section('content')

    <div class="content">
        <div>
            <h1>Cotxe {{$coche->id}}</h1>
        </div>
        <ul>
            <li>Make: {{$coche->make}}</li>
            <li>Model: {{$coche->model}}</li>
            <li>Produced on: {{$coche->produced_on}}</li>
        </ul>
    </div>

@endsection