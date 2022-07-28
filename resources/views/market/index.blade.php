@extends('welcome')
<!-- cart mini area start -->

<div class="cartmini__area">
    <div class="cartmini__wrapper">
        <div class="cartmini__title">
            <h4>Shopping cart</h4>
        </div>
        <div class="cartmini__close">
            <button type="button" class="cartmini__close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="cartmini__widget">
            <div class="cartmini__inner">
                <ul>
                    @php
                        $basketCost = 0;
                    @endphp
                    @foreach($basket as $bas)
                        @php
                                $itemPrice = $bas->price;
                                $itemQuantity =  $bas->pivot->quantity;
                                $itemCost = $itemPrice * $itemQuantity;
                                $basketCost = $basketCost + $itemCost;
                        @endphp
                    <li>
                        <div class="cartmini__thumb">
                            <a href="product-details.html">
                                @if($bas->image)
                                    <img src="{{ $bas->image }}" alt="">
                                @else
                                    <img src="../assets/img/product/sm/cart-5.jpg" alt="">
                                @endif
                            </a>
                        </div>
                        <div class="cartmini__content">
                            <h5><a href="product-details.html">{{ $bas->title }}</a></h5>
                            <div class="product-quantity mt-10 mb-10">
                                <span class="cart-minus">-</span>
                                <input class="cart-input" type="text" value="1"/>
                                <span class="cart-plus">+</span>
                            </div>
                            <div class="product__sm-price-wrapper">
                                <span>{{ $itemQuantity }} <i class="fal fa-times"></i></span>
                                <span class="product__sm-price">{{ $bas->price }}</span>
                            </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="cartmini__checkout">
                <div class="cartmini__checkout-title mb-30">
                    <h4>Сумма:</h4>
                    <span>{{ $basketCost }}</span>
                </div>
                <div class="cartmini__checkout-btn">
                    <a href="{{ route('basket.index') }}" class="m-btn m-btn-border mb-10 w-100"> <span></span> Посмотреть корзину</a>
                    <form action="{{ route('basket.saveorder') }}" method="post">
                        @csrf
                        <button type="submit" href="checkout.html" class="m-btn m-btn-3 w-100"> <span></span> checkout</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- cart mini area end -->
@section('content')
<section class="product__area po-rel-z1 pt-100 pb-115 grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                            <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                                <div class="product__thumb">
                                    <div class="product__thumb-inner fix w-img">
                                        <a href="product-details.html">
                                            @if($product->image)
                                                <img src="{{ $product->image }}" alt="">
                                            @else
                                                <img src="../assets/img/product/product-1.jpg" alt="">
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                <div class="product__content">
                                    <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                                        <div class="product__tag">
                                            <a href="#">Артикул: {{ $product->id }}</a>
                                        </div>
                                        <div class="product__price">
                                            <span>${{ $product->price }}</span>
                                        </div>
                                    </div>
                                    <h3 class="product__title">
                                        <a href="product-details.html">{{ $product->title }}</a>
                                    </h3>
                                    <p class="product__author">{{ \Illuminate\Support\Str::limit($product->description, 150, '...') }}</a></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <form action="{{ route('basket.add', ['id' => $product->id]) }}" method="post">
                                            @csrf
                                            <div class="product-quantity mt-10 mb-10">
                                                <button class="cart-minus"  type="button" onclick="this.nextElementSibling.stepDown();">-</button>
                                                <input class="cart-input" name="quantity" type="number" value="1" min="1" max="1000">
                                                <button class="cart-plus" type="button" onclick="this.previousElementSibling.stepUp();">+</button>
                                            </div>
                                            <button type="submit" class="m-btn m-btn-3">Добавить в корзину</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $products->links() }}
            </div>
        </div>
    </div>

</section>
@endsection
