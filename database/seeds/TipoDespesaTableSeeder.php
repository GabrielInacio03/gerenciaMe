<?php

use Illuminate\Database\Seeder;
use App\Models\TipoDespesa;

class TipoDespesaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoDespesa::create([
            'descricao' => 'Aluguel',            
        ]);
        TipoDespesa::create([
            'descricao' => 'Impostos Fixos',
        ]);
        TipoDespesa::create([
            'descricao' => 'Folha de Pagamento',
        ]);
        TipoDespesa::create([
            'descricao' => 'Taxas Bancárias',
        ]);
        TipoDespesa::create([
            'descricao' => 'Seguro de Vida',
        ]);
        TipoDespesa::create([
            'descricao' => 'Alimentação',
        ]);
        TipoDespesa::create([
            'descricao' => 'Energia Elétrica',
        ]);
        TipoDespesa::create([
            'descricao' => 'Aguá e Esgoto',
        ]);
        TipoDespesa::create([
            'descricao' => 'Internet',
        ]);
        TipoDespesa::create([
            'descricao' => 'Outros',
        ]);
    }
}
