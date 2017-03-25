@extends('layouts.admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Início</a></li>
        <li><a href="{{ route('admin.papel') }}">Lista de Papéis</a></li>
        <li class="active">Adicionar Papel</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <div class="block-header">
            <h2 class="center">Novo Papel</h2>
        </div>

        @include('errors._check')

        <div class="panel panel-default">
            <div class="card-body card-padding">
                <form action="{{ route('admin.papel.salvar') }}" method="post">
                    {{ csrf_field() }}
                    <div class="container">
                        @include('admin.papel._form')
                        <div class="panel panel-default">
                            @can('papel_adicionar')
                                <button class="btn btn-primary">Adicionar</button>
                            @endcan
                            <a href="{{ route('admin.papel') }}" class="btn btn-primary"
                               style="width: 100px">Voltar</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection