@extends('layouts.app')
@section('title', 'Отзывы')

@section('content')
<main class="main">  
    <br><br><br><br>
    <div class="title-page">
        <div class="title-page__bg ">
        <picture>
                <img style="width:100%;" src="/storage/icons/reviewsback.png" enctype="multipart/form-data" alt="">
        </picture>
        </div>
        <h3 class="main__title">Создание отзыва о компании WSTD</h3>
        <p class="title-page__text">Все отзыва проходит проверку модерации на валидность и адекватность информации,также у отзыва есть ограничение по количеству символов (100 символов) </p>
    </div>
    <form style="margin-top:200px;" method="POST" action="{{ route('reviewscreate') }}">

        @csrf


        <div class="row mb-3">
            <div class="input_bar">
                <input id="password" type="text"
                    class="form-control" name="description"
                     autocomplete="" placeholder="Отзыв">
            </div>
        </div>

      
    
      
    

    <div style="padding-bottom:40px" class="row mb-5">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="login">
                            <b>Отправить на модерацию</b> 
                        </button>
                    </div>
    </div>
    </form>  
</main>
@endsection
