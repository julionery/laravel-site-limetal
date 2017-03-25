@extends('layouts.site')

@section('content')

    <div class="container">
        <div class="row section">
            <h3 align="center">Imóvel</h3>
            <div class="divider"></div>
        </div>
        <div class="row section">
            @if($portfolio->galeria->count())
                <div class="col s12 m8">
                    <div class="row">
                        <div class="slider">
                            <ul class="slides">
                                @foreach($galeria as $imagem)

                                    @if($imagem->publicado == 'sim')
                                        <li>
                                            <img src="{{ asset($imagem->imagem) }}">
                                            <div class="caption {{$imagem->posicao_entrada}}">
                                                <h3>{{$imagem->titulo}}</h3>
                                                <h5>{{$imagem->descricao}}</h5>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="row" align="center">
                        <button onclick="sliderPrev()" class="btn blue">Anterior</button>
                        <button onclick="sliderNext()" class="btn blue">Próxima</button>
                    </div>
                </div>
            @else
                <div class="col s12 m8">
                    <img class="responsive-img" src="{{ asset($portfolio->imagem) }}">
                </div>
            @endif
            <div class="col s12 m4">
                <h4>{{$portfolio->titulo}}</h4>
                <blockquote>
                    {{$portfolio->descricao}}
                </blockquote>
                <p><b>Tipo:</b> {{$portfolio->tipo->titulo}}</p>
                <p><b>Endereço:</b> {{$portfolio->endereco}}</p>
                <p><b>Bairro:</b> {{$portfolio->bairro}}</p>

            </div>
        </div>
        <div class="row section">
            <div class="col s12 m8">
                <div class="video-container">
                    {!! $portfolio->mapa !!}
                </div>
            </div>
            <div class="col s12 m4">
                <h4>Detalhes:</h4>
                <p>{{$portfolio->detalhes}}</p>
            </div>
        </div>
    </div>
@endsection