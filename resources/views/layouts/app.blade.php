<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') :: Клиника</title>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.esm.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        <a class="navbar-brand" href="#">@yield('title')</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-weight-light" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-item nav-link">Клиника</a>
                </li>
                <li class="nav-item">
                    <a href="/catalog" class="nav-item nav-link">Каталог</a>
                </li>
                @guest
                    <div class="nav-item">
                        <a id="log_in" href="{{ route('login') }}" class="nav-item nav-link">Вход</a>
                    </div>
                    <div class="nav-item">
                        <a id="sign_in" href="{{ route('register') }}" class="nav-item nav-link">Регистрация</a>
                    </div>
                @endguest
                @auth
                    <div class="nav-item">
                        <a href="/basket" class="nav-item nav-link">В корзину</a>
                    </div>
                    <div class="nav-item">
                        <a href="/account" class="nav-item nav-link">В кабинет</a>
                    </div>
                    <div class="nav-item">
                        <form action="/logout" method="POST" class="form-inline">
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Выход">
                        </form>
                    </div>
                @endauth
            </ul>
        </div>
    </nav>

    <div id="modal" class="modal">
        <div class="modal-wrap">
            <div class="modal-window">
                <button class="modal-close" id="modal-close">&#5815;</button>
                <div id="m_body"></div>
            </div>
        </div>
    </div>
    @yield('content')



    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.esm.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
