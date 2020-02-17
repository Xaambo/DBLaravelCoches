@extends('masters.master')

@section('pageTitle','Crear cotxe')

@section('header')
<h1>Crear cotxe</h1>
@endsection

@section('content')

<form action="/cotxe" method="post">
	@csrf
  <div class="form-group">
    <label for="webid">Cotxe Id</label>
    <input type="text" class="form-control" id="id" name="id">
    
  </div>
  <div class="form-group">
    <label for="webUrl">Marca</label>
    <input type="text" class="form-control" id="make" name="make">
  </div>
 <div class="form-group">
    <label for="webName">Model</label>
    <input type="text" class="form-control" id="model" name="model">
  </div>
  <div class="form-group">
    <label for="webDescription">Produït al</label>
    <input type="text" class="form-control" id="produced_on" name="produced_on">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection