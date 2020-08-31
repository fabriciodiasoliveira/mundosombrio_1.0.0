<table class="table table-striped">
    <tr>
        <th>Nome</th>
    </tr>
    @foreach($classes as $classe)
    <tr>
        <td><a href="{{ route('jogo.classes.show', ['id' => $classe->id]) }}">{{$classe->nome}}</a></td>
    </tr>
    @endforeach
</table>