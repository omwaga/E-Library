@extends('layouts.master')
@section('content')
<!-- About Us -->
<section class="about-us section-space">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="about-content section-title default text-left">
                    <div class="section-top">
                        <h4><b>Browse Resources By Classess</b></h4>
                    </div>
                    <div class="section-bottom">
                        <div class="button">
                            <a href="#" class="bizwheel-btn theme-2">Our Works<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-content section-title default text-left">
                    <div class="section-top">
                        <h4><b>Browse Resource by Education Levels</b></h4>
                    </div>
                    <div class="section-bottom">
                        <div class="button">
                            <a href="#" class="bizwheel-btn theme-2">Our Works<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-content section-title default text-left">
                    <div class="section-top">
                        <h4><b>Browse Resource by Education Levels</b></h4>
                    </div>
                    <div class="section-bottom">
                        <div class="button">
                            <a href="#" class="bizwheel-btn theme-2">Our Works<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    @forelse($resources as $resource)
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Service -->
                        <div class="single-service">
                            <div class="service-head">
                                <img src="{{asset('img/slider/slider6.jpg')}}" alt="#">
                                <div class="icon-bg"><i class="fa fa-handshake-o"></i></div>
                            </div>
                            <div class="service-content">
                                @php $url = Str::slug($resource->name, '-'); @endphp
                                <h4><a href="#">{{$resource->name}}</a></h4>
                                <p>{{$resource->description}}</p>
                                @auth()
                                <a class="btn" href="{{ route('resource.download', $resource->uuid) }}"><i class="fa fa-arrow-circle-o-right"></i>Download</a>
                                @else
                                <a class="btn" href="{{ route('login') }}"><i class="fa fa-arrow-circle-o-right"></i>Download</a>
                                @endauth
                            </div>
                        </div>
                        <!--/ End Single Service -->
                    </div>
                    @empty
                    @endforelse
                </div>                
            </div>
            <div class="col-md-4">
                <h4 class="left-title mb20">Search Filter</h4>
                <div class="contact-form-area">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Keywords...">
                        </div>
                        <div class="form-group mb15">
                            <select class="form-control" title="Location">                                       
                                <option>Paris</option>
                                <option>London</option>
                                <option>New York</option>
                                <option>Tokyo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" title="Category">                                       
                                <option>Restaurants</option>
                                <option>Jobs</option>
                                <option>Property</option>
                                <option>Automotive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">
                        </div>
                        <input type="submit" class="bizwheel-btn theme-2 btn-block" value="Search">
                    </form>
                </div>
            </div>
        </div>
    </section>  
    <!--/ End About Us -->

    @endsection