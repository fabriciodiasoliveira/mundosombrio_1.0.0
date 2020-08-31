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
            <a href="{{ route('admin.users.createadmin') }}" class="btn btn-primary">Criar usuário</a>
        </div>
        <div>
            @component('components.users.list', compact('users'))@endcomponent
        </div>
    </div>
</div>
@endsection