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
<div class="form-group{{ $errors->has('resumo') ? ' has-error' : '' }}">
    <label for="resumo" class="col-md-4 control-label">Resumo</label>

    <div class="col-md-6">
        <textarea class="form-control" name="resumo" required autofocus></textarea>

        @if ($errors->has('resumo'))
        <span class="help-block">
            <strong>{{ $errors->first('resumo') }}</strong>
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
        <input id="nome" type="text" class="form-control" name="nome" value="{{ $cronica->nome }}" required/>
        @if ($errors->has('nome'))
        <span class="help-block">
            <strong>{{ $errors->first('nome') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('resumo') ? ' has-error' : '' }}">
    <label for="resumo" class="col-md-4 control-label">Resumo</label>

    <div class="col-md-6">
        <textarea class="form-control" name="resumo" required autofocus>{{ $cronica->resumo }}</textarea>

        @if ($errors->has('resumo'))
        <span class="help-block">
            <strong>{{ $errors->first('resumo') }}</strong>
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