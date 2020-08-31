
<table class="table table-striped">
    <tr>
        <th>Nome</th>
    </tr>
    <?php $__currentLoopData = $fichasJogador; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ficha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td>
            <a href="<?php echo e(route('jogo.fichas.showfichauserjogo', ['id' => $ficha->id, 'id_cronica' => 0])); ?>"><?php echo e($ficha->nome); ?></a>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>