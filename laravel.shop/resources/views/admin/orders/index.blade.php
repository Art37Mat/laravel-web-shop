@extends('admin.layouts.admin_layout')

@section('title', 'Заявки')
@section('content')
<section class="admin_section"><br>
    <div style="text-align:center;color:white;">
        <div class="row">
            <div class="col-sm-2">
                {{-- показать заголовок --}}
                @if ($idStatusFilter == 0 || $idStatusFilter == null)
                    <h3 class="mb-2">Все заявки </h3>
                @else
                    <h3 class="mb-2"> {{ $rez['nameStatus'] }}</h3>
                @endif
            </div>
            {{-- Фильтр --}}
            <div class="col-sm-10 fs-5">
                <form action="{{ route('orders.index') }}" method="get">
                    @method('PUT') @csrf
                    <span class="m-sm-5"> <b> Статус:</b></span>
                    <input name="idStatusFilter" type="radio" value="0" class="form-check-input m-lg-2" checked> ВСЕ
                    @foreach ($status as $stat)
                        <input name="idStatusFilter" type="radio" value="{{ $stat['id'] }}"
                            class="form-check-input m-lg-2"> {{ $stat['nameStatus'] }}
                    @endforeach
                    <input class="butbasket" type="submit" value="Найти" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>


    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width: 4%"> ID заказа </th>
                <th style="width: 6%"> Дата </th>
                <th style="width: 6%"> Дата изменения </th>
                <th style="width: 7%"> Фамилия </th>
                <th style="width: 8%"> Имя </th>
                <th style="width: 7%"> Отчество </th>
                <th style="width: 7%"> Количество позиций </th>
                <th style="width: 8%"> Статус </th>
                <th style="width: 5%">Приме-чание</th>
                <th style="width: 8%"> Изменение <br> статуса </th>
                <th colspan="3"> Причина</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td> {{ $order->created_at->format('d.m.Y') }}</td>
                    <td> {{ $order->updated_at->format('d.m.Y') }}</td>
                    <td>{{ $order->OrderUser->surname }}</td>
                    <td>{{ $order->OrderUser->name }}</td>
                    <td>{{ $order->OrderUser->patronymic }}</td>
                    {{-- количество --}}
                    <td style="text-align:center">
                        {{ $order->OrderOrderProduct->sum('quantity') }}</td>
                    {{-- статус --}}
                    <td>{{ $order->OrderStatus->nameStatus }}</td>
                    <td> {{ $order->note }}</td>
                    {{-- Изменение статуса --}}
                    <td>
                        <form action="{{ route('orders.update', $order['id']) }}" method="POST">
                            @method('PUT') @csrf
                            <select name="status_id" required id="status_id" style="width: 100px">
                                <option value="0" disabled>Выберите статус</option>
                                @foreach ($status as $stat)
                                    <option value="{{ $stat['id'] }}">{{ $stat['nameStatus'] }}</option>
                                @endforeach
                            </select>
                    </td>
                    <td>
                        
                        <button type="submit" class="butbasket" value="{{ $order->id }}" 
                            <?php if($order->status_id==3 || $order->status_id==2):?>disabled<?php endif; ?>
                            >ОК</button>
                        </form>

                    </td>
                    <td>
                        <input type="text" name="note" id="note" style="width: 120px">
                    </td>
                    <td>
                    {{-- ПОКАЗАТЬ ЗАЯВКУ функция  show($id)  в ордерконтроллере --}}

                    <a class="btn btn-success mr-2" href="{{ route('orders.show', $order['id']) }}">
                            &#128269; Подробнее</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>    
@endsection
