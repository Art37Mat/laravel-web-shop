@extends('admin.layouts.admin_layout')

@section('title', 'Все категории')

@section('content')


<section class="admin_section">
         <h3 class="mb-4">Все категории</h3>
        <table >
            <thead>
                <tr>
                    <th > ID </th>
                    <th> Название </th>
                    <th > Операции </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td> {{ $category['id'] }} </td>
                        <td> {{ $category['nameCategory'] }} </td>
                        <td >
                            <a href="{{ route('categories.edit', $category['id']) }}">
                                Редактировать
                            </a>
                            <form action="{{ route('categories.destroy', $category['id']) }}" method="POST"
                                style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Удалить
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

         @if (session('success'))
        <div style="margin-top:40px;" role="alert">
            <h5 style="text-align:center;color:white;">{{ session('success') }}</h5>
        </div>
    @endif
    </section>
@endsection