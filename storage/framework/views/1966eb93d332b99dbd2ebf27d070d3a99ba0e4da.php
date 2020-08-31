<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <h1><?php echo e($cronica->nome); ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Mestre - <?php echo e($mestre->name); ?></h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label><?php echo nl2br(e($cronica->resumo)); ?></label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>Fichas participantes</label>
        <?php $__env->startComponent('components.jogo.listfichasvisitantenull', compact('fichasJogador', 'cronica')); ?><?php echo $__env->renderComponent(); ?>
    </div>
</div>
<div class="row">
    <div id="postagens" class="col-md-12">
        <?php $__currentLoopData = $postagens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postagem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <div class="row">
            <div class="col-md-12">
                <label><?php if($postagem->id_ficha==0): ?>Mestre <?php else: ?><a href="<?php echo e(route('jogo.fichas.showfichauserjogo', ['id' => $postagem->id_ficha,'id_cronica' => 0])); ?>"><?php echo e($postagem->nome); ?></a><?php endif; ?></label> - <?php echo e($postagem->post); ?>

            </div>
        </div>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>