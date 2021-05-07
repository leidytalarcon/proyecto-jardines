<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <center>
        <h1>
            Estudiantes
        </h1>
    </center>
    <div class="container">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Acudiente</th>
                            <th>Tel</th> 
                            <th>Curso</th> 
                            
                            
                        </tr>
                    </thead>
                    
                    <tbody>

                        @foreach($estudiantes as $estudiante )
                        <tr>
                            
                            <td>{{ $estudiante["documento"]}} </td>
                            <td>{{ $estudiante["nombre"]}} </td>
                            <td>{{ $estudiante["nombre_padre"]}} </td>
                            <td>{{ $estudiante["telefono"]}} </td>
                            <td>{{ $estudiante["curso_id_curso"]}} </td>
                            
                            
                        </tr>
                       
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>