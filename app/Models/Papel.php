<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Papel extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'usuario_inclusao',
        'usuario_alteracao'
    ];

    public function permissoes()
    {
        return $this->belongsToMany(Permissao::class);
    }

    public function adicionaPermissao($permissao)
    {
        return $this->permissoes()->save($permissao);
    }

    public function removePermissao($permissao)
    {
        return $this->permissoes()->detach($permissao);
    }
}
