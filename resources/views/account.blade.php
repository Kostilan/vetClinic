@extends('layouts.app')

@section('title', 'Кабинет')

@section('content')
    <main class="border border-secondary rounded m-2 p-3">
        <main class="d-flex">
            <div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h3>Личный кабинет</h3>
                    </li>
                    <li class="list-group-item">
                        <a id="accountUser" class="link-dark link-underline-light" href="/accountUser">
                            Обо мне
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a id="accountBookmark" class="link-dark link-underline-light"href="/pet">
                            Мои питомцы
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a id="accountBooks" class="link-dark link-underline-light" href="accountBooks.html">
                            Мои товары
                        </a>
                    </li>
                </ul>
            </div>
            <div id="bodyAccount" class="w-75 mx-auto"></div>
        </main>


    </main>
@endsection
