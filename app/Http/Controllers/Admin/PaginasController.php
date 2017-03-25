<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Pagina;
use Intervention\Image\Facades\Image;

class PaginasController extends Controller
{
    public function index()
    {
        $paginas = Pagina::all();
        return view('admin.paginas.index', compact('paginas'));
    }

    public function editar($id)
    {
        $pagina = Pagina::find($id);
        return view('admin.paginas.editar', compact('pagina'));
    }

    public function atualizar(Request $request, $id)
    {
        $dados = $request->all();
        $pagina = Pagina::find($id);

        $pagina->titulo = trim($dados['titulo']);
        $pagina->descricao = trim($dados['descricao']);
        $pagina->texto = trim($dados['texto']);

        if(isset($dados['email'])){
            $pagina->email = trim($dados['email']);
        }

        if(isset($dados['mapa']) && trim($dados['mapa']) != ''){
            $pagina->mapa = trim($dados['mapa']);
        }else{
            $pagina->mapa = null;
        }

        $file = $request->file('imagem');

        if($file){
            $data = date('dmYHi');
            $rand = rand(111111, 99999);
            $diretorio = "img/paginas/".$id."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand."_".$data.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $pagina->imagem = $diretorio.'/'.$nomeArquivo;
        }

        $pagina->update();



        if ($pagina->tipo == 'servicos') {
            $diretorio = "img/home";
            $nomeOldImagem = $pagina->imagem;
            $nomeNewImagem = $diretorio . '/' . "ImagemServico.jpg";

            Image::make($nomeOldImagem)->resize(1400, 694)->save($nomeNewImagem);
        }

        if ($pagina->tipo == 'header') {
            $diretorio = "img/home";
            $nomeOldImagem = $pagina->imagem;
            $nomeNewImagem = $diretorio . '/' . "ImagemHome.jpg";

            Image::make($nomeOldImagem)->resize(1900, 1250)->save($nomeNewImagem);
        }


        \Session::flash('mensagem', [
            'msg' => 'Registro atualizado com sucesso!',
            'class' => 'green white-text'
        ]);

        return redirect()->route('admin.paginas');

    }

}
