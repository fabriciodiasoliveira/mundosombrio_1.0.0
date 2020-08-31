@extends('layouts.app')

@section('content')
@if(session()->get('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}  
</div><br />
@endif
@if(session()->get('error'))
<div class="alert alert-danger">
    {{ session()->get('error') }}  
</div><br />
@endif
@if(session()->get('info'))
<div class="alert alert-info">
    {{ session()->get('info') }}  
</div><br />
@endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastre-se</div>

                <div class="panel-body">
                    {{ Form::open(['method' => 'PUT', 'route' => ['admin.users.update', 'id' => $user->id]]) }}
                        @component('components.users.users', compact('user'))@endcomponent
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
