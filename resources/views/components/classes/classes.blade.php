@if(strpos(url()->current(), 'create'))
<div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
    <label for="nome" class="col-md-4 control-label">Nome</label>

    <div class="col-md-6">
        <input id="nome" type="text" class="form-control" name="nome" required autofocus/>

        @if ($errors->has('nome'))
        <span class="help-block">
            <strong>{{ $errors->first('nome') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
    <label for="descricao" class="col-md-4 control-label">Descrição</label>

    <div class="col-md-6">
        <textarea id="descricao" type="text" class="form-control" name="descricao" required></textarea>

        @if ($errors->has('descricao'))
        <span class="help-block">
            <strong>{{ $errors->first('descricao') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('poderes') ? ' has-error' : '' }}">
    <label for="poderes" class="col-md-4 control-label">Poderes</label>

    <div class="col-md-6">
        <textarea id="poderes" type="text" class="form-control" name="poderes" required></textarea>

        @if ($errors->has('poderes'))
        <span class="help-block">
            <strong>{{ $errors->first('poderes') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('objetivo') ? ' has-error' : '' }}">
    <label for="objetivo" class="col-md-4 control-label">Objetivo do grupo</label>

    <div class="col-md-6">
        <textarea id="objetivo" type="text" class="form-control" name="objetivo" required></textarea>

        @if ($errors->has('objetivo'))
        <span class="help-block">
            <strong>{{ $errors->first('objetivo') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            Inserir
        </button>
    </div>
</div>
@else
<div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
    <label for="nome" class="col-md-4 control-label">Nome</label>

    <div class="col-md-6">
        <input id="nome" type="text" class="form-control" name="nome" value="{{ $classe->nome }}" required autofocus/>
        @if ($errors->has('nome'))
        <span class="help-block">
            <strong>{{ $errors->first('nome') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
    <label for="descricao" class="col-md-4 control-label">Descrição</label>

    <div class="col-md-6">
        <textarea id="descricao" type="text" class="form-control" name="descricao" required>{{ $classe->descricao }}</textarea>

        @if ($errors->has('descricao'))
        <span class="help-block">
            <strong>{{ $errors->first('descricao') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('poderes') ? ' has-error' : '' }}">
    <label for="poderes" class="col-md-4 control-label">Poderes</label>

    <div class="col-md-6">
        <textarea id="poderes" type="text" class="form-control" name="poderes" required>{{ $classe->poderes }}</textarea>

        @if ($errors->has('poderes'))
        <span class="help-block">
            <strong>{{ $errors->first('poderes') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('objetivo') ? ' has-error' : '' }}">
    <label for="objetivo" class="col-md-4 control-label">Objetivo do grupo</label>

    <div class="col-md-6">
        <textarea id="objetivo" type="text" class="form-control" name="objetivo" required>{{ $classe->objetivo }}</textarea>

        @if ($errors->has('objetivo'))
        <span class="help-block">
            <strong>{{ $errors->first('objetivo') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            Alterar
        </button>
    </div>
</div>
@endif