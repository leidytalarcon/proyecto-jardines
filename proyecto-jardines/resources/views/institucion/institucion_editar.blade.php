
@extends('layout')
@section('content')
<div class="container mt-10 justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-15 mt" >
                <div class="form_register">
                    <form action="{{ route('institucion.actualizar',$institucion->id_jardin) }}" method="POST" >                  
                    @csrf
                        <div class="header-center">EDITAR INSTITUCIÓN</div>

                        <div class="card-body">
                            <div class="form-group">
                              <label for=""class="col-12 ">NIT</label>
                              <input type="number" class="form-control col-md-15" name="nit_jardin"  value="{{ $institucion['nit_jardin']}}">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">NOMBRE </label>
                              <input type="text" class="form-control col-md-15" name="nombre_jardin" value="{{ $institucion['nombre_jardin']}}">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">DIRECCION</label>
                              <input type="text" class="form-control col-md-15" name="direccion"  value="{{ $institucion['direccion']}}">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">CIUDAD</label>
                              <input type="text" class="form-control col-md-15" name="ciudad"  value="{{ $institucion['ciudad']}}">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">TELEFONO</label>
                              <input type="number" class="form-control col-md-15" name="telefono"  value="{{ $institucion['telefono']}}">
                            </div>
                            <div class="form-group">
                              <label for=""class="col-12">LOGO</label>
                              <input type="file" class="form-control col-md-15" name="logo"  value="{{ $institucion['logo']}}">
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
