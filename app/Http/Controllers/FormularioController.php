<?php

namespace App\Http\Controllers;

use App\Models\Duvida;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function store(Request $request)
    {
        // Validação básica
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:11',
            'email' => 'required|email',
            'sistema' => 'required|string',
            'perfil' => 'required|string',
            'duvida' => 'required|string',
            'docs.*' => 'file|max:10240', // Máximo de 10MB por arquivo
        ]);

        // Processamento de arquivos
        $docs = [];
        if ($request->hasFile('docs')) {
            foreach ($request->file('docs') as $file) {
                $docs[] = $file->store('docs');
            }
        }

        // Salvando no banco de dados
        Duvida::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'sistema' => $request->sistema,
            'perfil' => $request->perfil,
            'duvida' => $request->duvida,
            'docs' => $docs
        ]);

        return redirect()->back()->with('sucesso', 'Dúvida enviada com sucesso!');
    }
    
}
