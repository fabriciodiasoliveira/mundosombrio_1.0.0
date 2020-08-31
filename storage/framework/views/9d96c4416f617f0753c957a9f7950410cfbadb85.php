<?php $__env->startSection('content'); ?>
<?php if(session()->get('success')): ?>
<div class="alert alert-success">
    <?php echo e(session()->get('success')); ?>  
</div><br />
<?php endif; ?>
<?php if(session()->get('error')): ?>
<div class="alert alert-danger">
    <?php echo e(session()->get('error')); ?>  
</div><br />
<?php endif; ?>
<?php if(session()->get('info')): ?>
<div class="alert alert-info">
    <?php echo e(session()->get('info')); ?>  
</div><br />
<?php endif; ?>
<script>
var array = texto.split('\n');
$(document).ready(function(){
    $('#senhor').html(array[Math.floor((Math.random() * 100))]);
 $('#tabela-3').DataTable(
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
 $('#tabela-2').DataTable(
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
  $('#tabela-1').DataTable(
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
<div class="row">
    <div class="col-md-3">
        <label>100 coisas que farei quando me tornar o senhor do mal:</label>
    </div>
    <div class="col-md-9" id="senhor">
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <a href="textos/regras" class="btn btn-primary">Regras básicas - leia isso</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12"> 
        <div>Esse portal de diversão está em constante construção. O tempo todo vai ter melhorias</div>
    </div>
</div>
<div class="row">
    <div class="col-md-12"> 
        <div>Sejam bem vindos à Mundo Sombrio site de RPG. Vamos jogar Vampiro a Máscara, Mago, a ascensão e Lobisomem o apocalipse.</div>
    </div>
</div>
<div class="row">
    <div class="col-md-12"> 
        <div>Por enquanto, o site está em fase inicial, estou concluindo alguns detalhes, para nossa diversão.</div>
    </div>
</div>
<div class="row">
    <div class="col-md-12"> 
        <div>E já estamos admitindo jogadores. Você vai montar o seu grupo, sua ficha e rolar os seus dados de 10 faces para ações. 
            Vamos montar aventuras épicas juntos.</div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <hr>
    </div>
</div>
<?php if(!Auth::guest() && Auth::user()->tipo=='admin'): ?>
<div class="row">
    <div class="col-md-12">
        <a href="<?php echo e(route('admin.graphs')); ?>" class="btn btn-primary">Dashboard</a>
        <a href="<?php echo e(route('admin.perguntas')); ?>" class="btn btn-primary">Enquetes</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <hr>
    </div>
</div>
<?php endif; ?>
<div class="row">
    <?php if(isset($cronicasUser) && Auth::user()->tipo=='autor' ): ?>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Crônicas que você mestra</div>

            <div class="panel-body">
                <a href="<?php echo e(route('cronicas.create')); ?>" class="btn btn-primary">Criar cronica</a>
                <a class="btn btn-primary" data-toggle="collapse" href="#cronicas">Mostrar suas Crônicas</a>
                <div id="cronicas" class="collapse">
                    <table class="table table-striped" id="tabela-2">
                        <thead>
                            <tr>
                                <th>
                                    Suas crônicas
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $cronicasUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cronica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($cronica->nome); ?></td>
                                <td>
                                    <?php if($cronica->finalizada==0): ?>
                                    <form id="entrar<?php echo e($cronica->id); ?>" method="POST" action="<?php echo e(route('jogo.mestrar', ['id' => $cronica->id])); ?>">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="id_cronica" value="<?php echo e($cronica->id); ?>"/>
                                        <input class="btn btn-primary" type="submit" value="Mestrar"/>
                                    </form>
                                    <?php elseif($cronica->finalizada==1): ?>
                                    <input class="btn btn-primary" type="button" value="Finalizada" disabled/>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Situação de suas fichas</div>

            <div class="panel-body">
                <a href="<?php echo e(route('jogo.classes')); ?>" class="btn btn-primary">Crie sua ficha</a>
                <a class="btn btn-primary" data-toggle="collapse" href="#fichas">Mostrar suas Fichas</a>
                <div id="fichas" class="collapse">
                    
                    <table class="table table-striped" id="tabela-1">
                        <thead>
                            <tr>
                                <th>Suas Fichas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $fichasJogador; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ficha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <div class="col-md-3">
                                        <?php echo e($ficha->nome); ?>

                                    </div>
                                    <div class="col-md-7">
                                        <?php if($ficha->id_cronica==0&&$ficha->pronto==1): ?>
                                        <a href="<?php echo e(route('jogo.fichas.showfichauser', ['id' => $ficha->id])); ?>" class="btn btn-primary">Entrar em uma crônica</a>
                                        <?php elseif($ficha->pronto==0): ?>
                                        <a href="<?php echo e(route('jogo.fichas.show', ['id' => 0, 'id_fichaUser' => $ficha->id])); ?>" class="btn btn-primary">Concluir montagem da ficha</a> 
                                        <?php elseif($ficha->id_cronica>0): ?>
                                        <a href="<?php echo e(route('jogo.fichas.showfichauser', ['id' => $ficha->id])); ?>" class="btn btn-primary">Continuar jogo</a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-2 small">
                                        <i><?php echo e($ficha->classe); ?></i>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php elseif(!Auth::guest() && Auth::user()->tipo=='autor'): ?>
    )    <script> window.location.href = "home";</script>
    <?php endif; ?>
</div>
<div class="row">
    <div class="col-md-12">
        <a href="<?php echo e(route('cronicas.visitante')); ?>" class="btn btn-primary">Todas as crônicas</a><a href="<?php echo e(route('jogo.fichas')); ?>" class="btn btn-primary">Fichas cadastradas</a>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading"><b>Pergunta</b></div>
        <div class="panel-body">
            <div id="votos">
            <?php echo $votos; ?>

            </div>
        </div>
    </div>
    </div>
    
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Chat</b></div>
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo e(route('xat.store')); ?>" id="my-form" method="post" onsubmit="storeXat();return false;">
                        <?php echo e(csrf_field()); ?>

                        <input type="text" id="post" class="form-control" name="texto"/>
                    </form>
                <input type="button" class="btn btn-primary" value="Enviar" onclick="storeXat()"/>
                <div id="xat">
                <?php $__currentLoopData = $postagens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postagem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <label><?php echo e($postagem->nome); ?> - </label>
                             <?php echo e($postagem->texto); ?>

                             <h6><i><u><?php echo e($postagem->data); ?></u></i></h6>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12"> 
        <div><h2>Importante</h2></div>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <ul>
            <li>RPG baseado no sistema World of Darkness, que funciona em salas de chat, persistente. 
                Pode ser jogado como fórum ou chat. Escolha a melhor forma.</li>
            <li>Cadastre-se e tenha acesso a criação de fichas para jogar ou criação de crônicas para mestrar. 
                Chame seu grupo e crie uma aventura épica.</li>
            <li>As crônicas mais interessantes vou transcrever para um dos blogs. Ou criar um blog novo, se for uma idéia
                totalmente nova. Aguardem novas notícias.</li>
            <li>Usem o chat disponível dentro da crônica para conversar entre os integrantes do grupo. 
                Não vamos poluir a crônica com causos dos colegas.</li>
            <li>Aqui não é 'Mestre vs Jogadores'. É todos juntos contando uma história. Um personagem ferido mortalmente
                não significa nada. Apenas que a emoção será maior, e ninguém sabe o que o mestre planejou. Pode ser algo 
                épico ou a solução para a crônica.</li>
            <li>A regra de ouro: não há regras. É sugerido jogar no cenário World of Darkness (mundo atual, com pinceladas 
                góticas e sombrias, com clima de fim eminente). Entre em um acordo com os jogadores e joguem como quiserem, idéias não 
                faltam na cultura popular. <b>Entrem em um acordo todos antes.</b></li>
            <li>Jogue em várias crônicas simultâneas</li>
        </ul>
        <table class="table table-striped">
            <tr>
                <th>Notícias</th>
            </tr>
            <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo nl2br(e($notice->texto)); ?>

                        </div>
                    </div>
                    <?php if($notice->link != '0'): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?php echo e($notice->link); ?>"><?php echo e($notice->link); ?></a>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-md-12 text-right">
                             <i>Autor: <?php echo e($notice->nome); ?> - <?php echo e($notice->data); ?></i>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(!Auth::guest()&&Auth::user()->tipo=='admin'): ?>
                <form action="<?php echo e(route('admin.notice.store')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                    <label>Notícia</label>
                    <textarea class="form-control" id="texto" name="texto"></textarea>
                    <label>Link</label>
                    <input class="form-control" id="link" name="link" value="0"/>
                    <input class="btn btn-primary" type="submit" value="Enviar"/>
                </form>
            <?php endif; ?>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>Classes disponíveis</th>
                <th>Quem você será</th>
            </tr>
            <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <a href="<?php echo e(route('descricao', ['id' => $classe->id])); ?>"><?php echo e($classe->nome); ?></a>
                </td>
                <td><?php echo e($classe->objetivo); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped" id="tabela-3">
            <thead>
            <tr>
                <th>
                    Crônicas disponíveis para jogo
                </th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $cronicasProntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cronica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a href="<?php echo e(route('jogo.cronicas.showuma', ['id' => $cronica->id])); ?>"><?php echo e($cronica->nome); ?></a></td>
                <td><i><?php if($cronica->finalizada==0): ?> em andamento <?php elseif($cronica->finalizada==1): ?>finalizada <?php endif; ?> </i></td>
                <td><i><?php if($cronica->fechada==0): ?>aberta para novos jogadores <?php elseif($cronica->fechada==1): ?>inscrições finalizadas <?php endif; ?> </i></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<script>

function troca(){
    document.getElementById('senhor').innerHTML = array[Math.floor((Math.random() * 100))];
}
function getXat(){
        var url = "<?php echo e(route('xat')); ?>";
        fetch(url, {
                        method: 'get' // opcional 
                        })
                                .then(function (response) {
                                response.text()
                                        .then(function (result) {
                                        document.getElementById('xat').innerHTML=result;
                                        })
                                })
                                .catch(function (err) {
                                console.error(err);
                                });
}
function storeXat(){
            var form = new FormData(document.getElementById('my-form'));
            fetch('<?php echo e(route('xat.store')); ?>', {
                method: 'POST',
                headers : new Headers(),
                body:form
            }).then(function (data) {
                data.text()
                        .then(function (result) {
                            console.log('rodou');
                        })
            }).catch(function (error) {
            console.log('Request failure: ', error);
            });
            document.getElementById('post').value='';
}
var senhordomal = setInterval( function() {
      troca();
    }, 20000 );
var xat = setInterval( function() {
      getXat();
    }, 3000 );
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>