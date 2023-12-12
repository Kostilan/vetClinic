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
    <nav class="navbar navbar-light ">
        <div class="container-fluid ">
            <a href="/" class="navbar-brand  ">Клиника</a>
            <a href="/catalog" class="navbar-brand  ">Каталог</a>
            @guest
            <a id="log_in" href="{{ route('login') }}" class="nav-item nav-link">Вход</a>
            <a id="sign_in" href="{{ route('register') }}" class="nav-item nav-link">Регистрация</a>  
            @endguest
            @auth
            <a href="/basket" class="nav-item nav-link">В корзину</a>
            <a href="/account" class="nav-item nav-link">В кабинет</a>
            <form action="/logout" method="POST" class="form-inline">
              @csrf
              <input type="submit" class="btn btn-danger" value="Выход">
          </form>
            @endauth
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
</body>

</html>
