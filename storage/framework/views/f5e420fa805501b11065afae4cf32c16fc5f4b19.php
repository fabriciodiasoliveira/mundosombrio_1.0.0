<?php $__env->startSection('content'); ?>
<script>
function cadatrarAlternativa() {
        var url = '<?php echo e(route('admin.alternativas.store')); ?>';
        var form = new FormData(document.getElementById('my-form'));
        var alternativas = document.getElementById('alternativas');
            fetch(url, {
                method: 'POST',
                headers : new Headers(),
                body:form
            }).then(function (data) {
                data.text()
                        .then(function (result) {
                            alternativas.innerHTML=result;
                        })
            }).catch(function (error) {
            console.log('Request failure: ', error);
            });
            document.getElementById('alternativa').focus();
    }
    function deletarAlternativa(id) {
        var url = '<?php echo e(route('admin.alternativas.delete')); ?>';
        var form = new FormData(document.getElementById('my-form-'+id));
        var alternativas = document.getElementById('alternativas');
        document.getElementById('alternativa');
            fetch(url, {
                method: 'POST',
                headers : new Headers(),
                body:form
            }).then(function (data) {
                data.text()
                        .then(function (result) {
                            alternativas.innerHTML=result;
                        })
            }).catch(function (error) {
            console.log('Request failure: ', error);
            });
         document.getElementById('alternativa').focus();
    }
</script>
<div class="row">
    <div class="col-md-12">
        <?php if(session()->get('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>  
        </div><br />
        <?php endif; ?>
        <h1><?php echo e($pergunta->pergunta); ?></h1>
    </div>
</div>
<div id="alternativas" class="row">
    <?php $__env->startComponent('components.votacao.listalternativas', compact('alternativas','pergunta')); ?><?php echo $__env->renderComponent(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>