@extends('masters.master')

@section('pageTitle','Crear cotxe')

@section('header')
<h1>Crear cotxe</h1>
@endsection

@section('content')

<form action="/cotxe/{{$cotxe->id}}" method="post">
	@csrf
    @method('PATCH')
  <div class="form-group">
    <label for="cotxeId">Cotxe Id</label>
    <input type="text" class="form-control"  id="id" name="id" value="{{$cotxe->id}}">
    
  </div>
  <div class="form-group">
    <label for="marca">Marca</label>
    <input type="text" class="form-control" id="make" name="make" value="{{$cotxe->make}}">
  </div>
 <div class="form-group">
    <label for="model">Model</label>
    <input type="text" class="form-control" id="model" name="model" value="{{$cotxe->model}}">
  </div>
  <div class="form-group">
    <label for="produced_on">Produït al</label>
    <input type="text" class="form-control" id="produced_on" name="produced_on" value="{{$cotxe->produced_on}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection