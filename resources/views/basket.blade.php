@extends('layouts.app')

@section('title', 'Корзина')

@section('content')
    <div class="border border-secondary rounded m-2 p-3">
        <div class="cart_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cart_container">
                            <div class="cart_title h3">Корзина<small class="text-muted"> </small></div>
                            <div id="cartItems" class="cart_items">
                            </div>
                        </div>
                        <div class="cart_buttons mt-4">
                            <a href="{{ route('catalogue') }}">
                                <button type="button" class="btn btn-secondary cart_button_clear">
                                    Перейти к каталогу
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Получаем данные из localStorage
            var cartData = JSON.parse(localStorage.getItem('cart')) || [];

            // Получаем контейнер, в котором будем отображать товары
            var cartItemsContainer = document.getElementById('cartItems');

            // Очищаем содержимое контейнера перед выводом
            cartItemsContainer.innerHTML = '';

            // Обходим элементы в массиве cartData и отображаем их
            cartData.forEach(function(item, key) {
                let cartItemElement = document.createElement('div');
                cartItemElement.innerHTML = `
                <ul class="list-group cart_list">
                    <li class="list-group-item cart_item clearfix">
                        <div class="cart_item_image"><img src="${item.photo}" alt="" class="img-fluid"></div>
                        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                            <div class="cart_item_name cart_info_col">
                                <div class="cart_item_title">Название</div>
                                <div class="cart_item_text">${item.title}</div>
                            </div>
                            <div class="col-md-2 mb-2">
                                <div class="cart_item_title">Количество</div>
                                <div class="cart_item_text">${item.quantity}</div>
                            </div>
                            <div class="cart_item_price cart_info_col">
                                <div class="cart_item_title">Цена</div>
                                <div class="cart_item_text">${item.cost}</div>
                            </div>
                            <div class="cart_item_total cart_info_col">
                                <div class="cart_item_title">Цена товаров</div>
                                <div class="cart_item_text">${item.cost * item.quantity}</div><p>₽</p>
                            </div>
                            <button class="btn btn-danger" onclick="removeItem(${key})">Удалить</button>
                        </div>
                    </li>
                </ul>
            `;
                cartItemsContainer.appendChild(cartItemElement);
            });
        });

        // Функция для удаления товара из localStorage
        function removeItem(index) {
            var cartData = JSON.parse(localStorage.getItem('cart')) || [];
            cartData.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cartData));
            // Повторное отображение корзины после удаления
            document.dispatchEvent(new Event('DOMContentLoaded'));
        }
    </script>
    </div>

@endsection
