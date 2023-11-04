@if(session('status'))
    <div class="card-panel green lighten-4 on-contrast-force-black on-contrast-force-white-text" role="alert">
        <span>
            {!! session('status') !!}
        </span>
    </div>
@endif

@if(session('error'))
    <div class="card-panel red lighten-4 on-contrast-force-black on-contrast-force-white-text" role="alert">
        <span>
            {!! session('error') !!}
        </span>
    </div>
@endif