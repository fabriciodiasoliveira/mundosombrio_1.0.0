<?php $__env->startSection('content'); ?>
<?php if(session()->get('success')): ?>
<div class="alert alert-success">
    <?php echo e(session()->get('success')); ?>  
</div><br />
<?php endif; ?>
<?php if(session()->get('error')): ?>
<div class="alert alert-danger">
    <?php echo e(session()->get('error')); ?>  
</div><br />
<?php endif; ?>
<?php if(session()->get('info')): ?>
<div class="alert alert-info">
    <?php echo e(session()->get('info')); ?>  
</div><br />
<?php endif; ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastre-se</div>

                <div class="panel-body">
                    <?php echo e(Form::open(['method' => 'PUT', 'route' => ['admin.users.update', 'id' => $user->id]])); ?>

                        <?php $__env->startComponent('components.users.users', compact('user')); ?><?php echo $__env->renderComponent(); ?>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>