<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormularioDuvidas;



class FormularioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'email' => 'required|email',
            'sistema' => 'required',
            'perfil' => 'required',
            'duvida' => 'required',
        ]);

        FormularioDuvidas::create($request->all());

        return redirect()->back()->with('sucesso', 'Sua dúvida foi enviada com sucesso!');
    }
}

