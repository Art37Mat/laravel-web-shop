@extends('admin.layouts.admin_layout')

@section('title','Административная панель')

@section('content')

<div class="adm_container">
        <div class="adm_panel_lblock">
            <a class="adm_logo" href="#"><img src="../storage/icons/logo.svg" style="width:14vh;" alt=""></a>
            <div class="menu">
                <a href="{{ route('Adminindex') }}" ><img src="/storage/icons/home-admin.svg" alt=""></a>
                <a href="{{ route('settings') }}" ><img src="/storage/icons/setting-admin.svg"  alt=""></a>
<!--                 <a href="{{ route('accessories') }}" ><img src="/storage/icons/accessories-setting.svg"  alt=""></a>
 -->                <a href="/"><img src="/storage/icons/logout-admin.svg"  alt=""></a>
            </div>
            <span class="info_worker">Арт.М.</span>
        </div>

    <div class="adm_panel_rblock">
            <div class="adm_header" style="padding-right:10px;">
                <div class="title"><h2>Админ-Панель</h2></div>
            </div>

        <div class="adm_card_settings">
            <div class="adm_card_settings_grid">
            <div class="adm_card_head">
                <span style="margin-left:2vw;">
                    <img class="img-svg"  src="/storage/icons/catalog-admin.svg"  alt="">
                </span>
                <span style="margin-right:2vw;">
                Категории
                </span>
                <!-- <div class="status">
                </div> -->
            </div>
            <div class="adm_card_body" style="height:10vh;text-align:center;">
                <h2>Функционал</h2>
                <p>
                    <a href="{{ route('categories.index') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Показать все категории</a>
                </p>
                <p>
                    <a href="{{ route('categories.create') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Добавить категорию</a>
                </p>
            </div>
            </div>



            <div class="adm_card_settings_grid">
            <div class="adm_card_head">
                <span style="margin-left:2vw;">
                    <img class="img-svg"  src="/storage/icons/pc-admin.svg"  alt="">
                </span>
                <span style="margin-right:2vw;">
                Товары
                </span>
                <!-- <div class="status">
                </div> -->
            </div>
            <div class="adm_card_body" style="height:15vh;text-align:center;">
                <h2>Функционал</h2>
                <p>
                    <a href="{{ route('products.index') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Показать все товары</a>
                </p>
                <p>
                    <a  href="{{ route('products.create') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Добавить товар</a>
                </p>
            </div>
            </div>

            <div class="adm_card_settings_grid">
            <div class="adm_card_head">
                <span style="margin-left:2vw;">
                    <img class="img-svg"  src="/storage/icons/order-admin.svg"  alt="">
                </span>
                <span style="margin-right:2vw;">
                Заказы
                </span>
                <!-- <div class="status">
                </div> -->
            </div>
            <div class="adm_card_body" style="height:15vh;text-align:center;">
                <h2>Функционал</h2>
                <p>
                    <a href="{{ route('orders.index') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Показать все заказы</a>
                </p>
                <p>

                </p>
            </div>
            </div>

            <div class="adm_card_settings_grid">
            <div class="adm_card_head">
                <span style="margin-left:2vw;">
                    <img class="img-svg"  src="/storage/icons/user-admin.svg"  alt="">
                </span>
                <span style="margin-right:2vw;">
                Пользователи
                </span>
                <!-- <div class="status">
                </div> -->
            </div>
            <div class="adm_card_body" style="height:15vh;text-align:center;color: white;">
                <h2>Функционал</h2>
                <p>
                    <a href="{{ route('users.index') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Показать всех пользователей</a>
                </p>
                <p>

                </p>
            </div>
            </div>
        
            <div class="adm_card_settings_grid">
            <div class="adm_card_head">
                <span style="margin-left:2vw;">
                    <img class="img-svg"  src="/storage/icons/user-admin.svg"  alt="">
                </span>
                <span style="margin-right:2vw;">
                Контакты
                </span>
                <!-- <div class="status">
                </div> -->
            </div>
            <div class="adm_card_body" style="height:15vh;text-align:center;color: white;">
                <h2>Функционал</h2>
                <p>
                    <a href="{{ route('contacts.index') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Показать всех пользователей</a>
                </p>
                <p>

                </p>
            </div>
            </div>
        





        </div>




        
    </div>
</div>


@endsection



