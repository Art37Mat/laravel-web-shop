@extends('admin.layouts.admin_layout')

@section('title', 'Показать товар')

@section('content')
<main class="main">   
<br>

<div style="display:block;margin-top: 15vh">
<h1 style="color:#eee;text-align:center;margin-bottom: 5vh">Код № {{$product->id}}</h1>
<div class="main_prod_page">
    <div class="prod_pagel">
        <img src="/storage/product/{{$product->image}}" class="card-img-top" alt="/storage/product/{{ $product->image }}">
    </div>
    <div class="prod_pager">
        <div class="prod_info">
            
            <dl><dt><span>Название товара:</span></dt><dd>{{ $product->nameProduct }} </dd></dl>
            <dl><dt><span>Цена:</span></dt><dd >{{ $product->price }} руб.</dd></dl>
            <dl><dt><span>Модель:</span></dt><dd>{{ $product->model }}</dd></dl>
            <dl><dt><span>Категория:</span></dt><dd>{{ $product->ProductCategory->nameCategory }}</dd></dl>
            <dl><dt><span>Год выпуска:</span></dt><dd>{{ $product->releaseYear }} г.</dd></dl>
            <dl><dt><span>Страна производителя:</span></dt><dd>{{ $product->ProductCountry->nameCountry }} </dd></dl>
            <dl><dt><span>На складе:</span></dt><dd>{{ $product->count }}</dd></dl>
            <!-- <dl><dt><span>Описание:</span></dt><dd>{{ $product->description }}</dd></dl> -->


                       

        </div>
    </div>
</div>
</div>


</main>
@endsection
