<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    public function portfolio()
    {
        return $this->hasMany('App\Models\Portfolio', 'cidade_id');
    }
}
