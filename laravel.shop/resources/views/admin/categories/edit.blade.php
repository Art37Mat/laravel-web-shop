@extends('admin.layouts.admin_layout')

@section('title', 'Редактирование категории')

@section('content')
<section class="admin_section">

    <h3 class="m-0 mb-5">Редактирование категории: <i> {{ $category['nameCategory'] }}</i></h3>
    {{-- сообщение о результате --}}
    @if (session('success'))
        <div style="text-align:center;margin-top:3vh;color:#eee" role="alert">
            <h5>{{ session('success') }}</h5>
        </div>
    @endif
    {{-- секция с формой --}}
    <div style="margin-top:7vh;">
        <form action="{{ route('categories.update', $category['id']) }}" method="POST">
            @method('PUT')
            @csrf
            <div style="text-align:center;margin-top:3vh;color:#eee">
                <label for="nameCategory" class="mb-3"><b>Измените название категории</b></label>
                <input type="text" value="{{ $category['nameCategory'] }}" name="nameCategory" class="form-control"
                    id="nameCategory" required>
            </div>

            <div class="card-footer">
                <button type="submit" class="butbasket">Обновить</button>
            </div>
        </form>
    </div>
</section>
@endsection
