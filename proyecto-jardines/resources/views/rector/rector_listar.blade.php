@extends('layout')
@section('content')
    
      <!-- CONTENIDO -->    

    <div class="container-fluid">

                            <!-- Page Heading -->
                            <h1 class="h2 mb-2 text-gray-800">Listar rector</h1>
                           
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Listado de rectores</h6>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 margin-tb">
                                        
                                        <div class="pull-right">
                                            <a class="btn btn-primary"  id="rector_nuevo" href="/">Crear Rector</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="tablerector" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Documento</th>
                                                    <th>Nombre</th>
                                                    <th>Telefono</th> 
                                                    <th>institucion_id_jardin</th>
                                                    
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
                                 url:"{{ route('rector.listar') }}",
                                     method: "GET",
                                 dataType: 'JSON',
                                 data:{_t:_t, v:v},

                                 success:function(data){
                                     
                                     for(var c in data){
                                        var idrector = data[c].id_rector;
                                        var row = '<tr>'+
                                            '<td>'+ data[c].documento_rector +'</td>'+
                                            '<td>'+ data[c].nombre_rector +'</td>'+
                                            '<td>'+ data[c].telefono +'</td>'+
                                            '<td>'+ data[c].institucion_id_jardin +'</td>'+
                                            
                                            '<td>'+
                                                "<a class=\"btn btn-info\" href=\"{{ route('rector.editar',"idrector") }}\">"+
                                                    '<i class="fas fa-edit"></i>'+
                                                '</a>'   +                                      
                                            '</td>'+
                                            
                                            '</tr>'
                                        
                                        $('#tablerector').append(row.replaceAll("idrector", idrector)
                                        );
                                    }
                                }
                            });

                            $('#rector_nuevo').click(function(e) {
                                e.preventDefault();
                                route_list = '{{ route('rector.nuevo') }}';
                    
                                window.location.href = route_list;
                            });
                            });

                            
                        </script>
      
    @endsection