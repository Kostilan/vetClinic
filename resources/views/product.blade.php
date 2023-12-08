@extends('layouts.app')

@section('title', 'Продукты')

@section('content')
    <main class="main">
        <div class="mainWrapper">
            <div class="mainBackground clearfix">
                <div class="row">
                    <div class="column small-centered">
                        <div class="d-flex flex-row justify-content-start">
                            <div class="col-lg-6">
                                <div class="productCard_leftSide clearfix">
                                    <div class="productCard_brendBlock">
                                        <a class="productCard_brendBlock__imageBlock" href="#">
                                            <img src={{ $product->photo }} alt="Royal Canin">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="productCard_rightSide">
                                    <p class="block_model ">
                                        <span class="block_model__text text-muted">Артикул: </span>
                                        <span class="block_model__number text-muted">{{ $product->article }}</span>
                                    </p>

                                    <div class="block_product">
                                        <h2 class="block_name block_name__mainName">{{ $product->title }}</h2>


                                        <div class="block_informationAboutDevice">
                                            <div
                                                class="block_descriptionCharacteristic block_descriptionCharacteristic__disActive">
                                                <p>{{ $product->product_purpose }}</p>
                                            </div>

                                            <div class="block_descriptionInformation">
                                                <span>Цена: {{ $product->cost }}₽</span>
                                                <br>
                                                <span>Тип продукта: {{ $product->Product_special->title_special }}</span>
                                                <br>
                                                <span>Специализация продукта:
                                                    {{ $product->Product_type->title_type }}</span>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <input id="login" type="number" class="form-control"  name="" value="0">
                                            </div>
                                            <button type="button" class="btn btn-primary">В корзину</button>
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
