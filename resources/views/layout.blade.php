<!DOCTYPE html>
<html>

<head>
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
            <img src="../img/logo.svg" class="navbar__corner--logo">
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
