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
                                            <a class="btn btn-primary" href="{{ route('estudiante.nuevo') }}">Crear estudiante</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Documento</th>
                                                    <th>Nombre</th>
                                                    <th>Direccion</th> 
                                                    <th>Correo</th> 
                                                    <th>Tel</th> 
                                                    <th>Curso</th>
                                                    <th>Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($estudiantes as $estudiante ),
                                                <tr>
                                                    <td>{{ $estudiante["documento"]}} </td>
                                                    <td>{{ $estudiante["nombre"]}} </td>
                                                    <td>{{ $estudiante["direccion"]}} </td>
                                                    <td>{{ $estudiante["correo"]}} </td>
                                                    <td>{{ $estudiante["telefono"]}} </td>
                                                    
                                                    @foreach($cursos as $curso),
                                                  
                                                    <td>{{ $curso["codigo"]}} </td>

                                                    <td>
                                                        <a class="btn btn-info" href="{{ route('estudiante.editar',$estudiante['id_estudiante']) }}">Editar</a>
                                                     </td>
                                                </tr>
                                                @endforeach
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