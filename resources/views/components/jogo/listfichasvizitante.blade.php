
<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th></th>
    </tr>
    @foreach($fichasJogador as $ficha)
    <tr>
        <td>
            <a href="{{ route('jogo.fichas.showfichauserjogo', ['id' => $ficha->id]) }}">{{$ficha->nome}}</a>
        </td>
        <td>
        @if(isset($cronica) && Auth::user()!=null)
            @if($cronica->id_user==Auth::user()->id)
            <form id="entrar{{$cronica->id}}" method="POST" action="{{route('jogo.cronicas.show', ['id' => $cronica->id])}}">
                {{ csrf_field() }}
                <input type="hidden" name="id_cronica" value="{{$ficha->id_cronica}}"/>
                <input type="hidden" name="id_fichaUser" value="{{$ficha->id}}"/>
                <input type="hidden" name="nome" value="{{$ficha->nome}}"/>
                <input type="hidden" name="resumo" value="{{$ficha->resumo}}"/>
                <input type="hidden" name="id_ficha" value="{{$ficha->id_ficha}}"/>
                <input class="btn btn-primary" type="submit" value="Liberar ficha"/>
            </form>
            @endif
        @endif
        </td>
    </tr>
    @endforeach
</table>