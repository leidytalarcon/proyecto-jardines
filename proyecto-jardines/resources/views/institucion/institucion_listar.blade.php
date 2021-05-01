@extends('layout')
@section('content')
    
                          <!-- CONTENIDO -->    

                          <div class="container-fluid">

                            <!-- Page Heading -->
                            <h1 class="h2 mb-2 text-gray-800">Listar Jardines</h1>
                           
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Listado de Jardines</h6>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 margin-tb">
                                        
                                        <div class="pull-right">
                                            <a class="btn btn-primary" href="{{ route('institucion.nuevo') }}">Crear jardin</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nombre</th>
                                                    <th>Nit</th>
                                                    <th>Direccion</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($instituciones as $institucion )
                                                <tr>
                                                    <td>{{ $institucion["id_jardin"]}} </td>
                                                    <td>{{ $institucion["nombre_jardin"]}} </td>
                                                    <td>{{ $institucion["nit_jardin"]}} </td>
                                                    <td>{{ $institucion["direccion"]}} </td>

                                                    <td>
                                                        <a class="btn btn-info" href="{{ route('institucion.editar',$institucion['id_jardin']) }}">Editar</a>
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