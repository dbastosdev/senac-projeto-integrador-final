<div class="navbar-fixed">
	<nav class="blue darken-2" id="menu">
		<div class="content">
			<div class="nav-wrapper">
			    <a  href="{{ route('home') }}" class="brand-logo left">
					<h4>Clube Alfaiate</h4>
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
				    	<a id="ajuda" href="https://tic.ufrj.br/contato/" class="waves-effect waves-light white-text" target="_blank">
				    		Ajuda
				    		<span class="sr-only">(Abrir em nova aba)</span>
				    		<i class="material-icons right">open_in_new</i>
				    	</a>
				    </li>
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
    <li>
    	<a href="https://help-infotic.tic.ufrj.br/duvidas-sistema/IntegraSEI" target="_blank">
    		<span>
    			Ajuda
	    		<i class="material-icons" aria-hidden="true">open_in_new</i>
    		</span>
    		<span class="sr-only">(abrir em nova página)</span>
    	</a>
    </li>
</ul>
