<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($classes as $classe)
    <tr>
        <td><a href="{{ route('admin.classes.show', ['id' => $classe->id]) }}">{{$classe->nome}}</a></td>
        <td>
            <div class="text-right">
                <a href="#" class="btn btn-danger" onclick='if(confirm("Deseja eliminar essa classe?")){document.getElementById("formdelete{{ $classe->id }}").submit()}'>Delete</a>
            </div>
            {{ Form::open(['id' => 'formdelete' . $classe->id, 'route' => ['admin.classes.delete', 'id' => $classe->id], 'method' => 'delete']) }}
            {{ Form::close() }}
        </td>
        <td>
            <div class="text-left">
                <a href="{{ route('admin.classes.edit', ['id' => $classe->id]) }}" class="btn btn-primary">Editar classe</a>
            </div>
        </td>
    </tr>
    @endforeach
</table>