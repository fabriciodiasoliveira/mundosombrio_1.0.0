<?php if(strpos(url()->current(), 'create')): ?>
<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
    <label for="name" class="col-md-4 control-label">Nome</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus/>

        <?php if($errors->has('name')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('name')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required/>

        <?php if($errors->has('email')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('email')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>
<div class="form-group<?php echo e($errors->has('tipo') ? ' has-error' : ''); ?>">
    <label for="tipo" class="col-md-4 control-label">Tipo de usuário</label>

    <div class="col-md-6">
        <select id="tipo" type="tipo" class="form-control" name="tipo" value="<?php echo e(old('tipo')); ?>" required/>
            <option value="autor">Autor</option>
            <option value="admin">Administrador</option>
        </select>

        <?php if($errors->has('tipo')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('tipo')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>
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
            Cadastre-se
        </button>
    </div>
</div>
<?php else: ?>
<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
    <label for="name" class="col-md-4 control-label">Nome</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>" required/>
        <?php if($errors->has('name')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('name')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="<?php echo e($user->email); ?>" required>

        <?php if($errors->has('email')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('email')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>
<div class="form-group<?php echo e($errors->has('tipo') ? ' has-error' : ''); ?>">
    <label for="tipo" class="col-md-4 control-label">Tipo de usuário</label>

    <div class="col-md-6">
        <select id="tipo" type="tipo" class="form-control" name="tipo">
            <option value="autor" <?php if($user->tipo=='autor'): ?> selected <?php endif; ?>>Autor</option>
            <option value="admin" <?php if($user->tipo=='admin'): ?> selected <?php endif; ?>>Administrador</option>
        </select>

        <?php if($errors->has('tipo')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('tipo')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>
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
            Cadastre-se
        </button>
    </div>
</div>
<?php endif; ?>