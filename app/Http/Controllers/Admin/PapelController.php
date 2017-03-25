<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Papel;
use App\Models\Permissao;

class PapelController extends Controller
{
    public function index()
    {
        if(!auth()->user()->can('papel_listar', false)){
            return redirect()->route('admin.home');
        }
        $registros = Papel::all();
        return view('admin.papel.index', compact('registros'));
    }

    public function adicionar()
    {
        if(!auth()->user()->can('papel_adicionar', false)){
            return redirect()->route('admin.home');
        }
        return view('admin.papel.adicionar');
    }

    public function salvar(Request $request)
    {
        if(!auth()->user()->can('papel_adicionar', false)){
            return redirect()->route('admin.home');
        }

        Papel::create($request->all());

        \Session::flash('mensagem', [
            'msg' => 'Registro criado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.papel');
    }

    public function editar($id)
    {
        if(!auth()->user()->can('papel_editar', false)){
            return redirect()->route('admin.home');
        }
        if(Papel::find($id)->nome == 'admin'){
            return redirect()->route('admin.papel');
        }
        $registro = Papel::find($id);
        return view('admin.papel.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        if(!auth()->user()->can('papel_editar', false)){
            return redirect()->route('admin.home');
        }
        if(Papel::find($id)->nome == 'admin'){
            return redirect()->route('admin.papel');
        }

        Papel::find($id)->update($request->all());

        \Session::flash('mensagem', [
            'msg' => 'Registro atualizado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.papel');
    }

    public function deletar($id)
    {
        if(!auth()->user()->can('papel_deletar', false)){
            return redirect()->route('admin.home');
        }
        if(Papel::find($id)->nome == 'admin'){
            return redirect()->route('admin.papel');
        }

        Papel::find($id)->delete();
        \Session::flash('mensagem', [
            'msg' => 'Registro deletado com sucesso!',
            'class' => 'green white-text'
        ]);
        return redirect()->route('admin.papel');
    }


    public function permissao($id)
    {
        $papel = Papel::find($id);
        $permissoes = Permissao::orderBy('nome', 'desc')->get();
        return view('admin.papel.permissao', compact('papel', 'permissoes'));
    }

    public function salvarPermissao(Request $request,$id)
    {
        $papel = Papel::find($id);
        $dados = $request->all();
        $permissao = Permissao::find($dados['permissao_id']);
        $papel->adicionaPermissao($permissao);
        return redirect()->back();
    }

    public function removerPermissao($id, $permissao_id)
    {
        $papel = Papel::find($id);
        $permissao = Permissao::find($permissao_id);
        $papel->removePermissao($permissao);
        return redirect()->back();
    }


}
