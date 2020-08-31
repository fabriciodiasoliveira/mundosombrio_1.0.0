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
            <th>Cronicas</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($cronicas as $cronica)
        <tr>
            <td>{{$cronica->nome}}</td>
            <td><i>@if($cronica->finalizada==0) em andamento @elseif($cronica->finalizada==1)finalizada @endif </i></td>
            <td><i>@if($cronica->fechada==0)aberta para novos jogadores @elseif($cronica->fechada==1)inscrições finalizadas @endif </i></td>
            <td>
                <a href="#" class="btn btn-danger"
                   onclick='if(confirm("Deseja eliminar essa crônica?")){ document.getElementById("formdelete{{ $cronica->id }}").submit()}'>Delete</a>
                <form id="formdelete{{ $cronica->id }}" action="{{ route('admin.cronicas.delete', ['id' => $cronica->id]) }}"
                      method="post">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                </form>
            </td>
            <td><a href="#" class="btn btn-success" @if($cronica->finalizada===1) disabled @else
                   onclick='if(confirm("Deseja finalizar essa crônica?")){ window.location.href = "{{ route('admin.cronicas.finalizar', ['id' => $cronica->id]) }}";}' @endif >
                    @if($cronica->finalizada===1)Finalizada
                    @else Finalizar
                    @endif</a></td>
        </tr>
        @endforeach
    </tbody>
</table>