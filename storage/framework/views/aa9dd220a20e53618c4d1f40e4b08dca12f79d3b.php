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
        <th>Nome</th>
        <th>Tipo</th>
        <th>E-mail</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($user->name); ?></td>
        <td><?php echo e($user->tipo); ?></td>
        <td><?php echo e($user->email); ?></td>
        <td>
            <?php if(Auth::user()->id!=$user->id): ?>
            <div class="text-right">
                <a href="#" class="btn btn-danger" onclick='if(confirm("Deseja eliminar esse usuário?")){document.getElementById("formdelete<?php echo e($user->id); ?>").submit()}'>Delete</a>
            </div>
            <?php echo e(Form::open(['id' => 'formdelete' . $user->id, 'route' => ['admin.users.delete', 'id' => $user->id], 'method' => 'delete'])); ?>

                                <?php echo e(Form::close()); ?>

            <?php endif; ?>
        </td>
        <td>
            <div class="text-left">
            <a href="<?php echo e(route('admin.users.edit', ['id' => $user->id])); ?>" class="btn btn-primary">Alterar usuário</a>
        </div>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tbody>
</table>