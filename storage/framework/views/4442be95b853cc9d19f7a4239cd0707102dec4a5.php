<?php $__env->startSection('content'); ?>
<div class="row">
    <div id="container" class="col-md-12">
        <canvas id="canvas"></canvas>
        <script>
        var color = Chart.helpers.color;
        var barChartData = {
                labels: [<?php $__currentLoopData = $visitas[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>'<?php echo e($data); ?>',<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>],
                datasets: [{
                        label: 'Quantidade de visitas',
                        backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                        borderColor: window.chartColors.blue,
                        borderWidth: 3,
                        data: [<?php $__currentLoopData = $visitas[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($visitas[0][$data]); ?><?php if(next($visitas[1])): ?>,
<?php endif; ?>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        ]
                },{
                        label: 'Quantidade de visitas na página principal',
                        backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                        borderColor: window.chartColors.red,
                        borderWidth: 3,
                        data: [<?php $__currentLoopData = $visitasIndex[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($visitasIndex[0][$data]); ?><?php if(next($visitasIndex[1])): ?>,
<?php endif; ?>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        ]
                }]

        };

        window.onload = function() {
                var ctx = document.getElementById('canvas').getContext('2d');
                window.myBar = new Chart(ctx, {
                        type: 'bar',
                        data: barChartData,
                        options: {
                                responsive: true,
                                legend: {
                                        position: 'top',
                                },
                                title: {
                                        display: true,
                                        text: 'Quantidade de visitas'
                                }
                        }
                });

        };
    </script>
    </div>
 </div>
<div class="row">
    <div class="col-md-12 text-center">
        <h3>Todas as visitas</h3>
    </div>
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>
                    IP
                </th>
                <th>
                    Números de acessos
                </th>
            </tr>
        <?php $__currentLoopData = $allVisitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($visita->address); ?></td>
                <td><?php echo e($visita->acessos); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>