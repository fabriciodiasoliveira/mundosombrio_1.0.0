<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th></th>
    </tr>
    <?php $__currentLoopData = $fichasJogador; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ficha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td>
            <a href="<?php echo e(route('jogo.fichas.showfichauser', ['id' => $ficha->id])); ?>" target="_blank"><?php echo e($ficha->nome); ?></a>
        </td>
        <td><input type="button" value="-" class="btn btn-primary" onclick="if(confirm('Deseja mesmo retirar essa ficha?')retirarFicha(<?php echo e($ficha->id); ?>);"/></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>