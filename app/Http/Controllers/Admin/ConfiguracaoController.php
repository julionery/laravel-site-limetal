<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Http\Controllers\Controller;
use App\Models\Configuracao;

class ConfiguracaoController extends Controller
{

    public function editar()
    {
        $registro = Configuracao::all()->first();
        return view('admin.configuracoes.editar', compact('registro'));
    }

    public function atualizar(Request $request)
    {
        $registro = Configuracao::all()->first();

        $dados = $request->all();

        $registro->nomeEmpresa = $dados['nomeEmpresa'];
        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->endereco = $dados['endereco'];
        $registro->telefone1 = $dados['telefone1'];
        $registro->telefone2 = $dados['telefone2'];
        $registro->email = $dados['email'];
        $registro->link = $dados['link'];
        $registro->twitter = $dados['twitter'];
        $registro->facebook = $dados['facebook'];
        $registro->linkedin = $dados['linkedin'];
        $registro->youtube = $dados['youtube'];
        $registro->textoInicialSobre = $dados['textoInicialSobre'];
        $registro->itemMenu1 = $dados['itemMenu1'];
        $registro->itemMenu2 = $dados['itemMenu2'];
        $registro->itemMenu3 = $dados['itemMenu3'];
        $registro->itemMenu4 = $dados['itemMenu4'];
        $registro->itemMenu5 = $dados['itemMenu5'];

        $registro->usuario_alteracao = Auth::user()->name;

        if(isset($dados['mapa']) && trim($dados['mapa']) != ''){
            $registro->mapa = trim($dados['mapa']);
        }else{
            $registro->mapa = null;
        }

        $registro->update();

        \Session::flash('mensagem', [
            'msg' => 'Registro atualizado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.home');
    }
}
