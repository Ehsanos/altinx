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

<div class="container mt-5">

    <div class="row clearfix">
        @foreach($agents as $agent)

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card agent">
                <div class="agent-avatar">
                    <a class="agent-name " href="agent-profile.html">
                        <img src="{{$agent->getFirstMediaUrl('users')}}" class="img-fluid " alt="">
                    </a>
                </div>
                <div class="agent-content">
                    <div class="agent-name agent-color">
                        <h4><a class="agent-color" href="agent-profile.html">{{$agent->name}}</a></h4>
                        <span class="agent-color">{{getTrans($agent,'name')}}</span>
                    </div>
                    <ul class="agent-contact-details">
                        <li><i class="zmdi zmdi-phone"></i><span>{{$agent->phone}}</span></li>
                        <li><i class="zmdi zmdi-email"></i>{{$agent->email}}</li>
                    </ul>
                    <ul class="social-icons">
                        <li><a class="facebook agent-color" href="{{$agent->facebook}}"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a class="twitter agent-color" href="{{$agent->twitter}}"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a class="gplus agent-color" href="{{$agent->insegram}}"><i class="zmdi zmdi-google-plus"></i></a></li>
                        <li><a class="linkedin agent-color" href="{{$agent->instegram}}"><i class="zmdi zmdi-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach


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

@endsection
