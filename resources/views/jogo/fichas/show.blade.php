@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h1>{{$classe->nome}}</h1>
    </div>
</div>
<script>
    @if($classe->id==2)
        var domRaca=0;
        var domAugurio=0;
        var domTribo=0;
        function criaFormRaca(){
            var lupus=`<label>Dom de raça</label>
                            <table>
                            @foreach($lupus as $valor)
                            <tr><td><input name="dom" type="radio" onclick="selecionarDomRaca(this)" value="{{ $valor->id }}"/></td><td>{{ $valor->nome }}</td></tr>
                            @endforeach
                            </table>
                            <form id="form-tribo" action="{{route('jogo.valor.update') }}" method="POST">
                                {{ csrf_field() }}
                            <input id="valorDomRaca" type="hidden" name="valor"/>
                            </form>`;
            var impuro=`<label>Dom de raça</label>
                            <table>
                            @foreach($impuro as $valor)
                            <tr><td><input name="dom" type="radio" onclick="selecionarDomRaca(this)" value="{{ $valor->id }}"/></td><td>{{ $valor->nome }}</td></tr>
                            @endforeach
                            </table>
                            <form id="form-tribo" action="{{route('jogo.valor.update') }}" method="POST">
                                {{ csrf_field() }}
                            <input id="valorDomRaca" type="hidden" name="valor"/>
                            </form>`;
            var hominideo=`<label>Dom de raça</label>
                            <table>
                            @foreach($hominideo as $valor)
                            <tr><td><input name="dom" type="radio" onclick="selecionarDomRaca(this)" value="{{ $valor->id }}"/></td><td>{{ $valor->nome }}</td></tr>
                            @endforeach
                            </table>
                            <form id="form-tribo" action="{{route('jogo.valor.update') }}" method="POST">
                                {{ csrf_field() }}
                            <input id="valorDomRaca" type="hidden" name="valor"/>
                            </form>`;
            var id=document.getElementById('raca').value;
            if(id==1){
                document.getElementById('td-raca').innerHTML=lupus;
            }
            if(id==2){
                document.getElementById('td-raca').innerHTML=impuro;
            }
            if(id==3){
                document.getElementById('td-raca').innerHTML=hominideo;
            }
            if(id==0){
                document.getElementById('td-raca').innerHTML='';
            }
        }
        function criaFormAugurio(){
            var ragabash=`<label>Dom de augúrio</label>
                            <table>
                            @foreach($ragabash as $valor)
                            <tr><td><input name="domAugurio" type="radio" onclick="selecionarDom(this)" value="{{ $valor->id }}"/></td><td>{{ $valor->nome }}</td></tr>
                            @endforeach
                            </table>
                            <form id="form-tribo" action="{{route('jogo.valor.update') }}" method="POST">
                                {{ csrf_field() }}
                            <input id="valorDom" type="hidden" name="valor"/>
                            </form>`;
            var theurge=`<label>Dom de augúrio</label>
                            <table>
                            @foreach($theurge as $valor)
                            <tr><td><input name="domAugurio" type="radio" onclick="selecionarDom(this)" value="{{ $valor->id }}"/></td><td>{{ $valor->nome }}</td></tr>
                            @endforeach
                            </table>
                            <form id="form-tribo" action="{{route('jogo.valor.update') }}" method="POST">
                                {{ csrf_field() }}
                            <input id="valorDom" type="hidden" name="valor"/>
                            </form>`;
            var galiard=`<label>Dom de augúrio</label>
                            <table>
                            @foreach($galiard as $valor)
                            <tr><td><input name="domAugurio" type="radio" onclick="selecionarDom(this)" value="{{ $valor->id }}"/></td><td>{{ $valor->nome }}</td></tr>
                            @endforeach
                            </table>
                            <form id="form-tribo" action="{{route('jogo.valor.update') }}" method="POST">
                                {{ csrf_field() }}
                            <input id="valorDom" type="hidden" name="valor"/>
                            </form>`;
            var philodox=`<label>Dom de augúrio</label>
                            <table>
                            @foreach($philodox as $valor)
                            <tr><td><input name="domAugurio" type="radio" onclick="selecionarDom(this)" value="{{ $valor->id }}"/></td><td>{{ $valor->nome }}</td></tr>
                            @endforeach
                            </table>
                            <form id="form-tribo" action="{{route('jogo.valor.update') }}" method="POST">
                                {{ csrf_field() }}
                            <input id="valorDom" type="hidden" name="valor"/>
                            </form>`;
            var ahroun=`<label>Dom de augúrio</label>
                            <table>
                            @foreach($ahroun as $valor)
                            <tr><td><input name="domAugurio" type="radio" onclick="selecionarDom(this)" value="{{ $valor->id }}"/></td><td>{{ $valor->nome }}</td></tr>
                            @endforeach
                            </table>
                            <form id="form-tribo" action="{{route('jogo.valor.update') }}" method="POST">
                                {{ csrf_field() }}
                            <input id="valorDom" type="hidden" name="valor"/>
                            </form>`;
            var id=document.getElementById('augurio').value;
            if(id==1){
                document.getElementById('td-augurio').innerHTML=ragabash;
            }
            if(id==2){
                document.getElementById('td-augurio').innerHTML=theurge;
            }
            if(id==3){
                document.getElementById('td-augurio').innerHTML=galiard;
            }
            if(id==4){
                document.getElementById('td-augurio').innerHTML=philodox;
            }
            if(id==5){
                document.getElementById('td-augurio').innerHTML=ahroun;
            }
            if(id==0){
                document.getElementById('td-augurio').innerHTML='';
            }
        }
        function selecionarDom(radio){
            document.getElementById('valorDom').value=radio.value;
            domAugurio=radio.value;
        }
        function selecionarDomRaca(radio){
            document.getElementById('valorDomRaca').value=radio.value;
            domRaca=radio.value;
        }
        function teste(){
            var classe = {{ $ficha->id_classe }};
            var raca=0;
            var augurio=0;

            if (classe == 2){
                try {
                    raca = document.getElementById('valorDomRaca');
                    augurio = document.getElementById('valorDom');
                    console.log('Dom de raca: '+raca+' dom de augúrio: '+augurio);
                }
                catch(e){
                    raca=0;
                    augurio=0;
                    console.log('Deu pau');
                }
            }
        }
        @endif
    function concluir() {
        var classe = {{ $ficha->id_classe }};
        var resumo = document.getElementById('resumo').value;
        var nome = document.getElementById('nome').value;
        var natureza = document.getElementById('natureza').value
        var comportamento = document.getElementById('comportamento').value
        
        if(nome==''){
            alert('Preencha o nome do personagem.');
        }
        else if(resumo==''){
            alert('Preencha o resumo do personagem.');
        }
        else if(comportamento==''){
            alert('Preencha o comportamento do personagem.');
        }
        else if(natureza==''){
            alert('Preencha a natureza do personagem.');
        }
        else if(classe == 2){
            if(domAugurio==0 || domRaca==0 || domTribo==0){
                alert('Preencha dons de tribo, raça e augúrio do lobisomem.');
            }
            else{
                document.getElementById('resumo').value = document.getElementById('resumo').value+'\n✺    ✺    ✺\n';
                document.getElementById('resumo').value = document.getElementById('resumo').value+'Comportamento: ';
                document.getElementById('resumo').value = document.getElementById('resumo').value+comportamento+'\n';
                document.getElementById('resumo').value = document.getElementById('resumo').value+'Natureza: ';
                document.getElementById('resumo').value = document.getElementById('resumo').value+natureza;
                document.getElementById('resumo').value = document.getElementById('resumo').value+'\n✺    ✺    ✺';
                updateFicha();
                fetch('../../../../jogo/fichas/atualizardom/'+domRaca+'/'+domAugurio+'/'+domTribo, {
                method: 'get' // opcional 
                })
                    .then(function (response) {
                        response.text()
                                .then(function (result) {
                                    //window.location.href = "{{ route('jogo.fichas.concluir', ['id' => $fichaUser->id]) }}";
                                    document.getElementById('formficha').submit();
                                    console.log('Request success: ', result);
                                })
                    })
                    .catch(function (err) {
                        console.error(err);
                    });

            }
        }
        else if(classe==1 || classe==3){
            document.getElementById('resumo').value = document.getElementById('resumo').value+'\n✺    ✺    ✺\n';
            document.getElementById('resumo').value = document.getElementById('resumo').value+'Comportamento: ';
            document.getElementById('resumo').value = document.getElementById('resumo').value+comportamento+'\n';
            document.getElementById('resumo').value = document.getElementById('resumo').value+'Natureza: ';
            document.getElementById('resumo').value = document.getElementById('resumo').value+natureza;
            document.getElementById('resumo').value = document.getElementById('resumo').value+'\n✺    ✺    ✺';
            updateFicha();
            document.getElementById('formficha').submit();
        }
    }
    function updateFicha() {
        var url = '{{ route('jogo.fichauser.update') }}';
        var form = new FormData(document.getElementById('formficha'));
        fetch(url, {
            method: "POST",
            body: form
        }).then(function (data) {
            console.log('Request success: ', data);
        }).catch(function (error) {
            console.log('Request failure: ', error);
        });
    }


    function add(id) {
        var nome = document.getElementById('nome-' + id).value;
        var url = '{{route('jogo.valor.update') }}';
        var value = document.getElementById('valor-' + id).value;
        var bonus = document.getElementById('bonus').innerHTML;
        var id_ficha = document.getElementById('id_ficha-' + id).value;
        document.getElementById('sinal-' + id).value = '+';
        if(value==3&&id_ficha!=0){
            console.log('chegou o limite do poder');
        }
        
        else if (((nome == 'Arete'
                && value < 4)||(value < 5 && nome!='Arete')
                || ((nome == 'Humanidade'
                || nome == 'Força de Vontade'
                || nome == 'Gnose'
                || nome == 'Fúria')
                && value < 10))&& bonus > 0) {
            
            value++;
            document.getElementById('valor-' + id).value = value;
            var form = new FormData(document.getElementById('form-' + id));
            var response = fetch(url, {
                method: "POST",
                body: form
            }).then(function (data) {
            data.text()
            .then(function (result) {
            var html = result.split('%$');
            document.getElementById('bonus').innerHTML=html[1];
            document.getElementById('bonus').innerHTML=html[1];
            document.getElementById('bold-' + id).innerHTML = html[0];
            console.log('Request success: ', result);
            })
            }).catch(function (error) {
            console.log('Request failure: ', error);
            });
        }
        
    }
    function testaBonus(){
        botao = document.getElementById('button');
        var bonus = document.getElementById('bonus').innerHTML;
        if (bonus <= 0) {
            botao.removeAttribute("disabled");
        }
        else{
            botao.setAttribute("disabled","disabled");
        }
        console.log('testou');
    }
    
    function sub(id) {
        var url = '{{route('jogo.valor.update') }}';
        var value = document.getElementById('valor-' + id).value;
        document.getElementById('sinal-' + id).value = '-';
        if (value > 0) {
            value--;
            document.getElementById('valor-' + id).value = value;
            var form = new FormData(document.getElementById('form-' + id));
            var response = fetch(url, {
                method: "POST",
                body: form
            }).then(function (data) {
            data.text()
            .then(function (result) {
            var html = result.split('%$');
            document.getElementById('bonus').innerHTML=html[1];
            document.getElementById('bonus').innerHTML=html[1];
            document.getElementById('bold-' + id).innerHTML = html[0];
            console.log('Request success: ', result);
            })
            }).catch(function (error) {
            console.log('Request failure: ', error);
            });
        }
    }
    function getValor(id) {
        var url = '../../../jogo/valor/get/' + id;
        var urlBonus = '../../../jogo/valor/getbonus/{{ $fichaUser->id }}';
        fetch(url, {
            method: 'get' // opcional 
        })
                .then(function (response) {
                    response.text()
                            .then(function (result) {
                                document.getElementById('bold-' + id).innerHTML = result;
                                console.log('Request success: ', result);
                            })
                })
                .catch(function (err) {
                    console.error(err);
                });
        fetch(urlBonus, {
            method: 'get' // opcional 
        })
                .then(function (response) {
                    response.text()
                            .then(function (result) {
                                document.getElementById('bonus').innerHTML = result;
                                console.log('Request success: ', result);
                            })
                })
                .catch(function (err) {
                    console.error(err);
                });
    }
    setInterval(function(){ testaBonus(); }, 1000);
</script>
<div id=menu style="
  position: fixed;
  right: 0%;
  top: 50%;
  margin-top: -2.5em;
  z-index: 1000;
  background-color:#ffffff;">
    <label>Bonus</label> <h1 id="bonus">{{ $fichaUser->bonus }}</h1>
</div>
@if($classe->nome==='Vampiro')
<div class="row">
    <div class="col-md-12">
        <label>Você é um vampiro iniciante. Quando digo iniciante, você está começando sua vida amaldiçoada, tem menos de 400 anos de idade (enquanto não encontra a morte final, você é imortal pois já está morto).</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>{{$ficha->nome}}</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>{!! nl2br(e($ficha->resumo)) !!}</label>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <form id="formficha" action="{{ route('jogo.fichauser.update') }}" class="form-horizontal" method="POST" onsubmit="return false;">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                        <label for="nome" class="col-md-4 control-label">Nome</label>

                        <div class="col-md-6">
                            <input id="nome" placeholder="Digite o nome do personagem"  type="text" class="form-control" name="nome" value="{{ $fichaUser->nome }}" required autofocus/>

                            @if ($errors->has('nome'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nome') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group{{ $errors->has('resumo') ? ' has-error' : '' }}">
                        <label for="resumo" class="col-md-4 control-label">Resumo</label>

                        <div class="col-md-6">
                            <textarea id="resumo" class="form-control" placeholder="Escreva um pouco sobre o personagem. Fale dos antecedentes (tem as descrições nos links do lado direito da tela), natureza e comportamento"  name="resumo"
                                      required autofocus>{{ $fichaUser->resumo }}</textarea>

                            @if ($errors->has('resumo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('resumo') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group{{ $errors->has('comportamento') ? ' has-error' : '' }}">
                        <label for="nome" class="col-md-4 control-label">Comportamento</label>

                        <div class="col-md-6">
                            <select id="comportamento" name="comportamento" class="form-control">
                                <option value="">escolha</option>
                                @foreach($arquetipos as $arquetipo)
                                <option value="{{ $arquetipo }}">{{ $arquetipo }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('nome'))
                            <span class="help-block">
                                <strong>{{ $errors->first('comportamento') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group{{ $errors->has('natureza') ? ' has-error' : '' }}">
                        <label for="nome" class="col-md-4 control-label">Natureza</label>

                        <div class="col-md-6">
                            <select id="natureza" name="natureza" class="form-control">
                                <option value="">escolha</option>
                                @foreach($arquetipos as $arquetipo)
                                <option value="{{ $arquetipo }}">{{ $arquetipo }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('nome'))
                            <span class="help-block">
                                <strong>{{ $errors->first('natureza') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_ficha" value="{{ $ficha->id }}"/>
                <input type="hidden" name="id_fichaUser" value="{{ $fichaUser->id }}"/>
            </div>
                    </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12, text-center">
        <label>Atributos</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        Preste muita atenção no preenchimento dos atributos. 1 é o mínimo pra ser considerado um adolescente de 13 anos. Um atributo zerado significa que tem uma doença extremamente grave e incapacitante. 0 de qualquer atributo físico, significa que você não se meche. 0 de qualquer atributo mental, significa que não tem mente. É por sua conta e risco.
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        limpo=deficiente grave
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺ = fraco
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺ = a média de todo mundo
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺ = acima da média
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺✺ = é um dos melhores nisso
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺✺✺ = é um recordista
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Físicos</th>
                <th></th>
            </tr>
            @foreach($valoresFisico as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Sociais</th>
                <th></th>
            </tr>
            @foreach($valoresSocial as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> @if($ficha->nome==='Nosferatu' && $valor->nome==='Aparência')
                    <b>Pode esquecer, filho, isso aqui não te pertence</b>
                    @else
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Mentais</th>
                <th></th>
            </tr>
            @foreach($valoresMental as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12, text-center">
        <label>Habilidades</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        Aqui é mais tranquilo. Ou você sabe ou não sabe.
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        limpo = não sabe
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺ = já ouviu falar
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺ = a média de todo mundo
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺ = acima da média
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺✺ = é um dos melhores nisso. Pode dar aulas
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺✺✺ = é um recordista mestre. Certamente uma referência
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Talentos</th>
                <th></th>
            </tr>
            @foreach($valoresTalento as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Perícias</th>
                <th></th>
            </tr>
            @foreach($valoresPericia as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Conhecimentos</th>
                <th></th>
            </tr>
            @foreach($valoresConhecimento as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>Indicadores</th>
                <th>
                    Lembre-se. Quanto menor a humanidade, mais difícil é resistir a cometer um crime. 1 de humanidade e você é um monstro.
                    E você precisa de força de vontade para fazer qualquer coisa. Os valores estão no mínimo para ter um jogo legal.
                </th>
            </tr>
            @foreach($valores as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>


<div class="row">
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Disciplinas</th>
                <th>Você pode ter no máximo 3 em qualquer disciplina, pois é da 14ª ou 13ª geração.</th>
            </tr>
            @foreach($valoresFicha as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}"type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Virtudes</th>
                <th>Você vai precisar disso para resistir a situações muito chatas.</th>
            </tr>
            @foreach($valoresVirtude as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}"type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Antecedentes</th>
                <th>Especifique cada antecedente na descrição da ficha. Não descrever, vai dar a liberdade do mestre fazer isso por você.</th>
            </tr>
            @foreach($valoresAntecedentes as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}"type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@elseif($classe->nome==='Lobisomem')
<div class="row">
    <div class="col-md-12">
        <label>Você é um lobisomem iniciante. Quando digo iniciante. Você se descobriu um garou a pouco tempo, 
            e provavelmente causou muita confusão na sua primeira transformação, com certeza em uma noite de 
            lua cheia. Depois de contido por outro garou, você descobre que pode se transformar a qualquer hora do dia, 
            ficando mais forte quando aparece a lua e em especial na lua cheia. Boa sorte, é sua obrigação exterminar 
            qualquer manifestação da Wirm.</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>{{$ficha->nome}}</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>{!! nl2br(e($ficha->resumo)) !!}</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <form id="formficha" action="{{ route('jogo.fichauser.update') }}" class="form-horizontal" method="POST" onsubmit="return false;">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                        <label for="nome" class="col-md-4 control-label">Nome</label>

                        <div class="col-md-6">
                            <input id="nome" placeholder="Digite o nome do personagem"  type="text" class="form-control" name="nome" value="{{ $fichaUser->nome }}" required autofocus/>

                            @if ($errors->has('nome'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nome') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group{{ $errors->has('resumo') ? ' has-error' : '' }}">
                        <label for="resumo" class="col-md-4 control-label">Resumo</label>

                        <div class="col-md-6">
                            <textarea id="resumo" class="form-control" placeholder="Escreva um pouco sobre o personagem. Fale dos antecedentes (tem as descrições nos links do lado direito da tela), natureza e comportamento"  name="resumo"
                                      required autofocus>{{ $fichaUser->resumo }}</textarea>

                            @if ($errors->has('resumo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('resumo') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group{{ $errors->has('comportamento') ? ' has-error' : '' }}">
                        <label for="nome" class="col-md-4 control-label">Comportamento</label>

                        <div class="col-md-6">
                            <select id="comportamento" name="comportamento" class="form-control">
                                <option value="">escolha</option>
                                @foreach($arquetipos as $arquetipo)
                                <option value="{{ $arquetipo }}">{{ $arquetipo }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('nome'))
                            <span class="help-block">
                                <strong>{{ $errors->first('comportamento') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group{{ $errors->has('natureza') ? ' has-error' : '' }}">
                        <label for="nome" class="col-md-4 control-label">Natureza</label>

                        <div class="col-md-6">
                            <select id="natureza" name="natureza" class="form-control">
                                <option value="">escolha</option>
                                @foreach($arquetipos as $arquetipo)
                                <option value="{{ $arquetipo }}">{{ $arquetipo }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('nome'))
                            <span class="help-block">
                                <strong>{{ $errors->first('natureza') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_ficha" value="{{ $ficha->id }}"/>
                <input type="hidden" name="id_fichaUser" value="{{ $fichaUser->id }}"/>
            </div>
                    </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12, text-center">
        <label>Atributos</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        Preste muita atenção no preenchimento dos atributos. 1 é o mínimo pra ser considerado um adolescente de 13 anos. Um atributo zerado significa que tem uma doença extremamente grave e incapacitante. 0 de qualquer atributo físico, significa que você não se meche. 0 de qualquer atributo mental, significa que não tem mente. É por sua conta e risco.
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        limpo=deficiente grave
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺ = fraco
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺ = a média de todo mundo
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺ = acima da média
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺✺ = é um dos melhores nisso
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺✺✺ = é um recordista
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Físicos</th>
                <th></th>
            </tr>
            @foreach($valoresFisico as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Sociais</th>
                <th></th>
            </tr>
            @foreach($valoresSocial as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> @if($ficha->nome==='Nosferatu' && $valor->nome==='Aparência')
                    <b>Pode esquecer, filho, isso aqui não te pertence</b>
                    @else
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Mentais</th>
                <th></th>
            </tr>
            @foreach($valoresMental as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12, text-center">
        <label>Habilidades</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        Aqui é mais tranquilo. Ou você sabe ou não sabe.
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        limpo = não sabe
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺ = já ouviu falar
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺ = a média de todo mundo
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺ = acima da média
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺✺ = é um dos melhores nisso. Pode dar aulas
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺✺✺ = é um recordista mestre. Certamente uma referência
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Talentos</th>
                <th></th>
            </tr>
            @foreach($valoresTalento as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Perícias</th>
                <th></th>
            </tr>
            @foreach($valoresPericia as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Conhecimentos</th>
                <th></th>
            </tr>
            @foreach($valoresConhecimento as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <table class="table table-striped">
            <tr>
                <th>Indicadores</th>
                <th>
                    Sua força de vontade é sua força para resistir e prosseguir em sua missão. A fúria é literalmente a fonte do seu poder. Ganhe fúria ao uivar para Luna (a lua) em qualquer forma. Lua cheia dá mais pontos de fúria. O mestre decide quanto ganhou. Já a Gnose é a energia que você tem em comum com os espíritos e a fonte de poder de dons que dependem diretamente deles. Ganhe Gnose ao meditar em locais com conexão espiritual forte, tipo um Caern ou algo semelhante.
                </th>
            </tr>
            @foreach($valores as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-6">
        <table class="table table-striped">
            <tr>
                <th>Antecedentes</th>
                <th>Especifique cada antecedente na descrição da ficha. Não descrever, vai dar a liberdade do mestre fazer isso por você.</th>
            </tr>
            @foreach($valoresAntecedentes as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}"type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>Dons - Você é um garou iniciante. Só possui um dom de augúrio, um de raça e um de tribo, todos nível 1</label>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Dons de tribo</th>
            </tr>
            <tr>
                <td width="200">
                    <label>Dom de tribo</label>
                    <table>
                    @foreach($valoresFicha as $valor)
                    <tr><td><input name="domTribo" type="radio" value="{{ $valor->id }}"onclick="domTribo={{ $valor->id }}"/></td><td>{{ $valor->nome }}</td></tr>
                    @endforeach
                    </table>
                    <form id="form-tribo" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                    <input id="valorDomTribo" type="hidden" name="valor"/>
                    </form>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>
                    Algúrio - sob qual lua você nasceu
                    <select class="form-control" id="augurio" onchange="criaFormAugurio()">
                        <option value="0">[selecione]</option>
                    @foreach($augurios as $augurio)
                    <option value="{{ $augurio->id }}">{{ $augurio->nome }}</option>
                    @endforeach
                    </select>
                </th>
            </tr>
            <tr>
                <td width="200" id="td-augurio">
                    
                    
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>
                    Raça - você é um lobo, um humano ou um impuro?
                    <select class="form-control" id="raca" onchange="criaFormRaca()">
                        <option value="0">[selecione]</option>
                    @foreach($racas as $raca)
                    <option value="{{ $raca->id }}">{{ $raca->nome }}</option>
                    @endforeach
                    </select>
                </th>
            </tr>
            <tr>
                <td width="200" id="td-raca">
                    
                </td>
            </tr>
        </table>
    </div>
</div>
@elseif($classe->nome==='Mago')
<div class="row">
    <div class="col-md-12">
        <label>Você é um Mago. Sabe como a realidade funciona, e consegue manipulá-la. Via de regra você não precisa de fraquezas. 
        Você é uma pessoa normal apesar dos poderes. Se tropeçar e cair com a cabeça em uma pedra, você morre. Se engasgar, você morre. 
        Em resumo, você é frágil. Danos não se regeneram, a não ser que conheça a esfera da Vida. Mas cuidado. Vampiros que te descobrirem 
        vão te escravizar, lobisomens vão te matar. Em fim, a desvantagem é toda sua. Além da tecnocracia que está por todos os lados. 
        Se sobreviver o suficiente para se tornar mestre, você vai superar a todos, e será muito temido. Boa sorte.</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>{{$ficha->nome}}</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>{!! nl2br(e($ficha->resumo)) !!}</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <form id="formficha" action="{{ route('jogo.fichauser.update') }}" class="form-horizontal" method="POST" onsubmit="return false;">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                        <label for="nome" class="col-md-4 control-label">Nome</label>

                        <div class="col-md-6">
                            <input id="nome" placeholder="Digite o nome do personagem"  type="text" class="form-control" name="nome" value="{{ $fichaUser->nome }}" required autofocus/>

                            @if ($errors->has('nome'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nome') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group{{ $errors->has('resumo') ? ' has-error' : '' }}">
                        <label for="resumo" class="col-md-4 control-label">Resumo</label>

                        <div class="col-md-6">
                            <textarea id="resumo" class="form-control" placeholder="Escreva um pouco sobre o personagem. Fale dos antecedentes (tem as descrições nos links do lado direito da tela), natureza e comportamento"  name="resumo"
                                      required autofocus>{{ $fichaUser->resumo }}</textarea>

                            @if ($errors->has('resumo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('resumo') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group{{ $errors->has('comportamento') ? ' has-error' : '' }}">
                        <label for="nome" class="col-md-4 control-label">Comportamento</label>

                        <div class="col-md-6">
                            <select id="comportamento" name="comportamento" class="form-control">
                                <option value="">escolha</option>
                                @foreach($arquetipos as $arquetipo)
                                <option value="{{ $arquetipo }}">{{ $arquetipo }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('nome'))
                            <span class="help-block">
                                <strong>{{ $errors->first('comportamento') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group{{ $errors->has('natureza') ? ' has-error' : '' }}">
                        <label for="nome" class="col-md-4 control-label">Natureza</label>

                        <div class="col-md-6">
                            <select id="natureza" name="natureza" class="form-control">
                                <option value="">escolha</option>
                                @foreach($arquetipos as $arquetipo)
                                <option value="{{ $arquetipo }}">{{ $arquetipo }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('nome'))
                            <span class="help-block">
                                <strong>{{ $errors->first('natureza') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_ficha" value="{{ $ficha->id }}"/>
                <input type="hidden" name="id_fichaUser" value="{{ $fichaUser->id }}"/>
            </div>
                    </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12, text-center">
        <label>Atributos</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        Preste muita atenção no preenchimento dos atributos. 1 é o mínimo pra ser considerado um adolescente de 13 anos. Um atributo zerado significa que tem uma doença extremamente grave e incapacitante. 0 de qualquer atributo físico, significa que você não se meche. 0 de qualquer atributo mental, significa que não tem mente. É por sua conta e risco.
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        limpo=deficiente grave
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺ = fraco
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺ = a média de todo mundo
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺ = acima da média
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺✺ = é um dos melhores nisso
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺✺✺ = é um recordista
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Físicos</th>
                <th></th>
            </tr>
            @foreach($valoresFisico as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Sociais</th>
                <th></th>
            </tr>
            @foreach($valoresSocial as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> @if($ficha->nome==='Nosferatu' && $valor->nome==='Aparência')
                    <b>Pode esquecer, filho, isso aqui não te pertence</b>
                    @else
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Mentais</th>
                <th></th>
            </tr>
            @foreach($valoresMental as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12, text-center">
        <label>Habilidades</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        Aqui é mais tranquilo. Ou você sabe ou não sabe.
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        limpo = não sabe
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺ = já ouviu falar
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺ = a média de todo mundo
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺ = acima da média
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺✺ = é um dos melhores nisso. Pode dar aulas
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        ✺✺✺✺✺ = é um recordista mestre. Certamente uma referência
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Talentos</th>
                <th></th>
            </tr>
            @foreach($valoresTalento as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Perícias</th>
                <th></th>
            </tr>
            @foreach($valoresPericia as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Conhecimentos</th>
                <th></th>
            </tr>
            @foreach($valoresConhecimento as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <table class="table table-striped">
            <tr>
                <th>Indicadores</th>
                <th>
                    Sua força de vontade é sua força para resistir e prosseguir em sua missão. E acredite, vai precisar.
                </th>
            </tr>
            @foreach($valores as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <table class="table table-striped">
            <tr>
                <th>Esferas</th>
                <th>
                    Você é um estudioso. Aquí estão os aspectos da realidade que você pode aprender e manipular.
                </th>
            </tr>
            @foreach($valoresFicha as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}" type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-6">
        <table class="table table-striped">
            <tr>
                <th>Antecedentes</th>
                <th>Especifique cada antecedente na descrição da ficha. Não descrever, vai dar a liberdade do mestre fazer isso por você.</th>
            </tr>
            @foreach($valoresAntecedentes as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td> 
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valor->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valor->id }}" type="hidden" name="sinal"/>
                        <input id="id_ficha-{{ $valor->id }}" type="hidden" name="id_ficha" value="{{ $valor->id_ficha }}"/>
                        <input id="nome-{{ $valor->id }}"type="hidden" name="nome" value="{{ $valor->nome }}" />
                        <input type="hidden" name="id" value="{{ $valor->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valor->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valor->id_caracteristica }}"/>
                        <input id="valor-{{ $valor->id }}" type="hidden" name="valor" value="{{ $valor->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valor->id}}); "/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valor->id}});"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endif

<div class="row">
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button id="button" type="button" class="btn btn-primary" onclick="concluir();" disabled>
                Concluir seleção de ficha
            </button>
        </div>
    </div>
</div>


@endsection
