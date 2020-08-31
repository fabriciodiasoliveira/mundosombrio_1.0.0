<table class="table table-striped">
    <tr>
        <th>Cronicas</th>
        <th></th>
        @if(isset($fichaJogador))
        <th></th>
        <th></th>
        @endif
    </tr>
    @foreach($cronicas as $cronica)
    <tr>
        <td>{{$cronica->nome}}</td>
        <td><i>@if($cronica->finalizada==0) em andamento @elseif($cronica->finalizada==1)finalizada @endif </i></td>
        <td><i>@if($cronica->fechada==0)aberta para novos jogadores @elseif($cronica->fechada==1)inscrições finalizadas @endif </i></td>
        <td>
            <a href="#" class="btn btn-danger" onclick='document.getElementById("formdelete{{ $cronica->id }}").submit()'>Delete</a>
            {{ Form::open(['id' => 'formdelete' . $cronica->id, 'route' => ['admin.cronicas.delete', 'id' => $cronica->id], 'method' => 'delete']) }}
            {{ Form::close() }}
        </td>
    </tr>
    @endforeach
</table>