<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private $produtos = [
        ['id' => 1, 'nome' => 'Notebook', 'preco' => 5000],
        ['id' => 2, 'nome' => 'Mouse', 'preco' => 50],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->produtos);
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
        return response()->json(['mensagem' => 'Produto criado com sucesso!']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return response()->json(['id' => $id, 'nome' => 'Produto Exemplo']);
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
        return response()->json(['mensagem' => "Produto com ID $id atualizado!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return response()->json(['mensagem' => "Produto com ID $id removido!"]);
    }
}
