@extends('layouts.app')
@section('main_container')

    <form action="{{ url('agregaruic') }}" method="post" class="form">
    @csrf
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="nombre">
  </div>
  <div class="form-group">
    <label for="template">Template</label>
    <textarea type="text" class="form-control" name="template" placeholder="template"></textarea>
  </div>
  <div class="form-group">
    <label for="decripcion">Descripcion</label>
    <input type="text" class="form-control" name="decripcion" placeholder="decripcion">
  </div>
  
  <button type="submit" class="btn btn-success">Guardar</button>
</form>
<br/>
@endsection