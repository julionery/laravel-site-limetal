@extends('layouts.admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Início</a></li>
        <li class="active">Lista de Usuários</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <div class="block-header">
            <h2>Lista de Usuários</h2>
            <ul class="actions">
                <li>
                    @can('usuario_adicionar')
                        <div class="row">
                            <a class="btn btn-primary" href="{{ route('admin.usuarios.adicionar') }}">Adicionar</a>
                        </div>
                    @endcan
                </li>
            </ul>
        </div>
        <div class="table-responsive">
            <table id="data-table-basic" class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ativo?</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->ativo }}</td>
                        <td>
                            <div class="row">
                                @can('usuario_editar')
                                    <a class="btn btn-warning" href="{{ route('admin.usuarios.editar', $usuario->id) }}">Editar</a>
                                @endcan
                                @can('usuario_papel')
                                    <a class="btn btn-success" href="{{ route('admin.usuario.papel', $usuario->id) }}">Papel</a>
                                @endcan
                                @can('usuario_deletar')
                                    <a class="btn btn-danger"
                                       href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('admin.usuarios.deletar', $usuario->id) }}'}">Deletar</a>
                                @endcan
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
