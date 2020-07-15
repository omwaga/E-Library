<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content='pavilan'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Tag  -->
    <title>Bizwheel - Multipurpose Business & Digital Agency Html5 Template</title>

    <!-- Favicon -->
    <link rel="icon" type="image/favicon.png" href="{{asset('img/favicon.png')}}">

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bizwheel Plugins CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/cubeportfolio.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl-carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">

    <!-- Bizwheel Stylesheet -->  
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        
    </head>
    <body id="bg">

        <!-- Boxed Layout -->
        <div id="page" class="site boxed-layout"> 

            <!-- Preloader -->
            <div class="preeloader">
                <div class="preloader-spinner"></div>
            </div>
            <!--/ End Preloader -->

            <!-- Header -->
            <header class="header">
                <!-- Topbar -->
                <div class="topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <!-- Top Contact -->
                                <div class="top-contact">
                                    <div class="single-contact"><i class="fa fa-phone"></i>Phone: +(600) 125-4985-214</div> 
                                    <div class="single-contact"><i class="fa fa-envelope-open"></i>Email: info@yoursite.com</div>   
                                    <div class="single-contact"><i class="fa fa-clock-o"></i>Opening: 08AM - 09PM</div> 
                                </div>
                                <!-- End Top Contact -->
                            </div>  
                            <div class="col-lg-4 col-12">
                                <div class="topbar-right">
                                    <!-- Social Icons -->
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>                                                           
                                    <div class="button">
                                        <a href="#" class="bizwheel-btn">Institutional Program</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Topbar -->
                <!-- Middle Header -->
                <div class="middle-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="middle-inner">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-12">
                                            <!-- Logo -->
                                            <div class="logo">
                                                <!-- Image Logo -->
                                                <div class="img-logo">
                                                    <a href="/">
                                                        <img src="img/logo.png" alt="#">
                                                    </a>
                                                </div>
                                            </div>                              
                                            <div class="mobile-nav"></div>
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-12">
                                            <div class="menu-area">
                                                <!-- Main Menu -->
                                                <nav class="navbar navbar-expand-lg">
                                                    <div class="navbar-collapse">   
                                                        <div class="nav-inner"> 
                                                            <div class="menu-home-menu-container">
                                                                <!-- Naviagiton -->
                                                                <ul id="nav" class="nav main-menu menu navbar-nav">
                                                                    <li><a href="/">Home</a></li>
                                                                    <li class="icon-active"><a href="#">Our Services</a>
                                                                        <ul class="sub-menu">
                                                                          @forelse($levels as $level)
                                                                          @php $url = Str::slug($level->name, '-'); @endphp
                                                                          <li><a href="{{route('classes', $url)}}">{{$level->name}}</a></li>
                                                                          @empty
                                                                          @endforelse
                                                                      </ul>
                                                                  </li>
                                                                  <li><a href="#">Learning Model</a></li>
                                                                  <li><a href="{{route('blog')}}">Blog</a></li>
                                                                  <li><a href="{{route('about')}}">About Us</a></li>
                                                                  <li><a href="{{route('contact')}}">Contact Us</a></li>
                                                              </ul>
                                                              <!--/ End Naviagiton -->
                                                          </div>
                                                      </div>
                                                  </div>
                                              </nav>
                                              <!--/ End Main Menu --> 
                                              <!-- Right Bar -->
                                              <div class="right-bar">
                                                <!-- Search Bar -->
                                                <ul class="right-nav">
                                                    <li class="top-search"><a href="#0"><i class="fa fa-search"></i></a></li>
                                                    <li class="bar"><a class="fa fa-bars"></a></li>
                                                </ul>
                                                <!--/ End Search Bar -->
                                                <!-- Search Form -->
                                                <div class="search-top">
                                                    <form action="#" class="search-form" method="get">
                                                        <input type="text" name="s" value="" placeholder="Search here"/>
                                                        <button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
                                                    </form>
                                                </div>
                                                <!--/ End Search Form -->
                                            </div>  
                                            <!--/ End Right Bar -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Middle Header -->
            <!-- Sidebar Popup -->
            <div class="sidebar-popup">
                <div class="cross">
                    <a class="btn"><i class="fa fa-close"></i></a>
                </div>
                <div class="single-content">
                    <h4>About Bizwheel</h4>
                    <p>The main component of a healthy environment for self esteem is that it needs be nurturing. It should provide unconditional warmth.</p>
                    <!-- Social Icons -->
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="single-content">
                    <h4>Important Links</h4>   
                    <ul class="links">
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Pricing Plan</a></li>
                        <li><a href="#">Blog & News</a></li>
                        <li><a href="{{route('contact')}}">Contact us</a></li>
                    </ul>
                </div>  
            </div>
            <!--/ Sidebar Popup --> 
        </header>
        <!--/ End Header -->

        <!-- Hero Slider -->
        <section class="hero-slider style1">
            <div class="home-slider">
                <!-- Single Slider -->
                <div class="single-slider" style="background-image:url('img/slider/slider1.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-8 col-12">
                                <div class="welcome-text"> 
                                    <div class="hero-text"> 
                                        <h4> Results guaranteed!</h4>
                                        <h1>Want the best results in your exams?</h1>
                                        <div class="p-text">
                                            <p>Learn from the best!
                                            Edutap is an online platform that helps you learn and get the best grades in your secondary school exams.</p>
                                        </div>
                                        <div class="button">
                                            <a href="{{route('register')}}" class="bizwheel-btn theme-1 effect">Get Started</a>
                                            <a href="#" class="bizwheel-btn theme-2 effect">View Our Resources</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Single Slider -->
                <!-- Single Slider -->
                <div class="single-slider" style="background-image:url('img/slider/slider3.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-8 col-12">
                                <div class="welcome-text"> 
                                    <div class="hero-text"> 
                                        <h4>Mentorship Programme</h4>
                                        <h1>Build Your WorldClass Brand with Bizwheel</h1>
                                        <div class="p-text">
                                            <p>Students are encouraged to participate in the Dawati mentorship program to interact with professionals who offer their guidance through the platform.</p>
                                        </div>
                                        <div class="button">
                                            <a href="#" class="bizwheel-btn theme-1 effect">Read our blog</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Single Slider -->
                <!-- Single Slider -->
                <div class="single-slider" style="background-image:url('img/slider/slider6.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-8 col-12">
                                <div class="welcome-text"> 
                                    <div class="hero-text"> 
                                        <h4>Our experties are waiting for you</h4>
                                        <h1>Learn At Your Own Pace</h1>
                                        <div class="p-text">
                                            <p>Login in whenever you need to and complete tasks, worksheets or modules at your own pace.</p>
                                        </div>
                                        <div class="button">
                                            <a href="#" class="bizwheel-btn theme-2 effect">Our Leaders</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Single Slider -->
            </div>
        </section>
        <!--/ End Hero Slider -->

        <!-- Features Area -->
        <section class="features-area section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Feature -->
                        <div class="single-feature">
                            <div class="icon-head"><i class="fa fa-podcast"></i></div>
                            <h4><a href="#">OUR AFFORDABLE
                            TUITION PROMISE</a></h4>
                            <p>Improve your grades and Pass exams. Demystify complex topics, learn at your own pace & improve your grades in no time</p>
                            <div class="button">
                                <a href="#" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
                            </div>
                        </div>
                        <!--/ End Single Feature -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Feature -->
                        <div class="single-feature">
                            <div class="icon-head"><i class="fa fa-podcast"></i></div>
                            <h4><a href="#">A DIFFERENT WAY
                            TO LEARN</a></h4>
                            <p>TAke Our Online Assesssements!<br>
                            Take tests and quizzes from our huge database of past papers</p>
                            <div class="button">
                                <a href="#" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
                            </div>
                        </div>
                        <!--/ End Single Feature -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Feature -->
                        <div class="single-feature active">
                            <div class="icon-head"><i class="fa fa-podcast"></i></div>
                            <h4><a href="#">Unlimited Downloads</a></h4>
                            <p>
                            For deeper learning and practice download e-books and exam papers from our resource library</p>
                            <div class="button">
                                <a href="#" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
                            </div>
                        </div>
                        <!--/ End Single Feature -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Feature -->
                        <div class="single-feature">
                            <div class="icon-head"><i class="fa fa-podcast"></i></div>
                            <h4><a href="#">Give them Wings!</a></h4>
                            <p>Our vision is to be the source
                                for student's learning on the internet
                            available from anywhere and without charge.</p>
                            <div class="button">
                                <a href="#" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
                            </div>
                        </div>
                        <!--/ End Single Feature -->
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Features Area -->

        <!-- Call To Action -->
        <section class="call-action overlay" style="background-image:url('https://via.placeholder.com/1500x300')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-12">
                        <div class="call-inner">
                            <h2>Your education starts here.</h2>
                            <p>Take the first step toward furthering your career by finding the program that’s right for you. With respected faculty, a flexible format, and knowledge that is immediately applicable, all of our programs are designed to help you reach the next level.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="button">
                            <a href="#" class="bizwheel-btn">GET STARTED!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Call to action -->

        <!-- Services -->
        <section class="services section-bg section-space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title style2 text-center">
                            <div class="section-top">
                                <h1><span>LEARN</span><b>Learning Resources</b></h1><h4>We provide quality service &amp; support..</h4>
                            </div>
                            <div class="section-bottom">
                                <div class="text-style-two">
                                    <p>Our learning content is rendered in presentation slides or video format. It is up to date and inline with the current 8-4-4 curriculum used in Kenyan schools.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @forelse($levels as $level)
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Single Service -->
                        <div class="single-service">
                            <div class="service-head">
                                <img src="{{asset('img/slider/slider1.jpg')}}" alt="#">
                                <div class="icon-bg"><i class="fa fa-handshake-o"></i></div>
                            </div>
                            <div class="service-content">
                                @php $url = Str::slug($level->name, '-'); @endphp
                                <h4><a href="{{route('classes', $url)}}">{{$level->name}}</a></h4>
                                <p>{!!$level->description!!}</p>
                                <a class="btn" href="#"><i class="fa fa-arrow-circle-o-right"></i>Browse Available Resources</a>
                            </div>
                        </div>
                        <!--/ End Single Service -->
                    </div>
                    @empty
                    <p>Nothing yet</p>
                    @endforelse
                </div>
            </div>
        </section>
        <!--/ End Services -->

        <!-- Portfolio -->
        <section class="portfolio section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                        <div class="section-title default text-center">
                            <div class="section-top">
                                <h1><span>Project</span><b>Explore Featured Resources</b></h1>
                            </div>
                            <div class="section-bottom">
                                <div class="text">
                                    <p>Interactive Learning
                                    Students and teachers ask questions and create relevant posts on the platform. They may then contribute to such posts and provide feedback on learning material to be used to improve on the same.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="portfolio-main">
                            <div id="portfolio-item" class="portfolio-item-active">
                                @forelse($classes as $class)
                                <div class="cbp-item business animation">
                                    <!-- Single Portfolio -->
                                    <div class="single-portfolio">
                                            @php $url = Str::slug($class->name, '-'); @endphp
                                        <div class="portfolio-head overlay">
                                            <img src="{{asset('img/graduation.png')}}" alt="#">
                                            <a class="more" href="{{route('resource', $url)}}"><i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="portfolio-content">
                                            <h4><a href="{{route('resource', $url)}}">{{$class->name}}</a></h4>
                                            <p>Business, Aniamtion</p>
                                        </div>
                                    </div>
                                    <!--/ End Single Portfolio -->
                                </div>
                                @empty
                                <p>Nothing yet!</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Portfolio -->

        <!-- Testimonials -->
        <section class="testimonials section-space" style="background-image:url('{{asset('img/bg1.jpg')}}')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-9 col-12">
                        <div class="section-title default text-left">
                            <div class="section-top">
                                <h1><b>Our Satisfied Clients</b></h1>
                            </div>
                            <div class="section-bottom">
                                <div class="text"><p>some of our great clients and their review</p></div>
                            </div>
                        </div>
                        <div class="testimonial-inner">
                            <div class="testimonial-slider">
                                <!-- Single Testimonial -->
                                <div class="single-slider">
                                    <ul class="star-list">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the <strong>industry's standard</strong> dummy text ever sinsimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                                    <!-- Client Info -->
                                    <div class="t-info">
                                        <div class="t-left">
                                            <div class="client-head"><img src="https://via.placeholder.com/70x70" alt="#"></div>
                                            <h2>Julias Dien <span>CEO / Creative IT</span></h2>
                                        </div>
                                        <div class="t-right">
                                            <div class="quote"><i class="fa fa-quote-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- / End Single Testimonial -->
                                <!-- Single Testimonial -->
                                <div class="single-slider">
                                    <ul class="star-list">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the <strong>industry's standard</strong> dummy text ever sinsimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                                    <!-- Client Info -->
                                    <div class="t-info">
                                        <div class="t-left">
                                            <div class="client-head"><img src="https://via.placeholder.com/70x70" alt="#"></div>
                                            <h2>Buman Panama <span>Founder, Jolace Group</span></h2>
                                        </div>
                                        <div class="t-right">
                                            <div class="quote"><i class="fa fa-quote-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- / End Single Testimonial -->
                                <!-- Single Testimonial -->
                                <div class="single-slider">
                                    <ul class="star-list">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the <strong>industry's standard</strong> dummy text ever sinsimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>    
                                    <!-- Client Info -->
                                    <div class="t-info">
                                        <div class="t-left">
                                            <div class="client-head"><img src="https://via.placeholder.com/70x70" alt="#"></div>
                                            <h2>Donald Bonam <span>Developer, Soft IT</span></h2>
                                        </div>
                                        <div class="t-right">
                                            <div class="quote"><i class="fa fa-quote-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- / End Single Testimonial -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Testimonials -->

        <!-- Latest Blog -->
        <section class="latest-blog section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                        <div class="section-title default text-center">
                            <div class="section-top">
                                <h1><span>Latest</span><b> Published</b></h1>
                            </div>
                            <div class="section-bottom">
                                <div class="text">
                                    <p>Lorem Ipsum Dolor Sit Amet, Conse Ctetur Adipiscing Elit, Sed Do Eiusmod Tempor Ares Incididunt Utlabore. Dolore Magna Ones Baliqua</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="blog-latest blog-latest-slider">
                            <div class="single-slider">
                                <!-- Single Blog -->
                                <div class="single-news ">
                                    <div class="news-head overlay">
                                        <span class="news-img" style="background-image:url('https://via.placeholder.com/700x530')"></span>
                                        <a href="#" class="bizwheel-btn theme-2">Read more</a>
                                    </div>
                                    <div class="news-body">
                                        <div class="news-content">
                                            <h3 class="news-title"><a href="#">We Provide you Best &amp; Creative Consulting Service</a></h3>
                                            <div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas feugiat mauris</p></div>
                                            <ul class="news-meta">
                                                <li class="date"><i class="fa fa-calendar"></i>April 2020</li>
                                                <li class="view"><i class="fa fa-comments"></i>0</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Single Blog -->
                            </div>
                            <div class="single-slider">
                                <!-- Single Blog -->
                                <div class="single-news ">
                                    <div class="news-head overlay">
                                        <span class="news-img" style="background-image:url('https://via.placeholder.com/700x530')"></span>
                                        <a href="#" class="bizwheel-btn theme-2">Read more</a>
                                    </div>
                                    <div class="news-body">
                                        <div class="news-content">
                                            <h3 class="news-title"><a href="#">We Provide you Best &amp; Creative Consulting Service</a></h3>
                                            <div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas feugiat mauris</p></div>
                                            <ul class="news-meta">
                                                <li class="date"><i class="fa fa-calendar"></i>April 2020</li>
                                                <li class="view"><i class="fa fa-comments"></i>0</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Single Blog -->
                            </div>
                            <div class="single-slider">
                                <!-- Single Blog -->
                                <div class="single-news ">
                                    <div class="news-head overlay">
                                        <span class="news-img" style="background-image:url('https://via.placeholder.com/700x530')"></span>
                                        <a href="#" class="bizwheel-btn theme-2">Read more</a>
                                    </div>
                                    <div class="news-body">
                                        <div class="news-content">
                                            <h3 class="news-title"><a href="#">We Provide you Best &amp; Creative Consulting Service</a></h3>
                                            <div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas feugiat mauris</p></div>
                                            <ul class="news-meta">
                                                <li class="date"><i class="fa fa-calendar"></i>April 2020</li>
                                                <li class="view"><i class="fa fa-comments"></i>0</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Single Blog -->
                            </div>
                            <div class="single-slider">
                                <!-- Single Blog -->
                                <div class="single-news ">
                                    <div class="news-head overlay">
                                        <span class="news-img" style="background-image:url('https://via.placeholder.com/700x530')"></span>
                                        <a href="#" class="bizwheel-btn theme-2">Read more</a>
                                    </div>
                                    <div class="news-body">
                                        <div class="news-content">
                                            <h3 class="news-title"><a href="#">We Provide you Best &amp; Creative Consulting Service</a></h3>
                                            <div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas feugiat mauris</p></div>
                                            <ul class="news-meta">
                                                <li class="date"><i class="fa fa-calendar"></i>April 2020</li>
                                                <li class="view"><i class="fa fa-comments"></i>0</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Single Blog -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Latest Blog -->

        <!-- Client Area -->
        <div class="clients section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="partner-slider">
                            <!-- Single client -->
                            <div class="single-slider">
                                <div class="single-client">
                                    <a href="#" target="_blank"><img src="img/client/client-1.png" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single client -->
                            <!-- Single client -->
                            <div class="single-slider">
                                <div class="single-client">
                                    <a href="#" target="_blank"><img src="img/client/client-2.png" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single client -->
                            <!-- Single client -->
                            <div class="single-slider">
                                <div class="single-client">
                                    <a href="#" target="_blank"><img src="img/client/client-3.png" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single client -->
                            <!-- Single client -->
                            <div class="single-slider">
                                <div class="single-client">
                                    <a href="#" target="_blank"><img src="img/client/client-4.png" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single client -->
                            <!-- Single client -->
                            <div class="single-slider">
                                <div class="single-client">
                                    <a href="#" target="_blank"><img src="img/client/client-5.png" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single client -->
                            <!-- Single client -->
                            <div class="single-slider">
                                <div class="single-client">
                                    <a href="#" target="_blank"><img src="img/client/client-6.png" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single client -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Client Area -->

        <!-- Footer -->
        <footer class="footer" style="background-image:url('img/map.png')">
            <!-- Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Footer About -->       
                            <div class="single-widget footer-about widget"> 
                                <div class="logo">
                                    <div class="img-logo">
                                        <a class="logo" href="/">
                                            <img class="img-responsive" src="img/logo2.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="footer-widget-about-description">
                                    <p>Beatae vitae dicta su explicabo nemo enim ipsam voluptatem quia voluptas sitBeatae vitae sitBeatae vitae dicta suntania..</p>
                                </div>  
                                <div class="social">
                                    <!-- Social Icons -->
                                    <ul class="social-icons">
                                        <li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a class="pinterest" href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a class="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="button"><a href="{{route('about')}}" class="bizwheel-btn">About Us</a></div>
                            </div>      
                            <!--/ End Footer About -->      
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Footer Links -->       
                            <div class="single-widget f-link widget">
                                <h3 class="widget-title">Company</h3>
                                <ul>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Pricing Plan</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>          
                            <!--/ End Footer Links -->          
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Footer News -->
                            <div class="single-widget footer-news widget">  
                                <h3 class="widget-title">Blog Page</h3>
                                <!-- Single News -->
                                <div class="single-f-news">
                                    <div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
                                    <div class="content">
                                        <p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 15, 2020</time></p>
                                        <h4 class="title"><a href="#">We Provide you Best &amp; Creative Consulting Service</a></h4>
                                    </div>
                                </div>
                                <!--/ End Single News -->
                                <!-- Single News -->
                                <div class="single-f-news">
                                    <div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
                                    <div class="content">
                                        <p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 10, 2020</time></p>
                                        <h4 class="title"><a href="#">We Provide you Best &amp; Creative Consulting Service</a></h4>
                                    </div>
                                </div>
                                <!--/ End Single News -->
                            </div>          
                            <!--/ End Footer News -->           
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">  
                            <!-- Footer Contact -->     
                            <div class="single-widget footer_contact widget">   
                                <h3 class="widget-title">Contact</h3>
                                <p>Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem</p>
                                <ul class="address-widget-list">
                                    <li class="footer-mobile-number"><i class="fa fa-phone"></i>+(600) 125-4985-214</li>
                                    <li class="footer-mobile-number"><i class="fa fa-envelope"></i>info@yoursite.com</li>
                                    <li class="footer-mobile-number"><i class="fa fa-map-marker"></i>House Building Uttara</li>
                                </ul>
                            </div>      
                            <!--/ End Footer Contact -->                        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                            <!-- Footer Newsletter -->
                            <div class="footer-newsletter">
                                <form action="#" method="post" class="newsletter-area">
                                    <input type="email" placeholder="Your email address">
                                    <button type="submit">Sign Up</button>
                                </form>
                            </div>
                            <!--/ End Footer Newsletter -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright -->
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright-content">
                                <!-- Copyright Text -->
                                <p>© Copyright <a href="#">Bizwheel</a>. Design &amp; Development By <a target="_blank" href="#">ThemeLamp</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Copyright -->
        </footer>

        <!-- Jquery JS -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/jquery-migrate-3.0.0.js')}}"></script>
        <!-- Popper JS -->
        <script src="{{asset('js/popper.min.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Modernizr JS -->
        <script src="{{asset('js/modernizr.min.js')}}"></script>
        <!-- ScrollUp JS -->
        <script src="{{asset('js/scrollup.js')}}"></script>
        <!-- FacnyBox JS -->
        <script src="{{asset('js/jquery-fancybox.min.js')}}"></script>
        <!-- Cube Portfolio JS -->
        <script src="{{asset('js/cubeportfolio.min.js')}}"></script>
        <!-- Slick Nav JS -->
        <script src="{{asset('js/slicknav.min.js')}}"></script>
        <!-- Slick Nav JS -->
        <script src="{{asset('js/slicknav.min.js')}}"></script>
        <!-- Slick Slider JS -->
        <script src="{{asset('js/owl-carousel.min.js')}}"></script>
        <!-- Easing JS -->
        <script src="{{asset('js/easing.js')}}"></script>
        <!-- Magnipic Popup JS -->
        <script src="{{asset('js/magnific-popup.min.js')}}"></script>
        <!-- Active JS -->
        <script src="{{asset('js/active.js')}}"></script>
    </body>
    </html>