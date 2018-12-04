<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/main-style.css') }}" />

    <style>
        .is-complete{
            text-decoration: line-through;
        }
    </style>
    <script type="javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

</head>
<body class="has-navbar-fixed-top">
<section class="section">
    <div class="container">
        <header class="header">
            <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/tickets">
                        {{ HTML::image('images/logo.png', 'tickets4sale', ['width' => 112]) }}
                    </a>

                </div>

                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-start">

                    </div>
                </div>
            </nav>

        </header>
    </div>
</section>

@yield('content')

<footer class="footer">
    <div class="container">
        <div class="columns">
            <div class="column"></div>
            <div class="column">
                {{ HTML::image('images/logo.png', 'Tickets4Sale Logo') }}
            </div>
            <div class="column"></div>
        </div>
        <div class="columns">
            <div class="column"></div>
            <div class="column">
                <div class="content">
                    <p class="is-center">All Rights Reserved &copy; Tickets4Sale {{ date('Y', time()) }}</p>
                </div>
            </div>
            <div class="column"></div>
        </div>
    </div>
</footer>
</body>
</html>
