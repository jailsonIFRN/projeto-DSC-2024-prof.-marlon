<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // serve para trazer tudo no banco de dados
        return view('teste01');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // serve para trazer o formulário para o cara preencher
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //salvar os dados do formulário
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //detalhes dos registros: endereço
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //formulário
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //salvando as alterações
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //deletar
    }
}
