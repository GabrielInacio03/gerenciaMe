<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    protected $table = 'despesas';

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
