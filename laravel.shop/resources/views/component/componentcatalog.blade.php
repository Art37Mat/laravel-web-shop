@extends('layouts.app')
@section('title', 'Компоненты')

@section('content')
<main class="main">  
    <br><br><br><br>
    <div class="title-page">
        <div class="title-page__bg ">
        <picture>
        <img style="width:100%;" src="/storage/icons/componentback.png" alt="">
        </picture>
        </div>
        <h3 class="main__title">Комплектующие ПК</h3>
        <p class="title-page__text">Позволяет собрать компьютер, о котором вы мечтали. Изменить комплектацию представленных на сайте сборок, узнать цену онлайн, сравнить характеристики. Оформить заказ и получить готовый ПК с абсолютно бесплатной профессиональной сборкой. Продвинутый онлайн-сервис для модификации ПК. </p>
        <!-- <button type="submit" class="login">Узнать больше о нас</button></form></div> -->
    </div>
    <div class="catalog-all-grid">
    
    @foreach($accessorieslist as $data)
                <div class="catalog-main-grid">
                 <div class="catalog-box">
                    <div class="catalog-content">
                        <a "" class="catalog-img-box">
                            <picture>
                                <img src="/storage/product/{{ $data->image }}"alt=""  class="catalog__li-img ">
                            </picture>
                        </a>
                    </div>
                    <div class="catalog-info">
                        <a "" class="catalog-info-name"><span itemprop="name">{{ $data->title }}</span></a>
                        <div class="catalog-info-price">
                        {{ $data->price }}
                            <img class="iconrub" src="/storage/icons/rub.svg" alt="Национальная валюта рубли" class="">
                        </div>                         
                    </div>
                    <div class="catalog-controll">
                    <div class="catalog-controll">
                    @auth<form action="{{ route('basket.componentadd', ['id' => $data->id]) }}" method="post">
                    @csrf
                    @method('POST')
                    <button type="submit" class="catalog-controll-buy">В корзину </button></form>@endauth
                    </div>
                    </div>

                    <p class="catalog-info-pc">{{ $data->description }}</p>

                    <div class="catalog-structure">
                    <hr class="catalog-li-hr">
                
                    </div>

                    
                </div>
                </div>
    @endforeach

              

              

    

</main>
@endsection
