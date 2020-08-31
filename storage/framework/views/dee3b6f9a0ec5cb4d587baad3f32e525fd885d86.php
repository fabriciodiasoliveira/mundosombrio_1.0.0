<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <?php if(session()->get('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>  
        </div><br />
        <?php endif; ?>
        
    </div>
</div>
<?php if($classe->nome==='Vampiro'): ?>
<div class="row">
    <div class="col-md-2">
        <img class="visible-lg" src="<?php echo e(asset('images/vampiro.jpg')); ?>" alt="logo"/>
    </div>
</div>
<?php elseif($classe->nome==='Lobisomem'): ?>
<div class="row">
    <div class="col-md-2">
        <img class="visible-lg" src="<?php echo e(asset('images/lobo.jpg')); ?>" alt="logo"/>
    </div>
</div>
<?php elseif($classe->nome==='Mago'): ?>
<div class="row">
    <div class="col-md-2">
        <img class="visible-lg" src="<?php echo e(asset('images/mago.jpg')); ?>" alt="logo"/>
    </div>
</div>
<?php endif; ?>
<div class="row">
    <div class="col-md-12">
        <h1><?php echo e($classe->nome); ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        Ao participar de uma crônica com participação de magos, vampiros e lobisomens juntos, 
        façam de tudo para esconder sua natureza. As três classes são inimigas mortais uma da outra,
        com gritante vantagem para lobisomens. Todos podem ajudar em uma missão, mas seu colega não precisa 
        saber de tudo sobre você.
    </div>
</div>
<div class="row">
    <table class="table table-striped">
        <tr>
            <th></th>
            <th id="resumo">
                <div id="button-resumo">
                    <a data-toggle="collapse" href="#classe" href="#" class="btn btn-danger">Mostrar regras</a>
                </div>
                <div class="collapse" id="classe">
                   <?php echo nl2br(e($classe->descricao)); ?>

                </div>
                <div id="poderes">
                   <?php echo nl2br(e($classe->poderes)); ?>

                </div>
            </th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $fichas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ficha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td id="ficha-<?php echo e($ficha->id); ?>">
                    
            </td>
            <td>
                <div class="col-md-2">
                    <?php echo e($ficha->nome); ?>

                </div>
                <div class="col-md-5">
                    <a href="<?php echo e(route('jogo.fichas.show', ['id' => $ficha->id, 'id_fichaUser' => 0])); ?>" class="btn btn-primary">Selecionar
                    <?php if($classe->nome=='Vampiro'): ?>Clã <?php endif; ?>
                    <?php if($classe->nome=='Lobisomem'): ?>Tribo <?php endif; ?>
                    <?php if($classe->nome=='Mago'): ?>Tradição <?php endif; ?>
                    </a> 
                    <a data-toggle="collapse" href="#painel-<?php echo e($ficha->id); ?>" class="btn btn-primary">Mostrar descrição</a>
                </div>
                <div id="painel-<?php echo e($ficha->id); ?>" class="collapse col-md-5">
                    <?php if($ficha->nome=='Assamita'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/clans/assamita.jpg')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Brujah'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/clans/brujah.jpg')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php elseif($ficha->nome=='Gangrel'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/clans/gangrel.jpg')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Giovanni'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/clans/giovanni.jpg')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php elseif($ficha->nome=='Lassombra'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/clans/lassombra.jpg')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Malkaviano'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/clans/malkaviano.jpg')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php elseif($ficha->nome=='Ravnos'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/clans/ravnos.jpg')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Seguidores de set'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/clans/setita.jpg')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php elseif($ficha->nome=='Toreador'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/clans/toreador.jpg')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Tremere'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/clans/tremere.jpg')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php elseif($ficha->nome=='Tzimice'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/clans/tzimice.jpg')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Ventrue'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/clans/ventrue.jpg')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php elseif($ficha->nome=='Nosferatu'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/clans/nosferatu.jpg')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Andarilhos do asfalto'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tribos/andarilhos do asfalto.png')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Cria de fenris'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tribos/cria de fenris.png')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php elseif($ficha->nome=='Fianna'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tribos/fianna.png')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Filhos de Gaia'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tribos/filhos de gaia.png')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php elseif($ficha->nome=='Fúrias negras'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tribos/furias negras.png')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Garras vermelhas'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tribos/garras vermelhas.png')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php elseif($ficha->nome=='Peregrinos silenciosos'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tribos/peregrinos silenciosos.png')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Portadores da luz'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tribos/portadores da luz.png')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php elseif($ficha->nome=='Presas de prata'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tribos/presas de prata.png')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Roedores de ossos'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tribos/roedores de ossos.png')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php elseif($ficha->nome=='Senhores das sombras'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tribos/senhores das sombras.png')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Uktena'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tribos/fianna.png')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php elseif($ficha->nome=='Wendigo'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tribos/filhos de gaia.png')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Adeptos da virtualidade'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tradicoes/adeptos da virtualidade.jpg')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Coro celestial'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tradicoes/coro celestial.jpg')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php elseif($ficha->nome=='Culto do êxtase'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tradicoes/culto do extase.jpg')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Eutanatos'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tradicoes/eutanatos.jpg')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php elseif($ficha->nome=='Filhos do éter'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tradicoes/filhos do eter.jpg')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Irmandade de akasha'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tradicoes/irmandade de akasha.jpg')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php elseif($ficha->nome=='Oradores dos sonhos'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tradicoes/oradores dos sonhos.jpg')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Ordem de Hermes'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tradicoes/ordem de hermes.jpg')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php elseif($ficha->nome=='Vazios'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tradicoes/vazios.jpg')); ?>" alt="logo" align="left"/>
                        </div>
                    <?php elseif($ficha->nome=='Verbena'): ?>
                        <div class="text-center">
                            <img class="visible-lg" src="<?php echo e(asset('images/tradicoes/verbena.jpg')); ?>" alt="logo" align="right"/>
                        </div>
                    <?php endif; ?>
                    <?php echo nl2br(e($ficha->resumo)); ?>

                </div>
            </td>
            <td>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->startComponent('components.gerais.scripts'); ?><?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>