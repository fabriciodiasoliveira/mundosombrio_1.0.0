@extends('layouts.app')

@section('content')
<div class="col-sm-12">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
    </div><br />
    @endif
    <div class="row">
        <div>
            @component('components.jogo.list', compact('classes'))@endcomponent
        </div>
    </div>
</div>
@endsection