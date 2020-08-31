@extends('layouts.app')

@section('content')
@if(session()->get('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}  
</div><br />
@endif
@if(session()->get('error'))
<div class="alert alert-danger">
    {{ session()->get('error') }}  
</div><br />
@endif
@if(session()->get('info'))
<div class="alert alert-info">
    {{ session()->get('info') }}  
</div><br />
@endif
<div class="row">
    @if(isset($user))
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Altere sua senha</div>

            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('users.updatesenha', $user->id) }}">
                    {{method_field('PUT')}}
                    {{ csrf_field() }}
                    <input type="hidden" name="name" value="{{ $user->name }}"/>
                        <input type="hidden" name="email" value="{{ $user->email }}"/>
                        <input type="hidden" name="tipo" value="{{ $user->tipo }}"/>
                        <input type="hidden" name="id_fichaUser" value="{{ $user->id_fichaUser }}"/>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required/>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
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

    @else
    <div class="col-md-12">
        <h1>Link inválido</h1>
    </div>
    @endif
</div>
@endsection
