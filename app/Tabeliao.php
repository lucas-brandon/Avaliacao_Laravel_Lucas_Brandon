<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabeliao extends Model
{
    //
    protected $table = 'tabelioes';

    protected $fillable = [
        'nome',
    ];

    public function certidoes(){
        return $this->hasMany(Certidao::class);
    }

    public function contratos(){
        return $this->hasMany(Contrato::class);
    }
}
