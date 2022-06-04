<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    
    public function index()
    {
        return Empleado::all();
    }

    public function show($id){
        return Empleado::findOrFail($id);
    }


    
    public function store(Request $request){

        $empleado = $request->validate(
            [
                'nombre' => 'required|string|max:255',
                'apellido' => 'required|string|max:255',
                'user_id' => 'required|exists:users,id',
                'empresa_id' => 'required|exists:empresas,id',
                'email' => 'nullable|string|max:255',
                'telefono' => 'nullable|string|max:255',
            ]
        );
        
        $empleado = Empleado::create($empleado);
        return $empleado;
    }

    public function update(Request $request, $id){

        $request->validate(
            [
                'nombre' => 'nullable|string|max:255',
                'apellido' => 'nullable|string|max:255',
                'user_id' => 'nullable|exists:users,id',
                'empresa_id' => 'nullable|exists:empresas,id',
                'email' => 'nullable|string|max:255',
                'telefono' => 'nullable|string|max:255',
            ]
        );
        
        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());
        return $empleado;
    }

    public function destroy($id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();
        return $empleado;
    }
}
