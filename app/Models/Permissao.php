<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'usuario_inclusao',
        'usuario_alteracao'
    ];

    public function papeis()
    {
        return $this->belongsToMany(Papel::class);
    }
}
