@extends('layouts.app')
@section('title', 'Комплектующие')

@section('content')
<main class="main">  
    <br><br><br><br>
    <div class="title-page">
        <div class="title-page__bg ">
        <picture>
                        <img srcset="https://edelws.ru/upload/uf/bfc/bfc073b789ca7a1468b32add7c7dfa34.png" src="/upload/uf/bfc/bfc073b789ca7a1468b32add7c7dfa34.png" alt="" class="title-page__bg_img">
        </picture>
        </div>
        <h3 class="main__title">Комплектующие ПК</h3>
        <p class="title-page__text">Позволяет собрать компьютер, о котором вы мечтали. Изменить комплектацию представленных на сайте сборок, узнать цену онлайн, сравнить характеристики. Оформить заказ и получить готовый ПК с абсолютно бесплатной профессиональной сборкой. Продвинутый онлайн-сервис для модификации ПК. </p>
        <!-- <button type="submit" class="login">Узнать больше о нас</button></form></div> -->
    </div>
    
                                

              
    <div class="features-configurator">
        <div class="features-inner">
            <div class="features-wrapper">
                <h4 class="features-title">Продажа комплектующих ПК</h4>                    <ul class="features-list"><li class="features-li">
                        <i class="features-star"></i>
                        <p class="features-text">Можно докупить комплектующие для того чтобы улучшить свой в компьютер в будущем.</p>
                    </li><li class="features-li">
                        <i class="features-star"></i>
                        <p class="features-text">Посмотреть список всех комплектующих которые можно приобрести.</p>
                    </li><li class="features-li">
                        <i class="features-star"></i>
                        <p class="features-text">Возможность заменить существующие комплектующие на свой вариант сборки.</p>
                    </li></ul>
                                        <div class="features-img-box">
                        <picture>
                            <img src="/storage/icons/pc10.png" alt="" class="features-img">
                        </picture>
                    </div>
            </div>
        </div>
    </div>
                                



    <div class="configurator">


        <div class="configurator_block">
            <div class="configurator_component">    
                    <button class="myButton"><img src="/storage/icons/case.svg" ></button>
                    <div class="myPopup">
                    <span class="close">&times;</span>  
                    @foreach ($pccase as $data)
                    <h2>{{ $data->title }}</h2>
                    <p>{{ $data->description }}</p>
                    @endforeach
                    <a href="/componentcatalog?per=8">Перейти к каталогу блоков Пк</a>
                    </div>
            </div>
            <div class="configurator_component">    
                <button class="myButton"><img src="/storage/icons/motherboard.svg" ></button>
                <div class="myPopup">
                <span class="close">&times;</span>  
                @foreach ($mbinfo as $data)
                <h2>{{ $data->title }}</h2>
                <p>{{ $data->description }}</p>
                @endforeach
                <a href="/componentcatalog?per=6">Перейти к каталогу материнских плат</a>
                </div>
           </div>
            <div class="configurator_component">
                <button class="myButton"><img src="/storage/icons/cpu.svg" ></button>
                <div class="myPopup">
                <span class="close">&times;</span>  
                @foreach ($cpuinfo as $data)
                <h2>{{ $data->title }}</h2>
                <p>{{ $data->description }}</p>
                @endforeach
                <a href="/componentcatalog?per=3">Перейти к каталогу процессоров</a>
                </div>
            </div>
            <div class="configurator_component">
                <button class="myButton"><img src="/storage/icons/ram.svg" ></button>
                <div class="myPopup">
                <span class="close">&times;</span>  
                @foreach ($raminfo as $data)
                <h2>{{ $data->title }}</h2>
                <p>{{ $data->description }}</p>
                @endforeach
                <a href="/componentcatalog?per=1">Перейти к каталогу оперативной памяти</a>
                </div>
            </div>
            <div class="configurator_component"><button class="myButton"><img src="/storage/icons/vga.svg" ></button>
                <div class="myPopup">
                <span class="close">&times;</span>  
                @foreach ($gpuinfo as $data)
                <h2>{{ $data->title }}</h2>
                <p>{{ $data->description }}</p>
                @endforeach
                <a href="/componentcatalog?per=2">Перейти к каталогу видеокарт</a>
                </div>
            </div>
            <div class="configurator_component">
                <button class="myButton"><img src="/storage/icons/fan.svg" ></button>
                <div class="myPopup">
                <span class="close">&times;</span>  
                @foreach ($coolinginfo as $data)
                <h2>{{ $data->title }}</h2>
                <p>{{ $data->description }}</p>
                @endforeach
                <a href="/componentcatalog?per=5">Перейти к каталогу охлаждения ПК</a>
                </div>
            </div>
            <div class="configurator_component">
            <button class="myButton"><img src="/storage/icons/power-supply.svg" ></button>
                <div class="myPopup">
                <span class="close">&times;</span>  
                @foreach ($powuninfo as $data)
                <h2>{{ $data->title }}</h2>
                <p>{{ $data->description }}</p>
                @endforeach
                <a href="/componentcatalog?per=4">Перейти к каталогу блоков питания</a>
                </div>
            </div>
            <div class="configurator_component">
                <button class="myButton"><img src="/storage/icons/ssd.svg" ></button>
                <div class="myPopup">
                <span class="close">&times;</span>  
                @foreach ($ssdinfo as $data)
                <h2>{{ $data->title }}</h2>
                <p>{{ $data->description }}</p>
                @endforeach
                <a href="/componentcatalog?per=7">Перейти к каталогу ssd</a>
                </div>
            </div>
        </div>

      
        <button class="myButton">Нажми меня</button>
        <div class="myPopup">
        <span class="close">&times;</span>
        <p>Привет! Я всплывающее окно.</p>
        </div>


       

    </div>

</main>
@endsection
