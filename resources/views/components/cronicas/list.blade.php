<script>
$(document).ready(function(){
 $('#tabela').DataTable(
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
});
</script>
<table id="tabela" class="table table-striped">
    <thead>
        <tr>
            <th>Cronicas</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($cronicas as $cronica)
        <tr>
            @if(!isset($fichaJogador))
            <td><a href="{{ route('jogo.cronicas.showuma', ['id' => $cronica->id]) }}">{{$cronica->nome}}</a></td>
            <td><i>@if($cronica->finalizada==0) em andamento @elseif($cronica->finalizada==1)finalizada @endif </i></td>
            <td><i>@if($cronica->fechada==0)aberta para novos jogadores @elseif($cronica->fechada==1)inscrições finalizadas @endif </i></td>
            <td></td>
            @else

            @if(Auth::user()!=null && Auth::user()->tipo=='admin' )
            <td>{{$cronica->nome}}</td>
            <td><i>@if($cronica->finalizada==0) em andamento @elseif($cronica->finalizada==1)finalizada @endif </i></td>
            <td><i>@if($cronica->fechada==0)aberta para novos jogadores @elseif($cronica->fechada==1)inscrições finalizadas @endif </i></td>
            <td>

                <a href="#" class="btn btn-danger" onclick='document.getElementById("formdelete{{ $cronica->id }}").submit()'>Delete</a>
                {{ Form::open(['id' => 'formdelete' . $cronica->id, 'route' => ['admin.cronicas.delete', 'id' => $cronica->id], 'method' => 'delete']) }}
                {{ Form::close() }}
            </td>
            @endif
            <td>{{$cronica->nome}}</td>
            <td><i>@if($cronica->finalizada==0) em andamento @elseif($cronica->finalizada==1)finalizada @endif </i></td>
            <td><i>@if($cronica->fechada==0)aberta para novos jogadores @elseif($cronica->fechada==1)inscrições finalizadas @endif </i></td>
            <td>
                @if($fichaJogador->id_cronica==null&&
                $cronica->finalizada==0&&
                $cronica->fechada==0&&
                $cronica->id!=$fichaJogador->lastCronica)
                <form id="entrar{{$cronica->id}}" method="POST" onsubmit="if (!confirm('Deseja realmente entrar nessa crônica? 
                    Uma vez aqui dentro você não pode sair ou entrar com outra 
                    ficha em uma crônica, até ela ser finalizada.')){return false; }" action="{{route('jogo.cronicas.show', ['id' => $cronica->id])}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id_cronica" value="{{$cronica->id}}"/>
                    <input type="hidden" name="id_fichaUser" value="{{$fichaJogador->id}}"/>
                    <input type="hidden" name="id_user" value="{{$fichaJogador->id_user_ficha}}"/>
                    <input type="hidden" name="nome" value="{{$fichaJogador->nome}}"/>
                    <input type="hidden" name="resumo" value="{{$fichaJogador->resumo}}"/>
                    <input type="hidden" name="id_ficha" value="{{$fichaJogador->id_ficha}}"/>
                    <input class="btn btn-primary" type="submit" value="Entrar"/>
                </form>
                @endif
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>