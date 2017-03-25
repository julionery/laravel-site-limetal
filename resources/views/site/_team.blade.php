<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">{{ $equipe->titulo }}</h2>
                <h3 class="section-subheading text-muted">{{ $equipe->descricao }}</h3>
            </div>
        </div>
        <div class="row">
            @foreach($equipeInfo as $team)
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="{{ asset($team->imagem) }}" class="img-responsive img-circle" alt="">
                    <h4>{{$team->nome}}</h4>
                    <p class="text-muted">{{$team->proficao}}</p>
                    <ul class="list-inline social-buttons">
                       @if(isset($team->twitter))
                        <li><a href="{{$team->twitter}}"><i class="fa fa-twitter"></i></a>
                        </li>
                        @endif
                           @if(isset($team->facebook))
                        <li><a href="{{$team->facebook}}"><i class="fa fa-facebook"></i></a>
                        </li>
                           @endif
                               @if(isset($team->linkedin))
                        <li><a href="{{$team->linkedin}}"><i class="fa fa-linkedin"></i></a>
                        </li>
                           @endif
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large text-muted">{{ $equipe->texto }}</p>
            </div>
        </div>
    </div>
</section>