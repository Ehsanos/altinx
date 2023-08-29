@extends('layouts.master')
@section('content')

    <main>
        <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2">
            <div class="container-fluid py-5">
                <div class="row justify-content-center">
                    @foreach($posts as $post)
                        <div class="col-12 col-lg-4 mb-lg-0" style="padding: 10px;"><a
                                href="{{route('langs.showPost',['post'=>$post])}}">
                                <div class="hover hover-2 rounded" style="color: #ffffff;"><img class="img-fluid"
                                                                                                src="{{$post->getFirstMediaUrl('posts')}}"
                                                                                                alt="image">
                                    <div class="hover-overlay"></div>
                                    <div class="hover-1-content px-5 py-4">
                                        <h2 class="text-uppercase hover-2-title mb-0"
                                            style="font-weight: bold;">{{getTrans($post,'tilte')}}</h2>
                                        <p class="hover-2-description font-weight-light mb-0"></p>
                                    </div>
                                </div>
                            </a></div>
                    @endforeach

                </div>
                <div class=" mt-2">

                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>


                    <a href="#" class="badge badge-dark">Dark</a>

                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>

                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                    <a href="#" class="badge badge-dark">Dark</a>


                </div>


            </div>
        </section>
    </main>
@endsection
