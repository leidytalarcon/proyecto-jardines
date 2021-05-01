<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Model\docente;
use App\Model\curso;

class cursoController extends BaseController

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function listar(){
        $titulo = 'Titulo';
        $cursos = curso::all();

        return view('curso.curso_listar',compact('titulo','cursos')); 
    }

    public function editar($id_curso){
        $cursos = curso::find($id_curso);
        return view('curso.curso_editar',compact('cursos')); 
    }

    public function nuevo(){
        $docentes = docente::all();
        return view('curso.curso_crear',compact("docentes"));
    }

    public function guardar(Request $request){
        
        curso::create([

            'codigo' => $request['codigo'],
            'nombre' => $request['nombre'],
            'n_estudiantes' => $request['n_estudiantes'],
            'docente_id_docente' => $request['id_docente']
           
          ]);
          $titulo = 'Titulo';
          $cursos = curso::all();
  
          return view('curso.curso_listar',compact('titulo','cursos')); 
    }

    public function actualizar(Request $request,$id_curso){
        $curso = curso::find($id_curso);
        $curso['codigo'] = $request['codigo'];
        $curso['nombre']=$request['nombre'];
        $curso['n_estudiantes'] =$request['n_estudiantes'];
        

        $curso->update();
        $titulo = 'Titulo';
          $cursos = curso::all();
  
          return view('curso.curso_listar',compact('titulo','cursos')); 
    }
}