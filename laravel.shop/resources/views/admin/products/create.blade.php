@extends('admin.layouts.admin_layout')

@section('title', 'Добавить товар')

@section('content')

    {{-- результат ошибки --}}
    @if (session('success'))
        <div class="adm_center" role="alert">
            <h5 style="text-align:center;color:white;">{{ session('success') }}</h5>
        </div>
    @endif
    
    {{-- секция с формой --}}
    <section class="admin_section"><br>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="card-body">
                {{-- Название --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="nameProduct" class="mb-2"><b>Введите название товара</b></label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nameProduct" class="form-control" id="nameProduct"
                            placeholder="Введите название товара" required>
                    </div>
                </div>

                {{-- Цена --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="price" class="mb-2"><b>Введите цену</b></label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="price" class="form-control" id="price" placeholder="Введите цену"
                            required pattern="\d+(\.\d{2})?" title="Вводите только цифры">
                        {{-- ^[0-9]+$ --}}
                    </div>
                </div>

                {{-- Описание --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="description" class="mb-2"><b>Введите описание товара</b></label>
                        
                    </div>
                    <div class="col-md-9">
                        <textarea name="description" id="description" cols="30" rows="5" placeholder="Введите описание товара"
                            class="form-control"></textarea>
                    </div>
                </div>

                {{-- Список стран --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="country_id" class="mb-2"><b>Выберите страну</b></label>
                  
                    </div>
                    <div class="col-md-9">
                        <span class="custom-dropdown">
                        <select name="country_id" class="form-control" required id="country_id">
                            @foreach ($countries as $countrie)
                                <option value="{{ $countrie['id'] }}">
                                    {{ $countrie['nameCountry'] }}</option>
                            @endforeach
                        </select>
                        </span>
                    </div>
                </div>

                {{-- Год выпуска --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="releaseYear" class="mb-2"><b>Введите год выпуска</b></label>
                    </div>
                    <div class="col-md-9">
                        
                        <input type="number" name="releaseYear" class="form-control" id="releaseYear" required
                            maxlength="4" min="2019" max="2022" placeholder="Введите год выпуска"
                            pattern="[0-9]{4}">
                    </div>
                </div>

                {{-- Модель --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="model" class="mb-2"><b>Введите название модели</b></label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="model" class="form-control" id="model" required
                            placeholder="Введите название модели" required>
                    </div>
                </div>

                {{-- Список категорий --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="category_id" class="mb-2"><b>Выберите категорию</b></label>
                    </div>
                    <div class="col-md-9">
                    <span class="custom-dropdown">
                        <select name="category_id" class="form-control" required id="category_id">
                            <option value="0" disabled>Выберите категорию</option>
                            @foreach ($categories as $categori)
                                <option value="{{ $categori['id'] }}">{{ $categori['nameCategory'] }}</option>
                            @endforeach
                        </select>
                    </span>
                    </div>
                </div>

                {{-- Определение картинки --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="image" class="mb-2"><b>Выберите изображение товара</b></label>
                    </div>
                    <div class="col-md-9">
                        <input type="file" name="image" class="form-control" required accept=".jpg, .jpeg, .png">

                         {{-- Проверка картинки*********************** --}}
                        @if ($errors->has('image'))
                            <span class="text-danger bg-warning">{{ $errors->first('image') }}</span>
                        @endif

                    </div>
                </div>

                {{-- Количество товара --}}
                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="count" class="mb-2"><b>Введите количество товара</b></label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" name="count" class="form-control" id="count" required min="1"
                            placeholder="Введите количество товара" value="1">
                    </div>
                </div>

                <div class="adm_center">
                    <button type="submit" class="butbasket">Добавить товар</button>
                </div>
        </form>

        <!-- <h3 style="text-align:center;">Добавить новый товар</h3> -->
   

</section>
@endsection
