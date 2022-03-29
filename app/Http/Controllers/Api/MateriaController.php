<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Materia;
class MateriaController extends Controller
{
    
public function index()
{
    //traer todos los registros
    $materia = materia::all();
    return $materia;
}

public function store(Request $request)
{
    //traer todos los registros
    $materia = new materia();
    $materia->Nombre = $request->Nombre;
    $materia->Descripcion = $request->Descripcion;
    $materia->save();

    return response()->json([
        "status" => 1,
        "msg" => "¡Registro de materia exitoso!",
    ]);
}

public function update(Request $request, $id)
    {
        $materia = materia::findOrFail($request->id);
        $materia->Nombre = $request->Nombre;
        $materia->Descripcion = $request->Descripcion;
        $materia->save();
        return $materia;
    }

    public function destroy(Request $request,$id)
    {
      
      $materia = materia::destroy($request->id);
      return $materia;
      
   }

}
