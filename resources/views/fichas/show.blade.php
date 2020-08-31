@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>{{$ficha->nome}}</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>
            {!! nl2br(e($ficha->resumo)) !!}
        </label>
    </div>
</div>
@endsection