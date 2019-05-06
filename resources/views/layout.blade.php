<!DOCTYPE html>
<html>

<head>
    {!! Charts::assets() !!}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beaker Style Guide</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation.min.css" integrity="sha256-xpOKVlYXzQ3P03j397+jWFZLMBXLES3IiryeClgU5og= sha384-gP4DhqyoT9b1vaikoHi9XQ8If7UNLO73JFOOlQV1RATrA7D0O7TjJZifac6NwPps sha512-AKwIib1E+xDeXe0tCgbc9uSvPwVYl6Awj7xl0FoaPFostZHOuDQ1abnDNCYtxL/HWEnVOMrFyf91TDgLPi9pNg==" crossorigin="anonymous">

     <link rel="stylesheet" href="/css/app.css" id="theme_css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    @extends('fonts')
</head>
<body>

<body id="app-root" class="theme-beaker">

    <section class="navwrap app-container">
        <div class="navbar__corner">
            <svg class="navbar__logo navbar__logo--img" width="112px" height="150px" viewBox="0 0 112 150" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="iPhone-8" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Group-3" transform="translate(4.000000, 5.000000)">
            <path class="navbar__logo--stroke" d="M75,9 L75,42.3501729 C92.1822666,50.837801 104,68.5388107 104,89 C104,117.718807 80.718807,141 52,141 C23.281193,141 0,117.718807 0,89 C0,68.5388107 11.8177334,50.837801 28.999996,42.3501749 L29,9 L27.5,9 C25.0147186,9 23,6.98528137 23,4.5 C23,2.01471863 25.0147186,4.56538782e-16 27.5,0 L77.5,0 C79.9852814,-4.56538782e-16 82,2.01471863 82,4.5 C82,6.98528137 79.9852814,9 77.5,9 L75,9 Z" id="Combined-Shape" stroke-width="5"></path>
            <path class="navbar__logo--fill" d="M8,91 L96,91 C95.1777439,114.592474 75.7929365,133.465918 52,133.465918 C28.2070635,133.465918 8.82225607,114.592474 8.00000033,91.0000093 Z" id="Combined-Shape"></path>
            </g>
        </g>
    </svg>
        </div>

        <div class="navbar__top">
            <i class="fas fa-bars navbar__top--hamburger" id="hamburger"></i>
            <h1 class="navbar__top--title">@yield('title') | Beaker</h1>
        </div>

        <div class="navbar__left" id="navbarleft">
            <img src="src/images/logo-left.svg" class="navbar__left--logo">
            <ul class="navbar__list">

                <li class="navbar__list--item">
                    <i class="fas fa-plus-circle navbar__list--icon"></i>
                    <a href="{{ url('/tests/create') }}" class="navbar__list--link">Create a Test</a>
                </li>

                <li class="navbar__list--item">
                    <i class="fas fa-vial navbar__list--icon"></i>
                    <a href="#" class="navbar__list--link">Take a Test</a>
                </li>

                <li class="navbar__list--item">
                    <i class="fas fa-tasks navbar__list--icon"></i>
                    <a href="{{ url('/tests') }}" class="navbar__list--link">My Tests</a>
                </li>
            </ul>

            <hr class="navbar__left--rule">

            <ul class="navbar__list">
                <li class="navbar__list--item">
                    <i class="fas fa-palette navbar__list--icon"></i>
                    <a href="{{ url('theme') }}" class="navbar__list--link">Themes</a>
                </li>

                <li class="navbar__list--item">
                    <i class="fas fa-cogs navbar__list--icon"></i>
                    <a href="#" class="navbar__list--link">Settings</a>
                </li>

        <button class="switch" id="light">Light</button>
        <button class="switch" id="dark">dark</button>
        <button class="switch" id="beaker">beaker</button>
        <button class="switch" id="outrun">outrun</button>

            </ul>

            <hr class="navbar__left--rule">

            <ul class="navbar__list">
                <li class="navbar__list--item">
                    <i class="fas fa-user navbar__list--icon"></i>
                    <a href="{{ url('/login') }}" class="navbar__list--link"> login </a>
                </li>
                <li class="navbar__list--item">
                    <i class="fas fa-user navbar__list--icon"></i>
                    <a href="{{ url('/logout') }}" class="navbar__list--link"> login </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="content">
      @yield('content')
    </section>
    
    <div class="cta">
        <i class="fas fa-plus cta__icon"></i>
    </div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/js/foundation.min.js" integrity="sha256-/PFxCnsMh+nTuM0k3VJCRch1gwnCfKjaP8rJNq5SoBg= sha384-9ksAFjQjZnpqt6VtpjMjlp2S0qrGbcwF/rvrLUg2vciMhwc1UJJeAAOLuJ96w+Nj sha512-UMSn6RHqqJeJcIfV1eS2tPKCjzaHkU/KqgAnQ7Nzn0mLicFxaVhm9vq7zG5+0LALt15j1ljlg8Fp9PT1VGNmDw==" crossorigin="anonymous"></script>

</body>
</html>
