<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">{{ $configuracao->nomeEmpresa }}</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#recent-works">@if( isset($configuracao->itemMenu1)) {{ $configuracao->itemMenu1 }} @else Portfolio @endif</a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">@if( isset($configuracao->itemMenu1)) {{ $configuracao->itemMenu1 }} @else Serviços @endif</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">@if( isset($configuracao->itemMenu1)) {{ $configuracao->itemMenu1 }} @else Sobre @endif</a>
                </li>
                <li>
                    <a class="page-scroll" href="#team">@if( isset($configuracao->itemMenu1)) {{ $configuracao->itemMenu1 }} @else Equipe @endif</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">@if( isset($configuracao->itemMenu1)) {{ $configuracao->itemMenu1 }} @else Contato @endif</a>
                </li>
            </ul>
        </div>
    </div>
</nav>