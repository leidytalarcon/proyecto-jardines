@extends('layout')
@section('content')
    
      <!-- CONTENIDO -->    

    <div class="container-fluid">

                            <!-- Page Heading -->
                            <h1 class="h2 mb-2 text-gray-800">Listar cursos</h1>
                           
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Listado de cursos</h6>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 margin-tb">
                                        
                                        <div class="pull-right">
                                            <a class="btn btn-primary" href="{{ route('rector_crear') }}">Crear Rector</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Documento</th>
                                                    <th>Nombre</th>
                                                    <th>Tel</th> 
                                                    <th>Username</th> 
                                                    <th>Contraseña</th> 
                                                    <th>institucion_id_jardin</th>
                                                    <th>rol_id_rol</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($rector as $rector )
                                                <tr>
                                                    <td>{{ $rector["id_rector"]}} </td>
                                                    <td>{{ $rector["documento_rector"]}} </td>
                                                    <td>{{ $rector["nombre_rector"]}} </td>
                                                    <td>{{ $rector["telefono"]}} </td>
                                                    <td>{{ $rector["username"]}} </td>
                                                    <td>{{ $rector["contrasena"]}} </td>
                                                    <td>{{ $rector["institucion_id_jardin"]}} </td>
                                                    <td>{{ $rector["rol_id_rol"]}} </td>
                                                    <td>
                                                        <a class="btn btn-info" href="{{ route('rector.editar',$rector['id_rector']) }}">Editar</a>
                                                     </td>
                                                </tr>
                                               
                                                @endforeach
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                        <!-- /.container-fluid -->

                        <!-- FIN CONTENIDO -->
      
    @endsection