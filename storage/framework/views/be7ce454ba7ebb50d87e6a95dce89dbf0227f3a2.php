<?php $__env->startSection('content'); ?>
<div class="col-sm-12">
    <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session()->get('success')); ?>  
    </div><br />
    <?php endif; ?>
    <div class="row">
        <?php if(isset($falha)): ?>
        <div class="col-sm-12">
            <h3>Aconteceu um erro. E-mail não enviado</h3>
        </div>
        <?php else: ?>
        <div class="text-left col-sm-12">
            <h1>Link do formulário de recuperação de senha enviado</h1>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>