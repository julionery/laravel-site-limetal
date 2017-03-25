@extends('layouts.admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Início</a></li>
        <li><a href="{{ route('admin.portfolios') }}">Lista de Portfolios</a></li>
        <li><a href="{{ route('admin.galerias', $portfolio->id) }}">Lista de Galeria</a></li>
        <li class="active">Adicionar Imagens</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <div class="block-header">
            <h2 class="center">Editando Imagem</h2>

        </div>

        @include('errors._check')

        <div class="panel panel-default">
            <div class="card-body card-padding">
                <form action="{{ route('admin.galerias.atualizar', $registro->id) }}" method="post"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="container">
                        <input type="hidden" name="_method" value="put">

                        @include('admin.galerias._form')
                        <div class="panel panel-default">
                            @can('usuario_editar')
                                <button class="btn btn-primary">Atualizar</button>
                            @endcan
                            <a href="{{ route('admin.portfolios') }}" class="btn btn-primary"
                               style="width: 100px">Voltar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection