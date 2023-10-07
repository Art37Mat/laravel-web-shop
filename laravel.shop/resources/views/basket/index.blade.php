@extends('layouts.app')

@section('title', 'Корзина')

@section('content')
<main class="main"><br><br>
    <h1 class="h_main">Корзина</h1>  



    <div class="container mt-2">
        <h3 style="text-align:center;color:#eee;padding-bottom:1em;"> В корзине - {{ count(\App\Models\Basket::get()) }} товар(а) </h3>
        <div class="row mt-2">
            <div class="col-sm-9">
                <div class="card fw-bold border-3 p-2">
                    <table id="cart" class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th style="width:5%">Код</th>
                                <th style="width:21%">Название</th>
                                <th style="width:15%">Фото</th>
                                <th style="width:15%">Цена</th>
                                <th style="width:26%;" colspan="3">Количество</th>
                                <th style="width:15%">Стоимость</th>
                                <th style="width:3%"> Удаление </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($baskets as $item)
                                <tr>
                                    @if($item['product_id']  == 0)
                                        <td> {{ $item['component_id'] }}</td>
                                    @else
                                        <td> {{ $item['product_id'] }}</td>
                                    @endif
                                    @if($item['product_id']  == 0)
                                        <td> {{ $item->BasketComponent->title }} </td>
                                    @else
                                        <td> {{ $item->BasketProduct->nameProduct }} </td>
                                    @endif
                                    @if($item['product_id']  == 0)
                                        <td> <img src="\storage\product\{{ $item->BasketComponent->image }}" alt="ris" srcset=""
                                            style="height:80px"></td>
                                    @else
                                    <td> <img src="\storage\product\{{ $item->BasketProduct->image }}" alt="ris" srcset=""
                                            style="height:80px"></td>
                                    @endif
                                    @if($item['product_id']  == 0)
                                    <td>{{ number_format($item->BasketComponent->price, 2, ',', ' ') }}</td>
                                    @else
                                    <td>{{ number_format($item->BasketProduct->price, 2, ',', ' ') }}</td>
                                    @endif
                                    {{-- *************************Количество *********************************** --}}
                                    {{-- на кнопку делаем обработку Плюс --}}
                                    <td>
                                        <form method="post" action="{{ route('PlusProductBasket') }}" name="F1">
                                            @csrf
                                            @method('PUT')
                                            @if($item['product_id']  == 0)
                                                <button class="baskbutton" type="submit" style="background-color:white;" name="component_idPlus" value="{{ $item['component_id'] }}"
                                                {{ $item['countBasketcomp'] == $item->BasketComponent->count ? 'disabled' : '' }}>+ </button>
                                            @else
                                                <button class="baskbutton" type="submit" style="background-color:white;" name="product_idPlus" value="{{ $item['product_id'] }}"
                                                {{ $item['countBasket'] == $item->BasketProduct->count ? 'disabled' : '' }}>+ </button>
                                            @endif
                                        </form>
                                    </td>
                                    @if($item['product_id']  == 0)
                                        <td> {{ $item['countBasketcomp'] }} шт. из {{ $item->BasketComponent->count }} </td>
                                    @else
                                        <td> {{ $item['countBasket'] }} шт. из {{ $item->BasketProduct->count }} </td>
                                    @endif
                                    {{-- на кнопку делаем обработку  Минус --}}
                                    <td>
                                    
                                        <form method="post" action="{{ route('MinusProductBasket') }}" name="F2">
                                            @csrf
                                            @method('PATCH')
                                        @if($item['product_id']  == 0)
                                        <button class="baskbutton" type="submit" style="background-color:#eee;" name="component_idMinus"
                                                value="{{ $item['component_id'] }}"
                                                {{ $item['countBasketcomp'] <= 1 ? 'disabled' : '' }}>
                                                &mdash; </button>
                                        @else
                                        <button class="baskbutton" type="submit" style="background-color:#eee;" name="product_idMinus"
                                                value="{{ $item['product_id'] }}"
                                                {{ $item['countBasket'] <= 1 ? 'disabled' : '' }}>
                                                &mdash; </button>
                                        @endif
                                        </form>
                                    </td>
                                    @if($item['product_id']  == 0)
                                        <td id="price{{ $item['component_id'] }}">
                                            {{ number_format($item['countBasketcomp'] * $item->BasketComponent->price, 2, ',', ' ') }}
                                        </td>
                                    @else
                                        <td id="price{{ $item['product_id'] }}">
                                            {{ number_format($item['countBasket'] * $item->BasketProduct->price, 2, ',', ' ') }}
                                        </td>
                                    @endif

                                    

                                    <td>
                                        <form method="post" action="{{ route('deleteProductBasket') }}">
                                            @csrf
                                            @method('DELETE')
                                        @if($item['product_id']  == 0)
                                        <button type="submit" name="component_id"
                                                value="{{ $item['component_id'] }}">x</button>
                                        @else
                                            <button type="submit" name="product_id"
                                                value="{{ $item['product_id'] }}">x</button>
                                        @endif
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                            
                        </tbody>

                    </table>
                    <h4 style="color:white;margin-top:2vh;text-align:center;color:white;padding-bottom:50vh;">ИТОГО: <span id="itog">
                            {{ number_format($sum[0]['Itog'], 0, ',', ' ') }} руб.

                        </span>
                    </h4>
                </div>

            </div>

            <div style="color:white;margin-top:2vh;margin-bottom:5vh;text-align:center;color:white;font-size:40px;">
                <div style="{{ count(\App\Models\Basket::get()) == 0 ? 'display:none' : 'display:block; height:25vh;margin-left: auto;
    margin-right: auto;'}}">
                    <h5 style="color:white;text-align:center;margin-bottom:2vh;"></h5>
                    <form action="{{ route('OrderProduc') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group card-body">
                        </div>
                        <button class="butbasket" type="submit">Оформить заказ</button>
                    </form>
                </div>
                
                <div class="mt-3">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <h5>{{ session('success') }}</h5>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        
    <br>
    </div>
</main>
@endsection
