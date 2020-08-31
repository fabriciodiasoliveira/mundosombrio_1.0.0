<?php if(strpos(url()->current(), 'create')): ?>
<div class="form-group<?php echo e($errors->has('nome') ? ' has-error' : ''); ?>">
    <label for="nome" class="col-md-4 control-label">Nome</label>

    <div class="col-md-6">
        <input id="nome" type="text" class="form-control" name="nome" required autofocus/>

        <?php if($errors->has('nome')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('nome')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>
<div class="form-group<?php echo e($errors->has('resumo') ? ' has-error' : ''); ?>">
    <label for="resumo" class="col-md-4 control-label">Resumo</label>

    <div class="col-md-6">
        <textarea class="form-control" name="resumo" required autofocus></textarea>

        <?php if($errors->has('resumo')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('resumo')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            Inserir
        </button>
    </div>
</div>
<?php else: ?>
<div class="form-group<?php echo e($errors->has('nome') ? ' has-error' : ''); ?>">
    <label for="nome" class="col-md-4 control-label">Nome</label>

    <div class="col-md-6">
        <input id="nome" type="text" class="form-control" name="nome" value="<?php echo e($cronica->nome); ?>" required/>
        <?php if($errors->has('nome')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('nome')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>
<div class="form-group<?php echo e($errors->has('resumo') ? ' has-error' : ''); ?>">
    <label for="resumo" class="col-md-4 control-label">Resumo</label>

    <div class="col-md-6">
        <textarea class="form-control" name="resumo" required autofocus><?php echo e($cronica->resumo); ?></textarea>

        <?php if($errors->has('resumo')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('resumo')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            Alterar
        </button>
    </div>
</div>
<?php endif; ?>