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
<table class="table table-striped" id="tabela">
    <thead>
        <tr>
            <th>Cronicas</th>
            <th></th>
            @if(isset($fichaJogador))
            <th></th>
            <th></th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($cronicasPode as $cronica)
        <tr>
            <td>{{$cronica[0]->nome}}</td>
            <td><i>@if($cronica[0]->finalizada==0) em andamento @elseif($cronica[0]->finalizada==1)finalizada @endif </i></td>
            <td><i>@if($cronica[0]->fechada==0)aberta para novos jogadores @elseif($cronica[0]->fechada==1)inscrições finalizadas @endif </i></td>
            <td>
                @if($fichaJogador->id_cronica==null&&
                $cronica[0]->finalizada==0&&
                $cronica[0]->fechada==0&&
                $cronica[0]->id!=$fichaJogador->lastCronica&&
                $cronica[1] == 0)
                <form id="entrar{{$cronica[0]->id}}" method="POST" onsubmit="if(!confirm('Deseja realmente entrar nessa crônica? Uma vez aqui dentro você não pode sair ou entrar com outra ficha em uma crônica, até ela ser finalizada.')){return false; }" action="{{route('jogo.cronicas.show', ['id' => $cronica[0]->id])}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id_cronica" value="{{$cronica[0]->id}}"/>
                    <input type="hidden" name="id_fichaUser" value="{{$fichaJogador->id}}"/>
                    <input type="hidden" name="id_user" value="{{$fichaJogador->id_user_ficha}}"/>
                    <input type="hidden" name="nome" value="{{$fichaJogador->nome}}"/>
                    <input type="hidden" name="resumo" value="{{$fichaJogador->resumo}}"/>
                    <input type="hidden" name="anotacoes" value="{{$fichaJogador->anotacoes}}"/>
                    <input type="hidden" name="id_ficha" value="{{$fichaJogador->id_ficha}}"/>
                    <input class="btn btn-primary" type="submit" value="Entrar"/>
                </form>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>