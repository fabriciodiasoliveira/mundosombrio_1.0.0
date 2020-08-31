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
<script>
var array = texto.split('\n');
$(document).ready(function(){
    $('#senhor').html(array[Math.floor((Math.random() * 100))]);
 $('#tabela-3').DataTable(
         {
                "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ crônicas",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ crônicas",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                    }
                }
            });
 $('#tabela-2').DataTable(
         {
                "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ crônicas",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ crônicas",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                    }
                }
            });
  $('#tabela-1').DataTable(
         {
                "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ fichas",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ fichas",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                    }
                }
            });

});

</script>
<div class="row">
    <div class="col-md-3">
        <label>100 coisas que farei quando me tornar o senhor do mal:</label>
    </div>
    <div class="col-md-9" id="senhor">
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <a href="textos/regras" class="btn btn-primary">Regras básicas - leia isso</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12"> 
        <div>Esse portal de diversão está em constante construção. O tempo todo vai ter melhorias</div>
    </div>
</div>
<div class="row">
    <div class="col-md-12"> 
        <div>Sejam bem vindos à Mundo Sombrio site de RPG. Vamos jogar Vampiro a Máscara, Mago, a ascensão e Lobisomem o apocalipse.</div>
    </div>
</div>
<div class="row">
    <div class="col-md-12"> 
        <div>Por enquanto, o site está em fase inicial, estou concluindo alguns detalhes, para nossa diversão.</div>
    </div>
</div>
<div class="row">
    <div class="col-md-12"> 
        <div>E já estamos admitindo jogadores. Você vai montar o seu grupo, sua ficha e rolar os seus dados de 10 faces para ações. 
            Vamos montar aventuras épicas juntos.</div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <hr>
    </div>
</div>
@if(!Auth::guest() && Auth::user()->tipo=='admin')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('admin.graphs') }}" class="btn btn-primary">Dashboard</a>
        <a href="{{ route('admin.perguntas') }}" class="btn btn-primary">Enquetes</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <hr>
    </div>
</div>
@endif
<div class="row">
    @if(isset($cronicasUser) && Auth::user()->tipo=='autor' )
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Crônicas que você mestra</div>

            <div class="panel-body">
                <a href="{{ route('cronicas.create') }}" class="btn btn-primary">Criar cronica</a>
                <a class="btn btn-primary" data-toggle="collapse" href="#cronicas">Mostrar suas Crônicas</a>
                <div id="cronicas" class="collapse">
                    <table class="table table-striped" id="tabela-2">
                        <thead>
                            <tr>
                                <th>
                                    Suas crônicas
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cronicasUser as $cronica)
                            <tr>
                                <td>{{$cronica->nome}}</td>
                                <td>
                                    @if($cronica->finalizada==0)
                                    <form id="entrar{{$cronica->id}}" method="POST" action="{{route('jogo.mestrar', ['id' => $cronica->id])}}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id_cronica" value="{{$cronica->id}}"/>
                                        <input class="btn btn-primary" type="submit" value="Mestrar"/>
                                    </form>
                                    @elseif($cronica->finalizada==1)
                                    <input class="btn btn-primary" type="button" value="Finalizada" disabled/>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Situação de suas fichas</div>

            <div class="panel-body">
                <a href="{{ route('jogo.classes') }}" class="btn btn-primary">Crie sua ficha</a>
                <a class="btn btn-primary" data-toggle="collapse" href="#fichas">Mostrar suas Fichas</a>
                <div id="fichas" class="collapse">
                    
                    <table class="table table-striped" id="tabela-1">
                        <thead>
                            <tr>
                                <th>Suas Fichas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fichasJogador as $ficha)
                            <tr>
                                <td>
                                    <div class="col-md-3">
                                        {{$ficha->nome}}
                                    </div>
                                    <div class="col-md-7">
                                        @if($ficha->id_cronica==0&&$ficha->pronto==1)
                                        <a href="{{ route('jogo.fichas.showfichauser', ['id' => $ficha->id]) }}" class="btn btn-primary">Entrar em uma crônica</a>
                                        @elseif($ficha->pronto==0)
                                        <a href="{{ route('jogo.fichas.show', ['id' => 0, 'id_fichaUser' => $ficha->id]) }}" class="btn btn-primary">Concluir montagem da ficha</a> 
                                        @elseif($ficha->id_cronica>0)
                                        <a href="{{ route('jogo.fichas.showfichauser', ['id' => $ficha->id]) }}" class="btn btn-primary">Continuar jogo</a>
                                        @endif
                                    </div>
                                    <div class="col-md-2 small">
                                        <i>{{ $ficha->classe }}</i>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @elseif(!Auth::guest() && Auth::user()->tipo=='autor')
    )    <script> window.location.href = "home";</script>
    @endif
</div>
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('cronicas.visitante') }}" class="btn btn-primary">Todas as crônicas</a><a href="{{ route('jogo.fichas') }}" class="btn btn-primary">Fichas cadastradas</a>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading"><b>Pergunta</b></div>
        <div class="panel-body">
            <div id="votos">
            {!! $votos !!}
            </div>
        </div>
    </div>
    </div>
    
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Chat</b></div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('xat.store') }}" id="my-form" method="post" onsubmit="storeXat();return false;">
                        {{ csrf_field() }}
                        <input type="text" id="post" class="form-control" name="texto"/>
                    </form>
                <input type="button" class="btn btn-primary" value="Enviar" onclick="storeXat()"/>
                <div id="xat">
                @foreach($postagens as $postagem)
                    <div class="row">
                        <div class="col-md-12">
                            <label>{{ $postagem->nome }} - </label>
                             {{ $postagem->texto }}
                             <h6><i><u>{{ $postagem->data }}</u></i></h6>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12"> 
        <div><h2>Importante</h2></div>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <ul>
            <li>RPG baseado no sistema World of Darkness, que funciona em salas de chat, persistente. 
                Pode ser jogado como fórum ou chat. Escolha a melhor forma.</li>
            <li>Cadastre-se e tenha acesso a criação de fichas para jogar ou criação de crônicas para mestrar. 
                Chame seu grupo e crie uma aventura épica.</li>
            <li>As crônicas mais interessantes vou transcrever para um dos blogs. Ou criar um blog novo, se for uma idéia
                totalmente nova. Aguardem novas notícias.</li>
            <li>Usem o chat disponível dentro da crônica para conversar entre os integrantes do grupo. 
                Não vamos poluir a crônica com causos dos colegas.</li>
            <li>Aqui não é 'Mestre vs Jogadores'. É todos juntos contando uma história. Um personagem ferido mortalmente
                não significa nada. Apenas que a emoção será maior, e ninguém sabe o que o mestre planejou. Pode ser algo 
                épico ou a solução para a crônica.</li>
            <li>A regra de ouro: não há regras. É sugerido jogar no cenário World of Darkness (mundo atual, com pinceladas 
                góticas e sombrias, com clima de fim eminente). Entre em um acordo com os jogadores e joguem como quiserem, idéias não 
                faltam na cultura popular. <b>Entrem em um acordo todos antes.</b></li>
            <li>Jogue em várias crônicas simultâneas</li>
        </ul>
        <table class="table table-striped">
            <tr>
                <th>Notícias</th>
            </tr>
            @foreach($notices as $notice)
            <tr>
                <td>
                    <div class="row">
                        <div class="col-md-12">
                            {!! nl2br(e($notice->texto)) !!}
                        </div>
                    </div>
                    @if($notice->link != '0')
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ $notice->link }}">{{ $notice->link }}</a>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12 text-right">
                             <i>Autor: {{ $notice->nome }} - {{ $notice->data }}</i>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            @if(!Auth::guest()&&Auth::user()->tipo=='admin')
                <form action="{{ route('admin.notice.store') }}" method="post">
                {{ csrf_field() }}
                    <label>Notícia</label>
                    <textarea class="form-control" id="texto" name="texto"></textarea>
                    <label>Link</label>
                    <input class="form-control" id="link" name="link" value="0"/>
                    <input class="btn btn-primary" type="submit" value="Enviar"/>
                </form>
            @endif
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>Classes disponíveis</th>
                <th>Quem você será</th>
            </tr>
            @foreach($classes as $classe)
            <tr>
                <td>
                    <a href="{{ route('descricao', ['id' => $classe->id]) }}">{{ $classe->nome }}</a>
                </td>
                <td>{{ $classe->objetivo }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped" id="tabela-3">
            <thead>
            <tr>
                <th>
                    Crônicas disponíveis para jogo
                </th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($cronicasProntas as $cronica)
            <tr>
                <td><a href="{{ route('jogo.cronicas.showuma', ['id' => $cronica->id]) }}">{{$cronica->nome}}</a></td>
                <td><i>@if($cronica->finalizada==0) em andamento @elseif($cronica->finalizada==1)finalizada @endif </i></td>
                <td><i>@if($cronica->fechada==0)aberta para novos jogadores @elseif($cronica->fechada==1)inscrições finalizadas @endif </i></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>

function troca(){
    document.getElementById('senhor').innerHTML = array[Math.floor((Math.random() * 100))];
}
function getXat(){
        var url = "{{ route('xat') }}";
        fetch(url, {
                        method: 'get' // opcional 
                        })
                                .then(function (response) {
                                response.text()
                                        .then(function (result) {
                                        document.getElementById('xat').innerHTML=result;
                                        })
                                })
                                .catch(function (err) {
                                console.error(err);
                                });
}
function storeXat(){
            var form = new FormData(document.getElementById('my-form'));
            fetch('{{ route('xat.store') }}', {
                method: 'POST',
                headers : new Headers(),
                body:form
            }).then(function (data) {
                data.text()
                        .then(function (result) {
                            console.log('rodou');
                        })
            }).catch(function (error) {
            console.log('Request failure: ', error);
            });
            document.getElementById('post').value='';
}
var senhordomal = setInterval( function() {
      troca();
    }, 20000 );
var xat = setInterval( function() {
      getXat();
    }, 3000 );
</script>

@endsection

