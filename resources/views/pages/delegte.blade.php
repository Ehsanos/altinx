@extends('layouts.master');
@section('content');
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

<div class="container">

    <div class="row clearfix">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card agent">
                <div class="agent-avatar">
                    <a class="agent-name " href="agent-profile.html">
                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="img-fluid " alt="">
                    </a>
                </div>
                <div class="agent-content">
                    <div class="agent-name agent-color">
                        <h4><a class="agent-color" href="agent-profile.html">Tim Hank</a></h4>
                        <span class="agent-color">Fairview, Texas</span>
                    </div>
                    <ul class="agent-contact-details">
                        <li><i class="zmdi zmdi-phone"></i><span>(123) 123-456</span></li>
                        <li><i class="zmdi zmdi-email"></i>info@example.com</li>
                    </ul>
                    <ul class="social-icons">
                        <li><a class="facebook agent-color" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a class="twitter agent-color" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a class="gplus agent-color" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                        <li><a class="linkedin agent-color" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card agent">
                <div class="agent-avatar">
                    <a href="agent-profile.html"> <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-fluid " alt=""> </a> </div>
                <div class="agent-content">
                    <div class="agent-name">
                        <h4><a href="agent-profile.html">Gary Camara</a></h4>
                        <span>Bristol, Pennsylvania</span>
                    </div>
                    <ul class="agent-contact-details agent-color">
                        <li><i class="zmdi zmdi-phone"></i><span>(123) 123-456</span></li>
                        <li><i class="zmdi zmdi-email"></i>info@example.com</li>
                    </ul>
                    <ul class="social-icons agent-color">
                        <li><a class="facebook agent-color" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a class="twitter agent-color" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a class="gplus agent-color" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                        <li><a class="linkedin agent-color" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card agent">
                <div class="agent-avatar">
                    <a href="agent-profile.html"> <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-fluid " alt=""> </a> </div>
                <div class="agent-content">
                    <div class="agent-name">
                        <h4><a href="agent-profile.html">Hossein Shams</a></h4>
                        <span>Springfield, Florida</span>
                    </div>
                    <ul class="agent-contact-details">
                        <li><i class="zmdi zmdi-phone"></i><span>(123) 123-456</span></li>
                        <li><i class="zmdi zmdi-email"></i>info@example.com</li>
                    </ul>
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card agent">
                <div class="agent-avatar"> <a href="agent-profile.html"> <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="img-fluid " alt=""> </a> </div>
                <div class="agent-content">
                    <div class="agent-name">
                        <h4><a href="agent-profile.html">Tom Wilson</a></h4>
                        <span>Washington, Illinois</span>
                    </div>
                    <ul class="agent-contact-details">
                        <li><i class="zmdi zmdi-phone"></i><span>(123) 123-456</span></li>
                        <li><i class="zmdi zmdi-email"></i>info@example.com</li>
                    </ul>
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
