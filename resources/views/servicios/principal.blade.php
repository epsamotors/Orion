@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">

{{ Session::get('mensaje')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif





<br>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($servicios as $servicio)
        <tr>
            <td>{{ $servicio->id }}</td>
            <td>{{ $servicio->titulo }}</td>
            <td><img src="{{ asset('storage').'/'.$servicio->urlimagen}}" width="100" alt=""></td>
            
            <td>{{ $servicio->descripcion }}</td>
            <td>        
            <form action="{{ url('/servicios/'.$servicio->id.'/edit' ) }} " method="" class="d-inline" >
            <input type="submit" onclick="return confirm('Quieres editar el registro?')" value="Editar" class="btn btn-warning">
        
            </form>
            |
               
            <form action="{{ url('/servicios/'.$servicio->id) }} " method="post" class="d-inline">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('Quieres borrar el registro?')" value="Borrar" class="btn btn-danger">
        
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $servicios->links() !!}
<br>
<a  href=" {{ url('servicios/create') }} " class="btn btn-success">REGISTRAR NUEVO SERVICIO</a>
<br>

</div>

@endsection