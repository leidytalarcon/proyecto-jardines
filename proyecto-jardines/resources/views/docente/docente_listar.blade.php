@extends('layout')
@section('content')
    
                          <!-- CONTENIDO -->    

                          <div class="container-fluid">

                            <!-- Page Heading -->
                            <h1 class="h2 mb-2 text-gray-800">Listar docente</h1>
                           
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Listado de docentes</h6>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 margin-tb">
                                        
                                        <div class="pull-right">
                                            <a class="btn btn-primary" id="docente_nuevo">Crear docente</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="tabledocente" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Documento</th>
                                                    <th>Nombre</th>
                                                    <th>Correo</th> 
                                                    <th>Telefono</th>
                                                    
                                                    <th>acción</th>
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
                                 url:"{{ route('docente.listar') }}",
                                     method: "GET",
                                 dataType: 'JSON',
                                 data:{_t:_t, v:v},

                                 success:function(data){
                                     
                                     for(var c in data){
                                        var iddocente = data[c].id_docente;
                                        var row = '<tr>'+
                                            '<td>'+ data[c].documento +'</td>'+
                                            '<td>'+ data[c].nombre +'</td>'+
                                            '<td>'+ data[c].correo +'</td>'+
                                            '<td>'+ data[c].telefono +'</td>'+
                                            
                                            '<td>'+
                                                "<a class=\"btn btn-info\" href=\"{{ route('docente.editar',"iddocente") }}\">"+
                                                    '<i class="fas fa-edit"></i>'+
                                                '</a>'   +                                      
                                            '</td>'+
                                            
                                            '</tr>'
                                        
                                        $('#tabledocente').append(row.replaceAll("iddocente", iddocente)
                                        );
                                    }
                                }
                            }); 
                            $('#docente_nuevo').click(function(e) {
                                e.preventDefault();
                                route_list = '{{ route('docente.nuevo') }}';
                    
                                window.location.href = route_list;
                            });
                            });

                            
                        </script>

      
    @endsection