
@extends('layout')
@section('content')
<div class="container mt-10 justify-content-center">
    <div class="card shadow mb-4">
        <div class="row justify-content-center">
            <div class="col-md-15 mt" >  
                <div class="form_register">
                    <form action="{{ route('tarea.actualizar2',$tarea->idtarea) }}" method="POST" >                  
                    @csrf
                        <h6 class="m-0 font-weight-bold text-primary">Entregar Tarea # {{ $tarea['numero']}}</h6>
                    
                        <div class="card-body">
                            <label for=""class="h2 mb-2 text-gray-800">Tema n°  {{ $tema['numero']}} </label>
                              <label for=""class="col-12">NOMBRE {{ $estudiante['nombre']}} </label>

                            <div class="form-group">
                              <label for=""class="col-12">TAREA REALIZADA</label>
                              <input type="file" class="form-control col-md-15" name="tarea_est" id="tarea_est">
                            </div>

                            
                            <div class="row form-group">
                                <button type="submit" class="btn-success col-md-9 offset-2">Guardar</button>
                            </div>
                            </div>
                   </div>        
            </div>
        </div>
   </div>
</div> 
@endsection



