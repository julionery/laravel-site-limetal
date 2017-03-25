<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Papel;
use App\Models\User;

class UsuarioController extends Controller
{
    public function index()
    {
        if(!auth()->user()->can('usuario_listar', false)){
            return redirect()->route('admin.home');
        }
        $usuarios = User::all();
        return view('admin.usuarios.index', compact('usuarios'));
    }

    public function login(Request $request)
    {
        $dados = $request->all();

        if(Auth::attempt(['email' => $dados['email'], 'password' => $dados['password']])){
            \Session::flash('mensagem', [
                'msg' => 'Login realizado com sucesso!',
                'class' => 'green white-text'
            ]);
            return redirect()->route('admin.home');
        }

        \Session::flash('mensagem', [
            'msg' => 'Erro! Confira seus dados.',
            'class' => 'red white-text'
        ]);
        return redirect()->route('admin.login');
    }

    public function sair()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function adicionar()
    {
        if(!auth()->user()->can('usuario_adicionar', false)){
            return redirect()->route('admin.home');
        }
        return view('admin.usuarios.adicionar');
    }

    public function salvar(Request $request)
    {
        if(!auth()->user()->can('usuario_adicionar', false)){
           return redirect()->route('admin.home');
        }
        $dados = $request->all();
        $usuario = new User();

        $usuario->name = $dados['nome'];
        $usuario->email = $dados['email'];
        $usuario->ativo = $dados['ativo'];
        $usuario->password = bcrypt($dados['password']);
        $usuario->usuario_inclusao =  Auth::user()->name;

        $usuario->save();
        \Session::flash('mensagem', [
            'msg' => 'Registro criado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.usuarios');
    }

    public function editar($id)
    {
        if(!auth()->user()->can('usuario_editar', false)){
            return redirect()->route('admin.home');
        }

        $usuario = User::find($id);
        return view('admin.usuarios.editar', compact('usuario'));
    }

    public function atualizar(Request $request, $id)
    {
        if(!auth()->user()->can('usuario_editar', false)){
            return redirect()->route('admin.home');
        }
        $usuario = User::find($id);
        $dados = $request->all();

        $dados['name'] = $dados['nome'];
        unset($dados['nome']);
        $dados['usuario_alteracao'] =  Auth::user()->name;

        if(isset($dados['password']) && strlen($dados['password']) > 5)
        {
            $dados['password'] = bcrypt($dados['password']);
        }else{
            unset($dados['password']);
        }

        $usuario->update($dados);

        \Session::flash('mensagem', [
            'msg' => 'Registro atualizado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.usuarios');
    }

    public function deletar($id)
    {
        if(!auth()->user()->can('usuario_deletar', false)){
            return redirect()->route('admin.home');
        }

        User::find($id)->delete();
        \Session::flash('mensagem', [
            'msg' => 'Registro deletado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.usuarios');
    }

    public function papel($id)
    {
        $usuario = User::find($id);
        $papeis = Papel::all();
        return view('admin.usuarios.papel', compact('usuario', 'papeis'));
    }

    public function salvarPapel(Request $request,$id)
    {
        $usuario = User::find($id);
        $dados = $request->all();
        $papel = Papel::find($dados['papel_id']);

        if($usuario->papeis->contains('nome',$papel->nome)){
            return redirect()->back();
        }

        $usuario->adicionaPapel($papel);
        return redirect()->back();
    }

    public function removerPapel($id, $papel_id)
    {
        $usuario = User::find($id);
        $papel = Papel::find($papel_id);
        $usuario->removePapel($papel);
        return redirect()->back();
    }
}
