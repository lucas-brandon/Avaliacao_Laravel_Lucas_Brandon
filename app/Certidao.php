<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certidao extends Model
{
    //
    protected $table = 'certidoes';
    /*
    $table->id();
    $table->string('tipo');
    $table->string('nome1');
    $table->string('nome2');
    $table->string('data');
    $table->string('nome_tabeliao');
    */

    protected $fillable = [
        'tipo', 'nome1', 'nome2', 'data', 'nome_tabeliao',
    ];

    public function tabeliao(){
        return $this->belongsTo(Tabeliao::class);
    }
}
