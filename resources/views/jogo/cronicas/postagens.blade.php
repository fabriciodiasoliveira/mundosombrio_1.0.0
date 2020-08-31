<html lang="{{ app()->getLocale() }}">
    <head>
        @component('components.helpers.headers')@endcomponent
    </head>
    <body>
        <div class="row">
            <div id="postagens" class="col-md-12">
                @foreach($postagens as $postagem)
                <div class="row">
                    <div class="col-md-12">
                        <label>@if($postagem->id_ficha==0)Mestre @else<a href="{{ route('jogo.fichas.showfichauserjogo', ['id' => $postagem->id_ficha,'id_cronica' => $postagem->id_cronica]) }}" target="_blank">{{$postagem->nome}}</a>@endif</label> - {{$postagem->post}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <script>
            @if (!$ultima=='')
                    var ultima = {{ $ultima }};
            @else
                    var ultima = 1;
            @endif

                    function getPostagens() {
                                var url = '../../../jogo/postagens/get/' + ultima + '/' + {{ $id_cronica }};
                        fetch(url, {
                        method: 'get' // opcional 
                        })
                                .then(function (response) {
                                response.text()
                                        .then(function (result) {
                                        var html = result.split("%$");
                                        if(html[1]!=ultima){
                                            ultima = html[1];
                                            document.getElementById('postagens').innerHTML = document.getElementById('postagens').innerHTML + html[0];
                                            window.scrollTo(0,document.body.scrollHeight);
                                        }
                                        })
                                })
                                .catch(function (err) {
                                console.error(err);
                                });
                                window.scrollTo(0,document.body.scrollHeight);
                    }
                    timerPostagem = setInterval( function() {
                      getPostagens();
                    }, 5000 );
                    /*window.onbeforeunload = function(){
                      clearInterval(timerPostagem);
                      return 'Are you sure you want to leave?';
                    };*/
                    
        </script>
    </body>
</html>