@extends('layouts.app')
@section('main_container')
@if(isset($post))

    <form action="{{ url('editarblog') }}" method="post" class="form">
    @csrf
    <input type="hidden"  name ="id"value="{{$post->id}}">
  <div class="form-group">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" name="titulo"  value="{{ $post->titulo }}"/>
  </div>
  <div class="form-group">
    <label for="urlimagen">Url imagen</label>
    <input type="text" class="form-control" name="urlimagen" value="{{ $post->urlimagen }}"/>
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <textarea type="text" class="form-control" name="descripcion" >{{ $post->descripcion }}</textarea>
  </div>
  
  <button type="submit" class="btn btn-success">Actualizar blog</button>
</form>
<br/>
@endif
@endsection