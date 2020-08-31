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
<div class="form-group<?php echo e($errors->has('descricao') ? ' has-error' : ''); ?>">
    <label for="descricao" class="col-md-4 control-label">Descrição</label>

    <div class="col-md-6">
        <textarea id="descricao" type="text" class="form-control" name="descricao" required></textarea>

        <?php if($errors->has('descricao')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('descricao')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>
<div class="form-group<?php echo e($errors->has('poderes') ? ' has-error' : ''); ?>">
    <label for="poderes" class="col-md-4 control-label">Poderes</label>

    <div class="col-md-6">
        <textarea id="poderes" type="text" class="form-control" name="poderes" required></textarea>

        <?php if($errors->has('poderes')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('poderes')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>
<div class="form-group<?php echo e($errors->has('objetivo') ? ' has-error' : ''); ?>">
    <label for="objetivo" class="col-md-4 control-label">Objetivo do grupo</label>

    <div class="col-md-6">
        <textarea id="objetivo" type="text" class="form-control" name="objetivo" required></textarea>

        <?php if($errors->has('objetivo')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('objetivo')); ?></strong>
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
        <input id="nome" type="text" class="form-control" name="nome" value="<?php echo e($classe->nome); ?>" required autofocus/>
        <?php if($errors->has('nome')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('nome')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>
<div class="form-group<?php echo e($errors->has('descricao') ? ' has-error' : ''); ?>">
    <label for="descricao" class="col-md-4 control-label">Descrição</label>

    <div class="col-md-6">
        <textarea id="descricao" type="text" class="form-control" name="descricao" required><?php echo e($classe->descricao); ?></textarea>

        <?php if($errors->has('descricao')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('descricao')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>
<div class="form-group<?php echo e($errors->has('poderes') ? ' has-error' : ''); ?>">
    <label for="poderes" class="col-md-4 control-label">Poderes</label>

    <div class="col-md-6">
        <textarea id="poderes" type="text" class="form-control" name="poderes" required><?php echo e($classe->poderes); ?></textarea>

        <?php if($errors->has('poderes')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('poderes')); ?></strong>
        </span>
        <?php endif; ?>
    </div>
</div>
<div class="form-group<?php echo e($errors->has('objetivo') ? ' has-error' : ''); ?>">
    <label for="objetivo" class="col-md-4 control-label">Objetivo do grupo</label>

    <div class="col-md-6">
        <textarea id="objetivo" type="text" class="form-control" name="objetivo" required><?php echo e($classe->objetivo); ?></textarea>

        <?php if($errors->has('objetivo')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('objetivo')); ?></strong>
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