<html lang="{{ app()->getLocale() }}">
    <head>
        @component('components.helpers.headers')@endcomponent
    </head>
    <body>
        <script>
                    var ultima = 0;

                    function getPostagens() {
                                var url = '../../../jogo/postagens/getxat/' + ultima + '/' + {{ $id_cronica }};
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
                    timerXat = setInterval( function() {
                      getPostagens();
                    }, 5000 );
                   /* window.onbeforeunload = function(){
                      clearInterval(timerXat);
                      return 'Are you sure you want to leave?';
                    };*/
                    
        </script>
        <div class="row">
            <div id="postagens" class="col-md-12">
                @foreach($postagens as $postagem)
                <div class="row">
                    <div class="col-md-12">
                        <label>{{ $postagem->nome }}</label> -{{$postagem->texto}}
                        <script>
                            ultima = {{ $postagem->id }};
                        </script>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    </body>
</html>