@extends('layouts.master')
@section('content')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/css/cart.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>

<div class="container mt-lg-5">
    <h1 class="text-black-50">محتويات الطلب</h1>
    {{--   <h1 class="bg-info"> {{$items}}</h1>--}}

</div>

<div class="shopping-cart">

    <div class="product">
        <label class="product-image">{{lang('img_product')}}</label>
        <label class="product-details">{{lang('name')}}</label>
        <label class="product-details">{{lang('price_one')}}</label>
        <label class="product-details">{{lang('quantity')}}</label>

        <label class="product-details">{{lang('one_price')}}</label>
    </div>


    @foreach($items as $item)
        <div class="product ">
            <div class="product-image">
                <a href="{{route('langs.product_details',$item->product->id)}}">
                <img src="{{$item->product->getFirstMediaUrl('products')}}">
                    </a>
            </div>
            <div class="product-details">
                <div class="product-title">{{getTrans($item->product,'name')}}</div>
                <p class="product-description">{{getTrans($item->product,'discrption')}}</p>
            </div>
            <div class="product-details">{{$item->price}}</div>
            <div class="product-details">
                <h3 class="product-detail">{{$item->quantity}}</h3>
            </div>

            <div class="product-details">{{$item->total}}</div>
        </div>
    @endforeach

    {{--    <div class="product">--}}
    {{--        <div class="product-image">--}}
    {{--            <img src="https://s.cdpn.io/3/large-NutroNaturalChoiceAdultLambMealandRiceDryDogFood.png">--}}
    {{--        </div>--}}
    {{--        <div class="product-details">--}}
    {{--            <div class="product-title">Nutro™ Adult Lamb and Rice Dog Food</div>--}}
    {{--            <p class="product-description">Who doesn't like lamb and rice? We've all hit the halal cart at 3am while quasi-blackout after a night of binge drinking in Manhattan. Now it's your dog's turn!</p>--}}
    {{--        </div>--}}
    {{--        <div class="product-price">45.99</div>--}}
    {{--        <div class="product-quantity">--}}
    {{--            <h3 class="text-black-50">44</h3>--}}
    {{--        </div>--}}
    {{--        <div class="product-line-price">45.99</div>--}}
    {{--    </div>--}}


    <div class="totals">
        <div class="totals-item">
            <label>Subtotal</label>
            <div class="sum d-none">

            </div>


            <div class="totals-value " id="cart-subtotal">{{$sum}}</div>
        </div>
    </div>


</div>

<script src="{{asset('assets/js/cart.js')}}">


</script>

</body>
</html>

@endsection
