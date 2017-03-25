@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            @can('usuario_listar')
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-header bgm-cyan ch-alt m-b-20">
                            <h2>Usuários</h2>
                            <a href="{{ route('admin.usuarios') }}" class="btn bgm-red btn-float waves-effect"><i
                                        class="zmdi zmdi-plus"></i>
                            </a>
                        </div>
                        <div class="card-body card-padding">
                            Cadastre usuários, e defina seu papel de acesso ao painel adiministrativo.
                        </div>
                    </div>
                </div>
            @endcan
            @can('papel_listar')
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-header bgm-bluegray m-b-20">
                            <h2>Papéis
                            </h2>
                            <a href="{{ route('admin.papel') }}" class="btn bgm-blue btn-float waves-effect"><i
                                        class="zmdi zmdi-plus"></i></a>
                        </div>
                        <div class="card-body card-padding">
                            Cadastre papéis e defina permissões de acesso ao painel adiministrativo.
                        </div>
                    </div>
                </div>
            @endcan
            @can('papel_listar')
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-header bgm-amber m-b-20">
                            <h2>Páginas
                            </h2>
                            <a href="{{ route('admin.paginas') }}" class="btn bgm-cyan btn-float waves-effect"><i
                                        class="zmdi zmdi-plus"></i></a>
                        </div>
                        <div class="card-body card-padding">
                            Edite os textos nas páginas do site (Portifolio, Serviços, Sobre, Equipe, Contato...)
                        </div>
                    </div>
                </div>
            @endcan
            @can('papel_listar')
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-header bgm-red m-b-20">
                            <h2>Cidades
                            </h2>
                            <a href="{{ route('admin.cidades') }}" class="btn bgm-black btn-float waves-effect"><i
                                        class="zmdi zmdi-plus"></i></a>
                        </div>
                        <div class="card-body card-padding">
                            Crie cidades para a adicionar no Portifolio.
                        </div>
                    </div>
                </div>
            @endcan
        </div>
        <div class="row">
            @can('papel_listar')
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-header bgm-green m-b-20">
                            <h2>Tipos
                            </h2>
                            <a href="{{ route('admin.tipos') }}" class="btn bgm-brown btn-float waves-effect"><i
                                        class="zmdi zmdi-plus"></i></a>
                        </div>
                        <div class="card-body card-padding">
                            Crie tipos para definir no portfolio.
                        </div>
                    </div>
                </div>
            @endcan
        </div>
    </div>
@endsection
