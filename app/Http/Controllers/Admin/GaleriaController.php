<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Galeria;
use App\Models\Portfolio;

class GaleriaController extends Controller
{
    public function index($id)
    {
        $portifolio = Portfolio::find($id);
        $registros = $portifolio->galeria()->orderBy('ordem', 'asc')->get();
        return view('admin.galerias.index', compact('registros', 'portifolio'));
    }

    public function adicionar($id)
    {
        $portfolio = Portfolio::find($id);
        return view('admin.galerias.adicionar', compact('portfolio'));
    }

    public function salvar(Request $request, $id)
    {
        $portfolio = Portfolio::find($id);
        $dados = $request->all();

        if($portfolio->galeria()->count())
        {
            $galeria = $portfolio->galeria()->orderBy('ordem', 'desc')->first();
            $ordemAtual = $galeria->ordem;
        }else{
            $ordemAtual = 0;
        }

        if($request->hasFile('imagens'))
        {
            $arquivos = $request->file('imagens');
            foreach ($arquivos as $imagem)
            {
                $registro = new Galeria();

                $data = date('dmYHi');
                $rand = rand(111111, 99999);
                $diretorio = "img/portfolio/".str_slug($portfolio->titulo,'_')."/";
                $ext = $imagem->guessClientExtension();
                $nomeArquivo = "_img_".$rand."_".$data.".".$ext;
                $imagem->move($diretorio, $nomeArquivo);
                $registro->ordem = $ordemAtual +1;
                $ordemAtual++;
                $registro->portfolio_id = $portfolio->id;
                $registro->imagem = $diretorio.'/'.$nomeArquivo;
                $registro->save();
            }
        }

        \Session::flash('mensagem', [
            'msg' => 'Registro criado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.galerias', $portfolio->id);
    }

    public function editar($id)
    {
        $registro = Galeria::find($id);
        $portfolio = $registro->portfolio;

        return view('admin.galerias.editar', compact('registro', 'portfolio'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Galeria::find($id);
        $portfolio = $registro->portfolio;
        $dados = $request->all();

        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->publicado = $dados['publicado'];
        $registro->ordem = $dados['ordem'];

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/portfolio/".str_slug($portfolio->titulo,'_')."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand."_".$data.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $registro->imagem = $diretorio.'/'.$nomeArquivo;
        }

        $registro->update();

        \Session::flash('mensagem', [
            'msg' => 'Registro atualizado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.galerias', $portfolio->id);
    }

    public function deletar($id)
    {
        $galeria = Galeria::find($id);
        $portfolio = $galeria->portfolio;

        $galeria->delete();

        \Session::flash('mensagem', [
            'msg' => 'Registro deletado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.galerias', $portfolio->id);
    }
}
