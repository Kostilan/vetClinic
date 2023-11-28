@extends('layouts.admin') <!-- Если у вас есть шаблон -->

@section('content')
<div class="container mt-5">
    <h2>Список товаров</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Фото</th>
                <th scope="col">Количество</th>
                <th scope="col">Назначение</th>
                <th scope="col">Цена</th>
                <th scope="col">Тип продукта</th>
                <th scope="col">Специальность продукта</th>
                <th scope="col">Редактировать</th>
                <th scope="col">Удалить</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->title }}</td>
                <td><img class="img-table" src="{{ $product->photo}}" alt="Фото"></td>
                <td>{{ $product->product_quantity }}</td>
                <td>{{ $product->product_purpose }}</td>
                <td>{{ $product->cost }}</td>
                <td>{{ $product->Product_type->title_type }}</td>
                <td>{{ $product->Product_special->title_special }}</td>
                <td><a class="btn btn-warning link-light" href="edit_products/{{$product->id}}">Редактировать</a></td>
                <td><form action="/delete_product/{{$product->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Удалить">
                    </form>
                </td>
                    <!-- Добавьте здесь необходимые действия, такие как редактирование и удаление -->
                    <!-- Пример: -->
                    {{-- <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Редактировать</a> --}}
                    {{-- <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection