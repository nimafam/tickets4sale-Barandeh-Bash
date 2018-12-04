<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">

    <style>
        .is-complete{
            text-decoration: line-through;
        }
    </style>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

</head>
<body class="has-navbar-fixed-top">

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
                    <a href="/tickets/genre" class="navbar-item">
                        Category
                    </a>
                    <a href="/tickets/buy" class="navbar-item">
                        Buy a ticket
                    </a>

                </div>

            </div>
        </nav>

    </header>
    @yield('content')
</div>
</body>
</html>