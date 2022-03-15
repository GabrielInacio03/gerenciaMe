<?php

namespace App\Http\Controllers;

use App\Models\Receita;
use App\Repositories\Contracts\ICartaoRepository;
use App\Repositories\Contracts\IReceitaRepository;
use Illuminate\Http\Request;

class ReceitaController extends Controller
{
    public IReceitaRepository $receita;
    public ICartaoRepository $cartao;

    public function __construct(
        IReceitaRepository $receita,
        ICartaoRepository $cartao
    )
    {
        $this->receita = $receita;
        $this->cartao = $cartao;
    }

    public function index()
    {
        $receitas = $this->receita->all();

        return view('/Restrito/receitas/index', compact('receitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartaos = $this->cartao->all();

        return view('/Restrito/receitas/create', compact('cartaos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacao = new Receita();
        $validacao->descricao = $request->descricao;
        $validacao->valor = $request->valor;
        $validacao->cartaoId = $request->cartao_id;

        $this->receita->store($validacao);

        return redirect('/Restrito/receitas')->with('success', 'receita criada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receita = $this->receita->getById($id);
        $cartaos = $this->cartao->all();

        return view('/Restrito/receitas/edit', compact('receita', 'cartaos'));
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
        $validacao = $this->receita->getById($id);
        $validacao->descricao = $request->input('descricao');
        $validacao->valor = $request->input('valor');
        $validacao->cartaoId = $request->input('cartao_id');

        $this->receita->update($validacao);

        return redirect('/Restrito/receitas')->with('success', 'Receita editada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receita = $this->receita->getById($id);
        $this->receita->delete($receita);

        return redirect('/Restrito/receitas')->with('success','Receita excluida com sucesso');
    }
}
