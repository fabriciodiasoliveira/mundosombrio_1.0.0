<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <h1><?php echo e($ficha->nome); ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>
            <?php echo nl2br(e($ficha->resumo)); ?>

        </label>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>