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
            <div class="adm_header">
                <div class="title"><h2>Админ-Панель</h2></div>
            </div>
        <div class="adm_all_card">
            <div class="adm_card">
            <div class="adm_card_head">
                <span>
                    <img class="img-svg"  src="/storage/icons/setting-admin.svg"  alt="">
                </span>
                <span>
                Слайдеры
                </span>
                <!-- <div class="status">
                </div> -->
            </div>
            <div class="adm_card_body">
                <h2>Информация о слайдере</h2> 
                <p>
                    Ещё не доделано
                </p>
            </div>
            <div class="adm_card_footer">
                <div class="user">
                    <div class="adm_card_footer_num_card"><img src="/img/img_layout/user-admin.svg" style="width:50px;" alt=""></div>
                    <span class="username">
                        Изменить
                    </span>
                </div>
            </div>
            </div>

         


        </div>
        
    </div>
</div>



@endsection



