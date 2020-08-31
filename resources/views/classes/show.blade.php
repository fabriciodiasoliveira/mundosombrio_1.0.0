@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}  
        </div><br />
        @endif
        <h1>{{$classe->nome}}</h1>
    </div>
</div>
<div class="row">
    <table class="table table-striped">
        <tr>
            <th>
                <div class="col-md-2">

                </div>
                Ficha
            </th>
            <th>
            </th>
        </tr>
        @foreach($fichas as $ficha)
        <tr>
            <td>
                <div class="col-md-2">
                </div>
                <a href="{{ route('admin.fichas.edit', ['id' => $ficha->id]) }}">{{ $ficha->nome }}</a>
            </td>
            <td>
                <a href="{{ route('admin.fichas.show', ['id' => $ficha->id]) }}" class="btn btn-primary">Ver</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('admin.fichas.create', ['id' => $classe->id]) }}" class="btn btn-primary">Adicionar ficha</a>
    </div>
</div>
@endsection