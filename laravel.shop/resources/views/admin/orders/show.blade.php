@extends('admin.layouts.admin_layout')

@section('title', 'Заявки - подробнее')
@section('content')


    <div class="razpechatka">
    <a href="#" onclick="window.print()" > Распечатать </a>
        <h2> Отгрузка: заявка № {{ $order->id }} </h2>
        <b> Дата заявки: </b> {{ $order->created_at->format('d.m.Y') }} <br>
        <b> Статус: </b> {{ $order->OrderStatus->nameStatus }} <br>
        <b> Покупатель: </b>
        {{ $order->OrderUser->surname }}
        {{ $order->OrderUser->name }}
        {{ $order->OrderUser->patronymic }}<br>

        <b> Почта:  </b>   {{ $order->OrderUser->email }}
        <br>        <br>

        <hr>
        <br>

        <h3>Товары</h3>

                    @php
                        $sum = 0;
                    @endphp
                    <ol>
                        @foreach ($order->OrderOrderProduct as $row)
                            <li>
                                Код № {{ $row['product_id'] }}. {{ $row->OrderProductProduct['nameProduct'] }}
                                {{ $row->OrderProductProduct['model'] }},
                               <br> {{ $row['quantity'] }} шт. <b> x </b> {{ $row->OrderProductProduct['price'] }} руб.,
                               =  <b>{{ number_format($row->OrderProductProduct['price'] * $row['quantity'], 2, ',', ' ') }}
                                    руб.</b><br> Дополнительная информация: ( страна: {{ $row->OrderProductProduct->ProductCountry['nameCountry'] }}
                                , категория: {{ $row->OrderProductProduct->ProductCategory['nameCategory'] }})
                            </li>
                            @php
                                $sum += $row->OrderProductProduct['price'] * $row['quantity'];
                            @endphp
                        @endforeach
                    </ol>
                    <h5> ИТОГ &equiv;
                        <span> @php
                            echo number_format($sum, 2, ',', ' ') . ' руб.';
                        @endphp </span>
                    </h5>
    </div>
@endsection
