<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th></th>
    </tr>
    <?php $__currentLoopData = $perguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pergunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><a href="<?php echo e(route('admin.perguntas.show', ['id' => $pergunta->id])); ?>"><?php echo e($pergunta->pergunta); ?></a></td>
        <td>
            <div class="text-left">
                <a href="<?php echo e(route('admin.perguntas.edit', ['id' => $pergunta->id])); ?>" class="btn btn-primary">Editar pergunta</a>
            </div>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>