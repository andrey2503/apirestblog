@extends('layouts.app')
@section('main_container')
<h3>Blog posts</h3>
    <a href="{{ url('createblog') }}" class="btn btn-info btn-sm">Agregar</a>
    @if(isset($post))
    <table class="table">
        <thead>
        <th>Nombre</th>
        <th>Template</th>
        <th>Descripcion</th>
        <th>Acciones</th>
        </thead>
        <tbody>
            @foreach($post as $pt)
            <tr>
                <td>{{$pt->titulo}}</td>
                <td> <a href="{{$pt->urlimagen}}">{{$pt->urlimagen}}</a> </td>
                <td>{{$pt->descripcion}}</td>   
                <td><a href="{{url('editarblog')}}/{{ $pt->id }}">Editar</a></td>             
            </tr>
            @endforeach
        </tbody>       
    </table>
    @endif 

@endsection
