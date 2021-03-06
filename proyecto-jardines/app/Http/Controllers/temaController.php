<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Model\tema;
use App\Model\tarea;
use App\Model\curso;

use App\Model\docente;

class temaController extends BaseController

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('tema.tema_listar');

    }
    public function listar(){

        $tema = tema::all();
        return response()->json($tema, 200);
    }


    public function editar($idtema){
        $temas = tema::find($idtema);
        return view('tema.tema.editar',compact('tema')); 
    }

    public function nuevo(){
        $cursos=curso::all();
        $docentes=docente::all();
        return view('tema.tema_crear',compact('cursos','docentes'));
    }

    public function guardar(Request $request){
        
        tema::create([
            'numero'=> $request['numero'],
            'nombre' => $request['nombre'],
            'contenido' => $request['contenido'],
            'apoyo' => $request['apoyo'],
            'foro' => 1,
            'curso_docente_id_docente' => $request['id_docente']
           
          ]);
          $titulo = 'Titulo';
          $temas = tema::all();
  
          return view('tema.tema_listar',compact('titulo','temas')); 
    }

    public function actualizar(Request $request,$idtema){
        $tema = tema::find($idtema);
        $tema['nombre']=$request['nombre'];
        $tema['contenido'] =$request['contenido'];
        $tema['apoyo'] =$request['apoyo'];
        $tema['foro'] = 1;
        

        $tema->update();
        $titulo = 'Titulo';
          $temas = tema::all();
  
          return view('tema.tema_listar',compact('titulo','temas')); 
    }
}