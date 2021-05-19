@extends('layout')
@section('content')
    
                          <!-- CONTENIDO -->    

                          <div class="container-fluid">

                            <!-- Page Heading -->
                            <h1 class="h2 mb-2 text-gray-800">Listar Cursos</h1>
                           
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Listado de Cursos</h6>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 margin-tb">
                                        
                                        <div class="pull-right">
                                            <a class="btn btn-primary" id="curso_nuevo">Crear Curso</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="tableCurso" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nombre</th>
                                                    <th>Codigo</th>
                                                    <th>Cupo</th>
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
                        
                        <script>
                            jQuery(document).ready(function () {
                                var _t = $('input[name="_token"]').val();  //you need add a token
                                var v = $(this).val();
                                $.ajax({
                                 url:"{{ route('curso.listar') }}",
                                     method: "GET",
                                 dataType: 'JSON',
                                 data:{_t:_t, v:v},

                                 success:function(data){
                                     
                                     for(var c in data){
                                        var idcurso = data[c].id_curso;
                                        var row = '<tr>'+
                                            
                                            '<td>'+ data[c].id_curso +'</td>'+
                                            '<td>'+ data[c].nombre +'</td>'+
                                            '<td>'+ data[c].codigo +'</td>'+
                                            '<td>'+ data[c].n_estudiantes+'</td>'+
                                        
                                            '<td>'+
                                                "<a class=\"btn btn-info\" href=\"{{ route('curso.editar',"idcurso") }}\">"+
                                                    '<i class="fas fa-edit"></i>'+
                                                '</a>'   +                                      
                                            '</td>'+
                                            '<td>'+
                                                "<a class=\"btn btn-info\" href=\"{{ route('curso.estudiantes',"idcurso") }}\">Estudiantes</a>"+
                                            '</td>'+

                                            '<td>'+
                                                "<a class=\"btn btn-info\" href=\"{{ route('curso.docente',"idcurso") }}\">Docente</a>"+
                                            '</td>'+
                                            '</tr>'
                                        
                                        $('#tableCurso').append(row.replaceAll("idcurso", idcurso)
                                        );
                                    }
                                }
                            });

                            $('#curso_nuevo').click(function(e) {
                                e.preventDefault();
                                route_list = '{{ route('curso.nuevo') }}';
                    
                                window.location.href = route_list;
                            });
                            });

                            
                        </script>

                        <!-- FIN CONTENIDO -->
      
    @endsection