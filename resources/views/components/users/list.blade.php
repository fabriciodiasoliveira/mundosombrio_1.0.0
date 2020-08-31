<script>
    $(document).ready(function(){
    $('#tabela').DataTable(
    {
    "bJQueryUI": true,
            "oLanguage": {
            "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ registros",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
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
        <th>Nome</th>
        <th>Tipo</th>
        <th>E-mail</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->tipo}}</td>
        <td>{{$user->email}}</td>
        <td>
            @if(Auth::user()->id!=$user->id)
            <div class="text-right">
                <a href="#" class="btn btn-danger" onclick='if(confirm("Deseja eliminar esse usuário?")){document.getElementById("formdelete{{ $user->id }}").submit()}'>Delete</a>
            </div>
            {{ Form::open(['id' => 'formdelete' . $user->id, 'route' => ['admin.users.delete', 'id' => $user->id], 'method' => 'delete']) }}
                                {{ Form::close() }}
            @endif
        </td>
        <td>
            <div class="text-left">
            <a href="{{ route('admin.users.edit', ['id' => $user->id]) }}" class="btn btn-primary">Alterar usuário</a>
        </div>
        </td>
    </tr>
    @endforeach
    <tbody>
</table>