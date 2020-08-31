<table class="table table-striped" id="tabela">
    <tr>
        <th>Nome</th>
        <th></th>
    </tr>
    <?php $__currentLoopData = $fichasJogador; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ficha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td width="30%">
            <a href="<?php echo e(route('jogo.fichas.showfichauserjogo', ['id' => $ficha->id, 'id_cronica' => $cronica->id])); ?>" target="_blank"><?php echo e($ficha->nome); ?></a>
        </td>
        <td>
            <?php if(Auth::user()!=null && Auth::user()->id==$cronica->id_user): ?>
            <a class="btn btn-primary" onclick="if(confirm('Deseja mesmo retirar essa ficha?'))retirarFicha(<?php echo e($ficha->id); ?>);">-</a>
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>