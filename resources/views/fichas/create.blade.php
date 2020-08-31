@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inserir ficha</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.fichas.store') }}">
                        {{ csrf_field() }}
                        @component('components.fichas.fichas', compact('classe'))@endcomponent
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
