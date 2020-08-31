<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inserir classe</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('admin.classes.store')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <?php $__env->startComponent('components.classes.classes'); ?><?php echo $__env->renderComponent(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>