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
                    <th style="width:500px">Model</th>
                    <th>Produït en</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
   @foreach($coches as $cotxe)
            
                <tr>
                    <td>{{ $cotxe->id }}</td>
                    <td>{{ $cotxe->make }}</td>
                    <td>{{ $cotxe->model }}</td>
                    <td>{{ $cotxe->produced_on }}</td>
                    <td>  
                        <div>
                            <a href="/cotxe/{{$cotxe->id}}"><button class="btn btn-outline-primary">Detalls</button></a>
                            <a href="/cotxe/{{$cotxe->id}}/edit"><button class="btn btn-outline-primary">Editar</button></a></br>
                            <form action="/cotxe/{{$cotxe->id}}" method="post">
                            @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger" type="submit">Esborrar</button>
                            </form>
                        </div>
                    </td>
                </tr>

    @endforeach

            </tbody>
        </table>
    </div>
@else
    No tenim cotxes disponibles
@endif

@endsection