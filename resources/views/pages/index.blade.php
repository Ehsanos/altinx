
@extends('layouts.master');
@section('content');

    <main>
        <header class="h-100">
            <div class="top-content">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="h-100 w-100 img-div" style="background: url(&quot;assets/img/7.jpg&quot;) center / cover no-repeat;">
                                <div class="h-100 w-100 overlay">
                                    <div class="slide_style_right">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-12 text-center align-self-center slide-text">
                                                <h1 class="animate__animated animate__lightSpeedInLeft">Bootstrap Carousel</h1>
                                                <p class="animate__animated animate__fadeInUp px-4">Bootstrap now touch enable slide.</p>
                                            </div>
                                            <div class="col-12 text-center slide-text"><a class="btn btn-primary btn-lg animate__animated animate__fadeInUp" role="button" href="#">select one</a><a class="btn btn-primary btn-lg animate__animated animate__fadeInUp" role="button" href="#">select two</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="h-100 w-100" style="background: url(&quot;assets/img/01.jpg&quot;) center / cover no-repeat;">
                                <div class="h-100 w-100 overlay">
                                    <div class="slide_style_right">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-12 text-center align-self-center slide-text">
                                                <h1 class="animate__animated animate__lightSpeedInLeft">Bootstrap Carousel</h1>
                                                <p class="animate__animated animate__fadeInUp px-4">Bootstrap now touch enable slide.</p>
                                            </div>
                                            <div class="col-12 text-center slide-text"><a class="btn btn-primary btn-lg animate__animated animate__fadeInUp" role="button" href="#">select one</a><a class="btn btn-primary btn-lg animate__animated animate__fadeInUp" role="button" href="#">select two</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="h-100 w-100" style="background: url(&quot;assets/img/030.jpg&quot;) center / cover no-repeat;">
                                <div class="h-100 w-100 overlay">
                                    <div class="slide_style_right">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-12 text-center align-self-center slide-text">
                                                <h1 class="animate__animated animate__lightSpeedInLeft">Bootstrap Carousel</h1>
                                                <p class="animate__animated animate__fadeInUp px-4">Bootstrap now touch enable slide.</p>
                                            </div>
                                            <div class="col-12 text-center slide-text"><a class="btn btn-primary btn-lg animate__animated animate__fadeInUp" role="button" href="#">select one</a><a class="btn btn-primary btn-lg animate__animated animate__fadeInUp" role="button" href="#">select two</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                </div>
            </div>
        </header>
        <section class="d-flex flex-column justify-content-center align-items-center pb-5 products">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-lg-9">
                        <div id="products" class="owl-carousel py-4">
                            <div class="px-3 product-item"><a class="text-decoration-none" href="#">
                                    <div class="card cards-shadown cards-hover my-5 w-100" data-aos="flip-left" data-aos-duration="950">
                                        <div class="card-header"><img class="rounded-img" src="../assets/img/1.jpg"></div>
                                        <div class="card-body">
                                            <p class="card-text sub-text-color">Last activity:</p>
                                            <p class="card-text cardbody-sub-text">2 minutes ago</p>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="px-3 product-item"><a class="text-decoration-none" href="#">
                                    <div class="card cards-shadown cards-hover my-5 w-100" data-aos="flip-left" data-aos-duration="950">
                                        <div class="card-header"><img class="img-fluid rounded-img" src="../assets/img/2.jpg"></div>
                                        <div class="card-body">
                                            <p class="card-text sub-text-color">Last activity:</p>
                                            <p class="card-text cardbody-sub-text">2 minutes ago</p>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="px-3 product-item"><a class="text-decoration-none" href="#">
                                    <div class="card cards-shadown cards-hover my-5 w-100" data-aos="flip-left" data-aos-duration="950">
                                        <div class="card-header"><img class="img-fluid rounded-img" src="../assets/img/3.jpg"></div>
                                        <div class="card-body">
                                            <p class="card-text sub-text-color">Last activity:</p>
                                            <p class="card-text cardbody-sub-text">2 minutes ago</p>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="px-3 product-item"><a class="text-decoration-none" href="#">
                                    <div class="card cards-shadown cards-hover my-5 w-100" data-aos="flip-left" data-aos-duration="950">
                                        <div class="card-header"><img class="img-fluid rounded-img" src="../assets/img/4.jpg"></div>
                                        <div class="card-body">
                                            <p class="card-text sub-text-color">Last activity:</p>
                                            <p class="card-text cardbody-sub-text">2 minutes ago</p>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="d-flex flex-column justify-content-center align-items-center pb-5 sections-s">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div id="sections" class="owl-carousel py-4">
                            <div class="px-3 product-item"><a class="text-decoration-none" href="#">
                                    <div class="card cards-shadown cards-hover my-5 w-100" data-aos="flip-left" data-aos-duration="950">
                                        <div class="card-header"><img class="img-fluid rounded-img" src="../assets/img/1.jpg"></div>
                                        <div class="card-body">
                                            <p class="card-text sub-text-color">Last activity:</p>
                                            <p class="card-text cardbody-sub-text">2 minutes ago</p>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="px-3 product-item"><a class="text-decoration-none" href="#">
                                    <div class="card cards-shadown cards-hover my-5 w-100" data-aos="flip-left" data-aos-duration="950">
                                        <div class="card-header"><img class="img-fluid rounded-img" src="../assets/img/2.jpg"></div>
                                        <div class="card-body">
                                            <p class="card-text sub-text-color">Last activity:</p>
                                            <p class="card-text cardbody-sub-text">2 minutes ago</p>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="px-3 product-item"><a class="text-decoration-none" href="#">
                                    <div class="card cards-shadown cards-hover my-5 w-100" data-aos="flip-left" data-aos-duration="950">
                                        <div class="card-header"><img class="img-fluid rounded-img" src="../assets/img/3.jpg"></div>
                                        <div class="card-body">
                                            <p class="card-text sub-text-color">Last activity:</p>
                                            <p class="card-text cardbody-sub-text">2 minutes ago</p>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wrapper-numbers">
            <div class="container">
                <div class="row countup text-center">
                    <div class="col-sm-6 col-md-3 column">
                        <p><i class="fas fa-box-open" aria-hidden="true"></i></p>
                        <p> <span class="count replay">2543</span></p>
                        <h2>عدد المنتجات</h2>
                    </div>
                    <div class="col-sm-6 col-md-3 column">
                        <p><i class="fas fa-th" aria-hidden="true"></i></p>
                        <p> <span class="count replay">328</span></p>
                        <h2>عدد التصنيفات</h2>
                    </div>
                    <div class="col-sm-6 col-md-3 column">
                        <p><i class="fas fa-bookmark" aria-hidden="true"></i></p>
                        <p> <span class="count replay">95.60</span></p>
                        <h2>عدد الماركات</h2>
                    </div>
                    <div class="col-sm-6 col-md-3 column">
                        <p><i class="fa fa-user" aria-hidden="true"></i></p>
                        <p> <span class="count replay">9157</span></p>
                        <h2>عدد العملاء</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="d-flex flex-column justify-content-center align-items-center pt-5 sec-news">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div id="news" class="owl-carousel py-4">
                            <div class="px-3 product-item"><a class="text-decoration-none" href="news.blade.php">
                                    <div class="card cards-shadown cards-hover my-5 w-100" data-aos="flip-left" data-aos-duration="950">
                                        <div class="card-header"><img class="img-fluid rounded-img" src="../assets/img/1.jpg"></div>
                                        <div class="card-body">
                                            <p class="card-text sub-text-color">Last activity:</p>
                                            <p class="card-text cardbody-sub-text">2 minutes ago</p>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="px-3 product-item"><a class="text-decoration-none" href="news.blade.php">
                                    <div class="card cards-shadown cards-hover my-5 w-100" data-aos="flip-left" data-aos-duration="950">
                                        <div class="card-header"><img class="img-fluid rounded-img" src="../assets/img/2.jpg"></div>
                                        <div class="card-body">
                                            <p class="card-text sub-text-color">Last activity:</p>
                                            <p class="card-text cardbody-sub-text">2 minutes ago</p>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="px-3 product-item"><a class="text-decoration-none" href="news.blade.php">
                                    <div class="card cards-shadown cards-hover my-5 w-100" data-aos="flip-left" data-aos-duration="950">
                                        <div class="card-header"><img class="img-fluid rounded-img" src="../assets/img/3.jpg"></div>
                                        <div class="card-body">
                                            <p class="card-text sub-text-color">Last activity:</p>
                                            <p class="card-text cardbody-sub-text">2 minutes ago</p>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                    <div class="col-12 py-4">
                        <div class="text-center"><a class="more-news py-3 px-5 text-decoration-none" href="main-news.blade.php">المزيد من الأخبار</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="info pb-4 pt-5">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-6">
                        <div class="d-md-none"><iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="100%"></iframe></div>
                        <div class="d-none d-md-block position-absolute" style="top: 0;left: 0;right: 0;bottom: 0;"><iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="100%"></iframe></div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div>
                            <form class="bg-white border rounded shadow p-3 p-sm-4 p-lg-5" method="post" style="background: var(--bs-body-bg);">
                                <h3 class="font-weight-bold text-center mb-3">تواصل معنا</h3>
                                <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="الإسم"></div>
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="البريد الإلكتروني"></div>
                                <div class="mb-3"><textarea class="form-control" name="message" placeholder="الرسالة" rows="6"></textarea></div>
                                <div class="mb-3"><button class="btn btn-primary btn-sign" type="submit">ارسال</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>



@endsection
