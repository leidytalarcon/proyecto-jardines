@extends('layout')

@section('content')
  
<div class="container mt-10 justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-15 mt" >
                <div class="form_register">
                  <form action="/rector/guardar" method="POST">
                    @csrf
                          
                        <div class="header-center">AGREGAR RECTOR</div>

                        <div class="card-body">
                            <div class="form-group">
                              <label for=""class="col-12 ">DOCUMENTO</label>
                              <input type="number" class="form-control col-md-15" name="documento" placeholder="Ingrese documento">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">NOMBRE </label>
                              <input type="text" class="form-control col-md-15" name="nombre" placeholder="digite el nombre">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">TELEFONO</label>
                              <input type="text" class="form-control col-md-15" name="telefono" placeholder="ingrese su numero">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">USERNAME </label>
                              <input type="text" class="form-control col-md-15" name="username" placeholder="ingrese su nombre de usuario">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">CONTRASEÑA </label>
                              <input type="text" class="form-control col-md-15" name="contrasena" placeholder="ingrese su contraseña">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">CORREO</label>
                              <input type="text" class="form-control col-md-15" name="correo" placeholder="ingrese su correo">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">DIRECCION</label>
                              <input type="text" class="form-control col-md-15" name="direccion" placeholder="ingrese su direccion">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">CIUDAD</label>
                              <input type="text" class="form-control col-md-15" name="ciudad" placeholder="ingrese su ciudad">
                            </div>
                            <strong>Rector:</strong>
                            <br>
                         <select name="id_rector" style="width:500px"  >
                         
                         <option value="">Rector</option>
                         @foreach($Rector as $Rector)
                            <option value="{{$rector['id_rector']}}">{{$rector["nombre_rector"]}}</option> 
                         @endforeach
                         </select>
                        </div>
                            <div class="row form-group">
                                <button type="submit" class="btn-success col-md-9 offset-2">AGREGAR</button>
                            </div>
                            
                           
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection