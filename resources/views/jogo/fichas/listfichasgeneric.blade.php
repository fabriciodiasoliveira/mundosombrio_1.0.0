@extends('layouts.app')

@section('content')
<script>
$(document).ready(function(){
 $('#tabela').DataTable(
         {
                "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ fichas",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ fichas",
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
<div class="col-sm-12">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
    </div><br />
    @endif
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped" id="tabela">
                <thead>
                    <tr>
                        <th>Ficha</th>
                        <th>Classe</th>
                        <th>Jogador</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fichasUser as $ficha)
                    @if( $ficha->nome!='')
                    <tr>
                        <td>
                            <a href="{{ route('jogo.fichas.showfichauserjogo', ['id' => $ficha->id, 'id_cronica' => 0]) }}">{{ $ficha->nome }}</a>
                        </td>
                        <td><i>{{ $ficha->classe }}</i></td>
                        <td><i>{{ $ficha->name }}</i></td>
                        <td>
                            @if(!Auth::Guest() && Auth::user()->tipo=='admin')
                            <div class="text-right">
                                <a href="#" class="btn btn-danger" onclick='if(confirm("Deseja eliminar essa ficha?")){document.getElementById("formdelete{{ $ficha->id }}").submit()}'>Delete</a>
                            </div>
                            {{ Form::open(['id' => 'formdelete' . $ficha->id, 'route' => ['admin.fichauser.delete', 'id' => $ficha->id], 'method' => 'delete']) }}
                            {{ Form::close() }}
                            @endif
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection