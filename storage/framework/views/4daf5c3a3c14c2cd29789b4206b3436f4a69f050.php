<table class="table table-striped">
    <?php $__currentLoopData = $alternativas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alternativa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td colspan="3">
            <div class="col-md-2">
            </div>
            <?php echo e($alternativa['alternativa']); ?>

        </td>
        <td>
            <input type="button" class="btn btn-danger" onclick="deletarAlternativa(<?php echo e($alternativa['id']); ?>)" value="Delete"/>
            <form id="my-form-<?php echo e($alternativa['id']); ?>" action="<?php echo e(route('admin.alternativas.delete')); ?>"
                  method="post">
              <!--@csrf-->
              <?php echo e(csrf_field()); ?>

              <input name="id" value="<?php echo e($alternativa['id']); ?>" type="hidden"/>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <th>
            Nova alternativa
        </th>
        <td>
            <form id="my-form" action="<?php echo e(route('admin.alternativas.store')); ?>" method="post" onsubmit="cadatrarAlternativa(); return false;">
                <?php echo e(csrf_field()); ?>

                <input id="alternativa" type="text" class="form-control" name="alternativa" required autofocus/>
                <input type="hidden" name="id_pergunta" value="<?php echo e($pergunta['id']); ?>"/>
                <input type="submit" class="btn btn-primary" value="Cadastrar alternativa"/>
            </form>
        </td>
        
    </tr>
</table>