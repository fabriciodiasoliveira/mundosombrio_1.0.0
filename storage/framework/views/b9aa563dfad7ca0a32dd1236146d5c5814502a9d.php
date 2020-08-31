<table class="table table-striped">
    <tr>
        <th>Selecione uma classe</th>
    </tr>
    <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td>
            <a href="<?php echo e(route('jogo.classes.show', ['id' => $classe->id])); ?>"><?php echo e($classe->nome); ?></a>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>