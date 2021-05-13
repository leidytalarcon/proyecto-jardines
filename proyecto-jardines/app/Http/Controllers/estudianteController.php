<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Model\estudiante;
use App\Model\institucion;
use App\Model\rol;
use App\Model\curso;
use Curl\Curl;

class estudianteController extends BaseController

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function listar(){
        $titulo = 'Titulo';
        $curl = new Curl();
        $curl->get('http://localhost:58972/api/estudiante/Listar');
        $estudiantes = $curl->response;
        $estudiantes = json_decode(json_encode($estudiantes), true);
        $curl->get('http://localhost:58972/api/curso/Listar');
        $cursos = $curl->response;
        $cursos = json_decode(json_encode($cursos), true);
        var_dump($cursos);
        return view('estudiante.estudiante_listar',compact('titulo','estudiantes','cursos')); 
    }

    public function editar($id_estudiante){
        $url='http://localhost:58972/api/estudiante/Buscar?idEstudiante='.$id_estudiante;
        $curl = new Curl();
        $curl->get($url);  
        $estudiante = $curl->response;
        $estudiante = json_decode(json_encode($estudiante), true);
        return view('estudiante.estudiante_editar',compact('estudiante')); 
    }

    public function nuevo(){
        $curl = new Curl();
        $curl->get('http://localhost:58972/api/institucion/Listar');
        $instituciones = $curl->response;
        $instituciones = json_decode(json_encode($instituciones), true);
        $curl->get('http://localhost:58972/api/curso/Listar');
        $cursos = $curl->response;
        $cursos = json_decode(json_encode($cursos), true);
        $curl->get('http://localhost:58972/api/rol/Listar');
        $roles = $curl->response;
        $roles = json_decode(json_encode($roles), true);
        return view('estudiante.estudiante_crear',compact("instituciones","cursos","roles"));
    }

    public function guardar(Request $request){
        $estudiante['documento'] = $request['documento'];
        $estudiante['nombre'] = $request['nombre'];
        $estudiante['nombre_padre'] = $request['nombre_padre'];
        $estudiante['nacimiento'] = $request['nacimiento'];
        $estudiante['direccion'] =$request['direccion'];
        $estudiante['correo'] =$request['correo'];
        $estudiante['telefono'] =$request['telefono'];
        $estudiante['username'] =$request['username'];
        $estudiante['contrasena'] =$request['contrasena'];
        $estudiante['institucion_id_jardin'] =$request['id_institucion'];
        $estudiante['curso_id_curso'] =$request['id_curso'];
        $estudiante['rol_id_rol'] = 4;
        
            $url='http://localhost:58972/api/estudiante/Agregar';
            $curl = new Curl();
            $curl->post($url, $estudiante);
            $curl->get('http://localhost:58972/api/estudiante/Listar');
            $estudiantes = $curl->response;
            $estudiantes = json_decode(json_encode($estudiantes), true);
            $curl->get('http://localhost:58972/api/curso/Listar');
            $cursos = $curl->response;
            $cursos = json_decode(json_encode($cursos), true);

          $titulo = 'Titulo';
  
          return view('estudiante.estudiante_listar',compact('titulo','estudiantes','cursos')); 
    }

    public function actualizar(Request $request,$id_estudiante){
        $estudiante['id_estudiante'] = $id_estudiante;
        $estudiante['documento'] = $request['documento'];
        $estudiante['nombre']=$request['nombre'];
        $estudiante['nombre_padre'] =$request['nombre_padre'];
        $estudiante['nacimiento'] = $request['nacimiento'];
        $estudiante['direccion'] =$request['direccion'];
        $estudiante['correo'] =$request['correo'];
        $estudiante['telefono'] =$request['telefono'];
        $estudiante['username' ]=$request['username'];
        $estudiante['contrasena'] =$request['contrasena'];
        $url='http://localhost:58972/api/estudiante/Editar';
        $curl = new Curl();
        $curl->post($url, $estudiante);
        $curl->get('http://localhost:58972/api/estudiante/Listar');
        $estudiantes = $curl->response;
        $estudiantes = json_decode(json_encode($estudiantes), true);
        $titulo = 'Titulo';
        $curl->get('http://localhost:58972/api/curso/Listar');
        $cursos = $curl->response;
        $cursos = json_decode(json_encode($cursos), true);
  
          return view('estudiante.estudiante_listar',compact('titulo','estudiantes','cursos')); 
    }
}