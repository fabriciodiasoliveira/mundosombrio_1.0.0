@extends('layouts.app')

@section('content')
<script>
    
    function updateFicha() {
        var url = '{{route('jogo.fichauser.updateanotacoes') }}';
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
        var url = '{{route('jogo.valor.updatecronica') }}';
        var value = document.getElementById('valor-' + id).value;
        var nome = document.getElementById('nome-' + id).value;
        try{
            var caracteristica = document.getElementById('caracteristica-' + id).value;
        }catch(x) {
            var caracteristica = 0;
        }
        document.getElementById('sinal-' + id).value = '+';
        if(nome=='Quintessência'||nome=='Paradoxo'){
                if (value < 20) {
                    value++;
                    document.getElementById('valor-' + id).value = value;
                    var form = new FormData(document.getElementById('form-' + id));
                    var response = fetch(url, {
                        method: "POST",
                        body: form
                    }).then(function (data) {
                    data.text()
                    .then(function (result) {
                        document.getElementById('bold-' + id).innerHTML = result;
                        console.log('Request success: ', result);
                    })
                    }).catch(function (error) {
                        console.log('Request failure: ', error);
                    });
                }
            }
            else if(caracteristica==0){
                if (value < 10) {
                    value++;
                    document.getElementById('valor-' + id).value = value;
                    var form = new FormData(document.getElementById('form-' + id));
                    var response = fetch(url, {
                        method: "POST",
                        body: form
                    }).then(function (data) {
                    data.text()
                    .then(function (result) {
                        document.getElementById('bold-' + id).innerHTML = result;
                        console.log('Request success: ', result);
                    })
                    }).catch(function (error) {
                        console.log('Request failure: ', error);
                    });
                }
            }
            else{
                if (value < 7) {
                    value++;
                    document.getElementById('valor-' + id).value = value;
                    var form = new FormData(document.getElementById('form-' + id));
                    var response = fetch(url, {
                        method: "POST",
                        body: form
                    }).then(function (data) {
                    data.text()
                    .then(function (result) {
                        document.getElementById('bold-' + id).innerHTML = result;
                        console.log('Request success: ', result);
                    })
                    }).catch(function (error) {
                        console.log('Request failure: ', error);
                    });
                }
            }
        }
    function sub(id) {
        var url = '{{route('jogo.valor.updatecronica') }}';
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
                    document.getElementById('bold-' + id).innerHTML = result;
                    console.log('Request success: ', result);
                })
                }).catch(function (error) {
                console.log('Request failure: ', error);
            });
        }
    }
    function getValor(id) {
        var url = '../../../valor/get/' + id;
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
    }
</script>
@if($classe->nome==='Vampiro')
<div class="row">
    <div class="col-md-12">
        <h2>{{$classe->nome}}</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>{{$ficha->nome}}</h2>
    </div>
</div>
<div class="row">
    <div id="button" class="col-md-12">
        <a class="btn btn-primary" data-toggle="collapse" href="#resumo-ficha">Mostrar característica do clã</a>
    </div>
    <div id="resumo-ficha" class="col-md-12 collapse">
        <label>{!! nl2br(e($ficha->resumo)) !!}</label>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <h1>{{ $fichaJogador->nome }}</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Histórico do personagem</h2>
    </div>
    <div class="col-md-12">
        <label for="resumo" class="col-md-12 control-label">{!! nl2br(e($fichaJogador->resumo)) !!}</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>Atributos</label>
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
                <td>
                    @if($fichaJogador->id_ficha==7 && $valor->nome==='Aparência')
                    Esqueça. Esse bicho é repugnante
                    @else
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
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
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>Habilidades</label>
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
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)    
<div class="row">
    <div class="col-md-12">
        <form id="formficha" action="{{route('jogo.fichauser.update') }}" class="form-horizontal" method="POST" >
            {{ csrf_field() }}
                <div class="col-md-7">
                    <div class="form-group{{ $errors->has('anotacoes') ? ' has-error' : '' }}">
                        <label for="anotacoes" class="col-md-4 control-label">Anotaçoes do mestre</label>

                        <div class="col-md-6">
                            <textarea class="form-control" name="anotacoes" onkeyup="updateFicha()"
                                      required autofocus>{{ $fichaJogador->anotacoes }}</textarea>

                            @if ($errors->has('anotacoes'))
                            <span class="help-block">
                                <strong>{{ $errors->first('anotacoes') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_user" value="{{ $fichaJogador->id_user_ficha }}"/>
                <input type="hidden" name="id_cronica" value="{{ $fichaJogador->id_cronica }}"/>
                <input type="hidden" name="resumo" value="{{ $fichaJogador->resumo }}"/>
                <input type="hidden" name="nome" value="{{ $fichaJogador->nome }}"/>
                <input type="hidden" name="id_ficha" value="{{ $ficha->id }}"/>
                <input type="hidden" name="id_fichaUser" value="{{ $fichaJogador->id }}"/>
        </form>
    </div>
</div>
@else
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>
                    Anotações do mestre
                </th>
            </tr>
            <tr>
                <td>{!! nl2br(e($fichaJogador->anotacoes)) !!}</td>
            </tr>
        </table>
    </div>
</div>
@endif
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>Valores específicos</th>
                <th></th>
            </tr>
            <tr>
                <td width="200">
                    {{ $valorHumanidade->nome  }}
                </td>
                <td>
                    <b id="bold-{{ $valorHumanidade->id }}" >@for($i=0;$i<$valorHumanidade->valor;$i++)✺@endfor</b>
                </td>
            </tr>
            <tr>
                <td width="200">
                    {{ $valorForcaVontade->nome  }}
                </td>
                <td>
                    <b id="bold-{{ $valorForcaVontade->id }}" >@for($i=0;$i<$valorForcaVontade->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-{{ $valorForcaVontadeJogo->id }}" >@for($i=0;$i<$valorForcaVontadeJogo->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorForcaVontadeJogo->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorForcaVontadeJogo->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorForcaVontadeJogo->id }}" type="hidden" name="nome" value="{{ $valorForcaVontadeJogo->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorForcaVontadeJogo->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorForcaVontadeJogo->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valorForcaVontadeJogo->id_caracteristica }}"/>
                        <input id="valor-{{ $valorForcaVontadeJogo->id }}" type="hidden" name="valor" value="{{ $valorForcaVontadeJogo->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorForcaVontadeJogo->id}}); getValor({{ $valorForcaVontadeJogo->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorForcaVontadeJogo->id}});getValor({{ $valorForcaVontadeJogo->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-{{ $valorForcaVontadeJogo->id }}" >@for($i=0;$i<$valorForcaVontadeJogo->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif   
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                    {{ $valorDano->nome }}
                </td>
                <td>
                    <b id="bold-{{ $valorDano->id }}" >@for($i=0;$i<$valorDano->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorDano->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorDano->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorDano->id }}" type="hidden" name="nome" value="{{ $valorDano->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorDano->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorDano->id_fichaUser }}"/>
                        <input id="caracteristica-{{ $valorDano->id }}" type="hidden" name="id_caracteristica" value="{{ $valorDano->id_caracteristica }}"/>
                        <input id="valor-{{ $valorDano->id }}" type="hidden" name="valor" value="{{ $valorDano->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorDano->id}}); getValor({{ $valorDano->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorDano->id}});getValor({{ $valorDano->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                    Dano
                </td>
                <td>
                    <b id="bold-{{ $valorDano->id }}" >@for($i=0;$i<$valorDano->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif 
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                    {{ $valorPontosSangue->nome }}
                </td>
                <td>
                    <b id="bold-{{ $valorPontosSangue->id }}" >@for($i=0;$i<$valorPontosSangue->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorPontosSangue->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorPontosSangue->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorPontosSangue->id }}" type="hidden" name="nome" value="{{ $valorPontosSangue->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorPontosSangue->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorPontosSangue->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valorPontosSangue->id_caracteristica }}"/>
                        <input id="valor-{{ $valorPontosSangue->id }}" type="hidden" name="valor" value="{{ $valorPontosSangue->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorPontosSangue->id}}); getValor({{ $valorPontosSangue->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorPontosSangue->id}});getValor({{ $valorPontosSangue->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                    Pontos de Sangue
                </td>
                <td>
                    <b id="bold-{{ $valorPontosSangue->id }}" >@for($i=0;$i<$valorPontosSangue->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif 
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <table class="table table-striped">
            <tr>
                <th>Tabela de dano</th>
                <th></th>
            </tr>
            <tr>
                <td width="200">
                    1 - Escoriado
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td width="200">
                    2 - Machucado
                </td>
                <td>
                    -1
                </td>
            </tr>
            <tr>
                <td width="200">
                    3 -Ferido
                </td>
                <td>
                    -1
                </td>
            </tr>
            <tr>
                <td width="200">
                    4 - Ferido Gravemente
                </td>
                <td>
                    -2
                </td>
            </tr>
            <tr>
                <td width="200">
                    5 - Espancado
                </td>
                <td>
                    -2
                </td>
            </tr>
            <tr>
                <td width="200">
                    6 - Aleijado
                </td>
                <td>
                    -5
                </td>
            </tr>
            <tr>
                <td width="200">
                    7 - Incapacitado
                </td>
                <td>
                    Inconsciente
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <table class="table table-striped">
            <tr>
                <th>Disciplinas</th>
                <th></th>
            </tr>
            @foreach($valoresFicha as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td>
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-3">
        <table class="table table-striped">
            <tr>
                <th>Virtudes</th>
                <th></th>
            </tr>
            @foreach($valoresVirtude as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td>
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-3">
        <table class="table table-striped">
            <tr>
                <th>Antecedentes</th>
                <th></th>
            </tr>
            @foreach($valoresAntecedentes as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td>
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@elseif($classe->nome==='Lobisomem')
<div class="row">
    <div class="col-md-12">
        <h2>{{$classe->nome}}</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12" for="nome-ficha" class="col-md-4 control-label">
        <h2>{{$ficha->nome}}</h2>
    </div>
</div>
<div class="row">
    <div id="button" class="col-md-12">
        <a class="btn btn-primary" data-toggle="collapse" href="#resumo-ficha">Mostrar característica da tribo</a>
    </div>
    <div id="resumo-ficha" class="col-md-12 collapse">
        <label>{!! nl2br(e($ficha->resumo)) !!}</label>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <h1>{{ $fichaJogador->nome }}</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Histórico do personagem</h2>
    </div>
    <div class="col-md-12">
        <label for="resumo" class="col-md-12 control-label">{!! nl2br(e($fichaJogador->resumo)) !!}</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>Atributos</label>
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
                <td>
                    @if($fichaJogador->id_ficha==7 && $valor->nome==='Aparência')
                    Esqueça. Esse bicho é repugnante
                    @else
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
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
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <table class="table table-striped">
            <tr>
                <th>
                    Hominídeo
                </th>
            </tr>
            <tr>
                <td>
                    Nenhuma mudança
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-2">
        <table class="table table-striped">
            <tr>
                <th>
                    Glabro
                </th>
            </tr>
            <tr>
                <td>
                    Força +2
                </td>
            </tr>
            <tr>
                <td>
                    Vigor +2
                </td>
            </tr>
            <tr>
                <td>
                    Aparência -1
                </td>
            </tr>
            <tr>
                <td>
                    Manipulação -1
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-2">
        <table class="table table-striped">
            <tr>
                <th>
                    Crinus
                </th>
            </tr>
            <tr>
                <td>
                    Força +4
                </td>
            </tr>
            <tr>
                <td>
                    Vigor +3
                </td>
            </tr>
            <tr>
                <td>
                    Aparência 0
                </td>
            </tr>
            <tr>
                <td>
                    Manipulação -3 (causa delírios em pessoas. Quase todos vão fugir falando besteiras, os mais corajosos vão chamar de pé grande ou qualquer outra coisa)
                </td>
            </tr>
            <tr>
                <td>
                    DIFICULDADE 6
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-2">
        <table class="table table-striped">
            <tr>
                <th>
                    Hispo
                </th>
            </tr>
            <tr>
                <td>
                    Força +3
                </td>
            </tr>
            <tr>
                <td>
                    Destreza +2
                </td>
            </tr>
            <tr>
                <td>
                    Manipulação -3
                </td>
            </tr>
            <tr>
                <td>
                    +1 dano por mordida - Dificuldade 7
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-2">
        <table class="table table-striped">
            <tr>
                <th>
                    Lupino
                </th>
            </tr>
            <tr>
                <td>
                    Força +1
                </td>
            </tr>
            <tr>
                <td>
                    Destreza +2
                </td>
            </tr>
            <tr>
                <td>
                    Vigor +2
                </td>
            </tr>
            <tr>
                <td>
                    Manipulação -3
                </td>
            </tr>
            <tr>
                <td>
                    -2 no teste de percepção - Dificuldade 6
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>Habilidades</label>
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
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)    
<div class="row">
    <div class="col-md-12">
        <form id="formficha" action="{{route('jogo.fichauser.update') }}" class="form-horizontal" method="POST" >
            {{ csrf_field() }}
                <div class="col-md-7">
                    <div class="form-group{{ $errors->has('anotacoes') ? ' has-error' : '' }}">
                        <label for="anotacoes" class="col-md-4 control-label">Anotaçoes do mestre</label>

                        <div class="col-md-6">
                            <textarea class="form-control" name="anotacoes" onkeyup="updateFicha()"
                                      required autofocus>{{ $fichaJogador->anotacoes }}</textarea>

                            @if ($errors->has('anotacoes'))
                            <span class="help-block">
                                <strong>{{ $errors->first('anotacoes') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_user" value="{{ $fichaJogador->id_user_ficha }}"/>
                <input type="hidden" name="id_cronica" value="{{ $fichaJogador->id_cronica }}"/>
                <input type="hidden" name="resumo" value="{{ $fichaJogador->resumo }}"/>
                <input type="hidden" name="nome" value="{{ $fichaJogador->nome }}"/>
                <input type="hidden" name="id_ficha" value="{{ $ficha->id }}"/>
                <input type="hidden" name="id_fichaUser" value="{{ $fichaJogador->id }}"/>
        </form>
    </div>
</div>
@else
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>
                    Anotações do mestre
                </th>
            </tr>
            <tr>
                <td>{!! nl2br(e($fichaJogador->anotacoes)) !!}</td>
            </tr>
        </table>
    </div>
</div>
@endif
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>Valores específicos</th>
                <th></th>
            </tr>
            <tr>
                <td width="200">
                    {{ $valorFuria->nome  }}
                </td>
                <td>
                    <b id="bold-{{ $valorFuria->id }}" >@for($i=0;$i<$valorFuria->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                    
                </td>
                <td>
                    <b id="bold-{{ $valorFuriaJogo->id }}" >@for($i=0;$i<$valorFuriaJogo->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorFuriaJogo->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorFuriaJogo->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorFuriaJogo->id }}" type="hidden" name="nome" value="{{ $valorFuriaJogo->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorFuriaJogo->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorFuriaJogo->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valorFuriaJogo->id_caracteristica }}"/>
                        <input id="valor-{{ $valorFuriaJogo->id }}" type="hidden" name="valor" value="{{ $valorFuriaJogo->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorFuriaJogo->id}}); getValor({{ $valorFuriaJogo->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorFuriaJogo->id}});getValor({{ $valorFuriaJogo->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                    
                </td>
                <td>
                    <b id="bold-{{ $valorFuriaJogo->id }}" >@for($i=0;$i<$valorFuriaJogo->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif 
            <tr>
                <td width="200">
                    {{ $valorGnose->nome  }}
                </td>
                <td>
                    <b id="bold-{{ $valorGnose->id }}" >@for($i=0;$i<$valorGnose->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                    
                </td>
                <td>
                    <b id="bold-{{ $valorGnoseJogo->id }}" >@for($i=0;$i<$valorGnoseJogo->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorGnoseJogo->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorGnoseJogo->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorGnoseJogo->id }}" type="hidden" name="nome" value="{{ $valorGnoseJogo->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorGnoseJogo->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorGnoseJogo->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valorGnoseJogo->id_caracteristica }}"/>
                        <input id="valor-{{ $valorGnoseJogo->id }}" type="hidden" name="valor" value="{{ $valorGnoseJogo->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorGnoseJogo->id}}); getValor({{ $valorGnoseJogo->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorGnoseJogo->id}});getValor({{ $valorGnoseJogo->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                    
                </td>
                <td>
                    <b id="bold-{{ $valorGnoseJogo->id }}" >@for($i=0;$i<$valorGnoseJogo->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif 
            <tr>
                <td width="200">
                    {{ $valorForcaVontade->nome  }}
                </td>
                <td>
                    <b id="bold-{{ $valorForcaVontade->id }}" >@for($i=0;$i<$valorForcaVontade->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-{{ $valorForcaVontadeJogo->id }}" >@for($i=0;$i<$valorForcaVontadeJogo->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorForcaVontadeJogo->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorForcaVontadeJogo->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorForcaVontadeJogo->id }}" type="hidden" name="nome" value="{{ $valorForcaVontadeJogo->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorForcaVontadeJogo->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorForcaVontadeJogo->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valorForcaVontadeJogo->id_caracteristica }}"/>
                        <input id="valor-{{ $valorForcaVontadeJogo->id }}" type="hidden" name="valor" value="{{ $valorForcaVontadeJogo->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorForcaVontadeJogo->id}}); getValor({{ $valorForcaVontadeJogo->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorForcaVontadeJogo->id}});getValor({{ $valorForcaVontadeJogo->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-{{ $valorForcaVontadeJogo->id }}" >@for($i=0;$i<$valorForcaVontadeJogo->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif   
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                    {{ $valorDano->nome }}
                </td>
                <td>
                    <b id="bold-{{ $valorDano->id }}" >@for($i=0;$i<$valorDano->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorDano->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorDano->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorDano->id }}" type="hidden" name="nome" value="{{ $valorDano->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorDano->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorDano->id_fichaUser }}"/>
                        <input id="caracteristica-{{ $valorDano->id }}" type="hidden" name="id_caracteristica" value="{{ $valorDano->id_caracteristica }}"/>
                        <input id="valor-{{ $valorDano->id }}" type="hidden" name="valor" value="{{ $valorDano->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorDano->id}}); getValor({{ $valorDano->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorDano->id}});getValor({{ $valorDano->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                    {{ $valorDano->nome }}
                </td>
                <td>
                    <b id="bold-{{ $valorDano->id }}" >@for($i=0;$i<$valorDano->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif 
            <tr>
                <th colspan="2">Renome - Status diante da nação Garou e diante dos espíritos</th>
            </tr>
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                    {{ $valorGloria->nome }}
                </td>
                <td>
                    <b id="bold-{{ $valorGloria->id }}" >@for($i=0;$i<$valorGloria->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorGloria->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorGloria->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorGloria->id }}" type="hidden" name="nome" value="{{ $valorGloria->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorGloria->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorGloria->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valorGloria->id_caracteristica }}"/>
                        <input id="valor-{{ $valorGloria->id }}" type="hidden" name="valor" value="{{ $valorGloria->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorGloria->id}}); getValor({{ $valorGloria->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorGloria->id}});getValor({{ $valorGloria->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                    {{ $valorGloria->nome }}
                </td>
                <td>
                    <b id="bold-{{ $valorGloria->id }}" >@for($i=0;$i<$valorGloria->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-{{ $valorGloriaGanha->id }}" >@for($i=0;$i<$valorGloriaGanha->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorGloriaGanha->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorGloriaGanha->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorGloriaGanha->id }}" type="hidden" name="nome" value="{{ $valorGloriaGanha->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorGloriaGanha->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorGloriaGanha->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valorGloriaGanha->id_caracteristica }}"/>
                        <input id="valor-{{ $valorGloriaGanha->id }}" type="hidden" name="valor" value="{{ $valorGloriaGanha->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorGloriaGanha->id}}); getValor({{ $valorGloriaGanha->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorGloriaGanha->id}});getValor({{ $valorGloriaGanha->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-{{ $valorGloriaGanha->id }}" >@for($i=0;$i<$valorGloriaGanha->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                    {{ $valorHonra->nome }}
                </td>
                <td>
                    <b id="bold-{{ $valorHonra->id }}" >@for($i=0;$i<$valorHonra->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorHonra->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorHonra->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorHonra->id }}" type="hidden" name="nome" value="{{ $valorHonra->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorHonra->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorHonra->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valorHonra->id_caracteristica }}"/>
                        <input id="valor-{{ $valorHonra->id }}" type="hidden" name="valor" value="{{ $valorHonra->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorHonra->id}}); getValor({{ $valorHonra->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorHonra->id}});getValor({{ $valorHonra->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                    {{ $valorHonra->nome }}
                </td>
                <td>
                    <b id="bold-{{ $valorHonra->id }}" >@for($i=0;$i<$valorHonra->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-{{ $valorHonraGanha->id }}" >@for($i=0;$i<$valorHonraGanha->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorHonraGanha->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorHonraGanha->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorHonraGanha->id }}" type="hidden" name="nome" value="{{ $valorHonraGanha->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorHonraGanha->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorHonraGanha->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valorHonraGanha->id_caracteristica }}"/>
                        <input id="valor-{{ $valorHonraGanha->id }}" type="hidden" name="valor" value="{{ $valorHonraGanha->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorHonraGanha->id}}); getValor({{ $valorHonraGanha->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorHonraGanha->id}});getValor({{ $valorHonraGanha->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-{{ $valorHonraGanha->id }}" >@for($i=0;$i<$valorHonraGanha->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                    {{ $valorSabedoria->nome }}
                </td>
                <td>
                    <b id="bold-{{ $valorSabedoria->id }}" >@for($i=0;$i<$valorSabedoria->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorSabedoria->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorSabedoria->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorSabedoria->id }}" type="hidden" name="nome" value="{{ $valorSabedoria->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorSabedoria->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorSabedoria->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valorSabedoria->id_caracteristica }}"/>
                        <input id="valor-{{ $valorSabedoria->id }}" type="hidden" name="valor" value="{{ $valorSabedoria->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorSabedoria->id}}); getValor({{ $valorSabedoria->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorSabedoria->id}});getValor({{ $valorSabedoria->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                    {{ $valorSabedoria->nome }}
                </td>
                <td>
                    <b id="bold-{{ $valorSabedoria->id }}" >@for($i=0;$i<$valorSabedoria->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-{{ $valorSabedoriaGanha->id }}" >@for($i=0;$i<$valorSabedoriaGanha->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorSabedoriaGanha->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorSabedoriaGanha->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorSabedoriaGanha->id }}" type="hidden" name="nome" value="{{ $valorSabedoriaGanha->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorSabedoriaGanha->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorSabedoriaGanha->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valorSabedoriaGanha->id_caracteristica }}"/>
                        <input id="valor-{{ $valorSabedoriaGanha->id }}" type="hidden" name="valor" value="{{ $valorSabedoriaGanha->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorSabedoriaGanha->id}}); getValor({{ $valorSabedoriaGanha->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorSabedoriaGanha->id}});getValor({{ $valorSabedoriaGanha->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-{{ $valorSabedoriaGanha->id }}" >@for($i=0;$i<$valorSabedoriaGanha->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <table class="table table-striped">
            <tr>
                <th>Tabela de dano</th>
                <th></th>
            </tr>
            <tr>
                <td width="200">
                    1 - Escoriado
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td width="200">
                    2 - Machucado
                </td>
                <td>
                    -1
                </td>
            </tr>
            <tr>
                <td width="200">
                    3 -Ferido
                </td>
                <td>
                    -1
                </td>
            </tr>
            <tr>
                <td width="200">
                    4 - Ferido Gravemente
                </td>
                <td>
                    -2
                </td>
            </tr>
            <tr>
                <td width="200">
                    5 - Espancado
                </td>
                <td>
                    -2
                </td>
            </tr>
            <tr>
                <td width="200">
                    6 - Aleijado
                </td>
                <td>
                    -5
                </td>
            </tr>
            <tr>
                <td width="200">
                    7 - Incapacitado
                </td>
                <td>
                    Inconsciente
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <table class="table table-striped">
            <tr>
                <th>Dons</th>
                <th></th>
            </tr>
            <tr>
                <td width="200">
                    Raça: {{ $domRaca->nomeRaca  }}
                </td>
                <td>
                    Dom de raça: {{ $domRaca->nome }}
                </td>
            </tr>
            <tr>
                <td width="200">
                    Augúrio: {{ $domAugurio->nomeAugurio  }}
                </td>
                <td>
                    Dom de augúrio: {{ $domAugurio->nome }}
                </td>
            </tr>
            <tr>
                <td width="200">
                    Tribo: {{ $ficha->nome  }}
                </td>
                <td>
                    Dom de tribo: {{ $domTribo->nome }}
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-6">
        <table class="table table-striped">
            <tr>
                <th>Antecedentes</th>
                <th></th>
            </tr>
            @foreach($valoresAntecedentes as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td>
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@elseif($classe->nome==='Mago')
<div class="row">
    <div class="col-md-12">
        <h2>{{$classe->nome}}</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12" for="nome-ficha" class="col-md-4 control-label">
        <h2>{{$ficha->nome}}</h2>
    </div>
</div>
<div class="row">
    <div id="button" class="col-md-12">
        <a class="btn btn-primary" data-toggle="collapse" href="#resumo-ficha">Mostrar característica da tradição</a>
    </div>
    <div id="resumo-ficha" class="col-md-12 collapse">
        <label>{!! nl2br(e($ficha->resumo)) !!}</label>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <h1>{{ $fichaJogador->nome }}</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Histórico do personagem</h2>
    </div>
    <div class="col-md-12">
        <label for="resumo" class="col-md-12 control-label">{!! nl2br(e($fichaJogador->resumo)) !!}</label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>Atributos</label>
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
                <td>
                    @if($fichaJogador->id_ficha==7 && $valor->nome==='Aparência')
                    Esqueça. Esse bicho é repugnante
                    @else
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
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
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <label>Habilidades</label>
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
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)    
<div class="row">
    <div class="col-md-12">
        <form id="formficha" action="{{route('jogo.fichauser.update') }}" class="form-horizontal" method="POST" >
            {{ csrf_field() }}
                <div class="col-md-7">
                    <div class="form-group{{ $errors->has('anotacoes') ? ' has-error' : '' }}">
                        <label for="anotacoes" class="col-md-4 control-label">Anotaçoes do mestre</label>

                        <div class="col-md-6">
                            <textarea class="form-control" name="anotacoes" onkeyup="updateFicha()"
                                      required autofocus>{{ $fichaJogador->anotacoes }}</textarea>

                            @if ($errors->has('anotacoes'))
                            <span class="help-block">
                                <strong>{{ $errors->first('anotacoes') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_user" value="{{ $fichaJogador->id_user_ficha }}"/>
                <input type="hidden" name="id_cronica" value="{{ $fichaJogador->id_cronica }}"/>
                <input type="hidden" name="resumo" value="{{ $fichaJogador->resumo }}"/>
                <input type="hidden" name="nome" value="{{ $fichaJogador->nome }}"/>
                <input type="hidden" name="id_ficha" value="{{ $ficha->id }}"/>
                <input type="hidden" name="id_fichaUser" value="{{ $fichaJogador->id }}"/>
        </form>
    </div>
</div>
@else
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>
                    Anotações do mestre
                </th>
            </tr>
            <tr>
                <td>{!! nl2br(e($fichaJogador->anotacoes)) !!}</td>
            </tr>
        </table>
    </div>
</div>
@endif
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>Valores específicos</th>
                <th></th>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                    {{ $valorQuintessencia->nome }}
                </td>
                <td>
                    <b id="bold-{{ $valorQuintessencia->id }}" >@for($i=0;$i<$valorQuintessencia->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorQuintessencia->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorQuintessencia->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorQuintessencia->id }}" type="hidden" name="nome" value="{{ $valorQuintessencia->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorQuintessencia->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorQuintessencia->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valorQuintessencia->id_caracteristica }}"/>
                        <input id="valor-{{ $valorQuintessencia->id }}" type="hidden" name="valor" value="{{ $valorQuintessencia->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorQuintessencia->id}}); getValor({{ $valorQuintessencia->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorQuintessencia->id}});getValor({{ $valorQuintessencia->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                    {{ $valorQuintessencia->nome }}
                </td>
                <td>
                    <b id="bold-{{ $valorQuintessencia->id }}" >@for($i=0;$i<$valorQuintessencia->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif 
            
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                    {{ $valorParadoxo->nome }}
                </td>
                <td>
                    <b id="bold-{{ $valorParadoxo->id }}" >@for($i=0;$i<$valorParadoxo->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorParadoxo->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorParadoxo->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorParadoxo->id }}" type="hidden" name="nome" value="{{ $valorParadoxo->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorParadoxo->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorParadoxo->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valorParadoxo->id_caracteristica }}"/>
                        <input id="valor-{{ $valorParadoxo->id }}" type="hidden" name="valor" value="{{ $valorParadoxo->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorParadoxo->id}}); getValor({{ $valorParadoxo->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorParadoxo->id}});getValor({{ $valorParadoxo->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                    {{ $valorParadoxo->nome }}
                </td>
                <td>
                    <b id="bold-{{ $valorParadoxo->id }}" >@for($i=0;$i<$valorParadoxo->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif 
            
            <tr>
                <td width="200">
                    {{ $valorArete->nome  }}
                </td>
                <td>
                    <b id="bold-{{ $valorArete->id }}" >@for($i=0;$i<$valorArete->valor;$i++)✺@endfor</b>
                </td>
            </tr>
            <tr>
                <td width="200">
                    {{ $valorAvatar->nome  }}
                </td>
                <td>
                    <b id="bold-{{ $valorAvatar->id }}" >@for($i=0;$i<$valorAvatar->valor;$i++)✺@endfor</b>
                </td>
            </tr>
            <tr>
                <td width="200">
                    {{ $valorForcaVontade->nome  }}
                </td>
                <td>
                    <b id="bold-{{ $valorForcaVontade->id }}" >@for($i=0;$i<$valorForcaVontade->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-{{ $valorForcaVontadeJogo->id }}" >@for($i=0;$i<$valorForcaVontadeJogo->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorForcaVontadeJogo->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorForcaVontadeJogo->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorForcaVontadeJogo->id }}" type="hidden" name="nome" value="{{ $valorForcaVontadeJogo->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorForcaVontadeJogo->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorForcaVontadeJogo->id_fichaUser }}"/>
                        <input type="hidden" name="id_caracteristica" value="{{ $valorForcaVontadeJogo->id_caracteristica }}"/>
                        <input id="valor-{{ $valorForcaVontadeJogo->id }}" type="hidden" name="valor" value="{{ $valorForcaVontadeJogo->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorForcaVontadeJogo->id}}); getValor({{ $valorForcaVontadeJogo->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorForcaVontadeJogo->id}});getValor({{ $valorForcaVontadeJogo->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-{{ $valorForcaVontadeJogo->id }}" >@for($i=0;$i<$valorForcaVontadeJogo->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif   
@if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id)            
            <tr>
                <td width="200">
                    {{ $valorDano->nome }}
                </td>
                <td>
                    <b id="bold-{{ $valorDano->id }}" >@for($i=0;$i<$valorDano->valor;$i++)✺@endfor</b>
                    <form id="form-{{ $valorDano->id_valor}}" action="{{route('jogo.valor.update') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="sinal-{{ $valorDano->id }}" type="hidden" name="sinal"/>
                        <input id="nome-{{ $valorDano->id }}" type="hidden" name="nome" value="{{ $valorDano->nome }}" />
                        <input type="hidden" name="id" value="{{ $valorDano->id }}" />
                        <input type="hidden" name="id_fichaUser" value="{{ $valorDano->id_fichaUser }}"/>
                        <input id="caracteristica-{{ $valorDano->id }}" type="hidden" name="id_caracteristica" value="{{ $valorDano->id_caracteristica }}"/>
                        <input id="valor-{{ $valorDano->id }}" type="hidden" name="valor" value="{{ $valorDano->valor }}" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add({{ $valorDano->id}}); getValor({{ $valorDano->id }})"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub({{ $valorDano->id}});getValor({{ $valorDano->id }})"/>
                    </form>
                </td>
            </tr>
@else
            <tr>
                <td width="200">
                    {{ $valorDano->nome }}
                </td>
                <td>
                    <b id="bold-{{ $valorDano->id }}" >@for($i=0;$i<$valorDano->valor;$i++)✺@endfor</b>
                </td>
            </tr>
@endif 
            <tr>
                <td width="200">
                    {{ $valorArete->nome  }}
                </td>
                <td>
                    <b id="bold-{{ $valorArete->id }}" >@for($i=0;$i<$valorArete->valor;$i++)✺@endfor</b>
                </td>
            </tr>
            <tr>
                <td width="200">
                    {{ $valorAvatar->nome  }}
                </td>
                <td>
                    <b id="bold-{{ $valorAvatar->id }}" >@for($i=0;$i<$valorAvatar->valor;$i++)✺@endfor</b>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <table class="table table-striped">
            <tr>
                <th>Tabela de dano</th>
                <th></th>
            </tr>
            <tr>
                <td width="200">
                    1 - Escoriado
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td width="200">
                    2 - Machucado
                </td>
                <td>
                    -1
                </td>
            </tr>
            <tr>
                <td width="200">
                    3 -Ferido
                </td>
                <td>
                    -1
                </td>
            </tr>
            <tr>
                <td width="200">
                    4 - Ferido Gravemente
                </td>
                <td>
                    -2
                </td>
            </tr>
            <tr>
                <td width="200">
                    5 - Espancado
                </td>
                <td>
                    -2
                </td>
            </tr>
            <tr>
                <td width="200">
                    6 - Aleijado
                </td>
                <td>
                    -5
                </td>
            </tr>
            <tr>
                <td width="200">
                    7 - Incapacitado
                </td>
                <td>
                    Inconsciente
                </td>
            </tr>
        </table>
    </div>
</div>
        
<div class="row">
    <div class="col-md-6">
        <table class="table table-striped">
            <tr>
                <th>Esferas</th>
                <th></th>
            </tr>
            @foreach($valoresFicha as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td>
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-6">
        <table class="table table-striped">
            <tr>
                <th>Antecedentes</th>
                <th></th>
            </tr>
            @foreach($valoresAntecedentes as $valor)
            <tr>
                <td width="200">
                    {{ $valor->nome  }}
                </td>
                <td>
                    <b id="bold-{{ $valor->id }}" >@for($i=0;$i<$valor->valor;$i++)✺@endfor</b>
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
            <button id="button" type="button" class="btn btn-primary" onclick="window.history.back();">
                Voltar
            </button>
        </div>
    </div>
</div>


@endsection
