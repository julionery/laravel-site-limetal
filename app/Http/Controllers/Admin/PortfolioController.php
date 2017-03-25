<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Cidade;
use App\Models\Portfolio;
use App\Models\Tipo;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{

    public function index()
    {
        $registros = Portfolio::all();
        return view('admin.portfolios.index', compact('registros'));
    }

    public function adicionar()
    {
        $tipos = Tipo::all();
        $cidades = Cidade::all();

        return view('admin.portfolios.adicionar', compact('tipos', 'cidades'));
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        $registro = new Portfolio();

        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->publicar = $dados['publicar'];
        $registro->endereco = $dados['endereco'];
        $registro->cep = $dados['cep'];
        $registro->bairro = $dados['bairro'];
        $registro->detalhes = $dados['detalhes'];
        $registro->visualizacoes = 0;

        if(isset($dados['mapa']) && trim($dados['mapa']) != ''){
            $registro->mapa = trim($dados['mapa']);
        }else{
            $registro->mapa = null;
        }

        $registro->cidade_id = $dados['cidade_id'];
        $registro->tipo_id = $dados['tipo_id'];

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/portfolios";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_original_".$rand."_".$data.".".$ext;
            $file->move($diretorio, $nomeArquivo);

            $nomeOldImagem = $diretorio.'/'.$nomeArquivo;
            $nomeNewImagem = $diretorio.'/'."_resize_".$rand."_".$data.".jpg";

            Image::make($nomeOldImagem)->resize(600, 455)->save($nomeNewImagem);

            $registro->imagem = $nomeNewImagem;
        }

        $registro->save();

        \Session::flash('mensagem', [
            'msg' => 'Registro criado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.portfolios');
    }

    public function editar($id)
    {
        $registro = Portfolio::find($id);

        $tipos = Tipo::all();
        $cidades = Cidade::all();

        return view('admin.portfolios.editar', compact('registro', 'tipos','cidades'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Portfolio::find($id);

        $dados = $request->all();

        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->endereco = $dados['endereco'];
        $registro->cep = $dados['cep'];
        $registro->bairro = $dados['bairro'];
        $registro->detalhes = $dados['detalhes'];
        $registro->publicar = $dados['publicar'];

        if(isset($dados['mapa']) && trim($dados['mapa']) != ''){
            $registro->mapa = trim($dados['mapa']);
        }else{
            $registro->mapa = null;
        }

        $registro->cidade_id = $dados['cidade_id'];
        $registro->tipo_id = $dados['tipo_id'];

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/portfolios";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_original_".$rand."_".$data.".".$ext;
            $file->move($diretorio, $nomeArquivo);

            $nomeOldImagem = $diretorio.'/'.$nomeArquivo;
            $nomeNewImagem = $diretorio.'/'."_resize_".$rand."_".$data.".jpg";

            Image::make($nomeOldImagem)->resize(600, 455)->save($nomeNewImagem);

            $registro->imagem = $nomeNewImagem;
        }

        $registro->update();

        \Session::flash('mensagem', [
            'msg' => 'Registro atualizado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.portfolios');
    }

    public function deletar($id)
    {
        Portfolio::find($id)->delete();
        \Session::flash('mensagem', [
            'msg' => 'Registro deletado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.portfolios');
    }
}
