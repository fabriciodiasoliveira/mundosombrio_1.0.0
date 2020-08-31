<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Alterar ficha</div>

                <div class="panel-body">
                    <?php echo e(Form::open(['method' => 'PUT', 'route' => ['admin.fichas.update', 'id' => $ficha->id]])); ?>

                        <?php $__env->startComponent('components.fichas.fichas', compact('ficha')); ?><?php echo $__env->renderComponent(); ?>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>