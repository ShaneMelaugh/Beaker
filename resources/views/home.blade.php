@extends('loginLayout')

@section('content')
<div class="">
    <div class="">
        <div class="">
            <div class="">

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="login__form">
                        <div class="login__imgWrap">
                            <img class="login__img login__success--img" src="../../images/tick.svg"/>
                            <h5 class=login__success--heading>You're In! Let's get to work</h5>
                        </div>

                        <div class="login__section">
                            <div class="login__buttonWrap">
                                <button type="" class="button beaker login__button">
                                    <a href="/">Dashboard</a>
                                </button>
                            </div>
                        </div>
                        {!! $chart->html() !!}
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
{!! Charts::scripts() !!}
{!! $chart->script() !!}
@endsection
