@extends('admin.layouts.admin_layout')

@section('title', 'Добавить категорию')

@section('content')
<section class="admin_section">


        {{-- Сообщение о результате --}}
    <h3 class="m-0 mb-4">Добавить категорию</h3>
    @if (session('success'))
        <div style="text-align:center;margin-top:3vh;color:#eee" role="alert">
            <h5>{{ session('success') }}</h5>
        </div>
    @endif
            {{-- Форма добавления --}}
    <div style="margin-top:7vh;">
        <form action="{{ route('categories.store') }}" method="POST">
            @method('POST')
            @csrf
            <div class="card-body">
                <input type="text" name="nameCategory" class="form-control" id="nameCategory"
                    placeholder="Введите название категории товара" required>
            </div>

            <div class="card-footer">
                <button type="submit" class="butbasket">Добавить</button>
            </div>
        </form>
    </div>
</section>
@endsection
