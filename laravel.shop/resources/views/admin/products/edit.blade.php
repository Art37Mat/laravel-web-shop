@extends('admin.layouts.admin_layout')
@section('title', 'Редактировать товар')
@section('content')
  

    <section class="admin_section"><br>
        <h3 class="m-0 mb-4">Редактировать товар
                <i>"{{ $product['nameProduct'] }}"</i>
                Код № {{ $product->id }}
            </h3>

            @if (session('success'))
                <div class="adm_center" role="alert">
                    <h5 style="color:#eee;">{{ session('success') }}</h5>
                </div>
            @endif



        <form action="{{ route('products.update', $product['id']) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">

                {{-- название товара --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="nameProduct"><b> Название товара </b></label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nameProduct" id="nameProduct" value="{{ $product['nameProduct'] }}"
                            required class="form-control">
                    </div>
                </div>
                {{-- Цена --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="price"><b> Цена </b></label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="price" class="form-control" id="price" required
                            pattern="^[0-9\.]+" value="{{ $product['price'] }}">
                    </div>
                </div>
                {{-- Описание --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="description"><b>Описание </b></label>
                    </div>
                    <div class="col-md-9">
                        <textarea name="description" id="description" cols="30" rows="3" class="form-control">{{ $product['description'] }}
                        </textarea>
                    </div>
                </div>
                {{-- Список стран --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="country_id"><b>Cтранa </b></label>
                    </div>
                    <div class="col-md-9">
                        <select name="country_id" class="form-control" required id="country_id">
                            @foreach ($countries as $countrie)
                                <option value="{{ $countrie['id'] }}" @if ($countrie['id'] == $product['country_id']) selected @endif>
                                    {{ $countrie['nameCountry'] }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- Год выпуска --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="releaseYear"><b>Год реализации </b></label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" name="releaseYear" class="form-control" id="releaseYear" required
                            maxlength="4" min="2019" max="2022" value="{{ $product['releaseYear'] }}">
                    </div>
                </div>

                {{-- Модель --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="model"><b>Название модели</b> </label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="model" class="form-control" id="model" required
                            value="{{ $product['model'] }}" required>
                    </div>
                </div>

                {{-- Список категорий --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="category_id"><b> Категория </b></label>
                    </div>
                    <div class="col-md-9">
                        <select name="category_id" class="form-control" required id="category_id">
                            @foreach ($categories as $categori)
                                <option value="{{ $categori['id'] }}" @if ($categori['id'] == $product['category_id']) selected @endif>
                                    {{ $categori['nameCategory'] }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Определение картинки --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="img" class="mb-5"> <b>Измените изображение <br>товара (по необходимости)
                                </b></label>
                    </div>
                    <div class="col-md-4">
                        <input type="hidden" name="imageHidden" value="{{ $product['image'] }}">
                        <img src="/storage/product/{{ $product->image }}" alt="картинка" srcset=""
                            style="width: 40px;">
                    </div>
                    <div class="col-md-5">
                        <input type="file" name="imageRed" class="form-control mt-2" accept=".jpg, .jpeg, .png">
                         {{-- Проверка картинки*********************** --}}
                        @if ($errors->has('imageRed'))
                            <span class="text-danger bg-warning">{{ $errors->first('imageRed') }}</span>
                        @endif
                    </div>
                </div>


                {{-- Количество товара --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="count">Введите количество товара</label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" name="count" class="form-control" id="count" required min="0"
                            value="{{ $product['count'] }}">
                    </div>
                </div>
            </div>

            <div class="adm_center">
                <button type="submit" class="butbasket">Изменить информацию </button>
            </div>
        </form>
    </section>
@endsection
