<?php

namespace App\Http\Controllers;

use App\Models\Cartao;
use Illuminate\Http\Request;

class CartaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartaos = Cartao::all();

        return view('/Restrito/cartaos/index', compact('cartaos'));      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/Restrito/cartaos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();        

        $validacao = new Cartao;
        $validacao->nome = $request->nome;
        $validacao->userId = $user->id;

        $validacao->save();
   
        return redirect('/Restrito/cartaos')->with('success', 'Cartão criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cartao = Cartao::findOrFail($id);

        return view('/Restrito/cartaos/edit', compact('cartao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$user = auth()->user();  
        $validacao = Cartao::findOrFail($id);
        $validacao->nome = $request->input('nome');    

        $validacao->save();
        
        return redirect('/Restrito/cartaos')->with('success', 'Cartão editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cartao = Cartao::findOrFail($id);
        $cartao->delete();

        return redirect('/Restrito/cartaos')->with('success', 'Cartão excluido com sucesso');
    }
}
