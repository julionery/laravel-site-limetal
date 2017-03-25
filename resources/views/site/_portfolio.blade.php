<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>{{$portfolio->titulo}}</h2>
            <p class="lead">{{$portfolio->descricao}}<br> </p>
        </div>
        <div class="row">
            @foreach($trabalhos as $trabalho)
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{ asset($trabalho->imagem) }}" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="{{ route('site.portfolios', [$trabalho->id, str_slug($trabalho->titulo,'_')]) }}">{{$trabalho->titulo}}</a> </h3>
                            <p>{{$trabalho->descricao}}</p>
                            <a class="preview" href="{{ route('site.portfolios', [$trabalho->id, str_slug($trabalho->titulo,'_')]) }}" rel="prettyPhoto"><i class="fa fa-plus"></i> Mais</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>