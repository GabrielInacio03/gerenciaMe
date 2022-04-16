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


        //search
        $search = request('search');
        if($search){
            $td = TipoDespesa::where(
                [
                    'nome',
                    '=',
                    $search
                ]
            );
            //$events = Event::where([
            //    ['titulo', 'like', '%'.$search.'%']
            //])->get();          
        }else {
            $td = TipoDespesa::all();
        }


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
        return view('/Restrito/default', compact("buscas","search"));
    }
    public function grafico()
    {
        
    }
}
