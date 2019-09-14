@extends('layouts.frontend')

@section('content')
    <div class="container">
<div class="row">
    <div class="col-md-6 py-5">
        <p class="sing-in-title"> sign in</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email" >{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control py-4{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus aria-autocomplete="user_email">

                 @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                 @endif

            </div>
            <div class="form-group">
                <label for="password" >{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control py-4 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                 @endif
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>

            <br>
            <br>
            @if (Route::has('password.request'))
                <a class="btn btn-link text-dark" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </form>
    </div>
</div>
    </div>
@endsection
