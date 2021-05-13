<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Model\institucion;
use App\Model\rector;

class rectorController extends BaseController

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function listar(){
        $titulo = 'Titulo';
        $rector = rector::all();

        return view('rector.rector_listar',compact('titulo','rector')); 
    }

    public function editar($id_rector){
        $rector = rector::find($id_docente);
        return view('rector.rector_editar',compact('rector')); 
    }

    public function nuevo(){
        $rector = rector::all();
        return view('rector.rector_crear',compact("rector"));
    }

    public function guardar(Request $request){
        
        rector::create([

            'documento' => $request['documento'],
            'nombre' => $request['nombre'],
            'correo' => $request['correo'],
            'telefono' => $request['telefono'],
            'direccion' =>$request['direccion'],
            'ciudad' =>$request['ciudad'],
            'username' =>$request['username'],
            'contrasena' =>$request['contrasena'],
            'institucion_id_jardin'  => $request['id_institucion'],
            'rol_id_rol'=> 3
           
          ]);
          $titulo = 'Titulo';
          $rector = rector::all();
  
          return view('rector.rector_listar',compact('titulo','rector')); 
    }

    public function actualizar(Request $request,$id_rector){
        $rector = rector::find($id_rector);
        $rector['documento'] = $request['documento'];
        $rector['nombre']=$request['nombre'];
        $rector['correo'] =$request['correo'];
        $rector['telefono'] =$request['telefono'];
        $rector['direccion'] =$request['direccion'];
        $rector['ciudad'] =$request['ciudad'];         
        $rector['username' ]=$request['username'];
        $rector['contrasena'] =$request['contrasena'];

        $rector->update();
        $titulo = 'Titulo';
          $rector = rector::all();
  
          return view('rector.rector_listar',compact('titulo','rector')); 
    }
}