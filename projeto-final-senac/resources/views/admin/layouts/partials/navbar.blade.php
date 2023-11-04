<div id="top-navbar">
    <nav class="blue-grey-text text-darken-2" aria-label="Menu Superior">
        <div class="nav-wrapper">
            <div class="row">
                <div class="col s6">
                    <a role="button" tabindex="0" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                </div>
                <div class="col s6">
                    <div class="row hide-on-med-and-down">
                        <div class="col s12">
                            <ul class="right hide-on-med-and-down">
                                <li><a href="{{ route('home') }}">Site</a></li>
                                <li>
                                    <a class="profile dropdown-trigger no-autoinit" id="menu_usuario-trigger" role="button" tabindex="0" data-target="menu_usuario" aria-haspopup="true" aria-expanded="false">
                                        Olá,  {{ auth()->user()->firstName() }}  <i class="material-icons right" aria-hidden="true">arrow_drop_down</i>
                                    </a>
                                </li>

                                <ul id="menu_usuario" class="dropdown-content" aria-labelledby="menu_usuario-trigger">
                                    <li><a href="{{ route('logout') }}">Logout</a></li>
                                    <li><a href="{{ route('account') }}">Conta</a></li>
                                </ul>

                                 <li>
                                    <a role="button" tabindex="0" class="waves-effect waves-light" id="altocontraste" title="Habilitar alto contraste" accesskey="4" onclick="window.toggleContrast()">
                                        <span><i class="material-icons">invert_colors</i></span>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="waves-effect waves-light on-contrast-force-yellow-text" role="button" tabindex="0" title="Aumentar fonte" accesskey="5" onclick="fonte('a');">A+</a>
                                 </li>
                                    <li>
                                        <a class="waves-effect waves-light on-contrast-force-yellow-text" role="button" tabindex="0" title="Diminuir fonte" accesskey="7" onclick="fonte('d');">A-</a>
                                    </li>
                                 <li>
                                    <a class="waves-effect waves-light on-contrast-force-yellow-text" role="button" tabindex="0" title="Tamanho da fonte normal" accesskey="8" onclick="fonte('r');">A</a>
                                 </li>
                            </ul>
                        </div>
                    </div>
                    <div class="hide-on-large-only hide-on-extra-large-only">
                        <div class="right">
                            <a class="dropdown-trigger no-autoinit" role="button" tabindex="0" data-target="menu_usuario__mobile" id="menu_usuario__mobile-trigger" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons left" style="margin-right: 0">account_circle</i><i class="material-icons left">arrow_drop_down</i>
                            </a>
                        </div>

                        <ul id="menu_usuario__mobile" class="dropdown-content" aria-labelledby="menu_usuario__mobile-trigger">
                            <li><a href="{{ route('home') }}">Site</a></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
