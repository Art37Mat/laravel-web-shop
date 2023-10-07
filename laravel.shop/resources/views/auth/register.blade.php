@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')

<main class="main"><br>
 
    
        {{-- *************************************Форма --}}
        <div class="col-md-10 card mt-3 mb-3 bg-secondary bg-opacity-25 fw-bold border-3 p-3">
              <div class="card-header text-center bg-secondary text-white"> <h1 style="text-align:center;color:white;margin-top:15vh;">Регистрация</h1></div> 
            <form method="POST" action="{{ route('register') }}">
                @csrf

                {{-- фамилия --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input id="surname" type="text" class="form-control"   
                            name="surname" value="{{ old('surname') }}"
                             autocomplete="surname" autofocus 
                            placeholder="Фамилия"    style="margin-top:1.5vh;margin-bottom:1.5vh;"         title="Разрешенные символы: кириллица, пробел и тире">
                    </div>
                </div>

                {{-- имя --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" 
                            autocomplete="name" autofocus
                            placeholder="Имя" style="margin-top:1.5vh;margin-bottom:1.5vh;"     title="Разрешенные символы: кириллица, пробел и тире">
                    </div>
                </div>

                {{-- отчество --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input id="patronymic" type="text" class="form-control" name="patronymic"  value="{{ old('patronymic') }}" autocomplete="patronymic" autofocus
                        placeholder="Отчество" style="margin-top:1.5vh;margin-bottom:1.5vh;"  title="Разрешенные символы: кириллица, пробел и тире">
                    </div>
                </div>
                {{-- логин --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input id="login" type="text" class="form-control" name="login" value="{{ old('login') }}"  autocomplete="login" 
                        autofocus placeholder="Логин" style="margin-top:1.5vh;margin-bottom:1.5vh;" title="Разрешенные символы: латиница и тире">
                    </div>
                </div>
                {{-- почта --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input id="email" type="email"  name="email" value="{{ old('email') }}"placeholder="Email" style="display: block;
    width: 20vw;
    margin-right: auto;
    margin-left: auto;
    margin-top:1.5vh;
    margin-bottom:1.5vh;
    padding: 0.375rem 0.75rem;
    font-family: inherit;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #bdbdbd;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"  autocomplete="email">
                    </div>
                </div>

                {{-- пароль --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input id="password" type="password" style="margin-top:1.5vh;margin-bottom:1.5vh;" class="form-control" placeholder="Пароль" name="password"  
                            autocomplete="new-password">
                    </div>
                </div>

                {{-- повтор пароля --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input id="password_repeat" type="password" style="margin-top:1.5vh;margin-bottom:1.5vh;" class="form-control" placeholder="Повтор пароля" name="password_repeat"
                             autocomplete="new-password">
                    </div>
                </div>

                {{-- согласие --}}
                <div class="row mb-3">
                    <h3 class="rules" for="rules" style="text-align:center;color:#eee;">Я согласен с <a href="/privacypolicy">правилами регистрации</a></h1>
                    <div class="col-md-6">
                        <input id="rules" type="checkbox">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="login">
                            <b>Зарегистрироваться</b>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div style="text-align:center;color:white;margin-top:2vh;">       
        {{--Вывод ошибок  --}}
        @if ($errors->any())
            <div class="row justify-content-center">
                <div class="col-md-8 alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
</main>    
@endsection
