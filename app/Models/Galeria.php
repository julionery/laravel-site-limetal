<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galeria extends Model
{
    use SoftDeletes;

    public function portfolio()
    {
        return $this->belongsTo('App\Models\Portfolio', 'portfolio_id');
    }
}
