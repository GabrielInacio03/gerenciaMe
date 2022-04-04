<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cartao;
use App\Models\TipoDespesa;

class Receita extends Model
{
    protected $table = 'receitas';

    protected $fillable = [
        'descricao',
        'valor',
        'cartaoId',
        'tipo'
    ];   

    public function cartao()
    {
        return $this->belongsTo(Cartao::class, 'cartaoId');
    }  
    public function tipo()
    {
        return $this->belongsTo(TipoDespesa::class, 'tipo');
    } 
}
