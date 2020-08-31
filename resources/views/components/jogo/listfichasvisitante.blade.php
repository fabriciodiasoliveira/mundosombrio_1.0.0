<table class="table table-striped" id="tabela">
    <tr>
        <th>Nome</th>
        <th></th>
    </tr>
    @foreach($fichasJogador as $ficha)
    <tr>
        <td width="30%">
            <a href="{{ route('jogo.fichas.showfichauserjogo', ['id' => $ficha->id, 'id_cronica' => $cronica->id]) }}" target="_blank">{{$ficha->nome}}</a>
        </td>
        <td>
            @if(Auth::user()!=null && Auth::user()->id==$cronica->id_user)
            <a class="btn btn-primary" onclick="if(confirm('Deseja mesmo retirar essa ficha?'))retirarFicha({{ $ficha->id }});">-</a>
            @endif
        </td>
    </tr>
    @endforeach
</table>