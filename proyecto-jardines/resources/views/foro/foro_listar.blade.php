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
                                        <table class="table table-bordered" id="tableForos" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Contenido</th>
                                                    <th>Tema</th>
                                                    <th>Docente</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                        <!-- /.container-fluid -->

                        <!-- FIN CONTENIDO -->

                        <script>
                            jQuery(document).ready(function () {
                                var _t = $('input[name="_token"]').val();  //you need add a token
                                var v = $(this).val();
                                $.ajax({
                                 url:"{{ route('foro.listar') }}",
                                     method: "GET",
                                 dataType: 'JSON',
                                 data:{_t:_t, v:v},

                                 success:function(data){
                                     
                                     for(var c in data){
                                        var idforo = data[c].idforo;
                                        var row = '<tr>'+
                                            '<td>'+ data[c].nombre +'</td>'+
                                            '<td>'+ data[c].contenido +'</td>'+
                                            '<td>'+ data[c].tema_idtema +'</td>'+
                                            '<td>'+ data[c].docente_iddocente +'</td>'+
                                            
                                              
                                            '<td>'+
                                                "<a class=\"btn btn-info\" href=\"{{ route('foro.editar',"idforo") }}\">"+
                                                    '<i class="fas fa-edit"></i>'+
                                                '</a>'   +                                      
                                            '</td>'+

                                            '<td>'+
                                                "<a class=\"btn btn-info\" href=\"{{ route('foro.comentarios',"idforo") }}\">Comentarios</a>"+
                                            '</td>'+
                                        
                                            '</tr>'
                                        
                                        $('#tableForos').append(row.replaceAll("idforo", idforo)
                                        );
                                    }
                                }
                            });
                            });
                        </script>
      
    @endsection