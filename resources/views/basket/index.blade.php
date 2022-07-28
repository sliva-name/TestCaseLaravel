@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Ваша корзина</h1>
                @if (count($products))
                    @php
                        $basketCost = 0;
                    @endphp
                    <table class="table table-bordered">
                        <tr>
                            <th>№</th>
                            <th>Наименование</th>
                            <th>Цена</th>
                            <th>Кол-во</th>
                            <th>Стоимость</th>
                        </tr>
                        @foreach($products as $product)
                            @php
                                $itemPrice = $product->price;
                                $itemQuantity =  $product->pivot->quantity;
                                $itemCost = $itemPrice * $itemQuantity;
                                $basketCost = $basketCost + $itemCost;
                            @endphp
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ $product->image }}"><a href="{{ route('index', [$product->id]) }}">{{ $product->title }}</a>
                                </td>
                                <td>{{ number_format($itemPrice, 2, '.', '') }}</td>
                                <td>
                                    <i class="fas fa-minus-square"></i>
                                    <span class="mx-1">{{ $itemQuantity }}</span>
                                    <i class="fas fa-plus-square"></i>
                                </td>
                                <td>{{ number_format($itemCost, 2, '.', '') }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <th colspan="4" class="text-right">Итого</th>
                            <th>{{ number_format($basketCost, 2, '.', '') }}</th>
                        </tr>
                    </table>
                @else
                    <p>Ваша корзина пуста</p>
                @endif
            </div>
        </div>
    </div>

@endsection
