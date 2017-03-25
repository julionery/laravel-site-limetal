@extends('layouts.admin')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Início</a></li>
        <li><a href="{{ route('admin.papel') }}">Lista de Papéis</a></li>
        <li class="active">Permisões dos Papéis</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <div class="block-header">
            <h2 class="center">Lista de Permissões para {{$papel->nome}}</h2>
        </div>

        <div class="panel panel-default">
            <div class="card-body card-padding">
                @can('papel_adicionar')
                    <div class="container">
                        <div class="row" style="padding: 20px">
                            <form action="{{ route('admin.papel.permissao.salvar', $papel->id) }}" method="post">
                                {{ csrf_field() }}
                                <div class="col-sm-8 col-md-9">
                                    <div class="input-field">
                                        <select class="selectpicker" name="permissao_id">
                                            @foreach($permissoes as $permissao)
                                                <option value="{{ $permissao->id }}">{{$permissao->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <button class="btn btn-primary">Adicionar</button>
                                    <a href="{{ route('admin.papel') }}" class="btn btn-primary">Voltar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                @endcan
                <div class="table-responsive">
                    <table id="data-table-basic" class="table table-striped">
                        <thead>
                        <tr>
                            <th>Permissão</th>
                            <th>Descrição</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($papel->permissoes as $permissao)
                            <tr>
                                <td>{{ $permissao->nome }}</td>
                                <td>{{ $permissao->descricao }}</td>
                                <td>
                                    <a class="btn red"
                                       href="javascript: if(confirm('Remover essa permissão?')){ window.location.href = '{{ route('admin.papel.permissao.remover', [$papel->id,$permissao->id]) }}'}">Remover</a>
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