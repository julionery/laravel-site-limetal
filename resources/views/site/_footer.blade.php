<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @if( isset($configuracao->endereco)){{$configuracao->endereco}}<br/> @endif
                @if( isset($configuracao->telefone1)){{$configuracao->telefone1}}<br/> @endif
                @if( isset($configuracao->telefone2)){{$configuracao->telefone2}}<br/> @endif
                @if( isset($configuracao->descricao)){{$configuracao->descricao}}<br/> @endif
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    @if( isset($configuracao->twitter))
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    @endif
                    @if( isset($configuracao->facebook))
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    @endif
                    @if( isset($configuracao->linkedin))
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    @endif
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="#">Júlio Nery</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
