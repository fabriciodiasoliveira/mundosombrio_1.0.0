<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th></th>
    </tr>
    @foreach($fichasJogador as $ficha)
    <tr>
        <td>
            <a href="{{ route('jogo.fichas.showfichauser', ['id' => $ficha->id]) }}" target="_blank">{{$ficha->nome}}</a>
        </td>
        <td><input type="button" value="-" class="btn btn-primary" onclick="if(confirm('Deseja mesmo retirar essa ficha?')retirarFicha({{ $ficha->id }});"/></td>
    </tr>
    @endforeach
</table>