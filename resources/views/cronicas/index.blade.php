@extends('layouts.app')

@section('content')
<div class="col-sm-12">
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
    <div class="row">
        <div class="col-sm-12">
            <div class="text-left">
                
                @if(Auth::user()!=null &&Auth::user()->tipo=='admin')
                @component('components.cronicas.listadministrador', compact('cronicas'))@endcomponent
                @else
                @component('components.cronicas.list', compact('cronicas'))@endcomponent
                @endif
                
            </div>
        </div>
    </div>
</div>
@endsection