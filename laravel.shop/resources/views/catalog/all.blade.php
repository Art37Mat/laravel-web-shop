@extends('layouts.app')
@section('title', 'Каталог')

@section('content')
<main class="main">  
    <br><br><br><br>
    <div class="title-page">
        <div class="title-page__bg ">
        <picture>
                        <img srcset="https://edelws.ru/upload/uf/bfc/bfc073b789ca7a1468b32add7c7dfa34.png" src="/upload/uf/bfc/bfc073b789ca7a1468b32add7c7dfa34.png" alt="" class="title-page__bg_img">
        </picture>
        </div>
        <h3 class="main__title">Компьютеры WSTD</h3>
        <p class="title-page__text">Представляем системный блоки для различных категорий пользователей. Настольные ПК для требовательных геймеров, профессионалов и киберспортсменов. Компьютеры оптимизированные для работы  с графикой, фото и видеоконтентом. Домашние станции для серфинга в интернете и учебы. ПК для оцифровки звука и стриминга. </p>
        <button type="submit" class="login">Узнать больше о нас</button></form></div>
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
                                <!-- <a href="/nedorogie-pc/" class="">Недорогие компьютеры</a> -->
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
                            {{ number_format($data->price, 0, ' ') }}
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
                        <a href="/nedorogie-pc/edelweiss-captain/" class="catalog-controll-info">Подробнее</a>
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
                                            <!-- <source srcset="/upload/iblock/f07/f070a2efbe96d3276481f90591d2dffd.png" media="(max-width: 1024px)" type="image/png"> -->
                                            <img  src="/storage/icons/pc1.png" alt="" class="">
                                        </picture>
                            </div>
                            <div class="category-box-info">
                                <p class="category-box-name">WSTD</p>
                                <p class="category-box-title">Игровая серия</p>
                                <p class="category-box-price">от 100 000<img class="iconrub" src="/storage/icons/rub.svg" alt="Национальная валюта рубли" class=""></p>
                                <!-- <a href="/nedorogie-pc/" class="">Недорогие компьютеры</a> -->
                                <button type="submit" class="btntype1">Только наш продукт достоин вас</button></form>
                            </div>



                        </div>
                        </div>
                                
            </div>



        

    <div class="tabs-all">
    <p class="tabs-title">Подбор ПК по другим параметрам</p>
    <ul class="tabs-list">
        <li class="tabs_li"><a onclick="spoiler('tabs__box1');" id="tabs_link" class="tabs_link">По цене</a></li>
        <li class="tabs_li"><a onclick="spoiler('tabs__box2'); toggleClass(this, 'tabs_li1', 'tabs_li2')" class="tabs_link">По видеокарте</a></li>
        <li class="tabs_li"><a onclick="spoiler('tabs__box3'); toggleClass(this, 'tabs_li1', 'tabs_li3')" class="tabs_link">По процессору</a></li>
    </ul>
        <div id="tabs__box1" onclick="spoiler('tabs_li1');" style="display: block;">
                    <ul class="catalog-filter"><li class="catalog-filter__li">
                            <a href="/geforce-16xx/" class="catalog-filter__li-box catalog-filter__li-box--price">
                                <div class="catalog-filter__li-img-box">
                                            <img srcset="https://edelws.ru/upload/iblock/32d/32d7e4021374f5c4154e8f31138c4b47.png" src="/upload/iblock/32d/32d7e4021374f5c4154e8f31138c4b47.png" class="catalog-filter__li-img waitlazzyload lazyloaded" alt="">
                                        </div>
                                <p class="catalog-filter__li-name">GTX 16XX</p>                        
                                <p class="catalog-filter__li-desc">NVIDIA</p>
                            
                            </a>
                        </li><li class="catalog-filter__li">
                            <a href="/geforce-3060/" class="catalog-filter__li-box catalog-filter__li-box--price">
                                <div class="catalog-filter__li-img-box">
                                            <img srcset="https://edelws.ru/upload/iblock/1fd/1fd46780613d4b5d26d93ef6de186dd5.png" src="/upload/iblock/1fd/1fd46780613d4b5d26d93ef6de186dd5.png" class="catalog-filter__li-img waitlazzyload lazyloaded" alt="">
                                        </div>
                                <p class="catalog-filter__li-name">RTX 3060 TI</p>                        
                                <p class="catalog-filter__li-desc">NVIDIA</p>
                            
                            </a>
                        </li><li class="catalog-filter__li">
                            <a href="/geforce-3070/" class="catalog-filter__li-box catalog-filter__li-box--price">
                                <div class="catalog-filter__li-img-box">
                                            <img srcset="https://edelws.ru/upload/iblock/e40/e40c6ac6ed1095f20c0cbf75885159a6.jpg" src="/upload/iblock/e40/e40c6ac6ed1095f20c0cbf75885159a6.jpg" class="catalog-filter__li-img waitlazzyload lazyloaded" alt="">
                                        </div>
                                <p class="catalog-filter__li-name">RTX 3070</p>                        
                                <p class="catalog-filter__li-desc">Nvidia</p>
                            
                            </a>
                        </li><li class="catalog-filter__li">
                            <a href="/geforce-3080/" class="catalog-filter__li-box catalog-filter__li-box--price">
                                <div class="catalog-filter__li-img-box">
                                            <img srcset="https://edelws.ru/upload/iblock/d57/d577e7198167e6e61645a0fc0588432d.png" src="/upload/iblock/d57/d577e7198167e6e61645a0fc0588432d.png" class="catalog-filter__li-img waitlazzyload lazyloaded" alt="">
                                        </div>
                                <p class="catalog-filter__li-name">RTX 3080</p>                        
                                <p class="catalog-filter__li-desc">NVIDIA</p>
                            
                            </a>
                        </li><li class="catalog-filter__li">
                            <a href="/geforce-3090/" class="catalog-filter__li-box catalog-filter__li-box--price">
                                <div class="catalog-filter__li-img-box">
                                            <img srcset="https://edelws.ru/upload/iblock/c3c/c3c5077f155ce7df61154763f22b64cb.png" src="/upload/iblock/c3c/c3c5077f155ce7df61154763f22b64cb.png" class="catalog-filter__li-img waitlazzyload lazyloaded" alt="">
                                        </div>
                                <p class="catalog-filter__li-name">RTX 3090</p>                        
                                <p class="catalog-filter__li-desc">NVIDIA</p>
                            
                            </a>
                        </li></ul>
                </div>



                <div id="tabs__box2" onclick="spoiler('tabs_li1');" style="display: none;">
                    <ul class="catalog-filter"><li class="catalog-filter__li">
                            <a href="/geforce-16xx/" class="catalog-filter__li-box catalog-filter__li-box--price">
                                <div class="catalog-filter__li-img-box">
                                            <img srcset="https://edelws.ru/upload/iblock/32d/32d7e4021374f5c4154e8f31138c4b47.png" src="/upload/iblock/32d/32d7e4021374f5c4154e8f31138c4b47.png" class="catalog-filter__li-img waitlazzyload lazyloaded" alt="">
                                        </div>
                                <p class="catalog-filter__li-name">GTX 16XX</p>                        
                                <p class="catalog-filter__li-desc">NVIDIA</p>
                            
                            </a>
                        </li><li class="catalog-filter__li">
                            <a href="/geforce-3060/" class="catalog-filter__li-box catalog-filter__li-box--price">
                                <div class="catalog-filter__li-img-box">
                                            <img srcset="https://edelws.ru/upload/iblock/1fd/1fd46780613d4b5d26d93ef6de186dd5.png" src="/upload/iblock/1fd/1fd46780613d4b5d26d93ef6de186dd5.png" class="catalog-filter__li-img waitlazzyload lazyloaded" alt="">
                                        </div>
                                <p class="catalog-filter__li-name">RTX 3060 TI</p>                        
                                <p class="catalog-filter__li-desc">NVIDIA</p>
                            
                            </a>
                        </li><li class="catalog-filter__li">
                            <a href="/geforce-3070/" class="catalog-filter__li-box catalog-filter__li-box--price">
                                <div class="catalog-filter__li-img-box">
                                            <img srcset="https://edelws.ru/upload/iblock/e40/e40c6ac6ed1095f20c0cbf75885159a6.jpg" src="/upload/iblock/e40/e40c6ac6ed1095f20c0cbf75885159a6.jpg" class="catalog-filter__li-img waitlazzyload lazyloaded" alt="">
                                        </div>
                                <p class="catalog-filter__li-name">RTX 3070</p>                        
                                <p class="catalog-filter__li-desc">Nvidia</p>
                            
                            </a>
                        </li><li class="catalog-filter__li">
                            <a href="/geforce-3080/" class="catalog-filter__li-box catalog-filter__li-box--price">
                                <div class="catalog-filter__li-img-box">
                                            <img srcset="https://edelws.ru/upload/iblock/d57/d577e7198167e6e61645a0fc0588432d.png" src="/upload/iblock/d57/d577e7198167e6e61645a0fc0588432d.png" class="catalog-filter__li-img waitlazzyload lazyloaded" alt="">
                                        </div>
                                <p class="catalog-filter__li-name">RTX 3080</p>                        
                                <p class="catalog-filter__li-desc">NVIDIA</p>
                            
                            </a>
                        </li><li class="catalog-filter__li">
                            <a href="/geforce-3090/" class="catalog-filter__li-box catalog-filter__li-box--price">
                                <div class="catalog-filter__li-img-box">
                                            <img srcset="https://edelws.ru/upload/iblock/c3c/c3c5077f155ce7df61154763f22b64cb.png" src="/upload/iblock/c3c/c3c5077f155ce7df61154763f22b64cb.png" class="catalog-filter__li-img waitlazzyload lazyloaded" alt="">
                                        </div>
                                <p class="catalog-filter__li-name">RTX 3090</p>                        
                                <p class="catalog-filter__li-desc">NVIDIA</p>
                            
                            </a>
                        </li></ul>
                </div>


                <div id="tabs__box3" onclick="spoiler('tabs_li1');" style="display: none;">
                    <ul class="catalog-filter"><li class="catalog-filter__li">
                            <a href="/geforce-16xx/" class="catalog-filter__li-box catalog-filter__li-box--price">
                                <div class="catalog-filter__li-img-box">
                                            <img srcset="https://edelws.ru/upload/iblock/32d/32d7e4021374f5c4154e8f31138c4b47.png" src="/upload/iblock/32d/32d7e4021374f5c4154e8f31138c4b47.png" class="catalog-filter__li-img waitlazzyload lazyloaded" alt="">
                                        </div>
                                <p class="catalog-filter__li-name">GTX 16XX</p>                        
                                <p class="catalog-filter__li-desc">NVIDIA</p>
                            
                            </a>
                        </li><li class="catalog-filter__li">
                            <a href="/geforce-3060/" class="catalog-filter__li-box catalog-filter__li-box--price">
                                <div class="catalog-filter__li-img-box">
                                            <img srcset="https://edelws.ru/upload/iblock/1fd/1fd46780613d4b5d26d93ef6de186dd5.png" src="/upload/iblock/1fd/1fd46780613d4b5d26d93ef6de186dd5.png" class="catalog-filter__li-img waitlazzyload lazyloaded" alt="">
                                        </div>
                                <p class="catalog-filter__li-name">RTX 3060 TI</p>                        
                                <p class="catalog-filter__li-desc">NVIDIA</p>
                            
                            </a>
                        </li><li class="catalog-filter__li">
                            <a href="/geforce-3070/" class="catalog-filter__li-box catalog-filter__li-box--price">
                                <div class="catalog-filter__li-img-box">
                                            <img srcset="https://edelws.ru/upload/iblock/e40/e40c6ac6ed1095f20c0cbf75885159a6.jpg" src="/upload/iblock/e40/e40c6ac6ed1095f20c0cbf75885159a6.jpg" class="catalog-filter__li-img waitlazzyload lazyloaded" alt="">
                                        </div>
                                <p class="catalog-filter__li-name">RTX 3070</p>                        
                                <p class="catalog-filter__li-desc">Nvidia</p>
                            
                            </a>
                        </li><li class="catalog-filter__li">
                            <a href="/geforce-3080/" class="catalog-filter__li-box catalog-filter__li-box--price">
                                <div class="catalog-filter__li-img-box">
                                            <img srcset="https://edelws.ru/upload/iblock/d57/d577e7198167e6e61645a0fc0588432d.png" src="/upload/iblock/d57/d577e7198167e6e61645a0fc0588432d.png" class="catalog-filter__li-img waitlazzyload lazyloaded" alt="">
                                        </div>
                                <p class="catalog-filter__li-name">RTX 3080</p>                        
                                <p class="catalog-filter__li-desc">NVIDIA</p>
                            
                            </a>
                        </li><li class="catalog-filter__li">
                            <a href="/geforce-3090/" class="catalog-filter__li-box catalog-filter__li-box--price">
                                <div class="catalog-filter__li-img-box">
                                            <img srcset="https://edelws.ru/upload/iblock/c3c/c3c5077f155ce7df61154763f22b64cb.png" src="/upload/iblock/c3c/c3c5077f155ce7df61154763f22b64cb.png" class="catalog-filter__li-img waitlazzyload lazyloaded" alt="">
                                        </div>
                                <p class="catalog-filter__li-name">RTX 3090</p>                        
                                <p class="catalog-filter__li-desc">NVIDIA</p>
                            
                            </a>
                        </li></ul>
                </div>
    </div>
</main>
@endsection
