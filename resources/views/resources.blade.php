@extends('layouts.master')
@section('content')

<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('{{asset('img/slider/slider6.jpg')}}')">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<!-- Bread Menu -->
					<div class="bread-menu">
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="#">{{$education_class->name}}</a></li>
						</ul>
					</div>
					<!-- Bread Title -->
					<div class="bread-title"><h2>{{$education_class->name}}</h2></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<!-- Services -->
<section class="services section-bg section-space">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title  style2 text-center">
					<div class="section-top">
						<h1><span>Learning</span><b>{{$education_class->name}} Resources</b></h1><h4>We provide quality service &amp; support..</h4>
					</div>
					<div class="section-bottom">
						<div class="text-style-two">
							<p>{!!$education_class->description!!}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
		<div class="col-md-8">
			<div class="row">
				@forelse($resources as $resource)
				<div class="col-lg-6 col-md-6 col-12">
					<!-- Single Service -->
					<div class="single-service">
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
	</div>
</section>
<!--/ End Services -->
@endsection