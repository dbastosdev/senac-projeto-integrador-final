<div class="navbar-fixed">
	<nav style="background-color:rgb(0,86,255)" id="menu">
		<div class="content">
			<div class="nav-wrapper">
				<a  href="{{ route('home') }}" class="brand-logo left">
			    	<img class="left-align" src="{{ asset('build/img/logo.png') }}" alt="Logo Sistema" width="210" height="60"/>
				</a>
			    <a role="button" tabindex="0" data-target="nav-mobile" class="sidenav-trigger right" aria-controls="nav-mobile" aria-label="abrir ou fechar menu">
			    	<i class="material-icons">menu</i>
			    </a>
			    <ul class="right hide-on-med-and-down">
		    		@auth
		    			<li>
		    				<a href="{{ route('admin.index') }}" class="waves-effect waves-light white-text">
				    			Painel
				    		</a>
				    	</li>
			    		<li>
		    				<a href="{{ route('logout') }}" class="waves-effect waves-light white-text">
				    			Sair
					    	</a>
					    </li>
		    		@endauth
			    	@guest
				    	<li>
				    		<a href="{{ route('login') }}" class="waves-effect waves-light white-text">
				    			Acessar
				    			<i class="material-icons right white-text" aria-hidden="true">exit_to_app</i>
					    	</a>
					    </li>
			    	@endguest
				    <li>
				    	<a role="button" tabindex="0" class="waves-effect waves-light white-text" id="altocontraste" title="Habilitar alto contraste" accesskey="4" onclick="window.toggleContrast()">
				    		<span><i class="material-icons">invert_colors</i></span>
				    	</a>
				    </li>
				    <li>
				    	<a class="waves-effect waves-light white-text on-contrast-force-yellow-text" role="button" tabindex="0" title="Aumentar fonte" accesskey="5" onclick="fonte('a');">A+</a>
				    </li>
				   	<li>
				   		<a class="waves-effect waves-light white-text on-contrast-force-yellow-text" role="button" tabindex="0" title="Diminuir fonte" accesskey="7" onclick="fonte('d');">A-</a>
				   	</li>
				    <li>
				    	<a class="waves-effect waves-light white-text on-contrast-force-yellow-text" role="button" tabindex="0" title="Tamanho da fonte normal" accesskey="8" onclick="fonte('r');">A</a>
				    </li>
			    </ul>
			</div>
		</div>
	</nav>
</div>

<ul id="nav-mobile" class="sidenav">
    <li>
        <ul class="row">
            <li class="col s3">
                <a href="#" role="button" tabindex="0" title="Habilitar alto contraste" onclick="window.toggleContrast()" class="center waves-effect waves-light">
		    		<i class="material-icons">invert_colors</i>
		    	</a>
            </li>
            <li class="col s3">
                <a role="button" tabindex="0" class="center waves-effect waves-light on-contrast-force-yellow-text"
                   title="Aumentar fonte" onclick="fonte('a');">A+</a>
            </li>
            <li class="col s3">
                <a role="button" tabindex="0" class="center waves-effect waves-light on-contrast-force-yellow-text"
                   title="Diminuir fonte" onclick="fonte('d');">A-</a>
            </li>
            <li class="col s3">
                <a role="button" tabindex="0" class="center waves-effect waves-light on-contrast-force-yellow-text"
                   title="Diminuir fonte" onclick="fonte('r');">A</a>
            </li>
        </ul>
    </li>
	@auth
    	<li>
    		<a href="{{ route('admin.index') }}" class="waves-effect waves-light">Painel</a>
    	</li>
    	<li>
    		<a href="{{ route('logout') }}" class="waves-effect waves-light">Sair</a>
    	</li>
	@endauth
	@guest
    	<li><a href="{{ route('login') }}"class="waves-effect waves-light">Acessar</a></li>
	@endguest
</ul>
