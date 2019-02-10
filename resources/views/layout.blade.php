
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="Webpage description goes here" />
  <meta charset="utf-8">

  <title>Change_me</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="">

  <link rel="stylesheet" href="/css/app.css" id="theme_css" media="all">

  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body id="app-root" class="theme-light app-container">

<section class="wrapper">

    <section class="topbar">
      <i class="fas fa-bars topbar__icon"></i>
      <h1 class="topbar__title">@yield('title') | Beaker</h1>
    </section>

    <nav class="navbar">

      <div class="navbar__logo">
      <img src="img/logo.svg" class="navbar__logo--img"/>
      </div>

      <ul class="navbar__list">
        <li class="navbar__list--item">
          <i class="fas fa-plus-circle navbar__list--icon"></i>
          <a href="{{ url('/projects/create') }}" class="navbar__list--link">Test Builder</a>
        </li>

        <li class="navbar__list--item">
          <i class="fas fa-vial navbar__list--icon"></i>
          <a class="navbar__list--link">Take a Test</a>
        </li>

        <li class="navbar__list--item">
          <i class="fas fa-tasks navbar__list--icon"></i>
          <a href="{{ url('/projects') }}" class="navbar__list--link">My Tests</a>
        </li>

        <li class="navbar__list--item">
          <i class="fas fa-palette navbar__list--icon"></i>
          <a class="navbar__list--link">Themes</a>
        </li>

              <button id="lightBtn" class="button__theme">Light Theme</button>
              <button id="darkBtn" class="button__theme">Dark Theme</button>
              <button id="beakerBtn" class="button__theme">Beaker Theme</button>

      </ul>

      <hr class="navbar__rule">

      <ul class="navbar__list">
        <li class="navbar__list--item">
          <i class="fas fa-cogs navbar__list--icon"></i>
          <a class="navbar__list--link">Settings</a>
        </li>

        <li class="navbar__list--item">
          <i class="fas fa-question-circle navbar__list--icon"></i>
          <a class="navbar__list--link">Help</a>
        </li>
      </ul>

        <hr class="navbar__rule">
      <ul class="navbar__list">

        <li class="navbar__list--item">
          <i class="fas fa-user navbar__list--icon"></i>
          <a href="{{ url('/login') }}" class="navbar__list--link"> login </a>
        </li>

        <li class="navbar__list--item">
          <i class="fas fa-user navbar__list--icon"></i>
          <a href="{{ url('/logout') }}" class="navbar__list--link"> logout </a>
        </li>
      </ul>
    </nav>

    <section class="wrapper__content">

      @yield('content')

    </section>

  <section>

<script src="/js/app.js"></script>

</body>
</html>
