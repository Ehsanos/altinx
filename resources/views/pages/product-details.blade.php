@extends('layouts.master')
@section('content')

    <link rel="stylesheet" href="{{asset('assets/css/details.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    {{--    <main>--}}
    {{--        <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2">--}}
    {{--            <div class="container">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col">--}}
    {{--                        <div class="pd-wrap">--}}
    {{--                            <div class="container">--}}
    {{--                                <div class="heading-section">--}}
    {{--                                    <h2 class="text-dark"><span style="font-style: normal !important;">{{getTrans($product,'name')}}</span></h2>--}}
    {{--                                </div>--}}
    {{--                                <div class="row">--}}
    {{--                                    <div class="col-md-6">--}}
    {{--                                        <div class="text-center border"><img class="img-fluid" src="{{$product->getFirstMediaUrl('products')}}"></div>--}}

    {{--                                    </div>--}}

    {{--                                    <div class="col-md-6">--}}
    {{--                                        <div class="product-dtl">--}}
    {{--                                            <div class="product-info">--}}
    {{--                                                <div class="reviews-counter">--}}
    {{--                                                    <div class="rate"><input type="radio" id="star5" name="rate" value="5" checked=""><label for="star5" title="text">5 stars</label><input type="radio" id="star4" name="rate" value="4" checked=""><label for="star4" title="text">4 stars</label><input type="radio" id="star3" name="rate" value="3" checked=""><label for="star3" title="text">3 stars</label><input type="radio" id="star2" name="rate" value="2"><label for="star2" title="text">2 stars</label><input type="radio" id="star1" name="rate" value="1"><label for="star1" title="text">1 star</label></div><span>3 Reviews</span>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="product-price-discount"><span class="text-dark">{{$product->price}}</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <p>--}}

    {{--                                            {{getTrans($product,'description')}}--}}

    {{--                                            </p>--}}
    {{--                                            <div class="product-count "><label for="size">Quantity</label>--}}
    {{--                                                <form action="#" class="display-flex">--}}
    {{--                                                    <div class="qtyminus"><span>-</span></div><input type="text" name="quantity" value="1" class="qty">--}}
    {{--                                                    <div class="qtyplus"><span>+</span></div>--}}
    {{--                                                </form><a href="#" class="round-black-btn">{{lang('cart')}}</a>--}}
    {{--                                                <div class="p-2 py-3"><span class="text-dark font-weight-bolder">{{lang('share')}}&nbsp;</span><i class="fa fa-link mx-2 fa-lg text-dark"></i><i class="fa fa-twitter mx-2 fa-lg text-dark"></i><i class="fa fa-facebook mx-2 fa-lg text-dark"></i></div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div><script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </section>--}}
    {{--    </main>--}}

<main>
    <div class="card-wrapper  py-4">
        <div class="card">
            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">
                        <img
                            src="{{$product->getFirstMediaUrl('products')}}"
                            alt="shoe image">
                        <img
                            src="{{$product->getFirstMediaUrl('products')}}"
                            alt="shoe image">
                        <img
                            src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg"
                            alt="shoe image">
                        <img
                            src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg"
                            alt="shoe image">
                    </div>
                </div>
                <div class="img-select">
                    <div class="img-item">
                        <a href="#" data-id="1">
                            <img
                                src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg"
                                alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="2">
                            <img
                                src="{{$product->getFirstMediaUrl('products')}}"
                                alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="3">
                            <img
                                src="{{$product->getFirstMediaUrl('products')}}"
                                alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="4">
                            <img
                                src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg"
                                alt="shoe image">
                        </a>
                    </div>
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

            document.querySelector('.img-showcase').style.transform = `translateX(${(imgId - 1) * displayWidth}px)`;
        }

        window.addEventListener('resize', slideImage);
    </script>
@endsection
