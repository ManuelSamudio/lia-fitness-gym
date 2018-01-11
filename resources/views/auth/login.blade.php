@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Iniciar Sesión</div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Correo Electrónico</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Correo Electrónico" required>
                        @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" {{ old('remember') ? 'checked' : '' }}> Recordarme</label>
                        </div>
                    </div>

                    <div class="form-group">

                            <button type="submit" class="btn btn-primary btn-block">
                                Login
                            </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
