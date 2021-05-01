
@extends('layout')
@section('content')
<div class="container mt-10 justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-15 mt" >
                <div class="form_register">
                    <form action="/tema/guardar" method="POST" >                  
                    @csrf
                        <div class="header-center">AGREGAR TEMA </div>

                        <div class="card-body">
                            <div class="form-group">
                              <label for=""class="col-12">NUMERO </label>
                              <input type="number" class="form-control col-md-15" name="numero" id="numero">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">NOMBRE </label>
                              <input type="text" class="form-control col-md-15" name="nombre" id="nombre">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">CONTENIDO</label>
                              <input type="text" class="form-control col-md-15" name="contenido" id="contenido">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">url Video Apoyo</label>
                              <input type="text" class="form-control col-md-15" name="apoyo" id="apoyo">
                            </div>
                            <strong>TEMA</strong>
                            <br>
                         <select name="id_docente" style="width:500px" id="tema_idtema">
                         <option value="">docente</option>
                         @foreach($docentes as $docente){
                            <option value="{{$docente['id_docente']}}">{{$docente['nombre']}}</option> 
                         }
                         @endforeach
                         </select>
        
                            <div class="row form-group">
                                <button type="submit" class="btn-success col-md-9 offset-2">AGREGAR</button>
                            </div>
                            
                        </div>
                           
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    @endsection
