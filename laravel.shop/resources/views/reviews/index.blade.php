@extends('layouts.app')
@section('title', 'Отзывы')

@section('content')
<main class="main">  
    <br><br><br><br>
    <div class="title-page">
        <div class="title-page__bg ">
        <picture>
                <img style="width:100%;" src="/storage/icons/reviewsback.png" alt="">
        </picture>
        </div>
        <h3 class="main__title">Отзывы о компании WSTD</h3>
        <p class="title-page__text">Все отзыва проходит проверку модерации на валидность и адекватность информации </p>
    </div>
    <div class="reviews_title">
        @foreach($reviews as $data)
        <div class="review_info"><h2>{{$data->name}}</h2>
            <p>
                {{$data->description}}
            </p>
        </div>
        @endforeach
    </div>

    <div style="padding-bottom:40px" class="row mb-5">
                    <div class="col-md-6 offset-md-4">
                        <a style="text-decoration:none;" href="reviewscreate"><button type="submit" class="login">
                            <b>Создать свой отзыв</b> 
                        </button></a>
                    </div>
    </div>
 
</main>
@endsection
