@extends('layout')

@section('content')
  
<div class="container mt-10 justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-15 mt" >
                <div class="form_register">
                  <form action="{{ route('rector.actualizar',$rector->id_rector) }}" method="POST">
                    @csrf
                          
                        <div class="header-center">EDITAR RECTOR</div>

                        <div class="card-body">
                            <div class="form-group">
                              <label for=""class="col-12 ">DOCUMENTO</label>
                              <input type="number" class="form-control col-md-15" name="documento_rector" value="{{ $rector['documento_rector']}}" placeholder="Ingrese documento">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">NOMBRE </label>
                              <input type="text" class="form-control col-md-15" name="nombre" value="{{ $rector['nombre']}}"  placeholder="digite el nombre">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">CORREO</label>
                              <input type="text" class="form-control col-md-15" name="correo" value="{{ $rector['correo']}}" placeholder="ingrese su correo">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">TELEFONO</label>
                              <input type="text" class="form-control col-md-15" name="telefono" value="{{ $rector['telefono']}}"  placeholder="ingrese su numero">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">DIRECCION</label>
                              <input type="text" class="form-control col-md-15" name="direccion" value="{{ $rector['direccion']}}" placeholder="direccion">
                            </div>
                            
                            <div class="form-group">
                              <label for=""class="col-12">USERNAME </label>
                              <input type="text" class="form-control col-md-15" name="username"value="{{ $rector['username']}}"  placeholder="ingrese su nombre de usuario">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">CONTRASEÑA </label>
                              <input type="text" class="form-control col-md-15" name="contrasena"value="{{ $rector['constrasena']}}"  placeholder="ingrese su contraseña">
                            </div>
                            
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