
<table class="table table-striped">
    <tr>
        <th>Nome</th>
    </tr>
    @foreach($fichasJogador as $ficha)
    <tr>
        <td>
            <a href="{{ route('jogo.fichas.showfichauserjogo', ['id' => $ficha->id, 'id_cronica' => 0]) }}">{{$ficha->nome}}</a>
        </td>
    </tr>
    @endforeach
</table>