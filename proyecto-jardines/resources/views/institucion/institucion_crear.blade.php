
@extends('layout')
@section('content')
<div class="container mt-10 justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-15 mt" >
                <div class="form_register">
                    <form action="/institucion/guardar" method="POST" >                  
                    @csrf
                        <div class="header-center">AGREGAR INSTITUCIÓN </div>

                        <div class="card-body">
                            <div class="form-group">
                              <label for=""class="col-12 ">NIT</label>
                              <input type="number" class="form-control col-md-15" name="nit_jardin" id="nit_jardin">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">NOMBRE </label>
                              <input type="text" class="form-control col-md-15" name="nombre_jardin" id="nombre_jardin">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">DIRECCION</label>
                              <input type="text" class="form-control col-md-15" name="direccion" id="direccion">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">CIUDAD</label>
                              <input type="text" class="form-control col-md-15" name="ciudad" id="ciudad">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">TELEFONO</label>
                              <input type="number" class="form-control col-md-15" name="telefono" id="telefono">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">LOGO</label>
                              <input type="file" class="form-control col-md-15" name="logo" id="logo">
                            </div>
                            <strong>Registrado por</strong>
                            <br>
                         <select name="id_admin" style="width:500px" id="administrador_id_admin">
                         
                         @foreach($administradores as $administrador){
                            <option value="{{$administrador['id_admin']}}">{{$administrador['nombre_admin']}}</option> 
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
