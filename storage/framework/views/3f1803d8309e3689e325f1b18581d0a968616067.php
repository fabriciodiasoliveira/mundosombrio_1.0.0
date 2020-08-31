<?php $__env->startSection('content'); ?>
<script>
$(document).ready(function(){
 $('#tabela').DataTable(
         {
                "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ fichas",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ fichas",
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
<div class="col-sm-12">
    <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session()->get('success')); ?>  
    </div><br />
    <?php endif; ?>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped" id="tabela">
                <thead>
                    <tr>
                        <th>Ficha</th>
                        <th>Classe</th>
                        <th>Jogador</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $fichasUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ficha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if( $ficha->nome!=''): ?>
                    <tr>
                        <td>
                            <a href="<?php echo e(route('jogo.fichas.showfichauserjogo', ['id' => $ficha->id, 'id_cronica' => 0])); ?>"><?php echo e($ficha->nome); ?></a>
                        </td>
                        <td><i><?php echo e($ficha->classe); ?></i></td>
                        <td><i><?php echo e($ficha->name); ?></i></td>
                        <td>
                            <?php if(!Auth::Guest() && Auth::user()->tipo=='admin'): ?>
                            <div class="text-right">
                                <a href="#" class="btn btn-danger" onclick='if(confirm("Deseja eliminar essa ficha?")){document.getElementById("formdelete<?php echo e($ficha->id); ?>").submit()}'>Delete</a>
                            </div>
                            <?php echo e(Form::open(['id' => 'formdelete' . $ficha->id, 'route' => ['admin.fichauser.delete', 'id' => $ficha->id], 'method' => 'delete'])); ?>

                            <?php echo e(Form::close()); ?>

                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>