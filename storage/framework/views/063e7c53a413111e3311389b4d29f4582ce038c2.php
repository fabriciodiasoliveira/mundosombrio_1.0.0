<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <?php $__env->startComponent('components.helpers.headers'); ?><?php echo $__env->renderComponent(); ?>
    </head>
    <body>
        <script>
                    var ultima = 0;

                    function getPostagens() {
                                var url = '../../../jogo/postagens/getxat/' + ultima + '/' + <?php echo e($id_cronica); ?>;
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
                <?php $__currentLoopData = $postagens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postagem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <label><?php echo e($postagem->nome); ?></label> -<?php echo e($postagem->texto); ?>

                        <script>
                            ultima = <?php echo e($postagem->id); ?>;
                        </script>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        
    </body>
</html>