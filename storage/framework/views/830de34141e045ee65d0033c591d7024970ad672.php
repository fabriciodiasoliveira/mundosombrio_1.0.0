<?php if(strpos(url()->current(), 'create')): ?>
<div class="form-group<?php echo e($errors->has('pergunta') ? ' has-error' : ''); ?>">
    <label for="pergunta" class="col-md-4 control-label">Pergunta</label>

    <div class="col-md-6">
        <input id="pergunta" type="text" class="form-control" name="pergunta" required autofocus/>

        <?php if($errors->has('pergunta')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('pergunta')); ?></strong>
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
<div class="form-group<?php echo e($errors->has('pergunta') ? ' has-error' : ''); ?>">
    <label for="pergunta" class="col-md-4 control-label">Pergunta</label>
    <div class="col-md-6">
        <input id="pergunta" type="text" class="form-control" name="pergunta" value="<?php echo e($pergunta->pergunta); ?>" required autofocus/>
        <?php if($errors->has('pergunta')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('pergunta')); ?></strong>
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