<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Книга рецептов</title> --}}
</head>
<body>
      <div class="container">
      @extends('layouts.app')

      @section('title', 'Кабинет')

      @section('content')
    <main>
        <main class="d-flex">
            <div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h3>Личный кабинет</h3>
                    </li>
                    <li class="list-group-item"><a id="accountUser" class="link-dark link-underline-light" href="/accountUser">Обо мне</a></li>
                    <li class="list-group-item"><a id="accountBookmark" class="link-dark link-underline-light"href="/pet">Мои питомцы</a></li>
                    <li class="list-group-item"><a id="accountBooks" class="link-dark link-underline-light" href="accountBooks.html">Мои товары</a></li>
                </ul>
            </div>
            <div id="bodyAccount" class="w-75 mx-auto"></div>
        </main>

        
    </main>
    @endsection
</body>
</html>