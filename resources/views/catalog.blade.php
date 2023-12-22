@extends('layouts.app')

@section('title', 'Каталог')

@section('content')

    @foreach ($products as $item)
        @if ($loop->first || $loop->index % 3 == 0)
            <section id="products">
                <div class="container">
                    <div class="row">
        @endif

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ $item->photo }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">Тип продукта: {{ $item->Product_special->title_special}}</p>
                    <p class="card-text">Специализация продукта: {{ $item->Product_type->title_type}}</p>
                    <p class="card-text">{{ $item->cost }}₽</p>
                    <a href="{{ route('product', ['id' => $item->id]) }}" class="btn btn-primary">Подробнее</a>
                    <a href="#" class="btn btn-primary">Заказать</a>
                </div>
            </div>
        </div>

        @if ($loop->last || ($loop->iteration % 3 == 0 && !$loop->first))
            </div>
            </div>
            </section>
        @endif
    @endforeach


@endsection
