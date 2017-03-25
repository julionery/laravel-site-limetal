@extends('layouts.admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Início</a></li>
        <li><a href="{{ route('admin.tipos') }}">Lista de Tipos</a></li>
        <li class="active">Editando Usuário</li>
    </ol>
@endsection


@section('content')
    <div class="container">
        <div class="block-header">
            <h2>Editando Tipo: {{ $registro->titulo }}</h2>
        </div>

        @include('errors._check')

        <div class="panel panel-default">

            <div class="card-body card-padding">
                <form action="{{ route('admin.tipos.atualizar', $registro->id) }}" method="post">
                    {{ csrf_field() }}
                    <div class="container">
                        <input type="hidden" name="_method" value="put">

                        @include('admin.tipos._form')

                        <div class="panel panel-default">
                            @can('usuario_editar')
                                <button class="btn btn-primary">Atualizar</button>
                            @endcan
                            <a href="{{ route('admin.tipos') }}" class="btn btn-primary"
                               style="width: 100px">Voltar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection