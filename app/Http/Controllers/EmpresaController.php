<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {
        return Empresa::all();
    }

    public function show($id){
        return Empresa::findOrFail($id);
    }

    public function store(Request $request){

        $data = $request->validate([
            'nombre' => 'required|unique:empresas',
            'email' => 'nullable|email',
            'sitio_web' => 'nullable',
        ]);

        $empresa = Empresa::create($data);
        return $empresa;

    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'nombre' => 'nullable',
            'email' => 'nullable|email',
            'sitio_web' => 'nullable',
        ]);

        $empresa = Empresa::findOrFail($id);
        $empresa->update($request->all());
        return $empresa;
    }

    public function destroy($id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->delete();
        return $empresa;
    }
}
