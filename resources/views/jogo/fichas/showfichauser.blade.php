@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>{{$classe->nome}}</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h1>{{$fichaJogador->nome}}</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>{{$ficha->nome}}</h2>
    </div>
</div>

<div class="row">
    <div id="button" class="col-md-12">
        <a class="btn btn-primary" data-toggle="collapse" href="#resumo-ficha">Mostrar característica 
                                                                               @if($classe->id===1)do clã
                                                                               @elseif($classe->id===2)da tribo
                                                                               @elseif($classe->id===3)da tradição
                                                                               @endif</a>
    </div>
    <div id="resumo-ficha" class="col-md-12 collapse">
        <label>{!! nl2br(e($ficha->resumo)) !!}</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Histórico do personagem</h2>
    </div>
    <div class="col-md-12">
        <label>{!! nl2br(e($fichaJogador->resumo)) !!}</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Importante</h2>
    </div>
    <div class="col-md-12">
        <ul>
            <li>Leia a introdução da crônica</li>
            <li>Aguarde ponderações do mestre</li>
            <li>O mestre vai dividir os turnos (primeiramente por ordem de reciocício, e em caso de empate, no dado)</li>
            <li>Aguarde seu turno</li>
            <li>Na sua vez, poste sua ação (responda diálogos, pergunte, faça reconhecimento, etc...)</li>
            <li>O mestre vai dizer o que aconteceu, ou jogar os dados para decidir o que houve.</li>
            <li>Por favor, aqui é para nos divertir. Não irritem os colegas.</li>
        </ul>
    </div>
</div>
@if($cronicaFicha!=null)
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <th>
            <td>
                Cronica em andamento
            </td>
            <td></td>
            </th>
            <tr>
                <td>
                    {{$cronicaFicha->nome}}
                </td>
                <td>
                    @if($cronicaFicha->id_user_ficha!=Auth::user()->id)
                    <form id="entrar{{$cronicaFicha->id}}" method="POST" action="{{route('jogo.cronicas.show', ['id' => $cronicaFicha->id])}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_cronica" value="{{$cronicaFicha->id}}"/>
                        <input type="hidden" name="id_fichaUser" value="{{$fichaJogador->id}}"/>
                        <input type="hidden" name="nome" value="{{$fichaJogador->nome}}"/>
                        <input type="hidden" name="resumo" value="{{$fichaJogador->resumo}}"/>
                        <input type="hidden" name="anotacoes" value="{{$fichaJogador->anotacoes}}"/>
                        <input type="hidden" name="id_ficha" value="{{$fichaJogador->id_ficha}}"/>
                        <input class="btn btn-primary" type="submit" value="Entrar"/>
                    </form>
                    @endif
                </td>
            </tr>
        </table>
    </div>
</div>
@endif
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('jogo.fichas.showfichauserjogo', ['id' => $fichaJogador->id, 'id_cronica' => $fichaJogador->id_cronica]) }}">Detalhes da ficha</a>
    </div>
</div>

@if(!isset($active))
<div class="row">
    <div class="col-md-12">
        @component('components.cronicas.listJogador', compact('cronicasPode','fichaJogador'))@endcomponent
    </div>
</div>
@endif
@endsection