<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use SoftDeletes;
    protected $table = "portfolios";

    public function tipo()
    {
        return $this->belongsTo('App\Models\Tipo', 'tipo_id');
    }

    public function cidade()
    {
        return $this->belongsTo('App\Models\Cidade', 'cidade_id');
    }

    public function galeria()
    {
        return $this->hasMany('App\Models\Galeria', 'portfolio_id');
    }

}
