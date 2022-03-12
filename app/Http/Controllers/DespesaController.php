<?php

namespace App\Http\Controllers;

use App\Models\Despesa;
use App\Repositories\Contracts\ICartaoRepository;
use App\Repositories\Contracts\IDespesaRepository;
use Illuminate\Http\Request;

class DespesaController extends Controller
{
    public IDespesaRepository $despesa;
    public ICartaoRepository $cartao;

    public function __construct(
        IDespesaRepository $despesa,
        ICartaoRepository $cartao
    )
    {
        $this->despesa = $despesa;
        $this->cartao = $cartao;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $despesas = $this->despesa->all();

        return view('/Restrito/despesas/index', compact('despesas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartaos = $this->cartao->all();

        return view('/Restrito/despesas/create', compact('cartaos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacao = new Despesa();
        $validacao->descricao = $request->descricao;
        $validacao->valor = $request->valor;
        $validacao->cartaoId = $request->cartao_id;

        $this->despesa->store($validacao);

        return redirect('/Restrito/despesas')->with('success', 'despesa criada com sucesso');
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
        $despesa = $this->despesa->getById($id);
        $cartaos = $this->cartao->all();

        return view('/Restrito/despesas/edit', compact('despesa', 'cartaos'));
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
        $validacao = $this->despesa->getById($id);
        $validacao->descricao = $request->input('descricao');
        $validacao->valor = $request->input('valor');
        $validacao->cartaoId = $request->input('cartao_id');

        $this->despesa->update($validacao);

        return redirect('/Restrito/despesas')->with('success', 'Despesa editada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $despesa = $this->despesa->getById($id);
        $this->despesa->delete($despesa);

        return redirect('/Restrito/despesas')->with('success','Despesa excluida com sucesso');
    }
}
