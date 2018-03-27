@extends('layouts.app')
@section('main_container')

    <form action="{{ url('agregarblog') }}" method="post" class="form">
    @csrf
  <div class="form-group">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" name="titulo" placeholder="titulo">
  </div>
  <div class="form-group">
    <label for="urlimagen">Url imagen</label>
    <input type="text" class="form-control" name="urlimagen" placeholder="urlimagen">
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <textarea type="text" class="form-control" name="descripcion" placeholder="decripcion"></textarea>
  </div>
  
  <button type="submit" class="btn btn-success">Crear blog</button>
</form>
<br/>
@endsection