<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th></th>
        <th></th>
    </tr>
    <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><a href="<?php echo e(route('admin.classes.show', ['id' => $classe->id])); ?>"><?php echo e($classe->nome); ?></a></td>
        <td>
            <div class="text-right">
                <a href="#" class="btn btn-danger" onclick='if(confirm("Deseja eliminar essa classe?")){document.getElementById("formdelete<?php echo e($classe->id); ?>").submit()}'>Delete</a>
            </div>
            <?php echo e(Form::open(['id' => 'formdelete' . $classe->id, 'route' => ['admin.classes.delete', 'id' => $classe->id], 'method' => 'delete'])); ?>

            <?php echo e(Form::close()); ?>

        </td>
        <td>
            <div class="text-left">
                <a href="<?php echo e(route('admin.classes.edit', ['id' => $classe->id])); ?>" class="btn btn-primary">Editar classe</a>
            </div>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>