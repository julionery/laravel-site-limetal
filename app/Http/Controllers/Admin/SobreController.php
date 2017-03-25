<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sobre;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class SobreController extends Controller
{

    public function index()
    {
        $registros = Sobre::all();
        return view('admin.sobre.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.sobre.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        $registro = new Sobre();

        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->publicar = $dados['publicar'];
        $registro->data = $dados['data'];

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/sobre";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_original_".$rand."_".$data.".".$ext;
            $file->move($diretorio, $nomeArquivo);

            $nomeOldImagem = $diretorio.'/'.$nomeArquivo;
            $nomeNewImagem = $diretorio.'/'."_resize_".$rand."_".$data.".jpg";

            Image::make($nomeOldImagem)->resize(200, 200)->save($nomeNewImagem);

            $registro->imagem = $nomeNewImagem;
        }

        $registro->save();

        \Session::flash('mensagem', [
            'msg' => 'Registro criado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.sobre');
    }

    public function editar($id)
    {
        $registro = Sobre::find($id);

        return view('admin.sobre.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Sobre::find($id);

        $dados = $request->all();

        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->publicar = $dados['publicar'];

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/sobre";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_original_".$rand."_".$data.".".$ext;
            $file->move($diretorio, $nomeArquivo);

            $nomeOldImagem = $diretorio.'/'.$nomeArquivo;
            $nomeNewImagem = $diretorio.'/'."_resize_".$rand."_".$data.".jpg";

            Image::make($nomeOldImagem)->resize(200, 200)->save($nomeNewImagem);

            $registro->imagem = $nomeNewImagem;
        }

        $registro->update();

        \Session::flash('mensagem', [
            'msg' => 'Registro atualizado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.sobre');
    }

    public function deletar($id)
    {
        Sobre::find($id)->delete();
        \Session::flash('mensagem', [
            'msg' => 'Registro deletado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.sobre');
    }
}
