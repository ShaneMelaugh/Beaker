@extends('loginLayout')

@section('title', 'Login')

@section('content')

                <div class="">
                    <form method="POST" class="login__form" action="{{ route('login') }}">
                        @csrf

                        <div class="login__imgWrap">
                            <img class="login__img" src="../../images/logo-dark.svg"/>
                            <h5>Log in now to start working!</h5>
                        </div>

                        <div class="login__wrap">
                        <div class="login__section">
                                <div class="">
                                <input id="email" placeholder="E-mail Address" type="email" class="login__input {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="login__section">
                            <div class="">
                                <input id="password" placeholder="Password" type="password" class="login__input {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="login__section">
                            <div class="">
                                <div class="">
                                    <input class="login__checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="login__checkbox--label" for="remember">
                                        {{ __('Remember My Login Details') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="login__section">
                            <div class="login__buttonWrap">
                                <button type="submit" class="button beaker login__button">
                                    {{ __('Login') }}
                                </button>

                                <button type="" class="button beaker login__button">
                                    <a href="/register">Register</a>
                                </button>
                            </div>
                        </div>
                                <div class="login__buttonWrap">
                                @if (Route::has('password.request'))
                                    <a class="login__link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                    </div>
                    </form>
                </div>
@endsection
