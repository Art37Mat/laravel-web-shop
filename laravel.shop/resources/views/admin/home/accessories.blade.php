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
                    <img class="img-svg"  src="/storage/icons/accessories/gpu.svg"  alt="">
                </span>
                <span style="margin-right:2vw;">
                Видеокарты
                </span>
                <!-- <div class="status">
                </div> -->
            </div>
            <div class="adm_card_body" style="height:10vh;text-align:center;">
                <h2>Функционал</h2>
                <p>
                    <a href="{{ route('categories.index') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Показать все видеокарты</a>
                </p>
                <p>
                    <a href="{{ route('categories.create') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Добавить видеокарту</a>
                </p>
            </div>
            </div>



            <div class="adm_card_settings_grid">
            <div class="adm_card_head">
                <span style="margin-left:2vw;">
                    <img class="img-svg"  src="/storage/icons/accessories/cpu.svg"  alt="">
                </span>
                <span style="margin-right:2vw;">
                Процессоры
                </span>
                <!-- <div class="status">
                </div> -->
            </div>
            <div class="adm_card_body" style="height:15vh;text-align:center;">
                <h2>Функционал</h2>
                <p>
                    <a href="{{ route('products.index') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Показать все Процессоры</a>
                </p>
                <p>
                    <a  href="{{ route('products.create') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Добавить Процессоры</a>
                </p>
            </div>
            </div>

            <div class="adm_card_settings_grid">
            <div class="adm_card_head">
                <span style="margin-left:2vw;">
                    <img class="img-svg"  src="/storage/icons/accessories/ram.svg"  alt="">
                </span>
                <span style="margin-right:2vw;">
                Оперативная память
                </span>
                <!-- <div class="status">
                </div> -->
            </div>
            <div class="adm_card_body" style="height:15vh;text-align:center;">
                <h2>Функционал</h2>
                <p>
                    <a href="{{ route('orders.index') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Показать всю оперативную память</a>
                </p>
                <p>

                </p>
            </div>
            </div>

            <div class="adm_card_settings_grid">
            <div class="adm_card_head">
                <span style="margin-left:2vw;">
                    <img class="img-svg"  src="/storage/icons/accessories/motherboard.svg"  alt="">
                </span>
                <span style="margin-right:2vw;">
                Материнские платы 
                </span>
                <!-- <div class="status">
                </div> -->
            </div>
            <div class="adm_card_body" style="height:15vh;text-align:center;color: white;">
                <h2>Функционал</h2>
                <p>
                    <a href="{{ route('users.index') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Показать все материнские платы</a>
                </p>
                <p>

                </p>
            </div>
            </div>
        
            <div class="adm_card_settings_grid">
            <div class="adm_card_head">
                <span style="margin-left:2vw;">
                    <img class="img-svg"  src="/storage/icons/accessories/power-supply.svg"  alt="">
                </span>
                <span style="margin-right:2vw;">
                Блоки питания
                </span>
                <!-- <div class="status">
                </div> -->
            </div>
            <div class="adm_card_body" style="height:15vh;text-align:center;color: white;">
                <h2>Функционал</h2>
                <p>
                    <a href="{{ route('contacts.index') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Показать все блок питания</a>
                </p>
                <p>

                </p>
            </div>
            </div>
        


            <div class="adm_card_settings_grid">
            <div class="adm_card_head">
                <span style="margin-left:2vw;">
                    <img class="img-svg"  src="/storage/icons/accessories/ssd.svg"  alt="">
                </span>
                <span style="margin-right:2vw;">
                Ssd
                </span>
                <!-- <div class="status">
                </div> -->
            </div>
            <div class="adm_card_body" style="height:15vh;text-align:center;color: white;">
                <h2>Функционал</h2>
                <p>
                    <a href="{{ route('contacts.index') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Показать все ssd</a>
                </p>
                <p>

                </p>
            </div>
            </div>
        

            <div class="adm_card_settings_grid">
            <div class="adm_card_head">
                <span style="margin-left:2vw;">
                    <img class="img-svg"  src="/storage/icons/accessories/fan.svg"  alt="">
                </span>
                <span style="margin-right:2vw;">
                Охлаждение
                </span>
                <!-- <div class="status">
                </div> -->
            </div>
            <div class="adm_card_body" style="height:15vh;text-align:center;color: white;">
                <h2>Функционал</h2>
                <p>
                    <a href="{{ route('contacts.index') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Показать всё охлаждение</a>
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
                Корпусы для пк
                </span>
                <!-- <div class="status">
                </div> -->
            </div>
            <div class="adm_card_body" style="height:15vh;text-align:center;color: white;">
                <h2>Функционал</h2>
                <p>
                    <a href="{{ route('contacts.index') }}" style="margin-left:.400vw;margin-right:.400vw;color: white;">Показать все корпусы для пк</a>
                </p>
                <p>

                </p>
            </div>
            </div>





        </div>




        
    </div>
</div>


@endsection



