<?php

namespace App\Http\Controllers\Admin;

use App\Models\Equipe;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class EquipeController extends Controller
{

    public function index()
    {
        $registros = Equipe::all();
        return view('admin.equipe.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.equipe.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        $registro = new Equipe();

        $registro->nome = $dados['nome'];
        $registro->proficao = $dados['proficao'];
        $registro->twitter = $dados['twitter'];
        $registro->facebook = $dados['facebook'];
        $registro->publicar = $dados['publicar'];
        $registro->linkedin = $dados['linkedin'];

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/equipe";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_original_".$rand."_".$data.".".$ext;
            $file->move($diretorio, $nomeArquivo);

            $nomeOldImagem = $diretorio.'/'.$nomeArquivo;
            $nomeNewImagem = $diretorio.'/'."_resize_".$rand."_".$data.".jpg";

            Image::make($nomeOldImagem)->resize(225, 225)->save($nomeNewImagem);

            $registro->imagem = $nomeNewImagem;
        }

        $registro->save();

        \Session::flash('mensagem', [
            'msg' => 'Registro criado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.equipe');
    }

    public function editar($id)
    {
        $registro = Equipe::find($id);

        return view('admin.equipe.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Equipe::find($id);

        $dados = $request->all();

        $registro->nome = $dados['nome'];
        $registro->proficao = $dados['proficao'];
        $registro->twitter = $dados['twitter'];
        $registro->facebook = $dados['facebook'];
        $registro->publicar = $dados['publicar'];
        $registro->linkedin = $dados['linkedin'];

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/equipe";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_original_".$rand."_".$data.".".$ext;
            $file->move($diretorio, $nomeArquivo);

            $nomeOldImagem = $diretorio.'/'.$nomeArquivo;
            $nomeNewImagem = $diretorio.'/'."_resize_".$rand."_".$data.".jpg";

            Image::make($nomeOldImagem)->resize(225, 225)->save($nomeNewImagem);

            $registro->imagem = $nomeNewImagem;
        }

        $registro->update();

        \Session::flash('mensagem', [
            'msg' => 'Registro atualizado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.equipe');
    }

    public function deletar($id)
    {
        Equipe::find($id)->delete();
        \Session::flash('mensagem', [
            'msg' => 'Registro deletado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.equipe');
    }
}
