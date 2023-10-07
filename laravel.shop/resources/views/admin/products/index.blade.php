@extends('admin.layouts.admin_layout')
@section('title', 'Все Товары')
@section('content')

    <section class="admin_section"><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 5%"> ID </th>
                    <th> Название </th>
                    <th style="width: 10%"> Цена </th>
                    <th> Страна </th>
                    <th> Год выпуска </th>
                    <th> Модель </th>
                    <th> Категория </th>
                    <th> Фото </th>
                    <th> Количество </th>
                    <th style="width: 15%"> Операции </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td> {{ $product['id'] }} </td>
                        <td> {{ $product['nameProduct'] }} </td>
                        <td> {{ number_format($product['price'], 2, ',', ' ') }} </td>
                        <td> {{ $product->ProductCountry->nameCountry }} </td>
                        <td> {{ $product['releaseYear'] }} </td>
                        <td> {{ $product['model'] }} </td>
                        <td> {{ $product->ProductCategory->nameCategory }} </td>

                        <td> <img src="/storage/product/{{$product->image}}" alt="" style="height:50px"></td>

                        <td> {{ $product['count'] }} </td>
                        <td class="text-right">

                            <a class="btn btn-info" href="{{ route('products.edit', $product['id']) }}">
                                &#9997; </a>

                            <a class="btn btn-success mr-2" href="{{ route('products.show', $product['id']) }}">
                                &#128269; </a>

                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark delete-btn"> &#10060;
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
