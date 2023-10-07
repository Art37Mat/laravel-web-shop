@extends('admin.layouts.admin_layout')

@section('title', 'Пользователи')
@section('content')
    
    <section class="admin_section"><br><h3 class="m-0">Все Пользователи и Администраторы</h3>
    {{-- Сообщение о результате --}}
    @if (session('success'))
        <div class="alert alert-danger" role="alert">
            <h4>{{ session('success') }}</h4>
        </div>
    @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 5%"> id </th>
                    <th> Имя </th>
                    <th style="width: 10%"> Фамилия </th>
                    <th> Отчество </th>
                    <th> Логин </th>
                    <th> Email </th>
                    <th> Пароль </th>
                    <th> Права </th>
                    <th > Операции </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td> {{ $user['id'] }} </td>
                        <td> {{ $user['name'] }} </td>
                        <td> {{ $user['surname'] }} </td>
                        <td> {{ $user['patronymic'] }} </td>
                        <td> {{ $user['login'] }} </td>
                        <td> {{ $user['email'] }} </td>
                        <td> {{ $user['password'] }} </td>
                        <td> {{ $user['role'] }} </td>

                        <td class="text-right">
                            <a class="btn btn-info" href="{{ route('users.edit', $user['id']) }}">
                                &#9997;                  </a>                            
                       
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
