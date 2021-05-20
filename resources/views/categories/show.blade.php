@extends('layouts.category-layout')

@section('title', 'Blogger a Blogging Category  | Home :: Category')

@section('content')
    <!--banner-section-->
    <div class="banner-section">
        <h3 class="tittle">{{$category->title}} <i class="glyphicon glyphicon-picture"></i></h3>
{{--        <div class="banner">--}}
{{--            <div class="callbacks_container">--}}
{{--                <ul class="rslides" id="slider4">--}}
{{--                    --}}{{--                    @foreach($posts as $post)--}}
{{--                    <li>--}}
{{--                        <img src="{{ asset('public/assets/front/img/1.jpg') }}" class="img-responsive" alt="">--}}

{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <img src="{{ asset('public/assets/front/img/2.jpg') }}" class="img-responsive" alt="">--}}

{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <img src="{{ asset('public/assets/front/img/3.jpg') }}" class="img-responsive" alt="">--}}

{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <img src="{{ asset('public/assets/front/img/2.jpg') }}" class="img-responsive" alt="">--}}

{{--                    </li>--}}
{{--                    --}}{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!--banner-->--}}

{{--            <div class="clearfix"></div>--}}
{{--            <div class="b-bottom">--}}
{{--                <h5 class="top"><a href="#"></a></h5>--}}
{{--                <p>On Aug 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a>--}}
{{--                    <a class="span_link" href="#">--}}
{{--                        <span class="glyphicon glyphicon-eye-open"></span>56 </a>--}}
{{--                    <a class="span_link" href="#">--}}
{{--                        <span class="glyphicon glyphicon-circle-arrow-right"></span>--}}
{{--                    </a>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!--//banner-->
        <!--/top-news-->
        <div class="top-news">
            <div class="top-news">
                <div class="top-inner">
                    @foreach($posts as $post)
                        <div class="col-md-6 top-text">
                            <a href="{{ route('posts.single', ['slug'=> $post->slug]) }}"><img
                                    src="{{ $post->getImage() }}" class="img-responsive" alt=""></a>
                            <h5 class="top">
                                <a href="{{ route('posts.single', ['slug'=> $post->slug]) }}">{{ $post->title }}</a>
                            </h5>
                            <p>{!! $post->description !!}</p>
                            <p>On {{ $post->getPostDate() }}
                                <a class="span_link" href="{{ route('categories.single', ['slug' => $post->category->slug]) }}"><span
                                        class="glyphicon glyphicon-flag"></span> {{ $post->category->slug }} </a>
                                <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0</a>
                                <a class="span_link" href="#"><span
                                        class="glyphicon glyphicon-eye-open"></span>{{ $post->views }}</a>
                                <a class="span_link" href="{{ route('posts.single', ['slug'=> $post->slug]) }}"><span
                                        class="glyphicon glyphicon-circle-arrow-right"></span></a>
                            </p>
                        </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--//top-news-->
        <hr class="invis">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="Page navigation">
                    {{--                    {{ $post->links() }}--}}
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
    <!--//banner-section-->
@endsection
