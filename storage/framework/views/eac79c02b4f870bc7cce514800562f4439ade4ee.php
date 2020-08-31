
<script>
function votar(alternativa){
    var url = 'votos/'+alternativa+'/'+'<?php echo e($pergunta->id); ?>';
    fetch(url, {
                method: 'GET',
                headers : new Headers(),
            }).then(function (data) {
                data.text()
                        .then(function (result) {
                            document.getElementById('votos').innerHTML=result;
                            console.log(result);
                        })
            }).catch(function (error) {
            console.log('Request failure: ', error);
            });
            alert('Voto computado.');
}
</script>
<table class="table table-striped">
    <tr>
        <td colspan="3"><?php echo e($pergunta->pergunta); ?></td>
    </tr>
    <?php $__currentLoopData = $alternativas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alternativa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($alternativa['alternativa']); ?></td>
        <td><?php echo e($alternativa['total']); ?></td>
        <td>
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="id_pergunta" value="<?php echo e($pergunta->id); ?>"/>
            <input type="hidden" name="alternativa" value="<?php echo e($alternativa['alternativa']); ?>"/>
            <input class="btn btn-primary" type="button" value="✔" onclick="votar('<?php echo e($alternativa['alternativa']); ?>')"/>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

