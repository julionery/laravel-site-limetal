<?php

namespace App\Http\Controllers\Admin;

use App\Models\Servico;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ServicoController extends Controller
{

    public function index()
    {
        $registros = Servico::all();
        return view('admin.servicos.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.servicos.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        $registro = new Servico();

        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->publicar = $dados['publicar'];
        $registro->detalhes = $dados['detalhes'];
        $registro->texto = $dados['texto'];
        $registro->visualizacoes = 0;

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/servicos";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_original_".$rand."_".$data.".".$ext;
            $file->move($diretorio, $nomeArquivo);

            $nomeOldImagem = $diretorio.'/'.$nomeArquivo;
            $nomeNewImagem = $diretorio.'/'."_resize_".$rand."_".$data.".jpg";

            Image::make($nomeOldImagem)->resize(85, 85)->save($nomeNewImagem);

            $registro->imagem = $nomeNewImagem;
        }

        $registro->save();

        \Session::flash('mensagem', [
            'msg' => 'Registro criado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.servicos');
    }

    public function editar($id)
    {
        $registro = Servico::find($id);

        return view('admin.servicos.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Servico::find($id);

        $dados = $request->all();

        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->detalhes = $dados['detalhes'];
        $registro->publicar = $dados['publicar'];

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/servicos";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_original_".$rand."_".$data.".".$ext;
            $file->move($diretorio, $nomeArquivo);

            $nomeOldImagem = $diretorio.'/'.$nomeArquivo;
            $nomeNewImagem = $diretorio.'/'."_resize_".$rand."_".$data.".jpg";

            Image::make($nomeOldImagem)->resize(85, 85)->save($nomeNewImagem);

            $registro->imagem = $nomeNewImagem;
        }

        $registro->update();

        \Session::flash('mensagem', [
            'msg' => 'Registro atualizado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.servicos');
    }

    public function deletar($id)
    {
        Servico::find($id)->delete();
        \Session::flash('mensagem', [
            'msg' => 'Registro deletado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.servicos');
    }
}
