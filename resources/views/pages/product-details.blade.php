@extends('layouts.master')
@section('content')
    <main>
       <h1 class="bg-danger">{{$product['name_en']}}</h1>
        <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="pd-wrap">
                            <div class="container">
                                <div class="heading-section">
                                    <h2 class="text-dark"><span style="font-style: normal !important;">{{getTrans($product,'name')}}</span></h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-center border"><img class="img-fluid" src="../assets/img/1%20(3).jpg"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product-dtl">
                                            <div class="product-info">
                                                <div class="reviews-counter">
                                                    <div class="rate"><input type="radio" id="star5" name="rate" value="5" checked=""><label for="star5" title="text">5 stars</label><input type="radio" id="star4" name="rate" value="4" checked=""><label for="star4" title="text">4 stars</label><input type="radio" id="star3" name="rate" value="3" checked=""><label for="star3" title="text">3 stars</label><input type="radio" id="star2" name="rate" value="2"><label for="star2" title="text">2 stars</label><input type="radio" id="star1" name="rate" value="1"><label for="star1" title="text">1 star</label></div><span>3 Reviews</span>
                                                </div>
                                                <div class="product-price-discount"><span class="text-dark">$39.00</span><span class="line-through">$29.00</span></div>
                                            </div>
                                            <p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على <br>العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... <br>بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...<br>وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص <br>من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع <br>النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات&nbsp;</p>
                                            <div class="product-count"><label for="size">Quantity</label>
                                                <form action="#" class="display-flex">
                                                    <div class="qtyminus"><span>-</span></div><input type="text" name="quantity" value="1" class="qty">
                                                    <div class="qtyplus"><span>+</span></div>
                                                </form><a href="#" class="round-black-btn">إضافة إلى السلة</a>
                                                <div class="p-2 py-3"><span class="text-dark font-weight-bolder">مشاركة بواسطة :&nbsp;</span><i class="fa fa-link mx-2 fa-lg text-dark"></i><i class="fa fa-twitter mx-2 fa-lg text-dark"></i><i class="fa fa-facebook mx-2 fa-lg text-dark"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
