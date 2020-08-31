@extends('layouts.app')

@section('content')
<div class="col-sm-12">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
    </div><br />
    @endif
    <div class="row">
        @if(isset($falha))
        <div class="col-sm-12">
            <h3>Aconteceu um erro. E-mail não enviado</h3>
        </div>
        @else
        <div class="text-left col-sm-12">
            <h1>Link do formulário de recuperação de senha enviado</h1>
        </div>
        @endif
    </div>
</div>
@endsection