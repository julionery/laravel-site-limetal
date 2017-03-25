@extends('layouts.admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Início</a></li>
        <li class="active">Lista de Histórias do Sobre</li>
    </ol>
@endsection

@section('content')
    <div class="container">

        <div class="block-header">
            <h2 class="center">Lista de Histórias do Sobre</h2>
            <ul class="actions">
                <li>
                    @can('usuario_adicionar')
                        <div class="row">
                            <a class="btn btn-primary" href="{{ route('admin.sobre.adicionar') }}">Adicionar</a>
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
                    <th>Título</th>
                    <th>Descricao</th>
                    <th>Publicado</th>
                    <th>Imagem</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->titulo }}</td>
                        <td>{{ $registro->descricao }}</td>
                        <td>{{ $registro->publicar }}</td>
                        <td><img width="100" src="{{asset($registro->imagem)}}"></td>
                        <td>
                            <a class="btn btn-warning"
                               href="{{ route('admin.sobre.editar', $registro->id) }}">Editar</a>
                            <a class="btn btn-danger"
                               href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('admin.sobre.deletar', $registro->id) }}'}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection