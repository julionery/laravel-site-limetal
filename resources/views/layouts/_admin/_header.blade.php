<ul class="h-inner">
    <li class="hi-trigger ma-trigger" data-ma-action="sidebar-open" data-ma-target="#sidebar">
        <div class="line-wrap">
            <div class="line top"></div>
            <div class="line center"></div>
            <div class="line bottom"></div>
        </div>
    </li>

    <li class="hi-logo hidden-xs">
        <a href="{{ url('/') }}" target="_blank">{{ config('app.name') }}</a>
    </li>

    <li class="pull-right">
        <ul class="hi-menu">

            <li class="dropdown">
                <a data-toggle="dropdown" href=""><i class="him-icon zmdi zmdi-more-vert"></i></a>
                <ul class="dropdown-menu dm-icon pull-right">
                    <li class="skin-switch hidden-xs">
                            <span class="ss-skin bgm-lightblue" data-ma-action="change-skin"
                                  data-ma-skin="lightblue"></span>
                        <span class="ss-skin bgm-bluegray" data-ma-action="change-skin"
                              data-ma-skin="bluegray"></span>
                        <span class="ss-skin bgm-cyan" data-ma-action="change-skin" data-ma-skin="cyan"></span>
                        <span class="ss-skin bgm-teal" data-ma-action="change-skin" data-ma-skin="teal"></span>
                        <span class="ss-skin bgm-orange" data-ma-action="change-skin" data-ma-skin="orange"></span>
                        <span class="ss-skin bgm-blue" data-ma-action="change-skin" data-sma-kin="blue"></span>
                    </li>
                    <li class="divider hidden-xs"></li>
                    <li class="hidden-xs">
                        <a data-ma-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Tela Cheia</a>
                    </li>
                    <li>
                        <a href="#"><i class="zmdi zmdi-face"></i> Perfil</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.configuracoes.editar') }}"><i class="zmdi zmdi-settings"></i> Configurações</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="zmdi zmdi-time-restore"></i> Sair
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul>