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
                              <input type="number" class="form-control col-md-15" name="documento" value="{{ $rector['documento_rector']}}" placeholder="Ingrese documento">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">NOMBRE </label>
                              <input type="text" class="form-control col-md-15" name="nombre" value="{{ $rector['nombre_rector']}}"  placeholder="digite el nombre">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">INSTITUCION</label>
                              <input type="text" class="form-control col-md-15" name="correo" value="{{ $rector['institucion_id_jardin']}}" placeholder="ingrese su correo">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">TELEFONO</label>
                              <input type="text" class="form-control col-md-15" name="telefono" value="{{ $rector['telefono']}}"  placeholder="ingrese su numero">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">ROL</label>
                              <input type="text" class="form-control col-md-15" name="direccion" value="{{ $rector['rol_id_rol']}}" placeholder="direccion">
                            </div>
                            
                            <div class="form-group">
                              <label for=""class="col-12">USERNAME </label>
                              <input type="text" class="form-control col-md-15" name="username"value="{{ $rector['username']}}"  placeholder="ingrese su nombre de usuario">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">CONTRASEÑA </label>
                              <input type="text" class="form-control col-md-15" name="contrasena"value="{{ $rector['contrasena']}}"  placeholder="ingrese su contraseña">
                            </div>
                            
                            <div class="row form-group">
                                <button type="submit" class="btn-success col-md-9 offset-2">AGREGAR</button>
                            </div>
                            <strong>INSTITUCION A LA QUE PERTENECE:</strong>
                            <br>
                        
                        </div>
                           
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection