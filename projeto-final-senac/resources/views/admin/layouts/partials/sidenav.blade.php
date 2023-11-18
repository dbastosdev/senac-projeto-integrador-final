<div role="navigation" aria-label="Menu Principal">
    <ul id="slide-out" class="sidenav sidenav-fixed painel-nav collapsible col s12 m4 l3">
        
        <li class="painel-nav-header">
            <div class="row painel-logo center">
                CLUBE ALFAIATE
            </div>
        </li>

        <li class="hide-on-large-only hide-on-extra-large-only">
            <div class="row acessibility-icons">
                <div class="col s3 center">
                    <a href="#" role="button" tabindex="0" title="Habilitar alto contraste" onclick="window.toggleContrast()" class="waves-effect waves-light">
                        <i class="material-icons" style="display: block;">invert_colors</i>
                    </a>
                </div>
                <div class="col s3 center">
                    <a role="button" tabindex="0" class="waves-effect waves-light on-contrast-force-yellow-text"
                       title="Aumentar fonte" onclick="fonte('a');">A+</a>
                </div>
                <div class="col s3 center">
                    <a role="button" tabindex="0" class="waves-effect waves-light on-contrast-force-yellow-text"
                       title="Diminuir fonte" onclick="fonte('d');">A-</a>
                </div>
                <div class="col s3 center">
                    <a role="button" tabindex="0" class="waves-effect waves-light on-contrast-force-yellow-text"
                       title="Diminuir fonte" onclick="fonte('r');">A</a>
                </div>
            </div>
        </li>

        <li class="{{ \Request::is('admin') ? 'active' : '' }}">
            <a href="{{route('admin.index')}}" class="collection-item " style="padding: 0 !important">
                <div class="collapsible-header on-contrast-force-yellow-text">
                    <i class="material-icons" aria-hidden="true">home</i>
                    Meus agendamentos
                </div>
            </a>
        </li>
        <li class="{{ \Request::is('admin') ? 'active' : '' }}">
            <a href="{{route('account-data')}}" class="collection-item " style="padding: 0 !important">
                <div class="collapsible-header on-contrast-force-yellow-text">
                    <i class="material-icons" aria-hidden="true">home</i>
                    Dados da conta
                </div>
            </a>
        </li>
    </ul>
</div>
