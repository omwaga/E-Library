@extends('layouts.master')
@section('content')
<!-- About Us -->
<section class="about-us section-space">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="about-content section-title default text-left">
                    <div class="section-top">
                        <h4><b>Resources By Classess</b></h4>
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
                        <h4><b>Resources by Education Levels</b></h4>
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
                        <h4><b>Resources by Education Levels</b></h4>
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
                            <div class="service-content">
                                @php $url = Str::slug($resource->name, '-'); @endphp
                                <h5><a href="#">{{$resource->name}}</a></h5>
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
                    <form method="GET" action="{{route('filter')}}">
                        <div class="form-group">
                            <input type="text" class="form-control" name="keywords" placeholder="Keywords...">
                        </div>
                        <div class="form-group mb15">
                            <select class="form-control" name="level">                
                                <option value="">Education Level</option>
                                @foreach($levels as $level)
                                <option value="{{$level->id}}">{{$level->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="class">              
                                <option value="">Class</option>
                                @foreach($classes as $class)
                                <option value="{{$class->id}}">{{$class->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="subject">                              
                                <option value="">Subject</option>
                                @foreach($subjects as $subject)
                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                                @endforeach
                            </select>
                        </div><br>
                        <input type="submit" class="bizwheel-btn theme-2 btn-block" value="Search">
                    </form>
                </div>
            </div>
        </div>
    </section>  
    <!--/ End About Us -->

    @endsection