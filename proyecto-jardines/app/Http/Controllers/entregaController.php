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
use App\Model\entrega;

class entregaController extends BaseController

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function listar(){
        $titulo = 'Titulo';
        $entregas = entrega::all();

        return view('entrega.entrega_listar',compact('titulo','entregas')); 
    }

    public function editar($identrega){
        $entrega = entrega::find($identrega);
        return view('entrega.entrega_editar',compact('entrega')); 
    }

    public function ver($identrega){
        $entrega=entrega::find($identrega);
        return view('entrega.entrega_ver',compact('entrega'));
    }
    
    public function nuevo(){
        $tareas = tarea::all();
        return view('entrega.entrega_crear',compact('tareas'));
    }
    public function actualizar2(Request $request,$identrega){
        $entrega=entrega::find($identrega);
        $entrega['entrega_est']=$request['entrega_est'];
        $entrega->update();
        $titulo = 'Titulo';
        $entregas = entrega::all();
  
        return view('entrega.entrega_listar',compact('titulo','entregas')); 
    }
    public function guardar(Request $request){
        
        entrega::create([
            'tema_numero' => $request['tema_numero'],
            'tarea_numero' => $request['tarea_numero'],
            'estudiante_nombre' => $request['estudiante_nombre'],
            'tarea_est' =>$request['tarea_est'],
            'observacion' => $request['observacion']
            
           
          ]);
          $titulo = 'Titulo';
          $entregas = entrega::all();
  
          return view('entrega.entrega_listar',compact('titulo','entregas')); 
    }

   
}