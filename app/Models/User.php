<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'ativo', 'usuario_inclusao','usuario_alteracao'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function papeis()
    {
        return $this->belongsTomany(Papel::class);
    }

    public function adicionaPapel($papel)
    {
        if(is_string($papel))
        {
            return $this->papeis()->save(
                Papel::where('nome','=',$papel)->firstOrFail()
            );
        }
        return $this->papeis()->save(
            Papel::where('nome','=',$papel->nome)->firstOrFail()
        );
    }

    public function removePapel($papel)
    {
        if(is_string($papel))
        {
            return $this->papeis()->detach(
                Papel::where('nome','=',$papel)->firstOrFail()
            );
        }
        return $this->papeis()->detach(
            Papel::where('nome','=',$papel->nome)->firstOrFail()
        );
    }

    public function existePapel($papel)
    {
        if(is_string($papel))
        {
            return $this->papeis->contains('nome',$papel);
        }
        return $papel->intersect($this->papeis)->count();
    }
    public function existeAdmin()
    {
        return $this->existePapel('admin');
    }
}
