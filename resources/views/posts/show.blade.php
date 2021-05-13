@extends('layouts.layout')


@section('content')
    <div class="banner-section">

        <!---728x90--->


        <h3 class="tittle">Single Page <i class="glyphicon glyphicon-file"></i></h3>
        <div class="single">
            <img src="{{asset('public/assets/front/img')}}/3.jpg" class="img-responsive" alt="">
            <div class="b-bottom">
                <h5 class="top"><a href="#">What turn out consetetur sadipscing elit</a></h5>
                <p class="sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since,Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <p>On Aug 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>

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
                        <li><a href="single.html">Reply</a></li>
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
                                <li><a href="single.html">Reply</a></li>
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
                        <li><a href="single.html">Reply</a></li>
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
                                <li><a href="single.html">Reply</a></li>
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
