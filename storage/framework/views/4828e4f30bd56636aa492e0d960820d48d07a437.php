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
<table id="tabela" class="table table-striped">
    <thead>
        <tr>
            <th>Cronicas</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $cronicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cronica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <?php if(!isset($fichaJogador)): ?>
            <td><a href="<?php echo e(route('jogo.cronicas.showuma', ['id' => $cronica->id])); ?>"><?php echo e($cronica->nome); ?></a></td>
            <td><i><?php if($cronica->finalizada==0): ?> em andamento <?php elseif($cronica->finalizada==1): ?>finalizada <?php endif; ?> </i></td>
            <td><i><?php if($cronica->fechada==0): ?>aberta para novos jogadores <?php elseif($cronica->fechada==1): ?>inscrições finalizadas <?php endif; ?> </i></td>
            <td></td>
            <?php else: ?>

            <?php if(Auth::user()!=null && Auth::user()->tipo=='admin' ): ?>
            <td><?php echo e($cronica->nome); ?></td>
            <td><i><?php if($cronica->finalizada==0): ?> em andamento <?php elseif($cronica->finalizada==1): ?>finalizada <?php endif; ?> </i></td>
            <td><i><?php if($cronica->fechada==0): ?>aberta para novos jogadores <?php elseif($cronica->fechada==1): ?>inscrições finalizadas <?php endif; ?> </i></td>
            <td>

                <a href="#" class="btn btn-danger" onclick='document.getElementById("formdelete<?php echo e($cronica->id); ?>").submit()'>Delete</a>
                <?php echo e(Form::open(['id' => 'formdelete' . $cronica->id, 'route' => ['admin.cronicas.delete', 'id' => $cronica->id], 'method' => 'delete'])); ?>

                <?php echo e(Form::close()); ?>

            </td>
            <?php endif; ?>
            <td><?php echo e($cronica->nome); ?></td>
            <td><i><?php if($cronica->finalizada==0): ?> em andamento <?php elseif($cronica->finalizada==1): ?>finalizada <?php endif; ?> </i></td>
            <td><i><?php if($cronica->fechada==0): ?>aberta para novos jogadores <?php elseif($cronica->fechada==1): ?>inscrições finalizadas <?php endif; ?> </i></td>
            <td>
                <?php if($fichaJogador->id_cronica==null&&
                $cronica->finalizada==0&&
                $cronica->fechada==0&&
                $cronica->id!=$fichaJogador->lastCronica): ?>
                <form id="entrar<?php echo e($cronica->id); ?>" method="POST" onsubmit="if (!confirm('Deseja realmente entrar nessa crônica? 
                    Uma vez aqui dentro você não pode sair ou entrar com outra 
                    ficha em uma crônica, até ela ser finalizada.')){return false; }" action="<?php echo e(route('jogo.cronicas.show', ['id' => $cronica->id])); ?>">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="id_cronica" value="<?php echo e($cronica->id); ?>"/>
                    <input type="hidden" name="id_fichaUser" value="<?php echo e($fichaJogador->id); ?>"/>
                    <input type="hidden" name="id_user" value="<?php echo e($fichaJogador->id_user_ficha); ?>"/>
                    <input type="hidden" name="nome" value="<?php echo e($fichaJogador->nome); ?>"/>
                    <input type="hidden" name="resumo" value="<?php echo e($fichaJogador->resumo); ?>"/>
                    <input type="hidden" name="id_ficha" value="<?php echo e($fichaJogador->id_ficha); ?>"/>
                    <input class="btn btn-primary" type="submit" value="Entrar"/>
                </form>
                <?php endif; ?>
            </td>
        </tr>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>