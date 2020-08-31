@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Alterar classe</div>

                <div class="panel-body">
                    {{ Form::open(['method' => 'PUT', 'route' => ['admin.classes.update', 'id' => $classe->id]]) }}
                        @component('components.classes.classes', compact('classe'))@endcomponent
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
