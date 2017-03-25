@extends('layouts.admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Início</a></li>
        <li><a href="{{ route('admin.portfolios') }}">Lista de Portfolios</a></li>
        <li class="active">Adicionar Portfolio</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <div class="block-header">
            <h2>Adicionar Portfolio</h2>
        </div>

        @include('errors._check')

        <div class="panel panel-default">
            <div class="card-body card-padding">
                <form action="{{ route('admin.portfolios.salvar') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="container">
                        @include('admin.portfolios._form')
                        <div class="panel panel-default">
                            @can('usuario_adicionar')
                                <button class="btn btn-primary">Adicionar</button>
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