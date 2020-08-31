@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inserir classe</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.classes.store') }}">
                        {{ csrf_field() }}
                        @component('components.classes.classes')@endcomponent
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
