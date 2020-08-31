
<script>
function votar(alternativa){
    var url = 'votos/'+alternativa+'/'+'{{ $pergunta->id }}';
    fetch(url, {
                method: 'GET',
                headers : new Headers(),
            }).then(function (data) {
                data.text()
                        .then(function (result) {
                            document.getElementById('votos').innerHTML=result;
                            console.log(result);
                        })
            }).catch(function (error) {
            console.log('Request failure: ', error);
            });
            alert('Voto computado.');
}
</script>
<table class="table table-striped">
    <tr>
        <td colspan="3">{{ $pergunta->pergunta }}</td>
    </tr>
    @foreach($alternativas as $alternativa)
    <tr>
        <td>{{ $alternativa['alternativa'] }}</td>
        <td>{{ $alternativa['total'] }}</td>
        <td>
            {{ csrf_field() }}
            <input type="hidden" name="id_pergunta" value="{{ $pergunta->id }}"/>
            <input type="hidden" name="alternativa" value="{{ $alternativa['alternativa'] }}"/>
            <input class="btn btn-primary" type="button" value="✔" onclick="votar('{{ $alternativa['alternativa'] }}')"/>
        </td>
    </tr>
    @endforeach
</table>

