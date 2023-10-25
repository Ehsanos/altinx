@extends('layouts.master')
@section('content')

    <link rel="stylesheet" href="{{asset('assets/css/details.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">



<main>
    <div class="card-wrapper  py-4">
        <div class="card">
            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">

                        @foreach($imgs as $img )
                        <img
                            src="{{$imgs[$loop->index]->getUrl()}}"
                            alt="shoe image">
                        @endforeach
{{--                        <img--}}
{{--                            src="{{$imgs[1]->getUrl()}}"--}}
{{--                            alt="shoe image">--}}
{{--                        <img--}}
{{--                            src="{{$imgs[2]->getUrl()}}"--}}
{{--                            alt="shoe image">--}}
{{--                        <img--}}
{{--                            src="{{$imgs[3]->getUrl()}}"--}}
{{--                            alt="shoe image">--}}
                    </div>
                </div>
                <div class="img-select">
                    @foreach($imgs as $img)

                    <div class="img-item">
                        <a href="#" data-id="{{$loop->index+1}}">
                            <img
                                src="{{$imgs[$loop->index]->getUrl()}}"
                                alt="shoe image">
                        </a>
                    </div>
                    @endforeach
{{--                    <div class="img-item">--}}
{{--                        <a href="#" data-id="2">--}}
{{--                            <img--}}
{{--                                src="{{$imgs[1]->getUrl()}}"--}}
{{--                                alt="shoe image">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="img-item">--}}
{{--                        <a href="#" data-id="3">--}}
{{--                            <img--}}
{{--                                src="{{$imgs[2]->getUrl()}}"--}}
{{--                                alt="shoe image">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="img-item">--}}
{{--                        <a href="#" data-id="4">--}}
{{--                            <img--}}
{{--                                src="{{$imgs[3]->getUrl()}}"--}}

{{--                                alt="shoe image">--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
            </div>
            <!-- card right -->
            <div class="product-content">
                <h2 class="product-title">{{getTrans($product,'name')}}</h2>

                <div class="product-price">
                    <p >{{lang('price')}} <span class="new-price">{{$product->price}} $</span></p>
                </div>

                <div class="product-detail">
                    <h2>{{lang('details')}}</h2>
                    <p class="product-detail">{{getTrans($product,'description')}}</p>


                </div>

                <div class="purchase-info ">
                    <input type="number" min="0" value="1">
                    <button type="button" class="btn">
                        {{lang('cart')}} <i class="fas fa-shopping-cart"></i>
                    </button>

                </div>

                <div class="social-links">
                    <p>{{lang('share')}}: </p>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</main>
    <script>
        const imgs = document.querySelectorAll('.img-select a');
        const imgBtns = [...imgs];
        let imgId = 1;

        imgBtns.forEach((imgItem) => {
            imgItem.addEventListener('click', (event) => {
                event.preventDefault();
                imgId = imgItem.dataset.id;
                slideImage();
            });
        });

        function slideImage(){
            const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

            let x=1;
            if(document.dir==='ltr')
                {
                    x=-1;
                }
            document.querySelector('.img-showcase').style.transform = `translateX(${x*(imgId - 1) * displayWidth}px)`;
        }

        window.addEventListener('resize', slideImage);
    </script>
@endsection
