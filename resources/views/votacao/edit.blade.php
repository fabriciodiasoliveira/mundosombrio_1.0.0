@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Alterar pergunta</div>

                <div class="panel-body">
                    {{ Form::open(['method' => 'PUT', 'route' => ['admin.perguntas.update', 'id' => $pergunta->id]]) }}
                        @component('components.votacao.pergunta', compact('pergunta'))@endcomponent
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
