@extends('layouts.admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Início</a></li>
        <li><a href="{{ route('admin.paginas') }}">Lista de Páginas</a></li>
        <li class="active">Editando Página</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <div class="block-header">
            <h2>Editando Página: {{ $pagina->titulo }}</h2>
        </div>

        @include('errors._check')

        <div class="panel panel-default">
            <div class="card-body card-padding">
                <form action="{{ route('admin.paginas.atualizar', $pagina->id) }}" method="post"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="container">
                        <input type="hidden" name="_method" value="put">
                        @include('admin.paginas._form')

                        <div class="panel panel-default">
                                <button class="btn btn-primary">Atualizar</button>
                            <a href="{{ route('admin.paginas') }}" class="btn btn-primary"
                               style="width: 100px">Voltar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection