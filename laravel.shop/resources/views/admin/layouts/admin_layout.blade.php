<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link type="Image/x-icon" href="./storage/icons/favicon.svg" rel="icon">
    <link href="{{asset('css/main.css') }}" rel="stylesheet">

    <title>@yield('title')</title>

    <style>
    @media print {
        .Noprinter{
        display: none;  /* скрывает все элементы для принтера */
    }
    .Yesprinter {
        /* отображать все, что напечатать */
        display: block;  
    }
}
    </style>
</head>

<body>
@yield('content')

    

    


</body>

</html>
