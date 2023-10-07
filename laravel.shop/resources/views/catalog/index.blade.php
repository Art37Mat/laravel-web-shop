@extends('layouts.app')
@section('title', 'Каталог')

@section('content')
<main class="main">  
    <br><br><br><br>
    <div class="title-page">
        <div class="title-page__bg ">
        <picture>
            <img style="width:100%;" src="/storage/icons/componentback.png" alt="">
        </picture>
        </div>
        <h3 class="main__title">Компьютеры WSTD</h3>
        <p class="title-page__text">Представляем системный блоки для различных категорий пользователей. Настольные ПК для требовательных геймеров, профессионалов и киберспортсменов. Компьютеры оптимизированные для работы  с графикой, фото и видеоконтентом. Домашние станции для серфинга в интернете и учебы. ПК для оцифровки звука и стриминга. </p>
        <h2 class="abouts" ><a  href="/about"><button type="submit" class="login">Узнать больше о нас</button></a></h2>
    </div>
    </div>
                <div class="category-box">
                        <div class="category-box-container">
                            <div class="category-box-img">
                                        <picture class="category-box-picture">
                                            <img  src="/storage/icons/pc1.png" alt="" class="">
                                        </picture>
                            </div>
                            <div class="category-box-info">
                                <p class="category-box-name">WSTD</p>
                                <p class="category-box-title">Оптимальная серия</p>
                                <p class="category-box-price">от 35 000<img class="iconrub" src="/storage/icons/rub.svg" alt="Национальная валюта рубли" class=""></p>
                                <button type="submit" class="btntype1">Только наш продукт достоин вас</button></form>
                            </div>
                        </div>
                        </div>
            <div class="catalog-all-grid">
                @foreach($Product as $data)
                {{ $data->title }}
                <div class="catalog-main-grid">
                 <div class="catalog-box">
                    <div class="catalog-content">
                        <a href="/catalog/{{ $data->id }}" class="catalog-img-box">
                            <picture>
                                <img src="/storage/product/{{ $data->image }}"alt=""  class="catalog__li-img ">
                            </picture>
                        </a>
                    </div>
                    <div class="catalog-info">
                        <a href="/nedorogie-pc/edelweiss-captain/" class="catalog-info-name"><span itemprop="name">{{ $data->nameProduct }}</span></a>
                        <div class="catalog-info-price">
                            {{ ($data->price) }}
                            <img class="iconrub" src="/storage/icons/rub.svg" alt="Национальная валюта рубли" class="">
                        </div>                         
                    </div>
                    <div class="catalog-controll">
                    <div class="catalog-controll">
                    @auth<form action="{{ route('basket.add', ['id' => $data->id]) }}" method="post">
                    @csrf
                    @method('POST')
                    <button type="submit" class="catalog-controll-buy">В корзину </button></form>@endauth
                    </div>
                        <a href="/catalog/{{ $data->id }}" class="catalog-controll-info">Подробнее</a>
                    </div>

                    <p class="catalog-info-pc">{{ $data->description }} </p>

                    <div class="catalog-structure">
                    <hr class="catalog-li-hr">
                <dl class="catalog-structure-dl">
                    <dt class="catalog-structure-dt">
                        <div class="catalog-structure-img">
                            <img src="/storage/icons/vga.svg" alt="значёк видеокарты ( gpu )">
                        </div>
                    </dt>
                    <dd class="catalog-structure-dd">
                        <p class="catalog-structure-title">Видео-карта</p>
                        <p class="catalog-structure-name">{{ $data->gpu_title}} </p>
                    </dd>
                </dl>
                <dl class="catalog-structure-dl">
                    <dt class="catalog-structure-dt">
                        <div class="catalog-structure-img">
                            <img src="/storage/icons/cpu.svg" alt="значёк центрального процессора ( cpu )">
                        </div>
                    </dt>
                    <dd class="catalog-structure-dd">
                        <p class="catalog-structure-title">Процессор</p>
                        <p class="catalog-structure-name">{{ $data->cpu_title}}</p>
                    </dd>
                </dl>
                <dl class="catalog-structure-dl">
                    <dt class="catalog-structure-dt">
                        <div class="catalog-structure-img">
                            <img src="/storage/icons/fan.svg" alt="значёк система охлаждения (cooler )">
                        </div>
                    </dt>
                    <dd class="catalog-structure-dd">
                        <p class="catalog-structure-title">Охлаждение</p>
                        <p class="catalog-structure-name">{{ $data->cooling_title}}</p>
                    </dd>
                </dl>
                <dl class="catalog-structure-dl">
                    <dt class="catalog-structure-dt">
                        <div class="catalog-structure-img">
                            <img src="/storage/icons/ram.svg" alt="значёк оперативной памяти ( ram )">
                        </div>
                    </dt>
                    <dd class="catalog-structure-dd">
                        <p class="catalog-structure-title">Оперативная память</p>
                        <p class="catalog-structure-name">{{ $data->ram_title}}</p>
                    </dd>
                </dl>
                <dl class="catalog-structure-dl">
                    <dt class="catalog-structure-dt">
                        <div class="catalog-structure-img">
                            <img src="/storage/icons/motherboard.svg" alt="значёк материнской платы ( mb ) ">
                        </div>
                    </dt>
                    <dd class="catalog-structure-dd">
                        <p class="catalog-structure-title">Материнская плата</p>
                        <p class="catalog-structure-name">{{ $data->mb_title}}</p>
                    </dd>
                </dl>
                <dl class="catalog-structure-dl">
                    <dt class="catalog-structure-dt">
                        <div class="catalog-structure-img">
                            <img src="/storage/icons/ssd.svg" alt="значёк твердотельного диска ( ssd )">
                        </div>
                    </dt>
                    <dd class="catalog-structure-dd">
                        <p class="catalog-structure-title">Диск SSD</p>
                        <p class="catalog-structure-name">{{ $data->ssd_title}}</p>
                    </dd>
                </dl>
             
                <dl class="catalog-structure-dl">
                    <dt class="catalog-structure-dt">
                        <div class="catalog-structure-img">
                            <img src="/storage/icons/power-supply.svg" alt="	значёк блока питания ( psu )">
                        </div>
                    </dt>
                    <dd class="catalog-structure-dd">
                        <p class="catalog-structure-title">Блок питания</p>
                        <p class="catalog-structure-name">{{ $data->powun_title}}</p>
                    </dd>
                </dl>
                <dl class="catalog-structure-dl">
                    <dt class="catalog-structure-dt">
                        <div class="catalog-structure-img">
                            <img src="/storage/icons/case.svg" alt="иконка системного блока ( case )">
                        </div>
                    </dt>
                    <dd class="catalog-structure-dd">
                        <p class="catalog-structure-title">Корпус</p>
                        <p class="catalog-structure-name">{{ $data->pccase_title}}</p>
                    </dd>
                </dl>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
            <div class="category-box">
                        <div class="category-box-container">

                            <div class="category-box-img">
                                        <picture class="category-box-picture">
                                            <img  src="/storage/icons/pc1.png" alt="" class="">
                                        </picture>
                            </div>
                            <div class="category-box-info">
                                <p class="category-box-name">WSTD</p>
                                <p class="category-box-title">Игровая серия</p>
                                <p class="category-box-price">от 100 000<img class="iconrub" src="/storage/icons/rub.svg" alt="Национальная валюта рубли" class=""></p>
                                <button type="submit" class="btntype1">Только наш продукт достоин вас</button></form>
                            </div>



                        </div>
                        </div>
                                
            </div>


            <div class="catalog-all-grid">
                @foreach($Product as $data)
                {{ $data->title }}
                <div class="catalog-main-grid">
                 <div class="catalog-box">
                    <div class="catalog-content">
                        <a href="/catalog/{{ $data->id }}" class="catalog-img-box">
                            <picture>
                                <img src="/storage/product/{{ $data->image }}"alt=""  class="catalog__li-img ">
                            </picture>
                        </a>
                    </div>
                    <div class="catalog-info">
                        <a href="/catalog/{{ $data->id }}" class="catalog-info-name"><span itemprop="name">{{ $data->nameProduct }}</span></a>
                        <div class="catalog-info-price">
                            {{ $data->price }}
                            <img class="iconrub" src="/storage/icons/rub.svg" alt="Национальная валюта рубли" class="">
                        </div>                         
                    </div>
                    <div class="catalog-controll">
                    <div class="catalog-controll">
                    @auth<form action="{{ route('basket.add', ['id' => $data->id]) }}" method="post">
                    @csrf
                    @method('POST')
                    <button type="submit" class="catalog-controll-buy">В корзину </button></form>@endauth
                    </div>
                        <a href="/catalog/{{ $data->id }}" class="catalog-controll-info">Подробнее</a>
                    </div>

                    <p class="catalog-info-pc">{{ $data->description }} </p>

                    <div class="catalog-structure">
                    <hr class="catalog-li-hr">
                <dl class="catalog-structure-dl">
                    <dt class="catalog-structure-dt">
                        <div class="catalog-structure-img">
                            <img src="/storage/icons/vga.svg" alt="значёк видеокарты ( gpu )">
                        </div>
                    </dt>
                    <dd class="catalog-structure-dd">
                        <p class="catalog-structure-title">Видео-карта</p>
                        <p class="catalog-structure-name">{{ $data->gpu_title}} </p>
                    </dd>
                </dl>
                <dl class="catalog-structure-dl">
                    <dt class="catalog-structure-dt">
                        <div class="catalog-structure-img">
                            <img src="/storage/icons/cpu.svg" alt="значёк центрального процессора ( cpu )">
                        </div>
                    </dt>
                    <dd class="catalog-structure-dd">
                        <p class="catalog-structure-title">Процессор</p>
                        <p class="catalog-structure-name">{{ $data->cpu_title}}</p>
                    </dd>
                </dl>
                <dl class="catalog-structure-dl">
                    <dt class="catalog-structure-dt">
                        <div class="catalog-structure-img">
                            <img src="/storage/icons/fan.svg" alt="значёк система охлаждения (cooler )">
                        </div>
                    </dt>
                    <dd class="catalog-structure-dd">
                        <p class="catalog-structure-title">Охлаждение</p>
                        <p class="catalog-structure-name">{{ $data->cooling_title}}</p>
                    </dd>
                </dl>
                <dl class="catalog-structure-dl">
                    <dt class="catalog-structure-dt">
                        <div class="catalog-structure-img">
                            <img src="/storage/icons/ram.svg" alt="значёк оперативной памяти ( ram )">
                        </div>
                    </dt>
                    <dd class="catalog-structure-dd">
                        <p class="catalog-structure-title">Оперативная память</p>
                        <p class="catalog-structure-name">{{ $data->ram_title}}</p>
                    </dd>
                </dl>
                <dl class="catalog-structure-dl">
                    <dt class="catalog-structure-dt">
                        <div class="catalog-structure-img">
                            <img src="/storage/icons/motherboard.svg" alt="значёк материнской платы ( mb ) ">
                        </div>
                    </dt>
                    <dd class="catalog-structure-dd">
                        <p class="catalog-structure-title">Материнская плата</p>
                        <p class="catalog-structure-name">{{ $data->mb_title}}</p>
                    </dd>
                </dl>
                <dl class="catalog-structure-dl">
                    <dt class="catalog-structure-dt">
                        <div class="catalog-structure-img">
                            <img src="/storage/icons/ssd.svg" alt="значёк твердотельного диска ( ssd )">
                        </div>
                    </dt>
                    <dd class="catalog-structure-dd">
                        <p class="catalog-structure-title">Диск SSD</p>
                        <p class="catalog-structure-name">{{ $data->ssd_title}}</p>
                    </dd>
                </dl>
             
                <dl class="catalog-structure-dl">
                    <dt class="catalog-structure-dt">
                        <div class="catalog-structure-img">
                            <img src="/storage/icons/power-supply.svg" alt="	значёк блока питания ( psu )">
                        </div>
                    </dt>
                    <dd class="catalog-structure-dd">
                        <p class="catalog-structure-title">Блок питания</p>
                        <p class="catalog-structure-name">{{ $data->powun_title}}</p>
                    </dd>
                </dl>
                <dl class="catalog-structure-dl">
                    <dt class="catalog-structure-dt">
                        <div class="catalog-structure-img">
                            <img src="/storage/icons/case.svg" alt="иконка системного блока ( case )">
                        </div>
                    </dt>
                    <dd class="catalog-structure-dd">
                        <p class="catalog-structure-title">Корпус</p>
                        <p class="catalog-structure-name">{{ $data->pccase_title}}</p>
                    </dd>
                </dl>
                    </div>
                </div>
                </div>
                @endforeach
            </div>






</main>
@endsection
