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
            <a href="{{ route('fichas.create') }}" class="btn btn-primary">Criar classe</a>
        </div>
        <div>
            @component('components.fichas.list', compact('fichas'))@endcomponent
        </div>
    </div>
</div>
@endsection