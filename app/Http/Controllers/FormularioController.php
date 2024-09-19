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
            'upload_link' => 'nullable|string',  
        ]);

        
        FormularioDuvidas::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'sistema' => $request->sistema,
            'perfil' => $request->perfil,
            'duvida' => $request->duvida,
            'upload_link' => $request->upload_link,  
        ]);

        return redirect()->back()->with('sucesso', 'Sua dúvida foi enviada com sucesso!');
    }
}
