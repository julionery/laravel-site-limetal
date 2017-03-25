@extends('layouts.admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Início</a></li>
        <li class="active">Lista de Cidades</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <div class="block-header">
        <h2 class="center">Lista de Cidades</h2>
            <ul class="actions">
                <li>
                    @can('usuario_adicionar')
                        <div class="row">
                            <a class="btn btn-primary" href="{{ route('admin.cidades.adicionar') }}">Adicionar</a>
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
                    <th>Estado</th>
                    <th>Sigla do Estado</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->nome }}</td>
                        <td>{{ $registro->estado }}</td>
                        <td>{{ $registro->sigla_estado }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.cidades.editar', $registro->id) }}">Editar</a>
                            <a class="btn btn-danger" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('admin.cidades.deletar', $registro->id) }}'}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection