@extends('layouts.app')
@section('main_container')
<h3>Componentes UI</h3>
    <a href="{{ url('agregarui') }}" class="btn btn-info btn-sm">Agregar</a>
    @if(isset($uis))
    <table class="table">
        <thead>
        <th>Nombre</th>
        <th>Template</th>
        <th>Descripcion</th>
        </thead>
        <tbody>
            @foreach($uis as $ui)
            <tr>
                <td>{{$ui->nombre}}</td>
                <td>{{$ui->template}}</td>
                <td>{{$ui->descripcion}}</td>                
            </tr>
            @endforeach
        </tbody>       
    </table>
    @endif 

@endsection
