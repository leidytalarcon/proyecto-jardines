
@extends('layout')
@section('content')
<div class="container mt-10 justify-content-center">
    <div class="card shadow mb-4">
        <div class="row justify-content-center">
            <div class="col-md-15 mt" >  
                <div class="form_register">
                    <form action="{{ route('tarea.actualizar2',$tarea->idtarea) }}" method="POST" >                  
                    @csrf
                        <h6 class="m-0 font-weight-bold text-primary">VER TEMA {{ $tarea['numero']}}</h6>
                    
                        <div class="card-body">
                            <label for=""class="h2 mb-2 text-gray-800">numero  {{ $tarea['numero']}} </label>
                              <label for=""class="col-12">NOMBRE {{ $tarea['nombre']}} </label>
                              <label for=""class="col-12">CONTENIDO {{ $tarea['contenido']}}</label>
                              <img src="{{asset($tarea->tarea_doc)}}"style ="height:90px">

                            <div class="row form-group">
                            <a class="btn btn-info" href="{{ route('tarea_listar')}}">Volver</a>
                            </div>
                            <div class="row form-group">
                            <a class="btn btn-info" href="{{ route('tarea_listar')}}">Agregar Entrega</a> 
                            </div>
                            </div>
                   </div>        
            </div>
        </div>
   </div>
</div> 
@endsection
