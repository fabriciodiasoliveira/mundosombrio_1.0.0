<?php $__env->startSection('content'); ?>
<div class="col-sm-12">
    <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session()->get('success')); ?>  
    </div><br />
    <?php endif; ?>
    <div class="row">
        <div class="text-left">
            <a href="<?php echo e(route('admin.users.createadmin')); ?>" class="btn btn-primary">Criar usuário</a>
        </div>
        <div>
            <?php $__env->startComponent('components.users.list', compact('users')); ?><?php echo $__env->renderComponent(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>