@extends('layouts.admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Início</a></li>
        <li><a href="{{ route('admin.portfolios') }}">Lista de Portfolios</a></li>
        <li class="active">Galeria de Imagens</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <div class="block-header">
            <h2 class="center">Galeria de Imagens</h2>
            <ul class="actions">
                <li>
                    @can('usuario_adicionar')
                        <div class="row">
                            <a class="btn blue" href="{{ route('admin.galerias.adicionar', $portifolio->id) }}">Adicionar</a>
                        </div>
                    @endcan
                </li>
            </ul>
        </div>

        <div class="table-responsive">
            <table id="data-table-basic" class="table table-striped">
                <thead>
                <tr>
                    <th>Ordem</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Publicado?</th>
                    <th>Imagem</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->ordem }}</td>
                        <td>{{ $registro->titulo }}</td>
                        <td>{{ $registro->descricao }}</td>
                        <td>{{ $registro->publicado }}</td>

                        <td><img width="100" src="{{asset($registro->imagem)}}"></td>
                        <td>
                            <a class="btn btn-warning"
                               href="{{ route('admin.galerias.editar', $registro->id) }}">Editar</a>
                            <a class="btn btn-danger"
                               href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('admin.galerias.deletar', $registro->id) }}'}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection