@extends('layouts.master')
@section('content')
<!-- About Us -->
<section class="about-us section-space">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- About Video -->
                <div class="modern-img-feature">
                    <img src="{{asset('img/slider/slider2.jpg')}}" alt="#">
                    <div class="video-play">
                        <a href="https://www.youtube.com/watch?v=RLlPLqrw8Q4" class="video video-popup mfp-iframe">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
                <!--/End About Video  -->
            </div>
            <div class="col-md-4">
                <div class="about-content section-title default text-left">
                    <div class="section-top">
                        <h1><span>About Us</span><b>We Provide Quality Business &amp; Smart Solution</b></h1>
                    </div>
                    <div class="section-bottom">
                        <div class="button">
                            <a href="about.html" class="bizwheel-btn theme-2">Our Works<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-content section-title default text-left">
                    <div class="section-top">
                        <h1><span>About Us</span><b>We Provide Quality Business &amp; Smart Solution</b></h1>
                    </div>
                    <div class="section-bottom">
                        <div class="button">
                            <a href="about.html" class="bizwheel-btn theme-2">Our Works<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
<!--/ End About Us -->

@endsection