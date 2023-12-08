@extends('layouts.app')

@section('title', 'продукты')

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
                                            <img src={{$product->photo}}
                                                alt="Royal Canin">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="productCard_rightSide">
                                    <p class="block_model">
                                        <span class="block_model__text">Артикул: </span>
                                        <span class="block_model__number">{{$product->article}}</span>
                                    </p>

                                    <div class="block_product">
                                        <h2 class="block_name block_name__mainName">{{$product->title}}</h2>
                                        

                                        <div class="block_informationAboutDevice">
                                            <div
                                                class="block_descriptionCharacteristic block_descriptionCharacteristic__disActive">
                                                <p>{{$product->product_purpose}}</p>
                                            </div>

                                            <div class="block_descriptionInformation">
                                                <span>Цена:{{$product->cost}}</span>
                                                <br>
                                                <span>Тип продукта:{{$product->product_type_id}}</span>
                                                <br>
                                                <span>Специализация продукта:{{$product->product_special_id}}</span>
                                            </div>
                                            <button type="button" class="btn btn-primary">Купить</button>
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
