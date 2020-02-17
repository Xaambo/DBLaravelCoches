@extends('masters.master')

@section('pageTitle','Editar coche')

@section('header')
<h1>Editar cotxe</h1>
@endsection

@section('content')

<form action="/cotxe/{{$coche->id}}" method="post">
	@csrf
    @method('PATCH')
  <div class="form-group">
    <label for="cocheId">ID del cotxe</label>
    <input type="text" class="form-control" readonly id="id" name="id" value="{{$coche->id}}">
    
  </div>
  <div class="form-group">
    <label for="marca">Marca</label>
    <input type="text" class="form-control" id="make" name="make" value="{{$coche->make}}">
  </div>
 <div class="form-group">
    <label for="model">Model</label>
    <input type="text" class="form-control" id="model" name="model" value="{{$coche->model}}">
  </div>
  <div class="form-group">
    <label for="produced_on">Produït al</label>
    <input type="date" class="form-control" id="produced_on" name="produced_on" value="{{$coche->produced_on}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection