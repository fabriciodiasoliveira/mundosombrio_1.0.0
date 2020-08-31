<script>
$(document).ready(function(){
 $('#tabela').DataTable(
         {
                "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ crônicas",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ crônicas",
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
            <?php if(isset($fichaJogador)): ?>
            <th></th>
            <th></th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $cronicasPode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cronica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($cronica[0]->nome); ?></td>
            <td><i><?php if($cronica[0]->finalizada==0): ?> em andamento <?php elseif($cronica[0]->finalizada==1): ?>finalizada <?php endif; ?> </i></td>
            <td><i><?php if($cronica[0]->fechada==0): ?>aberta para novos jogadores <?php elseif($cronica[0]->fechada==1): ?>inscrições finalizadas <?php endif; ?> </i></td>
            <td>
                <?php if($fichaJogador->id_cronica==null&&
                $cronica[0]->finalizada==0&&
                $cronica[0]->fechada==0&&
                $cronica[0]->id!=$fichaJogador->lastCronica&&
                $cronica[1] == 0): ?>
                <form id="entrar<?php echo e($cronica[0]->id); ?>" method="POST" onsubmit="if(!confirm('Deseja realmente entrar nessa crônica? Uma vez aqui dentro você não pode sair ou entrar com outra ficha em uma crônica, até ela ser finalizada.')){return false; }" action="<?php echo e(route('jogo.cronicas.show', ['id' => $cronica[0]->id])); ?>">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="id_cronica" value="<?php echo e($cronica[0]->id); ?>"/>
                    <input type="hidden" name="id_fichaUser" value="<?php echo e($fichaJogador->id); ?>"/>
                    <input type="hidden" name="id_user" value="<?php echo e($fichaJogador->id_user_ficha); ?>"/>
                    <input type="hidden" name="nome" value="<?php echo e($fichaJogador->nome); ?>"/>
                    <input type="hidden" name="resumo" value="<?php echo e($fichaJogador->resumo); ?>"/>
                    <input type="hidden" name="anotacoes" value="<?php echo e($fichaJogador->anotacoes); ?>"/>
                    <input type="hidden" name="id_ficha" value="<?php echo e($fichaJogador->id_ficha); ?>"/>
                    <input class="btn btn-primary" type="submit" value="Entrar"/>
                </form>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>