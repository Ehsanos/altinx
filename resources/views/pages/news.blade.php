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

    <main>
        <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="text-center"><img class="img-fluid" src="{{$post->getFirstMediaUrl('posts')}}"></div>
                    </div>
                    <div class="col">
                        <h1 class="text-dark">{{getTrans($post,'tilte')}}</h1>
                        <p class="text-dark"><span style="font-weight: normal !important; font-style: normal !important; color: rgb(122, 122, 122);">
                             {{getTrans($post,'body')}}
                            </span><br><br></p>
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
    </main>

@endsection


