@extends('loginLayout')

@section('title', 'Register')

@section('content')
<div class="">
    <div class="">
        <div class="">
            <div class="">
                <div class="">
                    <form method="POST" class="login__form login__form--register" action="{{ route('register') }}">
                        @csrf

                        <div class="login__imgWrap">
                            <img class="login__img--register" src="../../images/logo-dark.svg"/>
                            <h5>Log in now to start working!</h5>
                        </div>

                        <div class="login__wrap">
                        <div class="login__section">
                                <input placeholder="Name" id="name" type="text" class="login__input {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="login__section">
                            <div class="">
                                <input placeholder="E-Mail Address" id="email" type="email" class="login__input {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="login__section">
                            <div class="">
                                <input placeholder="Password" id="password" type="password" class= "login__input {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="login__section">
                            <div class="">
                                <input placeholder="Verify Password" id="password-confirm" type="password" class="login__input" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="login__section">
                            <div class="login__buttonWrap">
                                <button type="submit" class="button beaker login__button">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="login__buttonWrap">
                        <a class="login__link" href="/login">Already have an account? Log in Here!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
