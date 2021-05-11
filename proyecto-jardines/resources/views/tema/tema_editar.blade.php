
@extends('layout')
@section('content')
<div class="container mt-10 justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-15 mt" >
                <div class="form_register">
                    <form action="{{ route('tarea.actualizar',$tarea->idtarea) }}" method="POST" >                  
                    @csrf
                        <div class="header-center">EDITAR TAREA</div>

                        <div class="card-body">
                            <div class="form-group">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">NOMBRE </label>
                              <input type="text" class="form-control col-md-15" name="nombre" value="{{ $tarea['nombre']}}">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">CONTENIDO</label>
                              <input type="text" class="form-control col-md-15" name="contenido"  value="{{ $tarea['contenido']}}">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">TAREA A REALIZAR</label>
                              <input type="file" class="form-control col-md-15" name="tarea_doc"  value="{{ $tarea['tarea_doc']}}">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">TAREA REALIZADA</label>
                              <input type="file" class="form-control col-md-15" name="tarea_est"  value="{{ $tarea['tarea_est']}}">
                            </div>
                            <div class="row form-group">
                                <button type="submit" class="btn-success col-md-9 offset-2">Guardar</button>
                            </div>
                        </div>
                           
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    @endsection
