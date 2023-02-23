<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} {{ app()->version() }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body>
<div id="app">
    <nav class="navbar is-light is-fixed-top nav-set" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="/images/laravel-demo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item {{ Request::path() === '/' ? 'current_page_item' : ''}}" href="/home" accesskey="1" title="">Homepage</a>
                <a class="navbar-item {{ Request::path() === 'parser' ? 'current_page_item' : ''}}" href="/parser" accesskey="2" title="">Parser</a>
                <a class="navbar-item {{ Request::path() === 'about' ? 'current_page_item' : ''}}" href="/about" accesskey="3" title="">About us</a>
                <a class="navbar-item {{ Request::path() === 'articles' ? 'current_page_item' : ''}}" href="/articles" accesskey="4" title="">Articles</a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Forms</a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/forms" title="">Basic forms</a>
                        <a class="navbar-item" href="/forms/create" title="">Create basic form</a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="/request_form" title="">Request forms</a>
                        <a class="navbar-item" href="/request_form/create" title="">Create request</a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                @if (Auth::guest())
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary" href="{{ route('register') }}"><strong>Register</strong></a>
                            <a class="button is-light" href="{{ route('login') }}">Log in</a>
                        </div>
                    </div>
                @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </nav>

    {{ $slot }}

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
<footer class="footer is-light">
    <div id="copyright" class="content has-text-centered">
        <p>&copy; Алексей Богданов | Курс: GeekBrains, "Laravel. Глубокое погружение" | Февраль-Март 2021 г.</p>
    </div>
</footer>
</html>
