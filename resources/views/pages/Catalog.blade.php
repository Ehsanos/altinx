@extends('layouts.master')
@section('content')

    <section id="carousel">
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="jumbotron pulse animated hero-nature carousel-hero"></div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated hero-photography carousel-hero"></div>
                </div>
                <div class="carousel-item active">
                    <div class="jumbotron pulse animated hero-technology carousel-hero"></div>
                </div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i
                        class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a
                    class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i
                        class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
            </ol>
        </div>
    </section>
    <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">

                    <div class="row bg-gray pb-3 pt-4">

                        @foreach($catalogs as $catalog)
                        <div class="col-12 p-0 my-1">
                            <div
                                class="d-flex flex-row justify-content-start align-items-center py-1 border-bottom main-catalog">
                                <div class="div-dash"></div>
                                <a class="mx-3 text-decoration-none catalog-btn">{{getTrans($catalog,'name')}}</a>
                            </div>
                        </div>
                        @endforeach




                    </div>

                </div>
                <div class="col-12 col-lg-9">
                    <div class="row py-2">
                        <div class="col p-0">
                            <div class="px-3">
                                <h2 class="text-dark">عنوان المنتجات أو القسم</h2>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4 mb-4"><a class="text-decoration-none" href="#">
                                <div class="product-main border py-1">
                                    <div class="product-img border-bottom mb-1">
                                        <div class="p-2"><img class="img-fluid" src="../assets/img/1.jpg"></div>
                                    </div>
                                    <div class="product-desc px-3">
                                        <h5 class="text-dark m-0 py-1">اسم المنتج</h5>
                                        <p class="text-dark m-0 py-2">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم
                                            لتعرض على العميل ليتصور</p>
                                    </div>
                                    <div class="product-btn px-3 py-2"><a class="text-decoration-none products-details"
                                                                          href="#">تفاصيل المنتج</a></div>
                                </div>
                            </a></div>
                        <div class="col-6 col-lg-4 mb-4"><a class="text-decoration-none" href="#">
                                <div class="product-main border py-1">
                                    <div class="product-img border-bottom mb-1">
                                        <div class="p-2"><img class="img-fluid" src="../assets/img/4.jpg"></div>
                                    </div>
                                    <div class="product-desc px-3">
                                        <h5 class="text-dark m-0 py-1">اسم المنتج</h5>
                                        <p class="text-dark m-0 py-2">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم
                                            لتعرض على العميل ليتصور</p>
                                    </div>
                                    <div class="product-btn px-3 py-2"><a class="text-decoration-none products-details"
                                                                          href="#">تفاصيل المنتج</a></div>
                                </div>
                            </a></div>
                        <div class="col-6 col-lg-4 mb-4"><a class="text-decoration-none" href="#">
                                <div class="product-main border py-1">
                                    <div class="product-img border-bottom mb-1">
                                        <div class="p-2"><img class="img-fluid" src="../assets/img/2.jpg"></div>
                                    </div>
                                    <div class="product-desc px-3">
                                        <h5 class="text-dark m-0 py-1">اسم المنتج</h5>
                                        <p class="text-dark m-0 py-2">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم
                                            لتعرض على العميل ليتصور</p>
                                    </div>
                                    <div class="product-btn px-3 py-2"><a class="text-decoration-none products-details"
                                                                          href="#">تفاصيل المنتج</a></div>
                                </div>
                            </a></div>
                        <div class="col-6 col-lg-4 mb-4"><a class="text-decoration-none" href="#">
                                <div class="product-main border py-1">
                                    <div class="product-img border-bottom mb-1">
                                        <div class="p-2"><img class="img-fluid" src="../assets/img/1.jpg"></div>
                                    </div>
                                    <div class="product-desc px-3">
                                        <h5 class="text-dark m-0 py-1">اسم المنتج</h5>
                                        <p class="text-dark m-0 py-2">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم
                                            لتعرض على العميل ليتصور</p>
                                    </div>
                                    <div class="product-btn px-3 py-2"><a class="text-decoration-none products-details"
                                                                          href="#">تفاصيل المنتج</a></div>
                                </div>
                            </a></div>
                        <div class="col-6 col-lg-4 mb-4"><a class="text-decoration-none" href="#">
                                <div class="product-main border py-1">
                                    <div class="product-img border-bottom mb-1">
                                        <div class="p-2"><img class="img-fluid" src="../assets/img/4.jpg"></div>
                                    </div>
                                    <div class="product-desc px-3">
                                        <h5 class="text-dark m-0 py-1">اسم المنتج</h5>
                                        <p class="text-dark m-0 py-2">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم
                                            لتعرض على العميل ليتصور</p>
                                    </div>
                                    <div class="product-btn px-3 py-2"><a class="text-decoration-none products-details"
                                                                          href="#">تفاصيل المنتج</a></div>
                                </div>
                            </a></div>
                        <div class="col-6 col-lg-4 mb-4"><a class="text-decoration-none" href="#">
                                <div class="product-main border py-1">
                                    <div class="product-img border-bottom mb-1">
                                        <div class="p-2"><img class="img-fluid" src="../assets/img/2.jpg"></div>
                                    </div>
                                    <div class="product-desc px-3">
                                        <h5 class="text-dark m-0 py-1">اسم المنتج</h5>
                                        <p class="text-dark m-0 py-2">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم
                                            لتعرض على العميل ليتصور</p>
                                    </div>
                                    <div class="product-btn px-3 py-2"><a class="text-decoration-none products-details"
                                                                          href="#">تفاصيل المنتج</a></div>
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
            <div class=" mt-2">
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>
                <a href="#" class="badge badge-dark tag-div py-2 px-2">Dark</a>






            </div>
        </div>
    </section>

@endsection
