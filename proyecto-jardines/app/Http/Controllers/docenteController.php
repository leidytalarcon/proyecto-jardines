<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Model\docente;
use App\Model\institucion;
use Curl\Curl;

class docenteController extends BaseController

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('docente.docente_listar');

    }
    public function listar(){
            $titulo = 'Titulo';
            $curl = new Curl();
            $curl->get('http://localhost:58972/api/docente/Listar');
                $lista_Docentes = $curl->response;
                $lista_Docentes = json_decode(json_encode($lista_Docentes), true);
            return view('docente.docente_listar',compact('titulo','lista_Docentes'));
        
    }

    public function editar($id_docente){
        $url='http://localhost:58972/api/docente/Buscar?id_docente='.$id_docente;
        $curl = new Curl();
        $curl->get($url);  
        $docente = $curl->response;
        $docente = json_decode(json_encode($docente), true);
        return view('docente.docente_editar',compact('docente')); 
    }

    public function nuevo(){
        $curl = new Curl();
        $curl->get('http://localhost:58972/api/Institucion/Listar');
        $instituciones = $curl->response;
        $instituciones = json_decode(json_encode($instituciones), true);
        return view('docente.docente_crear',compact("instituciones"));
    }

    public function guardar(Request $request){
            $docente['documento'] = $request['documento'];
            $docente['nombre']= $request['nombre'];
            $docente['correo']= $request['correo'];
            $docente['telefono']= $request['telefono'];
            $docente['direccion']=$request['direccion'];
            $docente['ciudad']=$request['ciudad'];
            $docente['username']=$request['username'];
            $docente['contrasena']=$request['contrasena'];
            $docente['institucion_id_jardin'] = $request['id_institucion'];
            $docente['rol_id_rol'] = 3;
            $url='http://localhost:58972/api/docente/Agregar';
            $curl = new Curl();
            $curl->post($url, $docente);
            $curl->get('http://localhost:58972/api/docente/Listar');
            $lista_Docentes = $curl->response;
            $lista_Docentes = json_decode(json_encode($lista_Docentes), true);
          $titulo = 'Titulo';
          return view('docente.docente_listar',compact('titulo','lista_Docentes')); 
    }

    public function actualizar(Request $request,$id_docente){
        $docente['id_docente'] = $id_docente;
        $docente['documento'] = $request['documento'];
        $docente['nombre']=$request['nombre'];
        $docente['correo'] =$request['correo'];
        $docente['telefono'] =$request['telefono'];
        $docente['direccion'] =$request['direccion'];
        $docente['ciudad'] =$request['ciudad'];         
        $docente['username' ]=$request['username'];
        $docente['contrasena'] =$request['contrasena'];
        $url='http://localhost:58972/api/docente/Editar';
        $curl = new Curl();
        $curl->post($url, $docente);  
        if($curl->error){
            return var_dump($curl->response->form);
        }else{
            $curl->get('http://localhost:58972/api/docente/Listar');
            if ($curl->error) {
            } else {
                $lista_Docentes = $curl->response;
                $lista_Docentes = json_decode(json_encode($lista_Docentes), true);
                $titulo = 'Titulo';
            }
            return view('docente.docente_listar',compact('titulo','lista_Docentes'));
        }
    }
}