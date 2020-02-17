@extends('masters.master')

@section('pageTitle','Cotxes disponibles')

@section('content')

@if (count($coches) > 0)
   
    <div class="container">
        <h2>Cotxes</h2>
        <p>Llistat de tots els cotxes</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Model</th>
                    <th>Produït en</th>

                </tr>
            </thead>
            <tbody>
   @foreach($coches as $cotxe)
            
                <tr>
                    <td>{{ $cotxe->id }}</td>
                    <td>{{ $cotxe->make }}</td>
                    <td>{{ $cotxe->model }}</td>
                    <td>{{ $cotxe->produced_on }}</td>
                </tr>

    @endforeach

            </tbody>
        </table>
    </div>
@else
    No tenim cotxes disponibles
@endif

@endsection