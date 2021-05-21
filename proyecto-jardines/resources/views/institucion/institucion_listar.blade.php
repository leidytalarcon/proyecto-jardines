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
                                            <a class="btn btn-primary" id="institucion_nuevo">Crear jardin</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="tableinstitucion" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Nit</th>
                                                    <th>Nombre</th>
                                                    <th>Direccion</th>
                                                    <th>Acciones</th>
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
                                 url:"{{ route('institucion.listar') }}",
                                     method: "GET",
                                 dataType: 'JSON',
                                 data:{_t:_t, v:v},

                                 success:function(data){
                                     
                                     for(var c in data){
                                        var idinstitucion = data[c].id_jardin;
                                        var row = '<tr>'+
                                            '<td>'+ data[c].nit_jardin +'</td>'+
                                            '<td>'+ data[c].nombre_jardin +'</td>'+
                                            '<td>'+ data[c].direccion +'</td>'+
                                            
                                            '<td>'+
                                                "<a class=\"btn btn-info\" href=\"{{ route('institucion.editar',"idinstitucion") }}\">"+
                                                    '<i class="fas fa-edit"></i>'+
                                                '</a>'   +                                      
                                            '</td>'+
                                            
                                            '</tr>'
                                        
                                        $('#tableinstitucion').append(row.replaceAll("idinstitucion", idinstitucion)
                                        );
                                    }
                                }
                            });

                            $('#institucion_nuevo').click(function(e) {
                                e.preventDefault();
                                route_list = '{{ route('institucion.nuevo') }}';
                    
                                window.location.href = route_list;
                            });
                            });

                            
                        </script>
      
    @endsection