<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>{{$servicos->titulo}}</h2>
            <p class="lead">{{$servicos->descricao}}</p>
        </div>

        <div class="row">
            @foreach($servicosInfo as $servicoItem)
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{ asset($servicoItem->imagem) }}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">{{$servicoItem->titulo}}</h3>
                            <p>{{$servicoItem->descricao}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>