@extends('layouts.frontend')

@section('content')
    <div class="container">
<div class="row">
    <div class="col-md-6 py-5">
        <p class="sing-in-title"> Forgot password </p>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <p> Lost your password? Please enter your username or email address. You will receive a link via email to create a new password.</p>
                @if (session('status'))
                    <p class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </p>
                @endif
                <label for="email" >{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control py-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <button type="submit" class="btn btn-dark py-3 px-4 text-uppercase font-weight-bold">
                {{ __('Send Password Reset Link') }}
            </button>


        </form>
    </div>
</div>
    </div>
@endsection
