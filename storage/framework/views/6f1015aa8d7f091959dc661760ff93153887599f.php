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
<div class="row">
    <?php if(isset($user)): ?>
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Altere sua senha</div>

            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="<?php echo e(route('users.updatesenha', $user->id)); ?>">
                    <?php echo e(method_field('PUT')); ?>

                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="name" value="<?php echo e($user->name); ?>"/>
                        <input type="hidden" name="email" value="<?php echo e($user->email); ?>"/>
                        <input type="hidden" name="tipo" value="<?php echo e($user->tipo); ?>"/>
                        <input type="hidden" name="id_fichaUser" value="<?php echo e($user->id_fichaUser); ?>"/>
                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required/>

                                <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <?php else: ?>
    <div class="col-md-12">
        <h1>Link inválido</h1>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>