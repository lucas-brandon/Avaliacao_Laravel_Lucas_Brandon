<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    //
    protected $table = 'contratos';

    protected $fillable = [
        'tipo', 'nome1', 'nome2', 'data', 'valor', 'nome_tabeliao',
    ];

    public function tabeliao(){
        return $this->belongsTo(Tabeliao::class);
    }
}
