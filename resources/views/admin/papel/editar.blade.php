@extends('layouts.admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Início</a></li>
        <li><a href="{{ route('admin.papel') }}">Lista de Papéis</a></li>
        <li class="active">Editando Papel</li>
    </ol>
@endsection

@section('content')
    <div class="container">

        <div class="block-header">
            <h2 class="center">Editando Papel: {{ $registro->nome }} </h2>
        </div>

        @include('errors._check')

        <div class="panel panel-default">
            <div class="card-body card-padding">
                <form action="{{ route('admin.papel.atualizar', $registro->id) }}" method="post">
                    {{ csrf_field() }}
                    <div class="container">
                        <input type="hidden" name="_method" value="put">

                        @include('admin.papel._form')

                        <div class="panel panel-default">
                            @can('papel_editar')
                                <button class="btn btn-primary">Atualizar</button>
                            @endcan
                            <a href="{{ route('admin.papel') }}" class="btn btn-primary"
                               style="width: 100px">Voltar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection