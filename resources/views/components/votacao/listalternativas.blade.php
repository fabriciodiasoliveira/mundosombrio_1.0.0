<table class="table table-striped">
    @foreach($alternativas as $alternativa)
    <tr>
        <td colspan="3">
            <div class="col-md-2">
            </div>
            {{ $alternativa['alternativa'] }}
        </td>
        <td>
            <input type="button" class="btn btn-danger" onclick="deletarAlternativa({{ $alternativa['id'] }})" value="Delete"/>
            <form id="my-form-{{ $alternativa['id'] }}" action="{{ route('admin.alternativas.delete') }}"
                  method="post">
              <!--@csrf-->
              {{ csrf_field() }}
              <input name="id" value="{{ $alternativa['id'] }}" type="hidden"/>
            </form>
        </td>
    </tr>
    @endforeach
    <tr>
        <th>
            Nova alternativa
        </th>
        <td>
            <form id="my-form" action="{{ route('admin.alternativas.store') }}" method="post" onsubmit="cadatrarAlternativa(); return false;">
                {{ csrf_field() }}
                <input id="alternativa" type="text" class="form-control" name="alternativa" required autofocus/>
                <input type="hidden" name="id_pergunta" value="{{ $pergunta['id'] }}"/>
                <input type="submit" class="btn btn-primary" value="Cadastrar alternativa"/>
            </form>
        </td>
        
    </tr>
</table>