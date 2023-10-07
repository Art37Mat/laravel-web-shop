<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="pc,продажа ПК,Продажа игровых компьютеров,Продажа готовых компьютеров,магазин по продаже ПК Челябинск"> 
    <meta name="description" content="Сайт магазина по продаже ПК"> 
    <title>@yield('title')</title>
    <!-- <link href="{{asset('css/main.css') }}" rel="stylesheet"> -->
    <link id="myStyle" rel="stylesheet" type="text/css" href="css/main1.css">
    <link type="Image/x-icon" href="./storage/icons/favicon.svg" rel="icon">
    <!-- <link href="{{asset('css/main1.css') }}" rel="stylesheet"> -->

    
</head>
<body>
   



    @include('inc.navbar')
    @yield('content')
    @include('inc.footer')

    @stack('script')
    
