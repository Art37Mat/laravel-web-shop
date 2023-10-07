@extends('layouts.app')
@section('title', 'Главная')

@section('content')


<header class="header">
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

<section class="splide home" aria-label="Basic Structure Example" style="width:100%;padding-top:1px;">
  <div  class="splide__track">
    <ul class="splide__list">
      <li class="splide__slide"><section style="width:120vw; height:75vh;background-image:url('storage/icons/slider1.png');background-repeat: no-repeat; background-size: 120vw;z-index:1;  "><h1 style="padding-top:20vh;color:white;"></h1></section></li>
      <li class="splide__slide"><section style="width:120vw; height:75vh;background-image:url('storage/icons/slider3.png');background-repeat: no-repeat; background-size: 120vw;z-index:2;  "><h1 style="padding-top:20vh;color:white;"></h1></section></li>
    </ul>
  </div>
</section>
<!-- background-image: url('storage/icons/slider2.jpg') -->

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

        <script>
        var splide = new Splide( '.home' );
        splide.mount();
        </script>
        
    </header>
   








    <main class="main">  
        <h3 class="main__title">Только хороший продукт</h3>
        <div class="marquee">
                <ul class="marquee-content">
                @foreach ($jsautoscroll as $data)
                <li><img class="gridpng2" src="/storage/product/{{ $data->image }}"alt=""></li>
                @endforeach
                </ul>
            </div>
        <div class="container">


            <h3 class="main__title">Перед получением товара клиентом, ПК проходит несколько этапов подготовки и сборки</h3>
            <div class="grid__block">
                <!-- foreach из админки -->
                <div><img src="./storage/icons/img1.JPG" alt="">Сборка станции</div>
                <div><img src="./storage/icons/img2.PNG" alt="">Техническая проверка</div>
                <div><img src="./storage/icons/img3.PNG" alt="">Тестирование</div>
                <div><img src="./storage/icons/img4.PNG" alt="">Моддинг</div>
            </div>

            <div class="about__company">
                <div><iframe width="560" height="315" src="https://www.youtube.com/embed/kEgLie-LEuQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                <div>
                    <h3>Что нас делает первыми уже 14 лет</h3>
                    <ul>
                    <li>Официальные партнеры NVIDIA, Intel и Microsoft</li>
                    <li>Самый продвинутый онлайн конфигуратор компьютеров</li>
                    <li>Только лучшие комплектующие и передовые технологии</li>
                    <li>Профессиональная сборка кастомизация</li>
                    <li>Специальное стресс-тестирование и установка ПО</li>
                    <li>Доставка, установка и настройка компьютера под ключ</li>
                    <li>Собственное производство</li>
                    <li>Сервисные центры в более чем 40 крупных городах России.</li>
                    </ul>
                    <button>О нас</button>
                </div>
            </div>
            
            <h3 class="main__title">Только наш продукт достоин вас</h3>
            <div class="review_block">
                <div><img src="./storage/product/pc2.png" alt=""><h4>Антон</h4><p>Оптимальные решение на процессорах Ryzen</p><button><a style="text-decoration:none;color: white;" href="/reviews">Подробнее</a></button></div>
                <div><img src="./storage/product/pc4.png" alt=""><h4>Евгений</h4><p>Лучшие станции по производительности за свои деньги</p><button><a style="text-decoration:none;color: white;" href="/reviews">Подробнее</a></button></div>
                <div><img src="./storage/product/pc2.png" alt=""><h4>Ифанасий</h4><p>То что тебя заинтересует за нормальные деньги </p><button><a style="text-decoration:none;color: white;" href="/reviews">Подробнее</a></button></div>
            </div>
        </div>
    </main>   
@endsection
