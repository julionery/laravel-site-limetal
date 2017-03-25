@extends('layouts.admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Início</a></li>
        <li><a href="{{ route('admin.usuarios') }}">Lista de Usuários</a></li>
        <li class="active">Papéis do Usuário</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <div class="block-header">
            <h2 class="center">Lista de Papéis para - {{$usuario->name}}</h2>
        </div>

        <div class="panel panel-default">
            <div class="card-body card-padding">
                @can('usuario_adicionar_papel')
                    <div class="container">
                        <div class="row" style="padding: 20px">
                            <form action="{{ route('admin.usuario.papel.salvar', $usuario->id) }}" method="post">
                                {{ csrf_field() }}
                                <div class="col-sm-8 col-md-9">
                                    <div class="input-field">
                                        <select class="selectpicker" name="papel_id">
                                            @foreach($papeis as $papel)
                                                <option value="{{ $papel->id }}">{{$papel->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <button class="btn btn-primary">Adicionar</button>
                                    <a href="{{ route('admin.usuarios') }}" class="btn btn-primary">Voltar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                @endcan
                <div class="table-responsive">
                    <table id="data-table-basic" class="table table-striped">
                        <thead>
                        <tr>
                            <th>Papel</th>
                            <th>Descrição</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($usuario->papeis as $papel)
                            <tr>
                                <td>{{ $papel->nome }}</td>
                                <td>{{ $papel->descricao }}</td>
                                <td>
                                    @can('papel_deletar')
                                    <a class="btn red"
                                       href="javascript: if(confirm('Remover esse papel?')){ window.location.href = '{{ route('admin.usuario.papel.remover', [$usuario->id,$papel->id]) }}'}">Remover</a>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection