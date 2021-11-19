<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;


class CrearEmpresaController extends Controller
{
    protected function store(array $request)
    {
        return Empresa::create([
            'nombre_empresa' => $request['name_emp'],
            'nombre_corto' => $request['small_name'],
            'tipo_empresa' => $request['tipo_emp'],
            'resp_empresa' => $request['rep_emp'],
            'email_empresa' => $request['email_emp'],
            'direccion' => $request['dir_emp'],
            'telf_empresa' =>$request['telf_emp'],
            'socios' => $request['socio'],
            
        ]);
    }

}
