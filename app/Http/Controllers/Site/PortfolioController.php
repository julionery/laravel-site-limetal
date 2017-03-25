<?php

namespace App\Http\Controllers\Site;

use App\Models\Configuracao;
use App\Models\Pagina;
use App\Models\Portfolio;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function index($id)
    {
        $portfolio = Portfolio::find($id);
        $configuracao = Configuracao::all()->first();
        $header = Pagina::where('tipo', '=', 'header')->first();

        $galeria = $portfolio->galeria()->orderBy('ordem')->get();

        $seo = [
            'titulo'=>$portfolio->titulo,
            'descricao'=>$portfolio->descricao,
            'imagem'=>asset($portfolio->imagem),
            'url'=> route('site.portfolios', [$portfolio->id, str_slug($portfolio->titulo,'_')])
        ];

        return view ('site.portfolioInfo', compact('portfolio','direcaoImagem', 'galeria', 'seo', 'configuracao', 'header'));
    }
}
