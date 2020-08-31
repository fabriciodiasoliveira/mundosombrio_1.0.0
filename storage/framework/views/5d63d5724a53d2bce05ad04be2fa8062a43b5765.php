<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <?php if(session()->get('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>  
        </div><br />
        <?php endif; ?>
        <h1><?php echo e($classe->nome); ?></h1>
    </div>
</div>
<div class="row">
    <table class="table table-striped">
        <tr>
            <th>
                <div class="col-md-2">

                </div>
                Ficha
            </th>
            <th>
            </th>
        </tr>
        <?php $__currentLoopData = $fichas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ficha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <div class="col-md-2">
                </div>
                <a href="<?php echo e(route('admin.fichas.edit', ['id' => $ficha->id])); ?>"><?php echo e($ficha->nome); ?></a>
            </td>
            <td>
                <a href="<?php echo e(route('admin.fichas.show', ['id' => $ficha->id])); ?>" class="btn btn-primary">Ver</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<div class="row">
    <div class="col-md-12">
        <a href="<?php echo e(route('admin.fichas.create', ['id' => $classe->id])); ?>" class="btn btn-primary">Adicionar ficha</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>