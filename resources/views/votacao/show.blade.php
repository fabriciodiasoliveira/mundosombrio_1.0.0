@extends('layouts.app')

@section('content')
<script>
function cadatrarAlternativa() {
        var url = '{{ route('admin.alternativas.store') }}';
        var form = new FormData(document.getElementById('my-form'));
        var alternativas = document.getElementById('alternativas');
            fetch(url, {
                method: 'POST',
                headers : new Headers(),
                body:form
            }).then(function (data) {
                data.text()
                        .then(function (result) {
                            alternativas.innerHTML=result;
                        })
            }).catch(function (error) {
            console.log('Request failure: ', error);
            });
            document.getElementById('alternativa').focus();
    }
    function deletarAlternativa(id) {
        var url = '{{ route('admin.alternativas.delete') }}';
        var form = new FormData(document.getElementById('my-form-'+id));
        var alternativas = document.getElementById('alternativas');
        document.getElementById('alternativa');
            fetch(url, {
                method: 'POST',
                headers : new Headers(),
                body:form
            }).then(function (data) {
                data.text()
                        .then(function (result) {
                            alternativas.innerHTML=result;
                        })
            }).catch(function (error) {
            console.log('Request failure: ', error);
            });
         document.getElementById('alternativa').focus();
    }
</script>
<div class="row">
    <div class="col-md-12">
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}  
        </div><br />
        @endif
        <h1>{{ $pergunta->pergunta }}</h1>
    </div>
</div>
<div id="alternativas" class="row">
    @component('components.votacao.listalternativas', compact('alternativas','pergunta'))@endcomponent
</div>
@endsection