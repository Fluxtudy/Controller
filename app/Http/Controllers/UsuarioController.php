<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    private $usuarios = [
        ['id' => 1, 'nome' => 'Carlos Silva', 'email' => 'carlos@email.com'],
        ['id' => 2, 'nome' => 'Ana Souza', 'email' => 'ana@email.com'],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->usuarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json(['mensagem' => 'Usuário criado com sucesso!']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return response()->json([
            'id' => $id,
            'nome' => 'Usuário Exemplo',
            'email' => 'exemplo@email.com'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        return response()->json(['mensagem' => "Usuário com ID $id atualizado!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return response()->json(['mensagem' => "Usuário com ID $id removido!"]);
    }
}