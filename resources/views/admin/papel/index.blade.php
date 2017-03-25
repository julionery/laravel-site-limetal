@extends('layouts.admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Início</a></li>
        <li class="active">Lista de Papéis</li>
    </ol>
@endsection

@section('content')
    <div class="container">

        <div class="block-header">
            <h2>Lista de Papéis</h2>
            <ul class="actions">
                <li>
                    @can('papel_adicionar')
                        <div class="row">
                            <a class="btn btn-primary" href="{{ route('admin.papel.adicionar') }}">Adicionar</a>
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
                    <th>Descrição</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->nome }}</td>
                        <td>{{ $registro->descricao }}</td>
                        <td>
                            @can('papel_editar')
                                @if($registro->nome != "admin")
                                    <a class="btn btn-warning"
                                       href="{{ route('admin.papel.editar', $registro->id) }}">Editar</a>
                                @else
                                    <a class="btn btn-warning disabled"
                                       href="{{ route('admin.papel.editar', $registro->id) }}">Editar</a>
                                @endif
                            @endcan
                                @if($registro->nome != "admin")
                                    <a class="btn"
                                       href="{{ route('admin.papel.permissao', $registro->id) }}">Permissão</a>
                                @else
                                    <a class="btn disabled"
                                       href="{{ route('admin.papel.permissao', $registro->id) }}">Permissão</a>
                                @endif
                                @can('papel_deletar')
                                @if($registro->nome != "admin")
                                    <a class="btn btn-danger"
                                       href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('admin.papel.deletar', $registro->id) }}'}">Deletar</a>
                                @else
                                    <a class="btn btn-danger disabled"
                                       href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('admin.papel.deletar', $registro->id) }}'}">Deletar</a>
                                @endif
                            @endcan
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection