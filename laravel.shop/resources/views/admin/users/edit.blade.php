@extends('admin.layouts.admin_layout')

@section('title', 'Изменение пользователей')
@section('content')
   

    <section class="admin_section">

 <h3 class="m-0 mb-4">Редактировать Пользователя
        <i>"{{ $user['id'] }}"</i>
    </h3>

    @if (session('success'))
        <div class="adm_center" role="alert">
            <h5 style="color:white;">{{ session('success') }}</h5>
        </div>
    @endif





        <form action="{{ route('users.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="adm_center">
                {{-- название товара --}}
                <div class="row mb-2">
                    <div class="col-md-2">
                        <label for="name"> Название пользователя </label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="name" id="name" value="{{ $user['name'] }}"
                            required class="form-control">
                    </div>
                </div>
                {{-- фамилия --}}
                <div class="row mb-2">
                    <div class="col-md-2">
                        <label for="price">фамилия</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="surname" class="form-control"  
                            value="{{ $user['surname'] }}">
                    </div>
                </div>

                {{-- Отчество --}}
                <div class="row mb-2">
                    <div class="col-md-2">
                        <label for="price">Отчество</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="patronymic" class="form-control" 
                            value="{{ $user['patronymic'] }}">
                    </div>
                </div>


                {{-- login --}}
                <div class="row mb-2">
                    <div class="col-md-2">
                        <label for="price">login</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="login" class="form-control" 
                            value="{{ $user['login'] }}">
                    </div>
                </div>


                {{-- email --}}
                <div class="row mb-2">
                    <div class="col-md-2">
                        <label for="price">email</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="email" class="form-control" 
                            value="{{ $user['email'] }}">
                    </div>
                </div>



                {{-- password --}}
                <div class="row mb-2">
                    <div class="col-md-2">
                        <label for="price">password</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="password" class="form-control" 
                            value="{{ $user['password'] }}">
                    </div>
                </div>

                {{-- role --}}
                <div class="row mb-2">
                    <div class="col-md-2">
                        <label for="model">Права пользователя</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="role" class="form-control" id="model" required
                            value="{{ $user['role'] }}" required>
                    </div>
                </div>

             
            <div class="card-footer">
                <button type="submit" class="butbasket">Изменить информацию </button>
            </div>
        </form>
    </section>
@endsection
