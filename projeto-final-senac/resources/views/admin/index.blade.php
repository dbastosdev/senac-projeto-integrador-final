@extends('admin.layouts.app')

@section('title', 'Painel')

@prepend('breadcrumb-elements')
    <a href="{{ request()->url() }}" class="breadcrumb" aria-current="page">Painel</a>
@endprepend

@section('content')
    <div class="row">
        <div class="col s12">
            <h4 style="color: rgb(125, 125, 125);">
                Painel 
            </h4>
        </div>
    </div>
@endsection
