<?php $__env->startSection('content'); ?>
<script>
    
    function updateFicha() {
        var url = '<?php echo e(route('jogo.fichauser.updateanotacoes')); ?>';
        var form = new FormData(document.getElementById('formficha'));
        fetch(url, {
            method: "POST",
            body: form
        }).then(function (data) { 
           console.log('Request success: ', data);
        }).catch(function (error) {
            console.log('Request failure: ', error);
        });
    }
    function add(id) {
        var nome = document.getElementById('nome-' + id).value;
        var url = '<?php echo e(route('jogo.valor.updatecronica')); ?>';
        var value = document.getElementById('valor-' + id).value;
        var nome = document.getElementById('nome-' + id).value;
        try{
            var caracteristica = document.getElementById('caracteristica-' + id).value;
        }catch(x) {
            var caracteristica = 0;
        }
        document.getElementById('sinal-' + id).value = '+';
        if(nome=='Quintessência'||nome=='Paradoxo'){
                if (value < 20) {
                    value++;
                    document.getElementById('valor-' + id).value = value;
                    var form = new FormData(document.getElementById('form-' + id));
                    var response = fetch(url, {
                        method: "POST",
                        body: form
                    }).then(function (data) {
                    data.text()
                    .then(function (result) {
                        document.getElementById('bold-' + id).innerHTML = result;
                        console.log('Request success: ', result);
                    })
                    }).catch(function (error) {
                        console.log('Request failure: ', error);
                    });
                }
            }
            else if(caracteristica==0){
                if (value < 10) {
                    value++;
                    document.getElementById('valor-' + id).value = value;
                    var form = new FormData(document.getElementById('form-' + id));
                    var response = fetch(url, {
                        method: "POST",
                        body: form
                    }).then(function (data) {
                    data.text()
                    .then(function (result) {
                        document.getElementById('bold-' + id).innerHTML = result;
                        console.log('Request success: ', result);
                    })
                    }).catch(function (error) {
                        console.log('Request failure: ', error);
                    });
                }
            }
            else{
                if (value < 7) {
                    value++;
                    document.getElementById('valor-' + id).value = value;
                    var form = new FormData(document.getElementById('form-' + id));
                    var response = fetch(url, {
                        method: "POST",
                        body: form
                    }).then(function (data) {
                    data.text()
                    .then(function (result) {
                        document.getElementById('bold-' + id).innerHTML = result;
                        console.log('Request success: ', result);
                    })
                    }).catch(function (error) {
                        console.log('Request failure: ', error);
                    });
                }
            }
        }
    function sub(id) {
        var url = '<?php echo e(route('jogo.valor.updatecronica')); ?>';
        var value = document.getElementById('valor-' + id).value;
        document.getElementById('sinal-' + id).value = '-';
        if (value > 0) {
            value--;
            document.getElementById('valor-' + id).value = value;
            var form = new FormData(document.getElementById('form-' + id));
            var response = fetch(url, {
                method: "POST",
                body: form
            }).then(function (data) {
                data.text()
                .then(function (result) {
                    document.getElementById('bold-' + id).innerHTML = result;
                    console.log('Request success: ', result);
                })
                }).catch(function (error) {
                console.log('Request failure: ', error);
            });
        }
    }
    function getValor(id) {
        var url = '../../../valor/get/' + id;
        fetch(url, {
            method: 'get' // opcional 
        })
                .then(function (response) {
                    response.text()
                            .then(function (result) {
                                document.getElementById('bold-' + id).innerHTML = result;
                                console.log('Request success: ', result);
                            })
                })
                .catch(function (err) {
                    console.error(err);
                });
    }
</script>
<?php if($classe->nome==='Vampiro'): ?>
<div class="row">
    <div class="col-md-12">
        <h2><?php echo e($classe->nome); ?></h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2><?php echo e($ficha->nome); ?></h2>
    </div>
</div>
<div class="row">
    <div id="button" class="col-md-12">
        <a class="btn btn-primary" data-toggle="collapse" href="#resumo-ficha">Mostrar característica do clã</a>
    </div>
    <div id="resumo-ficha" class="col-md-12 collapse">
        <label><?php echo nl2br(e($ficha->resumo)); ?></label>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <h1><?php echo e($fichaJogador->nome); ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Histórico do personagem</h2>
    </div>
    <div class="col-md-12">
        <label for="resumo" class="col-md-12 control-label"><?php echo nl2br(e($fichaJogador->resumo)); ?></label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>Atributos</label>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Físicos</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresFisico; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Sociais</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresSocial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <?php if($fichaJogador->id_ficha==7 && $valor->nome==='Aparência'): ?>
                    Esqueça. Esse bicho é repugnante
                    <?php else: ?>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Mentais</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresMental; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>Habilidades</label>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Talentos</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresTalento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Perícias</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresPericia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Conhecimentos</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresConhecimento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>    
<div class="row">
    <div class="col-md-12">
        <form id="formficha" action="<?php echo e(route('jogo.fichauser.update')); ?>" class="form-horizontal" method="POST" >
            <?php echo e(csrf_field()); ?>

                <div class="col-md-7">
                    <div class="form-group<?php echo e($errors->has('anotacoes') ? ' has-error' : ''); ?>">
                        <label for="anotacoes" class="col-md-4 control-label">Anotaçoes do mestre</label>

                        <div class="col-md-6">
                            <textarea class="form-control" name="anotacoes" onkeyup="updateFicha()"
                                      required autofocus><?php echo e($fichaJogador->anotacoes); ?></textarea>

                            <?php if($errors->has('anotacoes')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('anotacoes')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_user" value="<?php echo e($fichaJogador->id_user_ficha); ?>"/>
                <input type="hidden" name="id_cronica" value="<?php echo e($fichaJogador->id_cronica); ?>"/>
                <input type="hidden" name="resumo" value="<?php echo e($fichaJogador->resumo); ?>"/>
                <input type="hidden" name="nome" value="<?php echo e($fichaJogador->nome); ?>"/>
                <input type="hidden" name="id_ficha" value="<?php echo e($ficha->id); ?>"/>
                <input type="hidden" name="id_fichaUser" value="<?php echo e($fichaJogador->id); ?>"/>
        </form>
    </div>
</div>
<?php else: ?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>
                    Anotações do mestre
                </th>
            </tr>
            <tr>
                <td><?php echo nl2br(e($fichaJogador->anotacoes)); ?></td>
            </tr>
        </table>
    </div>
</div>
<?php endif; ?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>Valores específicos</th>
                <th></th>
            </tr>
            <tr>
                <td width="200">
                    <?php echo e($valorHumanidade->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorHumanidade->id); ?>" ><?php for($i=0;$i<$valorHumanidade->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <tr>
                <td width="200">
                    <?php echo e($valorForcaVontade->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorForcaVontade->id); ?>" ><?php for($i=0;$i<$valorForcaVontade->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-<?php echo e($valorForcaVontadeJogo->id); ?>" ><?php for($i=0;$i<$valorForcaVontadeJogo->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorForcaVontadeJogo->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorForcaVontadeJogo->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorForcaVontadeJogo->id); ?>" type="hidden" name="nome" value="<?php echo e($valorForcaVontadeJogo->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorForcaVontadeJogo->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorForcaVontadeJogo->id_fichaUser); ?>"/>
                        <input type="hidden" name="id_caracteristica" value="<?php echo e($valorForcaVontadeJogo->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorForcaVontadeJogo->id); ?>" type="hidden" name="valor" value="<?php echo e($valorForcaVontadeJogo->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorForcaVontadeJogo->id); ?>); getValor(<?php echo e($valorForcaVontadeJogo->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorForcaVontadeJogo->id); ?>);getValor(<?php echo e($valorForcaVontadeJogo->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-<?php echo e($valorForcaVontadeJogo->id); ?>" ><?php for($i=0;$i<$valorForcaVontadeJogo->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?>   
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                    <?php echo e($valorDano->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorDano->id); ?>" ><?php for($i=0;$i<$valorDano->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorDano->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorDano->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorDano->id); ?>" type="hidden" name="nome" value="<?php echo e($valorDano->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorDano->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorDano->id_fichaUser); ?>"/>
                        <input id="caracteristica-<?php echo e($valorDano->id); ?>" type="hidden" name="id_caracteristica" value="<?php echo e($valorDano->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorDano->id); ?>" type="hidden" name="valor" value="<?php echo e($valorDano->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorDano->id); ?>); getValor(<?php echo e($valorDano->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorDano->id); ?>);getValor(<?php echo e($valorDano->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                    Dano
                </td>
                <td>
                    <b id="bold-<?php echo e($valorDano->id); ?>" ><?php for($i=0;$i<$valorDano->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?> 
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                    <?php echo e($valorPontosSangue->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorPontosSangue->id); ?>" ><?php for($i=0;$i<$valorPontosSangue->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorPontosSangue->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorPontosSangue->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorPontosSangue->id); ?>" type="hidden" name="nome" value="<?php echo e($valorPontosSangue->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorPontosSangue->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorPontosSangue->id_fichaUser); ?>"/>
                        <input type="hidden" name="id_caracteristica" value="<?php echo e($valorPontosSangue->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorPontosSangue->id); ?>" type="hidden" name="valor" value="<?php echo e($valorPontosSangue->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorPontosSangue->id); ?>); getValor(<?php echo e($valorPontosSangue->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorPontosSangue->id); ?>);getValor(<?php echo e($valorPontosSangue->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                    Pontos de Sangue
                </td>
                <td>
                    <b id="bold-<?php echo e($valorPontosSangue->id); ?>" ><?php for($i=0;$i<$valorPontosSangue->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?> 
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <table class="table table-striped">
            <tr>
                <th>Tabela de dano</th>
                <th></th>
            </tr>
            <tr>
                <td width="200">
                    1 - Escoriado
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td width="200">
                    2 - Machucado
                </td>
                <td>
                    -1
                </td>
            </tr>
            <tr>
                <td width="200">
                    3 -Ferido
                </td>
                <td>
                    -1
                </td>
            </tr>
            <tr>
                <td width="200">
                    4 - Ferido Gravemente
                </td>
                <td>
                    -2
                </td>
            </tr>
            <tr>
                <td width="200">
                    5 - Espancado
                </td>
                <td>
                    -2
                </td>
            </tr>
            <tr>
                <td width="200">
                    6 - Aleijado
                </td>
                <td>
                    -5
                </td>
            </tr>
            <tr>
                <td width="200">
                    7 - Incapacitado
                </td>
                <td>
                    Inconsciente
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <table class="table table-striped">
            <tr>
                <th>Disciplinas</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresFicha; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="col-md-3">
        <table class="table table-striped">
            <tr>
                <th>Virtudes</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresVirtude; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="col-md-3">
        <table class="table table-striped">
            <tr>
                <th>Disciplinas</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresFicha; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="col-md-3">
        <table class="table table-striped">
            <tr>
                <th>Antecedentes</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresAntecedentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<?php elseif($classe->nome==='Lobisomem'): ?>
<div class="row">
    <div class="col-md-12">
        <h2><?php echo e($classe->nome); ?></h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12" for="nome-ficha" class="col-md-4 control-label">
        <h2><?php echo e($ficha->nome); ?></h2>
    </div>
</div>
<div class="row">
    <div id="button" class="col-md-12">
        <a class="btn btn-primary" data-toggle="collapse" href="#resumo-ficha">Mostrar característica da tribo</a>
    </div>
    <div id="resumo-ficha" class="col-md-12 collapse">
        <label><?php echo nl2br(e($ficha->resumo)); ?></label>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <h1><?php echo e($fichaJogador->nome); ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Histórico do personagem</h2>
    </div>
    <div class="col-md-12">
        <label for="resumo" class="col-md-12 control-label"><?php echo nl2br(e($fichaJogador->resumo)); ?></label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>Atributos</label>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Físicos</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresFisico; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Sociais</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresSocial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <?php if($fichaJogador->id_ficha==7 && $valor->nome==='Aparência'): ?>
                    Esqueça. Esse bicho é repugnante
                    <?php else: ?>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Mentais</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresMental; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <table class="table table-striped">
            <tr>
                <th>
                    Hominídeo
                </th>
            </tr>
            <tr>
                <td>
                    Nenhuma mudança
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-2">
        <table class="table table-striped">
            <tr>
                <th>
                    Glabro
                </th>
            </tr>
            <tr>
                <td>
                    Força +2
                </td>
            </tr>
            <tr>
                <td>
                    Vigor +2
                </td>
            </tr>
            <tr>
                <td>
                    Aparência -1
                </td>
            </tr>
            <tr>
                <td>
                    Manipulação -1
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-2">
        <table class="table table-striped">
            <tr>
                <th>
                    Crinus
                </th>
            </tr>
            <tr>
                <td>
                    Força +4
                </td>
            </tr>
            <tr>
                <td>
                    Vigor +3
                </td>
            </tr>
            <tr>
                <td>
                    Aparência 0
                </td>
            </tr>
            <tr>
                <td>
                    Manipulação -3 (causa delírios em pessoas. Quase todos vão fugir falando besteiras, os mais corajosos vão chamar de pé grande ou qualquer outra coisa)
                </td>
            </tr>
            <tr>
                <td>
                    DIFICULDADE 6
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-2">
        <table class="table table-striped">
            <tr>
                <th>
                    Hispo
                </th>
            </tr>
            <tr>
                <td>
                    Força +3
                </td>
            </tr>
            <tr>
                <td>
                    Destreza +2
                </td>
            </tr>
            <tr>
                <td>
                    Manipulação -3
                </td>
            </tr>
            <tr>
                <td>
                    +1 dano por mordida - Dificuldade 7
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-2">
        <table class="table table-striped">
            <tr>
                <th>
                    Lupino
                </th>
            </tr>
            <tr>
                <td>
                    Força +1
                </td>
            </tr>
            <tr>
                <td>
                    Destreza +2
                </td>
            </tr>
            <tr>
                <td>
                    Vigor +2
                </td>
            </tr>
            <tr>
                <td>
                    Manipulação -3
                </td>
            </tr>
            <tr>
                <td>
                    -2 no teste de percepção - Dificuldade 6
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>Habilidades</label>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Talentos</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresTalento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Perícias</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresPericia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Conhecimentos</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresConhecimento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>    
<div class="row">
    <div class="col-md-12">
        <form id="formficha" action="<?php echo e(route('jogo.fichauser.update')); ?>" class="form-horizontal" method="POST" >
            <?php echo e(csrf_field()); ?>

                <div class="col-md-7">
                    <div class="form-group<?php echo e($errors->has('anotacoes') ? ' has-error' : ''); ?>">
                        <label for="anotacoes" class="col-md-4 control-label">Anotaçoes do mestre</label>

                        <div class="col-md-6">
                            <textarea class="form-control" name="anotacoes" onkeyup="updateFicha()"
                                      required autofocus><?php echo e($fichaJogador->anotacoes); ?></textarea>

                            <?php if($errors->has('anotacoes')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('anotacoes')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_user" value="<?php echo e($fichaJogador->id_user_ficha); ?>"/>
                <input type="hidden" name="id_cronica" value="<?php echo e($fichaJogador->id_cronica); ?>"/>
                <input type="hidden" name="resumo" value="<?php echo e($fichaJogador->resumo); ?>"/>
                <input type="hidden" name="nome" value="<?php echo e($fichaJogador->nome); ?>"/>
                <input type="hidden" name="id_ficha" value="<?php echo e($ficha->id); ?>"/>
                <input type="hidden" name="id_fichaUser" value="<?php echo e($fichaJogador->id); ?>"/>
        </form>
    </div>
</div>
<?php else: ?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>
                    Anotações do mestre
                </th>
            </tr>
            <tr>
                <td><?php echo nl2br(e($fichaJogador->anotacoes)); ?></td>
            </tr>
        </table>
    </div>
</div>
<?php endif; ?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>Valores específicos</th>
                <th></th>
            </tr>
            <tr>
                <td width="200">
                    <?php echo e($valorFuria->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorFuria->id); ?>" ><?php for($i=0;$i<$valorFuria->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                    
                </td>
                <td>
                    <b id="bold-<?php echo e($valorFuriaJogo->id); ?>" ><?php for($i=0;$i<$valorFuriaJogo->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorFuriaJogo->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorFuriaJogo->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorFuriaJogo->id); ?>" type="hidden" name="nome" value="<?php echo e($valorFuriaJogo->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorFuriaJogo->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorFuriaJogo->id_fichaUser); ?>"/>
                        <input type="hidden" name="id_caracteristica" value="<?php echo e($valorFuriaJogo->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorFuriaJogo->id); ?>" type="hidden" name="valor" value="<?php echo e($valorFuriaJogo->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorFuriaJogo->id); ?>); getValor(<?php echo e($valorFuriaJogo->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorFuriaJogo->id); ?>);getValor(<?php echo e($valorFuriaJogo->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                    
                </td>
                <td>
                    <b id="bold-<?php echo e($valorFuriaJogo->id); ?>" ><?php for($i=0;$i<$valorFuriaJogo->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?> 
            <tr>
                <td width="200">
                    <?php echo e($valorGnose->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorGnose->id); ?>" ><?php for($i=0;$i<$valorGnose->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                    
                </td>
                <td>
                    <b id="bold-<?php echo e($valorGnoseJogo->id); ?>" ><?php for($i=0;$i<$valorGnoseJogo->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorGnoseJogo->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorGnoseJogo->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorGnoseJogo->id); ?>" type="hidden" name="nome" value="<?php echo e($valorGnoseJogo->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorGnoseJogo->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorGnoseJogo->id_fichaUser); ?>"/>
                        <input type="hidden" name="id_caracteristica" value="<?php echo e($valorGnoseJogo->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorGnoseJogo->id); ?>" type="hidden" name="valor" value="<?php echo e($valorGnoseJogo->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorGnoseJogo->id); ?>); getValor(<?php echo e($valorGnoseJogo->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorGnoseJogo->id); ?>);getValor(<?php echo e($valorGnoseJogo->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                    
                </td>
                <td>
                    <b id="bold-<?php echo e($valorGnoseJogo->id); ?>" ><?php for($i=0;$i<$valorGnoseJogo->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?> 
            <tr>
                <td width="200">
                    <?php echo e($valorForcaVontade->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorForcaVontade->id); ?>" ><?php for($i=0;$i<$valorForcaVontade->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-<?php echo e($valorForcaVontadeJogo->id); ?>" ><?php for($i=0;$i<$valorForcaVontadeJogo->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorForcaVontadeJogo->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorForcaVontadeJogo->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorForcaVontadeJogo->id); ?>" type="hidden" name="nome" value="<?php echo e($valorForcaVontadeJogo->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorForcaVontadeJogo->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorForcaVontadeJogo->id_fichaUser); ?>"/>
                        <input type="hidden" name="id_caracteristica" value="<?php echo e($valorForcaVontadeJogo->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorForcaVontadeJogo->id); ?>" type="hidden" name="valor" value="<?php echo e($valorForcaVontadeJogo->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorForcaVontadeJogo->id); ?>); getValor(<?php echo e($valorForcaVontadeJogo->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorForcaVontadeJogo->id); ?>);getValor(<?php echo e($valorForcaVontadeJogo->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-<?php echo e($valorForcaVontadeJogo->id); ?>" ><?php for($i=0;$i<$valorForcaVontadeJogo->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?>   
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                    <?php echo e($valorDano->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorDano->id); ?>" ><?php for($i=0;$i<$valorDano->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorDano->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorDano->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorDano->id); ?>" type="hidden" name="nome" value="<?php echo e($valorDano->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorDano->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorDano->id_fichaUser); ?>"/>
                        <input id="caracteristica-<?php echo e($valorDano->id); ?>" type="hidden" name="id_caracteristica" value="<?php echo e($valorDano->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorDano->id); ?>" type="hidden" name="valor" value="<?php echo e($valorDano->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorDano->id); ?>); getValor(<?php echo e($valorDano->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorDano->id); ?>);getValor(<?php echo e($valorDano->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                    <?php echo e($valorDano->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorDano->id); ?>" ><?php for($i=0;$i<$valorDano->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?> 
            <tr>
                <th colspan="2">Renome - Status diante da nação Garou e diante dos espíritos</th>
            </tr>
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                    <?php echo e($valorGloria->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorGloria->id); ?>" ><?php for($i=0;$i<$valorGloria->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorGloria->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorGloria->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorGloria->id); ?>" type="hidden" name="nome" value="<?php echo e($valorGloria->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorGloria->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorGloria->id_fichaUser); ?>"/>
                        <input type="hidden" name="id_caracteristica" value="<?php echo e($valorGloria->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorGloria->id); ?>" type="hidden" name="valor" value="<?php echo e($valorGloria->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorGloria->id); ?>); getValor(<?php echo e($valorGloria->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorGloria->id); ?>);getValor(<?php echo e($valorGloria->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                    <?php echo e($valorGloria->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorGloria->id); ?>" ><?php for($i=0;$i<$valorGloria->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?>
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-<?php echo e($valorGloriaGanha->id); ?>" ><?php for($i=0;$i<$valorGloriaGanha->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorGloriaGanha->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorGloriaGanha->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorGloriaGanha->id); ?>" type="hidden" name="nome" value="<?php echo e($valorGloriaGanha->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorGloriaGanha->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorGloriaGanha->id_fichaUser); ?>"/>
                        <input type="hidden" name="id_caracteristica" value="<?php echo e($valorGloriaGanha->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorGloriaGanha->id); ?>" type="hidden" name="valor" value="<?php echo e($valorGloriaGanha->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorGloriaGanha->id); ?>); getValor(<?php echo e($valorGloriaGanha->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorGloriaGanha->id); ?>);getValor(<?php echo e($valorGloriaGanha->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-<?php echo e($valorGloriaGanha->id); ?>" ><?php for($i=0;$i<$valorGloriaGanha->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?>
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                    <?php echo e($valorHonra->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorHonra->id); ?>" ><?php for($i=0;$i<$valorHonra->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorHonra->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorHonra->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorHonra->id); ?>" type="hidden" name="nome" value="<?php echo e($valorHonra->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorHonra->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorHonra->id_fichaUser); ?>"/>
                        <input type="hidden" name="id_caracteristica" value="<?php echo e($valorHonra->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorHonra->id); ?>" type="hidden" name="valor" value="<?php echo e($valorHonra->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorHonra->id); ?>); getValor(<?php echo e($valorHonra->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorHonra->id); ?>);getValor(<?php echo e($valorHonra->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                    <?php echo e($valorHonra->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorHonra->id); ?>" ><?php for($i=0;$i<$valorHonra->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?>
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-<?php echo e($valorHonraGanha->id); ?>" ><?php for($i=0;$i<$valorHonraGanha->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorHonraGanha->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorHonraGanha->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorHonraGanha->id); ?>" type="hidden" name="nome" value="<?php echo e($valorHonraGanha->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorHonraGanha->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorHonraGanha->id_fichaUser); ?>"/>
                        <input type="hidden" name="id_caracteristica" value="<?php echo e($valorHonraGanha->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorHonraGanha->id); ?>" type="hidden" name="valor" value="<?php echo e($valorHonraGanha->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorHonraGanha->id); ?>); getValor(<?php echo e($valorHonraGanha->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorHonraGanha->id); ?>);getValor(<?php echo e($valorHonraGanha->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-<?php echo e($valorHonraGanha->id); ?>" ><?php for($i=0;$i<$valorHonraGanha->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?>
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                    <?php echo e($valorSabedoria->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorSabedoria->id); ?>" ><?php for($i=0;$i<$valorSabedoria->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorSabedoria->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorSabedoria->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorSabedoria->id); ?>" type="hidden" name="nome" value="<?php echo e($valorSabedoria->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorSabedoria->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorSabedoria->id_fichaUser); ?>"/>
                        <input type="hidden" name="id_caracteristica" value="<?php echo e($valorSabedoria->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorSabedoria->id); ?>" type="hidden" name="valor" value="<?php echo e($valorSabedoria->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorSabedoria->id); ?>); getValor(<?php echo e($valorSabedoria->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorSabedoria->id); ?>);getValor(<?php echo e($valorSabedoria->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                    <?php echo e($valorSabedoria->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorSabedoria->id); ?>" ><?php for($i=0;$i<$valorSabedoria->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?>
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-<?php echo e($valorSabedoriaGanha->id); ?>" ><?php for($i=0;$i<$valorSabedoriaGanha->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorSabedoriaGanha->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorSabedoriaGanha->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorSabedoriaGanha->id); ?>" type="hidden" name="nome" value="<?php echo e($valorSabedoriaGanha->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorSabedoriaGanha->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorSabedoriaGanha->id_fichaUser); ?>"/>
                        <input type="hidden" name="id_caracteristica" value="<?php echo e($valorSabedoriaGanha->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorSabedoriaGanha->id); ?>" type="hidden" name="valor" value="<?php echo e($valorSabedoriaGanha->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorSabedoriaGanha->id); ?>); getValor(<?php echo e($valorSabedoriaGanha->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorSabedoriaGanha->id); ?>);getValor(<?php echo e($valorSabedoriaGanha->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-<?php echo e($valorSabedoriaGanha->id); ?>" ><?php for($i=0;$i<$valorSabedoriaGanha->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <table class="table table-striped">
            <tr>
                <th>Tabela de dano</th>
                <th></th>
            </tr>
            <tr>
                <td width="200">
                    1 - Escoriado
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td width="200">
                    2 - Machucado
                </td>
                <td>
                    -1
                </td>
            </tr>
            <tr>
                <td width="200">
                    3 -Ferido
                </td>
                <td>
                    -1
                </td>
            </tr>
            <tr>
                <td width="200">
                    4 - Ferido Gravemente
                </td>
                <td>
                    -2
                </td>
            </tr>
            <tr>
                <td width="200">
                    5 - Espancado
                </td>
                <td>
                    -2
                </td>
            </tr>
            <tr>
                <td width="200">
                    6 - Aleijado
                </td>
                <td>
                    -5
                </td>
            </tr>
            <tr>
                <td width="200">
                    7 - Incapacitado
                </td>
                <td>
                    Inconsciente
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <table class="table table-striped">
            <tr>
                <th>Dons</th>
                <th></th>
            </tr>
            <tr>
                <td width="200">
                    Raça: <?php echo e($domRaca->nomeRaca); ?>

                </td>
                <td>
                    Dom de raça: <?php echo e($domRaca->nome); ?>

                </td>
            </tr>
            <tr>
                <td width="200">
                    Augúrio: <?php echo e($domAugurio->nomeAugurio); ?>

                </td>
                <td>
                    Dom de augúrio: <?php echo e($domAugurio->nome); ?>

                </td>
            </tr>
            <tr>
                <td width="200">
                    Tribo: <?php echo e($ficha->nome); ?>

                </td>
                <td>
                    Dom de tribo: <?php echo e($domTribo->nome); ?>

                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-6">
        <table class="table table-striped">
            <tr>
                <th>Antecedentes</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresAntecedentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<?php elseif($classe->nome==='Mago'): ?>
<div class="row">
    <div class="col-md-12">
        <h2><?php echo e($classe->nome); ?></h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12" for="nome-ficha" class="col-md-4 control-label">
        <h2><?php echo e($ficha->nome); ?></h2>
    </div>
</div>
<div class="row">
    <div id="button" class="col-md-12">
        <a class="btn btn-primary" data-toggle="collapse" href="#resumo-ficha">Mostrar característica da tradição</a>
    </div>
    <div id="resumo-ficha" class="col-md-12 collapse">
        <label><?php echo nl2br(e($ficha->resumo)); ?></label>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <h1><?php echo e($fichaJogador->nome); ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Histórico do personagem</h2>
    </div>
    <div class="col-md-12">
        <label for="resumo" class="col-md-12 control-label"><?php echo nl2br(e($fichaJogador->resumo)); ?></label>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>Atributos</label>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Físicos</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresFisico; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Sociais</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresSocial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <?php if($fichaJogador->id_ficha==7 && $valor->nome==='Aparência'): ?>
                    Esqueça. Esse bicho é repugnante
                    <?php else: ?>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Mentais</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresMental; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <label>Habilidades</label>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Talentos</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresTalento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Perícias</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresPericia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <tr>
                <th>Conhecimentos</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresConhecimento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>    
<div class="row">
    <div class="col-md-12">
        <form id="formficha" action="<?php echo e(route('jogo.fichauser.update')); ?>" class="form-horizontal" method="POST" >
            <?php echo e(csrf_field()); ?>

                <div class="col-md-7">
                    <div class="form-group<?php echo e($errors->has('anotacoes') ? ' has-error' : ''); ?>">
                        <label for="anotacoes" class="col-md-4 control-label">Anotaçoes do mestre</label>

                        <div class="col-md-6">
                            <textarea class="form-control" name="anotacoes" onkeyup="updateFicha()"
                                      required autofocus><?php echo e($fichaJogador->anotacoes); ?></textarea>

                            <?php if($errors->has('anotacoes')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('anotacoes')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_user" value="<?php echo e($fichaJogador->id_user_ficha); ?>"/>
                <input type="hidden" name="id_cronica" value="<?php echo e($fichaJogador->id_cronica); ?>"/>
                <input type="hidden" name="resumo" value="<?php echo e($fichaJogador->resumo); ?>"/>
                <input type="hidden" name="nome" value="<?php echo e($fichaJogador->nome); ?>"/>
                <input type="hidden" name="id_ficha" value="<?php echo e($ficha->id); ?>"/>
                <input type="hidden" name="id_fichaUser" value="<?php echo e($fichaJogador->id); ?>"/>
        </form>
    </div>
</div>
<?php else: ?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>
                    Anotações do mestre
                </th>
            </tr>
            <tr>
                <td><?php echo nl2br(e($fichaJogador->anotacoes)); ?></td>
            </tr>
        </table>
    </div>
</div>
<?php endif; ?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>Valores específicos</th>
                <th></th>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                    <?php echo e($valorQuintessencia->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorQuintessencia->id); ?>" ><?php for($i=0;$i<$valorQuintessencia->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorQuintessencia->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorQuintessencia->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorQuintessencia->id); ?>" type="hidden" name="nome" value="<?php echo e($valorQuintessencia->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorQuintessencia->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorQuintessencia->id_fichaUser); ?>"/>
                        <input type="hidden" name="id_caracteristica" value="<?php echo e($valorQuintessencia->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorQuintessencia->id); ?>" type="hidden" name="valor" value="<?php echo e($valorQuintessencia->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorQuintessencia->id); ?>); getValor(<?php echo e($valorQuintessencia->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorQuintessencia->id); ?>);getValor(<?php echo e($valorQuintessencia->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                    <?php echo e($valorQuintessencia->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorQuintessencia->id); ?>" ><?php for($i=0;$i<$valorQuintessencia->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?> 
            
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                    <?php echo e($valorParadoxo->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorParadoxo->id); ?>" ><?php for($i=0;$i<$valorParadoxo->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorParadoxo->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorParadoxo->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorParadoxo->id); ?>" type="hidden" name="nome" value="<?php echo e($valorParadoxo->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorParadoxo->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorParadoxo->id_fichaUser); ?>"/>
                        <input type="hidden" name="id_caracteristica" value="<?php echo e($valorParadoxo->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorParadoxo->id); ?>" type="hidden" name="valor" value="<?php echo e($valorParadoxo->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorParadoxo->id); ?>); getValor(<?php echo e($valorParadoxo->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorParadoxo->id); ?>);getValor(<?php echo e($valorParadoxo->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                    <?php echo e($valorParadoxo->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorParadoxo->id); ?>" ><?php for($i=0;$i<$valorParadoxo->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?> 
            
            <tr>
                <td width="200">
                    <?php echo e($valorArete->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorArete->id); ?>" ><?php for($i=0;$i<$valorArete->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <tr>
                <td width="200">
                    <?php echo e($valorAvatar->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorAvatar->id); ?>" ><?php for($i=0;$i<$valorAvatar->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <tr>
                <td width="200">
                    <?php echo e($valorForcaVontade->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorForcaVontade->id); ?>" ><?php for($i=0;$i<$valorForcaVontade->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-<?php echo e($valorForcaVontadeJogo->id); ?>" ><?php for($i=0;$i<$valorForcaVontadeJogo->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorForcaVontadeJogo->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorForcaVontadeJogo->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorForcaVontadeJogo->id); ?>" type="hidden" name="nome" value="<?php echo e($valorForcaVontadeJogo->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorForcaVontadeJogo->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorForcaVontadeJogo->id_fichaUser); ?>"/>
                        <input type="hidden" name="id_caracteristica" value="<?php echo e($valorForcaVontadeJogo->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorForcaVontadeJogo->id); ?>" type="hidden" name="valor" value="<?php echo e($valorForcaVontadeJogo->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorForcaVontadeJogo->id); ?>); getValor(<?php echo e($valorForcaVontadeJogo->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorForcaVontadeJogo->id); ?>);getValor(<?php echo e($valorForcaVontadeJogo->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                </td>
                <td>
                    <b id="bold-<?php echo e($valorForcaVontadeJogo->id); ?>" ><?php for($i=0;$i<$valorForcaVontadeJogo->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?>   
<?php if(Auth::user()!=null&&isset($cronica)&&$cronica->id_user===Auth::user()->id): ?>            
            <tr>
                <td width="200">
                    <?php echo e($valorDano->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorDano->id); ?>" ><?php for($i=0;$i<$valorDano->valor;$i++): ?>✺<?php endfor; ?></b>
                    <form id="form-<?php echo e($valorDano->id_valor); ?>" action="<?php echo e(route('jogo.valor.update')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input id="sinal-<?php echo e($valorDano->id); ?>" type="hidden" name="sinal"/>
                        <input id="nome-<?php echo e($valorDano->id); ?>" type="hidden" name="nome" value="<?php echo e($valorDano->nome); ?>" />
                        <input type="hidden" name="id" value="<?php echo e($valorDano->id); ?>" />
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($valorDano->id_fichaUser); ?>"/>
                        <input id="caracteristica-<?php echo e($valorDano->id); ?>" type="hidden" name="id_caracteristica" value="<?php echo e($valorDano->id_caracteristica); ?>"/>
                        <input id="valor-<?php echo e($valorDano->id); ?>" type="hidden" name="valor" value="<?php echo e($valorDano->valor); ?>" />
                        <input type="button" value="+" class="btn btn-primary" onclick="add(<?php echo e($valorDano->id); ?>); getValor(<?php echo e($valorDano->id); ?>)"/>
                        <input type="button" value="-" class="btn btn-primary" onclick="sub(<?php echo e($valorDano->id); ?>);getValor(<?php echo e($valorDano->id); ?>)"/>
                    </form>
                </td>
            </tr>
<?php else: ?>
            <tr>
                <td width="200">
                    <?php echo e($valorDano->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorDano->id); ?>" ><?php for($i=0;$i<$valorDano->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
<?php endif; ?> 
            <tr>
                <td width="200">
                    <?php echo e($valorArete->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorArete->id); ?>" ><?php for($i=0;$i<$valorArete->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <tr>
                <td width="200">
                    <?php echo e($valorAvatar->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valorAvatar->id); ?>" ><?php for($i=0;$i<$valorAvatar->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <table class="table table-striped">
            <tr>
                <th>Tabela de dano</th>
                <th></th>
            </tr>
            <tr>
                <td width="200">
                    1 - Escoriado
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td width="200">
                    2 - Machucado
                </td>
                <td>
                    -1
                </td>
            </tr>
            <tr>
                <td width="200">
                    3 -Ferido
                </td>
                <td>
                    -1
                </td>
            </tr>
            <tr>
                <td width="200">
                    4 - Ferido Gravemente
                </td>
                <td>
                    -2
                </td>
            </tr>
            <tr>
                <td width="200">
                    5 - Espancado
                </td>
                <td>
                    -2
                </td>
            </tr>
            <tr>
                <td width="200">
                    6 - Aleijado
                </td>
                <td>
                    -5
                </td>
            </tr>
            <tr>
                <td width="200">
                    7 - Incapacitado
                </td>
                <td>
                    Inconsciente
                </td>
            </tr>
        </table>
    </div>
</div>
        
<div class="row">
    <div class="col-md-6">
        <table class="table table-striped">
            <tr>
                <th>Esferas</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresFicha; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="col-md-6">
        <table class="table table-striped">
            <tr>
                <th>Antecedentes</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $valoresAntecedentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="200">
                    <?php echo e($valor->nome); ?>

                </td>
                <td>
                    <b id="bold-<?php echo e($valor->id); ?>" ><?php for($i=0;$i<$valor->valor;$i++): ?>✺<?php endfor; ?></b>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<?php endif; ?>
<div class="row">
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button id="button" type="button" class="btn btn-primary" onclick="window.history.back();">
                Voltar
            </button>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>