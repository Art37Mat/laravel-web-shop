@extends('layouts.app')

@section('title','Авторизация')
    
@section('content')

<main class="main">    <br><br>

    <h1 style="text-align:center;color:white;margin-top:15vh;">Авторизация</h1>


            {{-- Форма авторизации --}}
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row mb-3">
        

            <div class="input_bar">
                <input id="login" type="text" class="form-control"
                    name="login" value="{{ old('login') }}"  autocomplete="login" autofocus 
                    pattern="^[A-Za-z0-9\-]+"  title="Разрешенные символы: латиница и тире" placeholder="Email">
            </div>
        </div>

        <div class="row mb-3">
            <div class="input_bar">
                <input id="password" type="password"
                    class="form-control" name="password"
                     autocomplete="current-password" placeholder="Пароль">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="login" name="btnLogin"> 
                    Войти
                </button>
            </div>
        </div>
    </form>

    {{--Вывод ошибок  --}}
     @if ($errors->any())
     
         <div style="text-align:center;color:white;margin-top:2vh;">
                 @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p  >
                 @endforeach
         </div>

    @endif
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
       


</main>

@endsection