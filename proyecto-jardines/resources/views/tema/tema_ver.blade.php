
@extends('layout')
@section('content')
<div class="container mt-10 justify-content-center">
    <div class="card shadow mb-4">
        <div class="row justify-content-center">
            <div class="col-md-15 mt" >                 
                    @csrf
                        
                        <h6 class="m-0 font-weight-bold text-primary">VER TEMA {{ $tema['numero']}}</h6>

                        <div class="card-body">
                            <label for=""class="h2 mb-2 text-gray-800">numero  {{ $tema['numero']}} </label>
                              <label for=""class="col-12">NOMBRE {{ $tema['nombre']}} </label>
                              <label for=""class="col-12">CONTENIDO {{ $tema['contenido']}}</label>
                              <label for=""class="col-12">APOYO {{ $tema['apoyo']}} </label>
                              <a class="btn btn-info" href="{{ route('tarea_crear')}}">Crear Tarea</a>
                                <a class="btn btn-info" href="{{ route('tarea_listar')}}">Ver Tareas</a>
                                <a class="btn btn-info" href="{{ route('foro.nuevo')}}">Crear Foro</a>
                                <a class="btn btn-info" href="{{ route('foro_listar')}}">Ver Foro</a>
                                <a class="btn btn-info" href="{{ route('tema_listar')}}">Volver</a>
                        </div>
                           
            </div>
        </div>
   </div>
</div> 
@endsection
