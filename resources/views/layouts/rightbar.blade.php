
    <div class="banner-right-text">
        <h3 class="tittle">Popular posts  <i class="glyphicon glyphicon-facetime-video"></i></h3>
        <!--/general-news-->
        <div class="general-news">
            <div class="general-inner">
                <div class="register-box @if(\Illuminate\Support\Facades\Auth::check() || \Illuminate\Support\Facades\Auth::user()) hidden @endif">
                    <div class="register-logo">
                        <b>Логин</b>
                    </div>
                    <div class="register-box-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            <div class="form-group has-feedback">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                                {{--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>--}}
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                {{--<span class="glyphicon glyphicon-lock form-control-feedback"></span>--}}
                            </div>
                            <div class="row">
                                <div class="col-xs-4 offset-4">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                                </div>
                                <div class="col-xs-6 offset-8">
                                    <a href="{{ route('register.create') }}">Registration</a>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>

                        {{--<div class="social-auth-links text-center">--}}
                        {{--<p>- OR -</p>--}}
                        {{--<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using--}}
                        {{--Facebook</a>--}}
                        {{--<a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using--}}
                        {{--Google+</a>--}}
                        {{--</div>--}}

                    </div>
                    <!-- /.form-box -->
                </div>

                <div class="edit-pics">
                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="{{ asset('public/assets/front/img/f4.jpg') }}" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="media">
                    <h3 class="tittle media">Popular categories <i class="glyphicon glyphicon-floppy-disk"></i></h3>
                    <div class="general-text two">
                        <a href="single.html"><img src="{{ asset('public/assets/front/img/gen3.jpg') }}" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                </div>

            </div>
        </div>
        <!--//general-news-->
        <!--/news-->
        <!--/news-->
    </div>
    <div class="clearfix"> </div>

