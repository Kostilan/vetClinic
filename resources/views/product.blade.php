@extends('layouts.app')

@section('title', 'Каталог')

@section('content')
    <main class="main border border-secondary rounded m-2 p-3">
        <div class="mainWrapper">
            <div class="mainBackground clearfix">
                <div class="row">
                    <div class="column small-centered">
                        <div class="d-flex flex-row justify-content-start">
                            <div class="col-lg-6">
                                <div class="productCard_leftSide clearfix">
                                    <div class="productCard_brendBlock">
                                        <a class="productCard_brendBlock__imageBlock" href="#">
                                            <img id="photo" src={{ $product->photo }} alt="Royal Canin">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="productCard_rightSide">
                                    <p class="block_model ">
                                        <span class="block_model__text text-muted">Артикул: </span>
                                        <span id="article"
                                            class="block_model__number text-muted">{{ $product->article }}</span>
                                    </p>

                                    <div class="block_product">
                                        <h2 id="title" class="block_name block_name__mainName">{{ $product->title }}
                                        </h2>


                                        <div class="block_informationAboutDevice">
                                            <div
                                                class="block_descriptionCharacteristic block_descriptionCharacteristic__disActive">
                                                <p>{{ $product->product_purpose }}</p>
                                            </div>
                                            <div class="block_descriptionInformation">
                                                <p>Цена: <span id="cost">{{ $product->cost }}</span> ₽</p>
                                                <br>
                                                <span>Тип продукта: {{ $product->Product_special->title_special }}</span>
                                                <br>
                                                <span>Специализация продукта:
                                                    {{ $product->Product_type->title_type }}</span>
                                                <div id="quantity_product" class="d-block">Осталось:
                                                    {{ $product->product_quantity }} шт.
                                                </div>
                                            </div>
                                        </div>
                                        <form action="" method="post" class="col-md-2 mb-2">
                                            @csrf
                                            <input id="quantity" type="number" class="form-control" name="quantity"
                                                value="0">
                                            <button type="button" class="btn btn-primary" onclick="addToCart()">
                                                В корзину
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

@endsection
