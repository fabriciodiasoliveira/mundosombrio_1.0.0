<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <h1><?php echo e($classe->nome); ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h1><?php echo e($fichaJogador->nome); ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2><?php echo e($ficha->nome); ?></h2>
    </div>
</div>

<div class="row">
    <div id="button" class="col-md-12">
        <a class="btn btn-primary" data-toggle="collapse" href="#resumo-ficha">Mostrar característica 
                                                                               <?php if($classe->id===1): ?>do clã
                                                                               <?php elseif($classe->id===2): ?>da tribo
                                                                               <?php elseif($classe->id===3): ?>da tradição
                                                                               <?php endif; ?></a>
    </div>
    <div id="resumo-ficha" class="col-md-12 collapse">
        <label><?php echo nl2br(e($ficha->resumo)); ?></label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Histórico do personagem</h2>
    </div>
    <div class="col-md-12">
        <label><?php echo nl2br(e($fichaJogador->resumo)); ?></label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Importante</h2>
    </div>
    <div class="col-md-12">
        <ul>
            <li>Leia a introdução da crônica</li>
            <li>Aguarde ponderações do mestre</li>
            <li>O mestre vai dividir os turnos (primeiramente por ordem de reciocício, e em caso de empate, no dado)</li>
            <li>Aguarde seu turno</li>
            <li>Na sua vez, poste sua ação (responda diálogos, pergunte, faça reconhecimento, etc...)</li>
            <li>O mestre vai dizer o que aconteceu, ou jogar os dados para decidir o que houve.</li>
            <li>Por favor, aqui é para nos divertir. Não irritem os colegas.</li>
        </ul>
    </div>
</div>
<?php if($cronicaFicha!=null): ?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <th>
            <td>
                Cronica em andamento
            </td>
            <td></td>
            </th>
            <tr>
                <td>
                    <?php echo e($cronicaFicha->nome); ?>

                </td>
                <td>
                    <?php if($cronicaFicha->id_user_ficha!=Auth::user()->id): ?>
                    <form id="entrar<?php echo e($cronicaFicha->id); ?>" method="POST" action="<?php echo e(route('jogo.cronicas.show', ['id' => $cronicaFicha->id])); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id_cronica" value="<?php echo e($cronicaFicha->id); ?>"/>
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($fichaJogador->id); ?>"/>
                        <input type="hidden" name="nome" value="<?php echo e($fichaJogador->nome); ?>"/>
                        <input type="hidden" name="resumo" value="<?php echo e($fichaJogador->resumo); ?>"/>
                        <input type="hidden" name="anotacoes" value="<?php echo e($fichaJogador->anotacoes); ?>"/>
                        <input type="hidden" name="id_ficha" value="<?php echo e($fichaJogador->id_ficha); ?>"/>
                        <input class="btn btn-primary" type="submit" value="Entrar"/>
                    </form>
                    <?php endif; ?>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php endif; ?>
<div class="row">
    <div class="col-md-12">
        <a href="<?php echo e(route('jogo.fichas.showfichauserjogo', ['id' => $fichaJogador->id, 'id_cronica' => $fichaJogador->id_cronica])); ?>">Detalhes da ficha</a>
    </div>
</div>

<?php if(!isset($active)): ?>
<div class="row">
    <div class="col-md-12">
        <?php $__env->startComponent('components.cronicas.listJogador', compact('cronicasPode','fichaJogador')); ?><?php echo $__env->renderComponent(); ?>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>