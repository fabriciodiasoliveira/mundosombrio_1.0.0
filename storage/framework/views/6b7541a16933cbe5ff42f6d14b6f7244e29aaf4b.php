<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <?php $__env->startComponent('components.helpers.headers'); ?><?php echo $__env->renderComponent(); ?>
    </head>
    <body>
        <div class="row">
            <div id="postagens" class="col-md-12">
                <?php $__currentLoopData = $postagens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postagem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <label><?php if($postagem->id_ficha==0): ?>Mestre <?php else: ?><a href="<?php echo e(route('jogo.fichas.showfichauserjogo', ['id' => $postagem->id_ficha,'id_cronica' => $postagem->id_cronica])); ?>" target="_blank"><?php echo e($postagem->nome); ?></a><?php endif; ?></label> - <?php echo e($postagem->post); ?>

                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <script>
            <?php if(!$ultima==''): ?>
                    var ultima = <?php echo e($ultima); ?>;
            <?php else: ?>
                    var ultima = 1;
            <?php endif; ?>

                    function getPostagens() {
                                var url = '../../../jogo/postagens/get/' + ultima + '/' + <?php echo e($id_cronica); ?>;
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