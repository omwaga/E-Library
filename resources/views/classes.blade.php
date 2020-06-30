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
                                    <li><a href="#">{{$education_level->name}}</a></li>
                                </ul>
                            </div>
                            <!-- Bread Title -->
                            <div class="bread-title"><h2>{{$education_level->name}}</h2></div>
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
								<h1><span>Creative</span><b>Service We Provide</b></h1><h4>Timely, topical collections focused around learning objectives</h4>
							</div>
							<div class="section-bottom">
								<div class="text-style-two">
									<p>Aliquam Sodales Justo Sit Amet Urna Auctor Scelerisquinterdum Leo Anet Tempus Enim Esent Egetis Hendrerit Vel Nibh Vitae Ornar Sem Velit Aliquam</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					@forelse($classes as $class)
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="{{asset('img/slider/slider6.jpg')}}" alt="#">
								<div class="icon-bg"><i class="fa fa-handshake-o"></i></div>
							</div>
							<div class="service-content">
								@php $url = Str::slug($class->name, '-'); @endphp
								<h4><a href="{{route('resource', $url)}}">{{$class->name}}</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-business.html"><i class="fa fa-arrow-circle-o-right"></i>View Service</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					@empty
					@endforelse
				</div>
			</div>
		</section>
		<!--/ End Services -->
		@endsection