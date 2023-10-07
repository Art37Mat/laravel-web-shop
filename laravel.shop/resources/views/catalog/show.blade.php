@extends('layouts.app')
@section('title', 'Карточка товара')

@section('content')

<link href="{{asset('css/main1.css') }}" rel="stylesheet">
<main class="main">   
<br><br><br><br>
    <div class="title-page">
        <div class="title-page__bg ">
        <picture>
                        <img style="width:100%;"  src="/storage/icons/prodback.png" alt="">
        </picture>            

        </div>
    </div>
    
    

<div style="display:block;margin-top: 15vh">
<!-- <h1 style="color:#eee;text-align:center;margin-bottom: 5vh">Код № {{$product->id}}</h1> -->
<div class="main_prod_page">
    <div class="prod_info">
            <p class="category-box-name">WSTD</p>
            <h1>{{ $product->nameProduct }}</h1>
            <p>{{ $product->description }}</p>
            @auth()
                            <form action="{{ route('basket.add', ['id' => $product->id]) }}" method="post">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-danger float-right">
                                    В корзину </button>
                            </form>
                            @endauth

    </div>
    <div class="prod_pager">
        <div class="prod_pagel">
            
        <img src="/storage/product/{{$product->image}}" class="card-img-top" alt="/storage/product/{{ $product->image }}">


        </div>
    </div>
</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>


</main>
@endsection
