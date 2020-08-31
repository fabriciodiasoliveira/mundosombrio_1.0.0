@extends('layouts.app')

@section('content')
<div class="col-sm-12">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
    </div><br />
    @endif
    <div class="row">
        <div class="text-left">
            <a href="{{ route('admin.perguntas.create') }}" class="btn btn-primary">Criar pergunta</a>
        </div>
        <div>
            @component('components.votacao.list', compact('perguntas'))@endcomponent
        </div>
    </div>
</div>
@endsection
