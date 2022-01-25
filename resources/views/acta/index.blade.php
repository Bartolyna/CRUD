@extends('layouts.app')
@section('content')
<div class="container">


@if (Session::has('mensaje'))
 {{Session::get('mensaje')}}   
@endif


<a href="{{ url('acta/create')}}">Creacion de acta</a>
<table class="table table-light">   
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Usuario</th>
            <th>Ubicacion</th>
            <th>T. Solicitud</th>
            <th>Fecha</th>
            <th>Descripcion</th>
            <th>Serial</th>
            <th>Equipo</th>
            <th>Responsable</th>
            <th>Version</th>
            <th>Observacion</th>
            <th>Documento</th>
            <th>Acciones</th>
        </tr>
    </thead>


    <tbody>
        @foreach ($actas as $acta)
        <tr>
            <td>{{ $acta->id }}</td>
            <td>{{ $acta->Usuario }}</td>
            <td>{{ $acta->Ubicacion }}</td>
            <td>{{ $acta->Tipo_Solicitud }}</td>
            <td>{{ $acta->Fecha }}</td>
            <td>{{ $acta->Descripcion }}</td>
            <td>{{ $acta->Serial }}</td>
            <td>{{ $acta->Equipo }}</td>
            <td>{{ $acta->Responsable }}</td>
            <td>{{ $acta->Version }}</td>
            <td>{{ $acta->Observacion }}</td>
            <td>{{ $acta->Documento }}</td>
            <td>
                <a href="{{ url('acta/'.$acta->id.'/edit') }}">Editar</a>
                 
                
                /
            
            <form action="{{ url('acta/'.$acta->id) }}" method="post">
            @csrf
            {{ method_field('DELETE')}}    
                <input type="submit" onclick="return confirm('¿Quieres borrar?') " value="Borrar">

            </form>
                
            </td>
        </tr>
        @endforeach   
    </tbody>

        
        

</table>

</div>
@endsection