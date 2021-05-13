<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Model\docente;
use App\Model\curso;
use App\Model\curso_estudiante;
use App\Model\estudiante;

use Curl\Curl;

class cursoController extends BaseController

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function listar(){
        $titulo = 'Titulo';
        $curl = new Curl();
        $curl->get('http://localhost:58972/api/curso/Listar');
        
        if ($curl->error) {
        } else {
            $cursos = $curl->response;
            $cursos = json_decode(json_encode($cursos), true);
        }

        return view('curso.curso_listar',compact('titulo','cursos')); 
    }

    public function editar($id_curso){
        $url='http://localhost:58972/api/curso/Buscar?idCurso='.$id_curso;
        $curl = new Curl();
        $curl->get($url);  
        $curso = $curl->response;
        $curso = json_decode(json_encode($curso), true);
        return view('curso.curso_editar',compact('curso')); 
    }

    public function nuevo(){
        $curl = new Curl();
        $curl->get('http://localhost:58972/api/docente/Listar');
        $docentes = $curl->response;
        $docentes = json_decode(json_encode($docentes), true);
        return view('curso.curso_crear',compact("docentes"));
    }

    public function guardar(Request $request){
            $curso['codigo'] = $request['codigo'];
            $curso['nombre'] = $request['nombre'];
            $curso['n_estudiantes'] = $request['n_estudiantes'];
            $curso['docente_id_docente'] = $request['id_docente'];
            $url='http://localhost:58972/api/curso/Agregar';
            $curl = new Curl();
            $curl->post($url, $curso);
            $curl->get('http://localhost:58972/api/curso/Listar');
            $cursos = $curl->response;
            $cursos = json_decode(json_encode($cursos), true);
          $titulo = 'Titulo';  
          return view('curso.curso_listar',compact('titulo','cursos')); 
    }

    public function actualizar(Request $request,$id_curso){
        $curso['id_curso'] = $id_curso;
        $curso['codigo'] = $request['codigo'];
        $curso['nombre']=$request['nombre'];
        $curso['n_estudiantes'] =$request['n_estudiantes'];
        $url='http://localhost:58972/api/curso/Editar';
        $curl = new Curl();
        $curl->post($url, $curso);  
        if($curl->error){
            return var_dump($curl->response->form);
        }else{
            $curl->get('http://localhost:58972/api/curso/Listar');
            if ($curl->error) {
            } else {
                $cursos = $curl->response;
                $cursos = json_decode(json_encode($cursos), true);
                $titulo = 'Titulo';
            }
        $titulo = 'Titulo';
  
          return view('curso.curso_listar',compact('titulo','cursos')); 
        }
    }

    //CURSO ESTUDIANTES

    public function estudiantes($id_curso){
        $curso = curso::find($id_curso);
        $estudiantes = $curso->estudiantes;

        return view('curso.curso_estudiantes_listar',compact('curso','estudiantes')); 
    }

    public function estudiantes_nuevo($id_curso){
        $curso = curso::find($id_curso);
        return view('curso.curso_estudiante_nuevo',compact("curso"));
    }

    public function estudiantes_buscar(Request $request){
        
        $curso = curso::find($request['idcurso']);
        
        $estudiantes = estudiante::Where('documento', 'like', '%' . $request['identificacion'] . '%')->get();
        
        return view('curso.curso_estudiante_buscar',compact('curso','estudiantes')); 

    }

    public function estudiantes_guardar($id_curso,$id_estudiante){
        curso_estudiante::create([

            'fecha_creacion' => date("Y-m-d H:i:s"),
            'curso_idcurso' => $id_curso,
            'estudiante_idestudiante' => $id_estudiante
           
          ]);
          
          $curso = curso::find($id_curso);
          $estudiantes = $curso->estudiantes;
          return view('curso.curso_estudiantes_listar',compact('curso','estudiantes')); 
    }

    public function estudiantes_eliminar($idcursoestudiante){
          $curso_estudiante = curso_estudiante::Where('idcursoestudiante',$idcursoestudiante)->First();
        
          $id_curso = $curso_estudiante->curso_idcurso;
          
          $delete = curso_estudiante::destroy($idcursoestudiante);
          
          $curso = curso::find($id_curso);
          $estudiantes = $curso->estudiantes;
          return view('curso.curso_estudiantes_listar',compact('curso','estudiantes')); 
    }
}