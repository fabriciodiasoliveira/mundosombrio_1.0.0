<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th></th>
    </tr>
    @foreach($perguntas as $pergunta)
    <tr>
        <td><a href="{{ route('admin.perguntas.show', ['id' => $pergunta->id]) }}">{{$pergunta->pergunta}}</a></td>
        <td>
            <div class="text-left">
                <a href="{{ route('admin.perguntas.edit', ['id' => $pergunta->id]) }}" class="btn btn-primary">Editar pergunta</a>
            </div>
        </td>
    </tr>
    @endforeach
</table>