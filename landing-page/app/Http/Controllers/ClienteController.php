<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController
{
    public function index()
    {
        return view('landing-page.index');
    }

    public function store(Request $request)
    {
        $cliente = Cliente::create([
            'nome' => request('nome'),
            'email' => request('email'),
            'telefone' => request('telefone')
        ]);
        $request
            ->session()
            ->flash(
                'mensagem',
                "Enviado com sucesso!!! Entraremos em contato dentro de 3 dias uteis."
            );
        return redirect('/');
    }
}