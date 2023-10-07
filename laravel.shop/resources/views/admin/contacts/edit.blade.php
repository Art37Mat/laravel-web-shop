@extends('admin.layouts.admin_layout')
@section('title', 'Редактировать товар')
@section('content')
  

    <section class="admin_section"><br>
        <h3 class="m-0 mb-4">Редактировать информацию о компании
            </h3>

            @if (session('success'))
                <div class="adm_center" role="alert">
                    <h5 style="color:#eee;">{{ session('success') }}</h5>
                </div>
            @endif


        <form action="{{ route('contacts.update', $contacts['id']) }}" method="POST" enctype="multipart/form-data">

            @method('PUT')
            @csrf
            <div class="card-body">

                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="address"><b>Адрес</b></label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="address" id="address" value="{{ $contacts['address'] }}"
                            required class="form-control">
                    </div>
                </div>

                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="email"><b> Email </b></label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="email" class="form-control" id="email" required
                            pattern="^[0-9\.]+" value="{{ $contacts['email'] }}">
                    </div>
                </div>

                <div class="adm_center">
                    <div class="col-md-2">
                        <label for="phone"><b>Год реализации </b></label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" name="phone" class="form-control" id="phone" required
                            maxlength="4" min="" max="999999999" value="{{ $contacts['phone'] }}">
                    </div>
                </div>

            </div>
            <div class="adm_center">
                <button type="submit" class="butbasket">Изменить информацию </button>
            </div>
        </form>
    </section>
@endsection
