@extends('admin.layouts.admin_layout')
@section('title', 'Все Товары')
@section('content')

    <section class="admin_section"><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th> Адрес </th>
                    <th style="width: 10%"> Email </th>
                    <th> Телефон </th>
                    <th>  </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contacts)
                    <tr>
                        <td> {{ $contacts['id'] }} </td>
                        <td> {{ $contacts['address'] }} </td>
                        <td> {{ $contacts['email'] }} </td>
                        <td> {{ $contacts['phone'] }} </td>
                        <td class="text-right">


                        <a class="btn btn-info" href="{{ route('contacts.edit', $contacts['id']) }}">

                                &#9997; </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
