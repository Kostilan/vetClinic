        @extends('layouts.admin')
        @section('title', 'Создание товара')
        @section('content')
            <div class="container">
                <main>
                    <div class="container-fluid w-100">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Редактирование товара</div>

                                    <div class="card-body">
                                        <form method="POST" action="{{ route('edit_product') }}">
                                            @csrf
                                            <input id="id" type="text"
                                                        class="form-control @error('id') is-invalid @enderror d-none"
                                                        name="id" value="{{$product->id}}" required>

                                            <div class="row mb-3">
                                                <label for="title"
                                                    class="col-md-4 col-form-label text-md-end">Название</label>
                                                <div class="col-md-6">
                                                    <input id="title" type="text"
                                                        class="form-control @error('title') is-invalid @enderror"
                                                        name="title" value="{{$product->title}}" required>
                                                    @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="photo"
                                                    class="col-md-4 col-form-label text-md-end">Фото</label>
                                                <div class="col-md-6">
                                                    <input id="photo" type="text"
                                                        class="form-control @error('photo') is-invalid @enderror" name="photo"
                                                       required value="{{$product->photo}}">
                                                    @error('photo')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="product_quantity"
                                                    class="col-md-4 col-form-label text-md-end">Количество</label>
                                                <div class="col-md-6">
                                                    <input id="product_quantity" type="number"
                                                        class="form-control @error('product_quantity') is-invalid @enderror"
                                                        name="product_quantity" value="{{$product->product_quantity}}" required>
                                                    @error('product_quantity')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="product_purpose"
                                                    class="col-md-4 col-form-label text-md-end">Предназначение
                                                    товара</label>
                                                <div class="col-md-6">
                                                    <input id="product_purpose" type="text"
                                                        class="form-control @error('product_purpose') is-invalid @enderror"
                                                        name="product_purpose" value="{{$product->product_purpose}}" required>
                                                    @error('product_purpose')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="cost"
                                                    class="col-md-4 col-form-label text-md-end">Цена</label>
                                                <div class="col-md-6">
                                                    <input id="cost" type="text"
                                                        class="form-control @error('cost') is-invalid @enderror"
                                                        name="cost" value="{{$product->cost}}" required>
                                                    @error('cost')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="product_type_id" class="col-md-4 col-form-label text-md-end">Тип
                                                    товара</label>
                                                <div class="col-md-6">
                                                    <select name="product_type_id" id="product_type_id"
                                                        class="from-select pe-3">
                                                        @foreach ($all_product_type as $item)
                                                            <option value="{{ $item->id }}">{{ $item->title_type }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="product_special_id"
                                                    class="col-md-4 col-form-label text-md-end">Специализация товара</label>
                                                <div class="col-md-6">
                                                    <select name="product_special_id" id="product_special_id"
                                                        class="from-select pe-3">
                                                        @foreach ($all_product_special as $item)
                                                            <option value="{{ $item->id }}">{{ $item->title_special }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <input type="submit" class="btn btn-primary" value="Редактировать товар">

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </main>
                </body>

                </html>

            @endsection
