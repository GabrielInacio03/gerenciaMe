<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    protected $table = 'receitas';

    protected $fillable = [
        'descricao',
        'valor',
        'cartaoId'
    ];   

    public function cartao()
    {
        return $this->belongsTo(Cartao::class, 'cartaoId');
    }  
}
