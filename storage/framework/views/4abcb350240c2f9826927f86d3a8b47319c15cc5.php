<?php $__env->startSection('content'); ?>
<div class="col-sm-12">
    <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session()->get('success')); ?>  
    </div><br />
    <?php endif; ?>
    <div class="row">
        <div>
            <?php $__env->startComponent('components.jogo.listfichas', compact('fichasJogador')); ?><?php echo $__env->renderComponent(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>