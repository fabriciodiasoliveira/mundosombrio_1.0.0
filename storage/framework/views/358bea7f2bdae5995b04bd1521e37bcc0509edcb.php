<script>
    $(document).ready(function(){
    $('#tabela').DataTable(
    {
    "bJQueryUI": true,
            "oLanguage": {
            "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ registros",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                    "sFirst":    "Primeiro",
                            "sPrevious": "Anterior",
                            "sNext":     "Seguinte",
                            "sLast":     "Último"
                    }
            }
    });
    });
    
</script>
<table class="table table-striped" id="tabela">
    <thead>
        <tr>
            <th>Cronicas</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $cronicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cronica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($cronica->nome); ?></td>
            <td><i><?php if($cronica->finalizada==0): ?> em andamento <?php elseif($cronica->finalizada==1): ?>finalizada <?php endif; ?> </i></td>
            <td><i><?php if($cronica->fechada==0): ?>aberta para novos jogadores <?php elseif($cronica->fechada==1): ?>inscrições finalizadas <?php endif; ?> </i></td>
            <td>
                <a href="#" class="btn btn-danger"
                   onclick='if(confirm("Deseja eliminar essa crônica?")){ document.getElementById("formdelete<?php echo e($cronica->id); ?>").submit()}'>Delete</a>
                <form id="formdelete<?php echo e($cronica->id); ?>" action="<?php echo e(route('admin.cronicas.delete', ['id' => $cronica->id])); ?>"
                      method="post">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

                </form>
            </td>
            <td><a href="#" class="btn btn-success" <?php if($cronica->finalizada===1): ?> disabled <?php else: ?>
                   onclick='if(confirm("Deseja finalizar essa crônica?")){ window.location.href = "<?php echo e(route('admin.cronicas.finalizar', ['id' => $cronica->id])); ?>";}' <?php endif; ?> >
                    <?php if($cronica->finalizada===1): ?>Finalizada
                    <?php else: ?> Finalizar
                    <?php endif; ?></a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>