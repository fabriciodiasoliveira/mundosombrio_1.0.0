<?php $__env->startSection('content'); ?>
<div class="col-sm-12">
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
    <div class="row">
        <div class="col-sm-12">
            <div class="text-left">
                
                <?php if(Auth::user()!=null &&Auth::user()->tipo=='admin'): ?>
                <?php $__env->startComponent('components.cronicas.listadministrador', compact('cronicas')); ?><?php echo $__env->renderComponent(); ?>
                <?php else: ?>
                <?php $__env->startComponent('components.cronicas.list', compact('cronicas')); ?><?php echo $__env->renderComponent(); ?>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>