@extends('layouts.app')

@section('title', 'Каталог')

@section('content')

    <div class="m-2 p-3 d-flex">
        @foreach ($products as $item)
            <div class="m-2 border border-secondary">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $item->photo }}" class="card-img-top" alt="...">
                    <br>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">Тип продукта: {{ $item->Product_special->title_special }}</p>
                        <p class="card-text">Специализация продукта: {{ $item->Product_type->title_type }}</p>
                        <p class="card-text">{{ $item->cost }}₽</p>
                        <a href="{{ route('product', ['id' => $item->id]) }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
