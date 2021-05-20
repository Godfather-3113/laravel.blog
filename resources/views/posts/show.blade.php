@extends('layouts.layout')

@section('title', 'Blogger a Blogging Category ::' . $post->title)


@section('content')
    <div class="banner-section">

        <ol class="breadcrumb hidden-xs-down">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('categories.single', ['slug' => $post->category->slug]) }}">{{ $post->category->title }}</a></li>
            <li class="breadcrumb-item active">{{ $post->title }}</li>
        </ol>


        <h3 class="tittle">{{ $post->title }} <i class="glyphicon glyphicon-file"></i></h3>
        <div class="single">
            <img src="{{ $post->getImage() }} " class="img-responsive" alt="">
            <div class="b-bottom">
                <h5 class="top"></h5>
                <p class="sub">{!! $post->content !!}</p>

            </div>
        </div>
        <div class="single-bottom">
            <div class="single-middle">
                <p>On {{ $post->getPostDate() }} <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>{{ $post->views }}</a></p>
                <div class="clearfix"> </div>
                <div class="blog-title-area">
                    @if($post->tags->count())
                        <div class="tag-cloud-single">
                            <span>Tags</span>
                            @foreach($post->tags as $tag)
                                <small><a href="{{ route('tags.single',['slug'=>$tag->slug]) }}">{{ $tag->title }}</a></small>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>


        <div class="single-bottom">
            <div class="single-middle">
                <ul class="social-share">
                    <li><span>SHARE</span></li>
                    <li><a href="#"><i> </i></a></li>
                    <li><a href="#"><i class="tin"> </i></a></li>
                    <li><a href="#"><i class="message"> </i></a></li>
                </ul>
                <a href="#"><i class="arrow"> </i></a>
                <div class="clearfix"> </div>
            </div>

        </div>

        <!---728x90--->
        @yield('main_content')
        <div class="response">
            <h4>Responses</h4>
            <div class="media response-info">
                <div class="media-left response-text-left">
                    <a href="#">
                        <img class="media-object" src="{{asset('public/assets/front/img')}}/sin1.jpg" alt="">
                    </a>
                    <h5><a href="#">Username</a></h5>
                </div>
                <div class="media-body response-text-right">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <ul>
                        <li>Sep 21, 2015</li>
                        <li><a href="{{ route('categories.single', ['slug' => $post->category->slug]) }}">Reply</a></li>
                    </ul>
                    <div class="media response-info">
                        <div class="media-left response-text-left">
                            <a href="#">
                                <img class="media-object" src="{{asset('public/assets/front/img')}}/sin2.jpg" alt="">
                            </a>
                            <h5><a href="#">Username</a></h5>
                        </div>
                        <div class="media-body response-text-right">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <ul>
                                <li>July 17, 2015</li>
                                <li><a href="{{ route('categories.single', ['slug' => $post->category->slug]) }}">Reply</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="media response-info">
                <div class="media-left response-text-left">
                    <a href="#">
                        <img class="media-object" src="{{asset('public/assets/front/img')}}/sin1.jpg" alt="">
                    </a>
                    <h5><a href="#">Username</a></h5>
                </div>
                <div class="media-body response-text-right">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <ul>
                        <li>Mar 28, 2015</li>
                        <li><a href="{{ route('categories.single', ['slug' => $post->category->slug]) }}">Reply</a></li>
                    </ul>
                    <div class="media response-info">
                        <div class="media-left response-text-left">
                            <a href="#">
                                <img class="media-object" src="{{asset('public/assets/front/img')}}/sin2.jpg" alt="">
                            </a>
                            <h5><a href="#">Username</a></h5>
                        </div>
                        <div class="media-body response-text-right">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <ul>
                                <li>Feb 19, 2015</li>
                                <li><a href="{{ route('categories.single', ['slug' => $post->category->slug]) }}">Reply</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="coment-form">
            <h4>Leave your comment</h4>
            <form>
                <input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">
                <input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
                <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
                <input type="submit" value="Submit Comment">
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
