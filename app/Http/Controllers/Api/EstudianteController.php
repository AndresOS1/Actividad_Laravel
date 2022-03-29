<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Estudiante;

class EstudianteController extends Controller
{


    public function index()
    {
        //traer todos los registros
        $estudiante = Estudiante::all();
        return $estudiante;
    }
    
    public function store(Request $request)
    {
        $estudiante = new Estudiante();
        $estudiante->nombre_Estudiante = $request->nombre_Estudiante;
        $estudiante->apellido_Estudiante = $request->apellido_Estudiante;
        $estudiante->direccion = $request->direccion;
        $estudiante->Telefono = $request->Telefono;
        $estudiante->tipo_doc = $request->tipo_doc;
        $estudiante->num_doc = $request->num_doc;
        $estudiante->save();
    
        return response()->json([
            "status" => 1,
            "msg" => "¡Registro de estudiante exitoso!",
        ]);
    }
    
    public function update(Request $request, $id)
        {
            $estudiante = Estudiante::findOrFail($request->id);
            $estudiante->nombre_Estudiante = $request->nombre_Estudiante;
            $estudiante->apellido_Estudiante = $request->apellido_Estudiante;
            $estudiante->direccion = $request->direccion;
            $estudiante->Telefono = $request->Telefono;
            $estudiante->tipo_doc = $request->tipo_doc;
            $estudiante->num_doc = $request->num_doc;
            $estudiante->save();
            return $estudiante;
        }
    
        public function destroy(Request $request,$id)
        {
          
          $estudiante = Estudiante::destroy($request->id);
          return $estudiante;
          
       }
}
