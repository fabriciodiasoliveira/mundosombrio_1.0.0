@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-md-12">
        <h1>Aviso a todos</h1>
    </div>
    <div class="col-md-12">
        Se qualquer personagem descobrir que o colega é de uma classe diferente, pode ser o fim para qualquer um deles, ou o fim da crônica. 
        Procure usar os poderes de modo sutil ou façam seus ritos (caçada de sangue, uivo por fúria ou meditação por quintessência) escondido, 
        longe dos outros. A não ser que tenha certeza que o colega é seu amigo. Acima de tudo, seja convincente.
    </div>
    <div class="col-md-12">
        <h2>{{$cronica->nome}}</h2>
    </div>
    @if(Auth::user()!=null && Auth::user()->id==$cronica->id_user)
    <div class="col-md-12">
        <a class="btn btn-primary" onclick="finalizar()">Finalizar</a>
    </div>
    <div class="col-md-12">
        <h3>Aguarde os jogadores. Após iniciar a crônica, não pode entrar mais ninguém aqui.</h3>
    </div>
    <div class="col-md-12" id="inicio">
        @if($cronica->fechada==0)
        <a id="botao-inicio" class="btn btn-danger" onclick="iniciar();">Iniciar crônica</a>
        @else
        <a id="botao-inicio" class="btn btn-danger" onclick="reabrir();">Reabrir crônica</a>
        @endif
    </div>
    @endif
</div>
<div class="row">
    <div class="col-md-12">
        @if(Auth::user()!=null && isset($user))
            @if(Auth::user()->id==$user->id)
            <h3>Mestre - Você</h3>
            @else
            <h3>Mestre - {{$user->name}}</h3>
            @endif
        @else
        <h2>Mestre - {{$mestre->name}}</h2>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <b>{!! nl2br(e($cronica->resumo)) !!}</b>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <b>Fichas participantes</b>
    </div>
    <div class="col-md-12" id="fichas-participantes">
            @component('components.jogo.listfichasvisitante', compact('fichasJogador', 'cronica'))@endcomponent
    </div>
</div>
<div class="row">
    <div id="alerta" class="col-md-12 collapse">
        <div class="alert alert-danger">
            Você foi retirado da crônica.  
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-9">
        <table class="table table-striped">
            <tr>
                <th>
                    O jogo
                </th>
            </tr>
            <tr>
                <td>
                    <iframe src="{{ route('jogo.cronicas.postagens', ['id' => $cronica->id]) }}" height="100%" width="100%"></iframe> 
                </td>
            </tr>
            <tr>
                <th>
                    @if(Auth::user()->id!=$user->id)
                    -----------Bem vindo, {{$ficha->nome}}-----------
                    @endif
                </th>
            </tr>
            <tr>
                <td>
                    <form class="form-horizontal" action="{{ route('jogo.postagem.store') }}" id="my-form" method="post" onsubmit="postar();return false;">
                        {{ csrf_field() }}
                        <input type="text" id="post" class="form-control" name="post"/>
                        <input id="id_fichaUser" type="hidden" name="id_fichaUser" @if($cronica->id_user!=Auth::user()->id) value="{{$ficha->id}}" @else value="0" @endif/>
                        <input id="id_cronica" type="hidden" name="id_cronica"  value="{{$cronica->id}}"/>
                    </form>
                </td>
            </tr>
            <tr>
                <th>
                    Clique em enviar para submeter sua ação
                </th>
            </tr>
            <tr>
                <td>
                    <input id="button-cronica" type="button" class="btn btn-primary" value="Enviar" onclick="postar()"/>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-3">
        <table class="table table-striped">
            <tr>
                <th>
                    Chat
                </th>
            </tr>
            <tr>
                <td>
                    <iframe src="{{ route('jogo.cronicas.postagensxat', ['id' => $cronica->id]) }}" height="100%" width="100%"></iframe> 
                </td>
            </tr>
            <tr>
                <th>
                    Conversem aqui.
                </th>
            </tr>
            <tr>
                <td>
                    <form class="form-horizontal" action="{{ route('jogo.postagem.storexat') }}" id="my-form-xat" method="post" onsubmit="postarxat(); return false">
                        {{ csrf_field() }}
                        <input type="text" id="post-xat" class="form-control" name="texto"/>
                        <input type="hidden" name="id_cronica"  value="{{$cronica->id}}"/>
                        <input type="hidden" name="nome" value="{{ Auth::user()->name }}"/>
                    </form>
                </td>
            </tr>
            <tr>
                <th>
                    Usem esse quadro para conversar.
                </th>
            </tr>
            <tr>
                <td>
                    <input id="button-xat" type="button" class="btn btn-primary" value="Enviar" onclick="postarxat()"/>
                </td>
            </tr>
        </table>
    </div>
</div>
<script>
    
    function iniciar() {
        var url='{{ route('jogo.cronicas.iniciar', ['id' => $cronica->id]) }}';
        if(confirm('Deseja fechar a crônica para entrada de novos jogadores?')){
            fetch(url, {
            method: 'get' // opcional 
            })
                    .then(function (response) {
                    response.text()
                            .then(function (result) {
                            document.getElementById('inicio').innerHTML = '<a id="botao-inicio" class="btn btn-danger" onclick="reabrir();">Reabrir crônica</a>';
                            console.log('Request success: ', result);
                            })
                    })
                    .catch(function (err) {
                    console.error(err);
                    });
        }

    }
    function reabrir() {
        var url='{{ route('jogo.cronicas.reabrir', ['id' => $cronica->id]) }}';
        if(confirm('Deseja reabrir a crônica para entrada de novos jogadores?')){
            fetch(url, {
            method: 'get' // opcional 
            })
                    .then(function (response) {
                    response.text()
                            .then(function (result) {
                            document.getElementById('inicio').innerHTML = '<a id="botao-inicio" class="btn btn-danger" onclick="iniciar();">Iniciar crônica</a>';
                            console.log('Request success: ', result);
                            })
                    })
                    .catch(function (err) {
                    console.error(err);
                    });
        }

    }
            
    function postar() {
        var url = '{{ route('jogo.postagem.store') }}';
        var form = new FormData(document.getElementById('my-form'));
        fetch(url, {
        method: "POST",
                body: form
        }).then(function (data) {
        console.log('Request success: ', data);
        }).catch(function (error) {
        console.log('Request failure: ', error);
        });
        document.getElementById('post').value='';
        if(document.getElementById('id_fichaUser').value==-1){
            document.getElementById('id_fichaUser').value=0;
            document.getElementById('post').removeAttribute('readonly');
            document.getElementById('rolar').removeAttribute('disabled');
        }
    }
    function postarxat() {
        var url = '{{ route('jogo.postagem.storexat') }}';
        var form = new FormData(document.getElementById('my-form-xat'));
        fetch(url, {
        method: "POST",
                body: form
        }).then(function (data) {
            document.getElementById('post-xat').value='';
        console.log('Request success: ', data);
        }).catch(function (error) {
        console.log('Request failure: ', error);
        });
        
    }
    
    
    function addDado(){
        dados = document.getElementById('dados');
        valor = dados.value;
        if(valor<10){
            valor++;
            dados.value=valor;
        }
    }
    function subDado(){
        dados = document.getElementById('dados');
        valor = dados.value;
        if(valor>1){
            valor--;
            dados.value=valor;
        }
    }
    function addDificuldade(){
        dados = document.getElementById('dificuldade');
        valor = dados.value;
        if(valor<10){
            valor++;
            dados.value=valor;
        }
    }
    function subDificuldade(){
        dados = document.getElementById('dificuldade');
        valor = dados.value;
        if(valor>1){
            valor--;
            dados.value=valor;
        }
    }
     function addNecessarios(){
        dados = document.getElementById('necessarios');
        valor = dados.value;
        if(valor<10){
            valor++;
            dados.value=valor;
        }
    }
    function subNecessarios(){
        dados = document.getElementById('necessarios');
        valor = dados.value;
        if(valor>1){
            valor--;
            dados.value=valor;
        }
    }
    function rolar(num, dif){
        var sucessos=0;
        var falhas=0;
        var necessarios=document.getElementById('necessarios').value;
        document.getElementById('post').value = '';
        if(confirm("Deseja realmente rolar os dados agora?")){
            while(num>0){
                resultado = Math.floor((Math.random() * 10) + 1);
                if(resultado >= dif){
                    sucessos=sucessos+1;
                }
                if(resultado==1){
                    falhas=falhas + 1;
                }
                document.getElementById('post').value = document.getElementById('post').value + resultado;
                num--;
                if(num>0)
                    document.getElementById('post').value=document.getElementById('post').value + ' - ';
                document.getElementById('post').setAttribute("readonly", "readonly");
                document.getElementById('rolar').setAttribute("disabled", "disabled");
                document.getElementById('id_fichaUser').value=-1;
            }
            document.getElementById('post').value = 'Dificuldade: '+dif+' - Sucessos: '+(sucessos-falhas)+
                    ' - falhas críticas: '+falhas+' - Sucessos necessários: '+necessarios+' - Resultado: '
                    +document.getElementById('post').value;
            postar();
        }
    }
    function finalizar(){
        if(confirm('Deseja finalizar a crônica?'))
            window.location.href = "{{ route('cronicas.finalizar', ['id' => $cronica->id]) }}";
        else
            return false;
    }
    function retirarFicha(id){
        var url = '../../jogo/fichauser/retirarficha/'+id;
        fetch(url, {
                        method: 'get' // opcional 
                        })
                                .then(function (response) {
                                response.text()
                                        .then(function (result) {
                                        document.getElementById('fichas-participantes').innerHTML=result;
                                        console.log(result);
                                        })
                                })
                                .catch(function (err) {
                                console.error(err);
                                });
    }
    function getFichas(){
        var url = "{{ route('jogo.fichauser.get', ['id' => $cronica->id]) }}";
        fetch(url, {
                        method: 'get' // opcional 
                        })
                                .then(function (response) {
                                response.text()
                                        .then(function (result) {
                                            document.getElementById('fichas-participantes').innerHTML=result;
                                        })
                                })
                                .catch(function (err) {
                                console.error(err);
                                });
    }
    function getFinalizada(){
        var url = "{{ route('cronicas.getfinalizada', ['id' => $cronica->id]) }}";
        fetch(url, {
                        method: 'get' // opcional 
                        })
                                .then(function (response) {
                                response.text()
                                        .then(function (result) {
                                            if(result == 1){
                                            document.getElementById('post').setAttribute('disabled','disabled');
                                            document.getElementById('post-xat').setAttribute('disabled','disabled');
                                            }
                                            console.log('Finalizada = '+result);
                                        })
                                })
                                .catch(function (err) {
                                console.error(err);
                                });
    }
    function expulsar(){  
        @if(Auth::user()->id!=$user->id)
        var url = "{{ route('jogo.fichaUser.situacao', ['id' => $ficha->id]) }}";
        fetch(url, {
                        method: 'get' // opcional 
                        })
                                .then(function (response) {
                                response.text()
                                        .then(function (result) {
                                            if(result == {{ $cronica->id }}){
                                            document.getElementById('post').setAttribute('disabled','disabled');
                                            document.getElementById('post-xat').setAttribute('disabled','disabled');
                                            document.getElementById('button-cronica').setAttribute('disabled','disabled');
                                            document.getElementById('button-xat').setAttribute('disabled','disabled');
                                            document.getElementById('alerta').removeAttribute('class');
                                            document.getElementById('alerta').setAttribute('class','col-md-12');
                                            }
                                            console.log('Última cronica = '+result);
                                        })
                                })
                                .catch(function (err) {
                                console.error(err);
                                });
        @endif
        console.log('rodando');
    }
    var myTimer = setInterval( function() {
      getFinalizada();
      getFichas();
      expulsar();
    }, 5000 );
    /*window.onbeforeunload = function(){
      clearInterval(myTimer);
      return 'Are you sure you want to leave?';
    };*/
    
</script>
    
    
    @if(Auth::user()->id==$user->id)
    <div class="row">
        <div class="col-md-3">
        <table class="table table-striped">
            <tr>
                <th>Jogue os dados</th>
            </tr>
            <tr>
                <td>
                    <input id="rolar" type="button" class="btn btn-primary" value="Rolar dados" onclick="rolar(document.getElementById('dados').value, document.getElementById('dificuldade').value)"/>
                </td>
            </tr>
        </table>
        </div>
        <div class="col-md-3">
        <table class="table table-striped">
            <tr>
                <th>Número de dados de 10 lados</th>
            </tr>
            <tr>
                <td>
                    <input type="button" value="+" class="btn btn-primary" onclick="addDado()"/>
                    <input type="button" value="-" class="btn btn-primary" onclick="subDado()"/>
                </td>
            </tr>
            <tr>
                <td>
                    <input id="dados" type="text" id="dados" class="form-control" name="dados" value="1" readonly/>
                </td>
            </tr>
        </table>    
        </div>
        <div class="col-md-3">
        <table class="table table-striped">
            <tr>
                <th>Dificuldade</th>
            </tr>
            <tr>
                <td>
                    <input type="button" value="+" class="btn btn-primary" onclick="addDificuldade()"/>
                    <input type="button" value="-" class="btn btn-primary" onclick="subDificuldade()"/>
                </td>
            </tr>
            <tr>
                <td>
                    <input id="dificuldade" type="text" id="dados" class="form-control" name="dificuldade" value="7" readonly/>
                </td>
            </tr>
        </table>    
        </div>
        <div class="col-md-3">
        <table class="table table-striped">
            <tr>
                <th>Sucessos necessários</th>
            </tr>
            <tr>
                <td>
                    <input type="button" value="+" class="btn btn-primary" onclick="addNecessarios()"/>
                    <input type="button" value="-" class="btn btn-primary" onclick="subNecessarios()"/>
                </td>
            </tr>
            <tr>
                <td>
                    <input id="necessarios" type="text" id="dados" class="form-control" name="necessarios" value="3" readonly/>
                </td>
            </tr>
        </table>    
        </div>
        
    </div>
<!--    <div class="row">
        <div class="col">
            <audio src="{{ asset('music/fundo.mp3') }}" autoplay>
              O seu navegador não suporta o elemento <code>audio</code>.
            </audio>
        </div>
    </div>-->
    @endif
@endsection