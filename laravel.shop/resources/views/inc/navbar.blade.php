

<nav id="navbar" class="navbar">
    <div class="container">
        <a href="/" class="navbar__brand" target="_blank"><img src="../storage/icons/logo.svg" alt=""></a> 
    <ul class="navbar__nav">
        <li><a href="/">Главная</a></li>

        <!-- <button id="menu-button" onclick="toggleMenu()">Меню</button>
        <ul id="menu" style="display: none;">
        <li><a href="#home">Главная</a></li>
        <li><a href="#about">О нас</a></li>
        <li><a href="#services">Услуги</a></li>
        <li><a href="#contact">Контакты</a></li>
        </ul> -->
                                
             

        <li><a href="{{route('catalog')}}">Каталог ПК</a></li>
        <!-- <li><a href="{{ route('contacts') }}">Контакты</a></li> -->
        <!-- <li><a href="{{ route('about') }}">О нас</a></li> -->
        <li><a href="{{ route('component') }}">Компл.ПК</a></li>
        <li>@guest()                       
        <a href="{{ route('login') }}">Войти </a></li>
        <li><a href="{{ route('register') }}">Регистрация</a>@endguest</li>
        <li>@auth()<a href="{{ route('logout') }}">Выйти </a>@endauth</li>
        <li>@auth()<a class="navbar-brand" href="{{route('basket')}}">Корзина,  (  
            @php
                $countBasket=count(\App\Models\Basket::get());
            @endphp
            
            @if(count(\App\Models\Basket::get())>0)
                    <span class="badge bg-secondary"> {{$countBasket}} </span>
            @endif )</a>@endauth
        </li>
        <button  id="myButton" onclick="changeStyle()"><img class="swap_theme" src="../storage/icons/swap-theme.png" alt=""></button>

        <!-- <li>@auth<a href="{{ auth()->user()->name }}">Регистрация</a></li>@endauth -->
    </ul>
    </div>
</nav>


@stack('script')
