@extends('layouts.app')
@section('title', 'О нас')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

    <!-- <br><br>     -->
    

    
                <section class="splide about" aria-label="Basic Structure Example" style="height:100vh;background-image:url(storage/icons/back1.jpg);;padding-top:1px;">
                <div class="splide__track"  >
                    <ul class="splide__list" >

                    
                    <li class="splide__slide" ><div style="background-image:url(storage/icons/slider3.png);"><h1 style="margin:10px">Nvidia RTX</h1><p style="margin:10px">Nvidia GeForce RTX (Ray Tracing Texel eXtreme) — это линейка графических процессоров, созданная корпорацией Nvidia, которая в основном используется для проектирования сложных крупномасштабных моделей в архитектуре и дизайне продуктов, научной визуализации, исследованиях энергопотребления, играх, производстве фильмов и видео. Nvidia RTX обеспечивает трассировку лучей в реальном времени. Исторически сложилось так, что трассировка лучей предназначалась для таких приложений, не работающих в реальном времени, как компьютерная графика в визуальных эффектах для фильмов и фотореалистичных рендерингов.</p></div></li>
                    <li class="splide__slide" ><div style="background-image:url(storage/icons/slider1.png);" ><h1 style="margin:10px">NVIDIA G-SYNC</h1><p style="margin:10px">Игровые мониторы NVIDIA® G-SYNC® тщательно протестированы на соответствие самым высоким стандартам. Плавное погружение в игровой процесс без разрывов изображения. Революционная технология. Максимальная частота смены кадров для непревзойденной производительности. В любой игре. Всегда. Везде.</p></div></li>
                    <li class="splide__slide" style="float:right;"><div style="background-image:url(storage/icons/slider1.png);"><h1 style="margin:10px">Мультипликатор производительности на основе ИИ.</h1><p style="margin:5px">Технология DLSS — это настоящая революция в графике на основе ИИ, значительно повышающая производительность. Работая на базе имеющихся в графических процессорах GeForce RTX 40 новых тензорных ядер четвертого поколения и ускорителя оптического поток, технология DLSS 3 создает дополнительные высококачественные кадры с помощью искусственного интеллекта без ущерба для качества изображения или скорости отклика.</p></div></li>


                    </ul>
                </div>
                </section>
                <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

        <script>var splide = new Splide( '.about', {
        direction: 'ttb',
        height   : '70vh',
        wheel    : true,
        } );

        splide.mount();</script>            
@endsection
