<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{

    private $pedidos = [
        ['id' => 1, 'cliente' => 'João', 'total' => 150.00, 'status' => 'Pendente'],
        ['id' => 2, 'cliente' => 'Maria', 'total' => 300.50, 'status' => 'Pago'],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->pedidos);
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
        return response()->json(['mensagem' => 'Pedido criado com sucesso!']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return response()->json(['id' => $id, 'cliente' => 'Exemplo', 'total' => 100.00, 'status' => 'Pendente']);
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
        return response()->json(['mensagem' => "Pedido com ID $id atualizado!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return response()->json(['mensagem' => "Pedido com ID $id removido!"]);
    }
}
