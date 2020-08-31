<?php if(strpos(url()->current(), 'create')): ?>
<div class="row">
    <div class="col-md-7">
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
    </div>
    <div class="col-md-7">
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
    </div>
    <input type="hidden" name="id_classe" value="<?php echo e($classe->id); ?>"/>
</div>
<div class="row">
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Inserir
            </button>
        </div>
    </div>
</div>
<?php else: ?>
<div class="row">
    <div class="col-md-7">
        <div class="form-group<?php echo e($errors->has('nome') ? ' has-error' : ''); ?>">
            <label for="nome" class="col-md-4 control-label">Nome</label>

            <div class="col-md-6">
                <input id="nome" type="text" class="form-control" name="nome" value="<?php echo e($ficha->nome); ?>" required autofocus/>

                <?php if($errors->has('nome')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('nome')); ?></strong>
                </span>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="form-group<?php echo e($errors->has('resumo') ? ' has-error' : ''); ?>">
            <label for="resumo" class="col-md-4 control-label">Resumo</label>

            <div class="col-md-6">
                <textarea class="form-control" name="resumo" required autofocus><?php echo e($ficha->resumo); ?></textarea>

                <?php if($errors->has('resumo')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('resumo')); ?></strong>
                </span>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <input type="hidden" name="id_classe" value="<?php echo e($ficha->id_classe); ?>"/>
</div>
<div class="row">
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Alterar
            </button>
        </div>
    </div>
</div>

<?php endif; ?>