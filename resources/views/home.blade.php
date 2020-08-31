@extends('layouts.app')
@section('content')
    Você está logado, {{ Auth::user()->name }}. Você é {{ Auth::user()->tipo }}.
    <br><a href="admin">Admin</a>
    <br><a href="noadmin">NoAdmin</a>
@stop