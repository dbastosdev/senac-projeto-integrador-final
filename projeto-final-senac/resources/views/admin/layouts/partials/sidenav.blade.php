<div role="navigation" aria-label="Menu Principal">
    <ul id="slide-out" class="sidenav sidenav-fixed painel-nav collapsible col s12 m4 l3">
        
        <li class="painel-nav-header">
            <div class="row painel-logo">
                <div class="col s7">
                    <img class="responsive-img" alt="Logo UFRJ faz 100 anos" 
                        src="{{ asset('build/img/logodevtic_fundo_transparente.png') }}">
                </div>
                <div class="col s5 titulo-header-admin">
                    <span class="nav-info first-part-title">
                        UFRJ
                    </span>
                </div>
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
                    Painel
                </div>
            </a>
        </li>

        @can('view', App\Models\Usuario::class)
            <li class="{{ \Request::is('admin/usuarios*') ? 'active' : '' }}">
                <div class="collapsible-header on-contrast-force-yellow-text" aria-expanded="{{ \Request::is('admin/usuarios*') ? 'true' : 'false' }}" tabindex="0" role="button">
                    <i class="material-icons" aria-hidden="true">people</i>
                    Usuários
                </div>
                <div class="collapsible-body">
                    <div class="collection">
                        <a href="{{route('admin.usuarios.index')}}"
                           class="collection-item on-contrast-force-black @if (\Request::is('admin/usuarios')) active @endif"
                        >Listar</a>
                        <a href="{{route('admin.usuarios.create')}}"
                           class="collection-item on-contrast-force-black @if (\Request::is('admin/usuarios/create')) active @endif"
                        >Novo</a>
                    </div>
                </div>
            </li>
        @endcan
    </ul>
</div>
