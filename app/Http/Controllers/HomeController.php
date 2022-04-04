<?php

namespace App\Http\Controllers;

use App\Models\TipoDespesa;
use App\Repositories\Contracts\ITipoDespesaRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public ITipoDespesaRepository $tipoDespesa;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ITipoDespesaRepository $tipoDespesa)
    {
        $this->middleware('auth');
        $this->tipoDespesa = $tipoDespesa;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {               
        $td = $this->tipoDespesa->all();   
        $tipos = [];

        if($td->count()){
            $dados_tipo = [];
            $i = 0;
            foreach($td as $valor){
                $i++;
                $dados_tipo[$i] = json_encode($valor['nome']);
                foreach($dados_tipo as $chave => $value){
                    $tipos[$chave] = $value;
                }
            }         
        }
        
        $buscas = $tipos;
    
        //dd($buscas);
        return view('/Restrito/default', compact("buscas"));
    }
    public function grafico()
    {
        
    }
}
