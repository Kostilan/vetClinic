@extends('layouts.app')

@section('title', 'Корзина')

@section('content')

<div class="cart_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <div class="cart_title h3">Shopping Cart<small class="text-muted"> (1 item in your cart) </small></div>
                    @foreach ($products as $item)
                    <div class="cart_items">
                        <ul class="list-group cart_list">
                            <li class="list-group-item cart_item clearfix">
                                <div class="cart_item_image"><img src="https://i.imgur.com/qqBRWD5.jpg" alt="" class="img-fluid"></div>
                                <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title">Название</div>
                                        <div class="cart_item_text">аааа</div>
                                    </div>
                                    <div class="cart_item_color cart_info_col">
                                        <div class="cart_item_title">Артикул</div>
                                        <div class="cart_item_text">ааа</div>
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <input id="login" type="number" class="form-control"  name="" value="0">
                                    </div>
                                    <div class="cart_item_price cart_info_col">
                                        <div class="cart_item_title">Цена</div>
                                        <div class="cart_item_text">₹22000</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Цена товаров</div>
                                        <div class="cart_item_text">₹22000</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="order_total mt-3">
                        <div class="order_total_content text-md-right">
                            <div class="order_total_title">Сумма всех товаров</div>
                            <div class="order_total_amount h5">₹22000</div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                    <div class="cart_buttons mt-4">
                        <button type="button" class="btn btn-secondary cart_button_clear">Вернуться в корзину</button>
                        <button type="button" class="btn btn-primary cart_button_checkout">Заказать</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection