@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h1>{{$cronica->nome}}</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Mestre - {{$mestre->name}}</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>{!! nl2br(e($cronica->resumo)) !!}</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>Fichas participantes</label>
        @component('components.jogo.listfichasvisitantenull', compact('fichasJogador', 'cronica'))@endcomponent
    </div>
</div>
<div class="row">
    <div id="postagens" class="col-md-12">
        @foreach($postagens as $postagem)
        {{-- @if($postagem->id_fichaUser>-1) --}}
        <div class="row">
            <div class="col-md-12">
                <label>@if($postagem->id_ficha==0)Mestre @else<a href="{{ route('jogo.fichas.showfichauserjogo', ['id' => $postagem->id_ficha,'id_cronica' => 0]) }}">{{$postagem->nome}}</a>@endif</label> - {{$postagem->post}}
            </div>
        </div>
        {{-- @endif --}}
        @endforeach
    </div>
</div>
@endsection