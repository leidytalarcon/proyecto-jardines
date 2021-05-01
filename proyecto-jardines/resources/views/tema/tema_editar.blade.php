
@extends('layout')
@section('content')
<div class="container mt-10 justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-15 mt" >
                <div class="form_register">
                    <form action="{{ route('tema.actualizar',$tema->idtema) }}" method="POST" >                  
                    @csrf
                        <div class="header-center">EDITAR TEMA</div>

                        <div class="card-body">
                            <div class="form-group">
                            <label for=""class="col-12">NUMERO </label>
                              <input type="text" class="form-control col-md-15" name="numero" value="{{ $tema['numero']}}">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">NOMBRE </label>
                              <input type="text" class="form-control col-md-15" name="nombre" value="{{ $tema['nombre']}}">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">CONTENIDO</label>
                              <input type="text" class="form-control col-md-15" name="contenido"  value="{{ $tema['contenido']}}">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">APOYO</label>
                              <input type="text" class="form-control col-md-15" name="apoyo"  value="{{ $tema['apoyo']}}">
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
