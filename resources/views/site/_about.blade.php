<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">{{$sobre->titulo}}</h2>
                <h3 class="section-subheading text-muted">{{$sobre->descricao}}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    @foreach($sobreInfo as $sobreItem)
                    <li @if($sobreItem->cont != 2) class="timeline-inverted" @endif>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="{{ asset($sobreItem->imagem) }}" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>{{$sobreItem->data}}</h4>
                                <h4 class="subheading">{{$sobreItem->titulo}}</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">{{$sobreItem->descricao}}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>@if( isset($configuracao->textoInicialSobre)) {{ $configuracao->textoInicialSobre }} @else Faça parte da nossa história! @endif</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
