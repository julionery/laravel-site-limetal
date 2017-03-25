<?php

use App\Models\Permissao;
use Illuminate\Database\Seeder;

class PermissaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //usuário
        if(!Permissao::where('nome','=','usuario_listar')->count()){
            Permissao::create([
                'nome'=> 'usuario_listar',
                'descricao'=> 'Listar Usuários'
            ]);
        }else{
            $permissao = Permissao::where('nome','=','usuario_listar')->first();
            $permissao->update([
                'nome'=> 'usuario_listar',
                'descricao'=> 'Listar Usuários'
            ]);
        }

        if(!Permissao::where('nome','=','usuario_adicionar')->count()){
            Permissao::create([
                'nome'=> 'usuario_adicionar',
                'descricao'=> 'Adicionar Usuários'
            ]);
        }else{
            $permissao = Permissao::where('nome','=','usuario_adicionar')->first();
            $permissao->update([
                'nome'=> 'usuario_adicionar',
                'descricao'=> 'Adicionar Usuários'
            ]);
        }

        if(!Permissao::where('nome','=','usuario_editar')->count()){
            Permissao::create([
                'nome'=> 'usuario_editar',
                'descricao'=> 'Editar Usuários'
            ]);
        }else{
            $permissao = Permissao::where('nome','=','usuario_editar')->first();
            $permissao->update([
                'nome'=> 'usuario_editar',
                'descricao'=> 'Editar Usuários'
            ]);
        }

        if(!Permissao::where('nome','=','usuario_deletar')->count()){
            Permissao::create([
                'nome'=> 'usuario_deletar',
                'descricao'=> 'Deletar Usuários'
            ]);
        }else{
            $permissao = Permissao::where('nome','=','usuario_deletar')->first();
            $permissao->update([
                'nome'=> 'usuario_deletar',
                'descricao'=> 'Deletar Usuários'
            ]);
        }

        if(!Permissao::where('nome','=','usuario_papel')->count()){
            Permissao::create([
                'nome'=> 'usuario_papel',
                'descricao'=> 'Listar Papéis'
            ]);
        }else{
            $permissao = Permissao::where('nome','=','usuario_listar')->first();
            $permissao->update([
                'nome'=> 'usuario_listar',
                'descricao'=> 'Listar Usuários'
            ]);
        }
        if(!Permissao::where('nome','=','usuario_adicionar_papel')->count()){
            Permissao::create([
                'nome'=> 'usuario_adicionar_papel',
                'descricao'=> 'Permite adicionar Papéis aos usuários'
            ]);
        }else{
            $permissao = Permissao::where('nome','=','usuario_adicionar_papel')->first();
            $permissao->update([
                'nome'=> 'usuario_adicionar_papel',
                'descricao'=> 'Permite adicionar Papéis aos usuários'
            ]);
        }

        //Papeis
        if(!Permissao::where('nome','=','papel_listar')->count()){
            Permissao::create([
                'nome'=> 'papel_listar',
                'descricao'=> 'Listar Papéis'
            ]);
        }else{
            $permissao = Permissao::where('nome','=','papel_listar')->first();
            $permissao->update([
                'nome'=> 'papel_listar',
                'descricao'=> 'Listar Papéis'
            ]);
        }

        if(!Permissao::where('nome','=','papel_adicionar')->count()){
            Permissao::create([
                'nome'=> 'papel_adicionar',
                'descricao'=> 'Adicionar Papéis'
            ]);
        }else{
            $permissao = Permissao::where('nome','=','papel_adicionar')->first();
            $permissao->update([
                'nome'=> 'papel_adicionar',
                'descricao'=> 'Adicionar Papéis'
            ]);
        }

        if(!Permissao::where('nome','=','papel_editar')->count()){
            Permissao::create([
                'nome'=> 'papel_editar',
                'descricao'=> 'Editar Papéis'
            ]);
        }else{
            $permissao = Permissao::where('nome','=','papel_editar')->first();
            $permissao->update([
                'nome'=> 'papel_editar',
                'descricao'=> 'Editar Papéis'
            ]);
        }

        if(!Permissao::where('nome','=','papel_deletar')->count()){
            Permissao::create([
                'nome'=> 'papel_deletar',
                'descricao'=> 'Deletar Papéis'
            ]);
        }else{
            $permissao = Permissao::where('nome','=','papel_deletar')->first();
            $permissao->update([
                'nome'=> 'papel_deletar',
                'descricao'=> 'Deletar Papéis'
            ]);
        }

    }
}
