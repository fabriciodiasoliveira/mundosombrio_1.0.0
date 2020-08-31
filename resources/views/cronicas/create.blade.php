@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inserir cronica</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('cronicas.store') }}">
                        {{ csrf_field() }}
                        @component('components.cronicas.cronicas')@endcomponent
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
