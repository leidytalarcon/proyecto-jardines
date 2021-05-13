@extends('layout')

@section('content')
  
<div class="container mt-10 justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-15 mt" >
                <div class="form_register">
                  <form action="/estudiante/guardar" method="POST">
                    @csrf
                          
                        <div class="header-center">AGREGAR ESTUDIANTE</div>

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
                              <label for=""class="col-12">ACUDIENTE</label>
                              <input type="text" class="form-control col-md-15" name="nombre_padre" placeholder="digite nombre del acuediente">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">NACIMIENTO</label>
                              <input type="datetime-local" class="form-control col-md-15" name="nacimiento" placeholder="fecha de nacimiento">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">DIRECCION</label>
                              <input type="text" class="form-control col-md-15" name="direccion" placeholder="direccion">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">CORREO</label>
                              <input type="text" class="form-control col-md-15" name="correo" placeholder="ingrese su correo">
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
                            <strong>CURSO:</strong>
                            <br>
                         <select name="id_curso" style="width:500px"  >
                         <option value="">curso</option>
                         @foreach($cursos as $curso)
                            <option value="{{$curso['Id_curso']}}">{{$curso["Codigo"]}}</option> 
                         @endforeach
                         </select>
                         <br>
                            <strong>INSTITUCION A LA QUE PERTENECE:</strong>
                            <br>
                         <select name="id_institucion" style="width:500px"  >
                         <option value="">institucion</option>
                         @foreach($instituciones as $institucion)
                            <option value="{{$institucion['Id_jardin']}}">{{$institucion["Nombre_jardin"]}}</option> 
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