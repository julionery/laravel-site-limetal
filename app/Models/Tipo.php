<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo extends Model
{
    use SoftDeletes;

    public function tipos()
    {
        return $this->hasMany('App\Models\Portfolio', 'tipo_id');
    }
}
