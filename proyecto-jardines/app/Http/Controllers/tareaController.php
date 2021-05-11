<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Model\tema;
use App\Model\curso;
use App\Model\tarea;

class tareaController extends BaseController

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function listar(){
        $titulo = 'Titulo';
        $tareas = tarea::all();

        return view('tarea.tarea_listar',compact('titulo','tareas')); 
    }

    public function editar($idtarea){
        $tarea = tarea::find($idtarea);
        return view('tarea.tarea_editar',compact('tarea')); 
    }

    public function nuevo(){
        $temas = tema::all();
        return view('tarea.tarea_crear',compact('temas'));
    }

    public function guardar(Request $request){
        
        tarea::create([
            'numero' => $request['numero'],
            'nombre' => $request['nombre'],
            'contenido' => $request['contenido'],
            'tarea_doc' => $request['tarea_doc'],
            'tarea_est' =>$request['tarea_est'],
            'tema_idtema' => $request['idtema']
            
           
          ]);
          $titulo = 'Titulo';
          $tareas = tarea::all();
  
          return view('tarea.tarea_listar',compact('titulo','tareas')); 
    }

    public function actualizar(Request $request,$idtarea){
        $tarea = tarea::find($idtarea);
        $tarea['nombre']=$request['nombre'];
        $tarea['contenido'] =$request['contenido'];
        $tarea['tarea_doc'] =$request['tarea_doc'];
        $tarea['tarea_est'] =$request['tarea_est'];
        

        $tarea->update();
        $titulo = 'Titulo';
          $tareas = tarea::all();
  
          return view('tarea.tarea_listar',compact('titulo','tareas')); 
    }
}