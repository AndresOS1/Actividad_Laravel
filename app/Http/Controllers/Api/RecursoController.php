<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Recurso;

class RecursoController extends Controller
{
    public function index()
{
    //traer todos los registros
    $recurso = Recurso::all();
    return $recurso;
}

public function store(Request $request)
{
    $recurso = new Recurso();
    $recurso->nombre_Recurso = $request->nombre_Recurso;
    $recurso->tipo = $request->tipo;
    $recurso->save();

    return response()->json([
        "status" => 1,
        "msg" => "¡Registro de recurso exitoso!",
    ]);
}

public function update(Request $request, $id)
    {
        $recurso = Recurso::findOrFail($request->id);
        $recurso->nombre_Recurso = $request->nombre_Recurso;
        $recurso->tipo = $request->tipo;
        $recurso->save();
        return $recurso;
    }

    public function destroy(Request $request,$id)
    {
      
      $recurso = Recurso::destroy($request->id);
      return $recurso;
      
   }
}
