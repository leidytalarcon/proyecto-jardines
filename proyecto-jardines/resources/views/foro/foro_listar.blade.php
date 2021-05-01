@extends('layout')
@section('content')
    
                          <!-- CONTENIDO -->    

                          <div class="container-fluid">

                            <!-- Page Heading -->
                            <h1 class="h2 mb-2 text-gray-800">Listar foro</h1>
                           
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Listar foro</h6>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 margin-tb">
                                        
                                        <div class="pull-right">
                                            <a class="btn btn-primary" href="{{ route('foro.nuevo') }}">Crear foro</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Contenido</th>
                                                    <th>Tema</th>
                                                    <th>Docente</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($foros as $foro ),
                                                <tr>
                                                    <td>{{ $foro["nombre"]}} </td>
                                                    <td>{{ $foro["contenido"]}} </td>
                                            
                                                    <td>{{ $foro["tema_idtema"]}} </td>
                                                    <td>{{ $foro["docente_iddocente"]}} </td>
                                                    
                                                   
                                                    <td>
                                                        <a class="btn btn-info" href="{{ route('foro.editar',$foro['idforo']) }}">
                                                            <i class="fas fa-edit"></i> 
                                                        </a>
                                                     </td>
                                                     <td>
                                                        <a class="btn btn-info" href="{{ route('foro.comentarios',$foro['idforo']) }}">Comentarios</a>
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