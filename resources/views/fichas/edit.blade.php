@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Alterar ficha</div>

                <div class="panel-body">
                    {{ Form::open(['method' => 'PUT', 'route' => ['admin.fichas.update', 'id' => $ficha->id]]) }}
                        @component('components.fichas.fichas', compact('ficha'))@endcomponent
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
