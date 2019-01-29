@extends('frontend-main.layout')
   @section('content')
         <div class="carousel slide" id="main-slide" data-ride="carousel">
         <!-- Indicators-->
         <ol class="carousel-indicators visible-lg visible-md">
            <li class="active" data-target="#main-slide" data-slide-to="0"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
         </ol>
         <!-- Indicators end-->
         <!-- Carousel inner-->
         <div class="carousel-inner">
            <div class="carousel-item active" style="background-image:url({{ asset('FrontEndResource/images/slider/bg1.jpg') }});">
               <div class="container">
                  <div class="slider-content text-left">
                     <div class="col-md-12">
                    <!--     <h2 class="slide-title title-light">Your future is created by</h2> -->
                        <h3 class="slide-sub-title"> Foreign Investment Consulting </h3>
                        <p class="slider-description lead">Nobody’s more committed to connecting you with the exceptional <br> top talents with the right fit
                           for your business than us.</p>
                        <p><a class="slider btn btn-primary" href="{{ route('service') }}">Our Services</a><a class="slider btn btn-border" href="{{ route('contact') }}">Contact Us</a></p>
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 1 end-->
            <div class="carousel-item" style="background-image:url({{ asset('FrontEndResource/images/slider/bg2.jpg') }});">
               <div class="container">
                  <div class="slider-content text-center">
                     <div class="col-md-12">
                        <h3 class="slide-sub-title">We provide solutions to<br>grow your business</h3>
                        <p><a class="slider btn btn-primary" href="{{ route('service') }}">Our Services</a><a class="slider btn btn-border" href="{{ route('contact') }}">Contact Us</a></p>
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 1 end-->
            <div class="carousel-item" style="background-image:url({{ asset('FrontEndResource/images/slider/bg4.jpg') }});">
               <div class="container">
                  <div class="slider-content text-right">
                     <div class="col-md-12">
                        <h2 class="slide-title title-light">Your future is created by</h2>
                        <h3 class="slide-sub-title">We care about your Business</h3>
                        <p class="slider-description lead">Nobody’s more committed to connecting you with the exceptional <br> top talents with the right fit
                           for your business than us.</p>
                        <p><a class="slider btn btn-primary" href="{{ route('service') }}">Our Services</a><a class="slider btn btn-border" href="{{ route('contact') }}">Contact Us</a></p>
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 1 end-->
         </div>
         <!-- Carousel inner end-->
         <!-- Controllers--><a class="left carousel-control carousel-control-prev" href="#main-slide" data-slide="prev"><span><i class="fa fa-angle-left"></i></span></a>
         <a class="right carousel-control carousel-control-next" href="#main-slide" data-slide="next"><span><i class="fa fa-angle-right"></i></span></a>
      </div>
      <!-- Carousel end-->

      <section class="ts-services bg-pattern-2" id="ts-services">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                  <h2 class="section-title"><span>Our Services</span>What We Do</h2>
               </div>  
            </div>
            <!-- Title row end-->
           <div class="row">
               @foreach($services as $service)

               <div class="col-lg-6">
                  <div class="service-content">
                     <div class="text-block mrb-40">
                        <blockquote class="light">
                           <h4>{{ $service->name }}</h4>
                           <p>{!! $service->description !!}</p>
                        </blockquote>
                     </div>
                  </div>
               </div>
               
               @endforeach

            </div> 
         </div>
         <!-- Container end-->
      </section>

      <section class="ts-facts-area solid-bg no-padding" id="ts-facts-area">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6 col-md-12">
                  <div class="intro-video">
                     <img class="img-fluid" src="{{ asset('FrontEndResource\images\intro-video.jpg') }}" alt="">
                     <a class="popup" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&loop=1">
                        <div class="video-icon"><i class="icon icon-play"></i></div>
                     </a>
                  </div>
                  <!-- Intro video end-->
               </div>
               <!-- Col end-->
               <div class="col-lg-6 col-md-12 ts-padding text-lg-left text-center">
                  <h2 class="column-title"> 6 Years of Experience</h2>
                  <p class="intro-desc">We are rethoric question ran over her cheek When she reached the first hills of the Italic Mountains.</p>
                  <div class="gap-20"></div>
               </div>
               <!-- Content Row 2 end-->
            </div>
            <!-- Col end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- Fun fact end-->

      <section class="ts-facts-area solid-bg no-padding" id="ts-facts-area">
         <div class="container-fluid">
             <div class="gap-20"></div>
            <div class="row">
               <div class="col-lg-6 col-md-12">
                  <div class="intro-video">
                     <img class="img-fluid" src="{{ asset('FrontEndResource\images\image-kamal.png') }}" alt="">
                  </div>
                  <!-- Intro video end-->
               </div>
               <!-- Col end-->
               <div class="col-lg-6 col-md-12 ts-padding text-lg-left text-center">
                  <div class="featured-projects-text float-left">
                     <h2 class="column-title"><span></span> CEO & Senior Partner</h2>
                     <h2 class="column-title"><span>Hosein Karumaru</span></h2>
                     <p class="intro-desc">
                        Since its founding in 2011, he has served as a representative director and senior consultant, Creative Co., Ltd., engaged in numerous in-depth support and investment projects. Not only linguistic barriers but also business practices greatly differ between Japan and Bangladesh possess abundant business knowledge and network infrastructure. Our strengths are consulting that makes the most of these
                     </p>
                  </div>
               </div>
               <!-- Content Row 2 end-->
            </div>
            <!-- Col end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- Fun fact end-->

      <section class="bg-overlay ts-chart">
         <div class="container">
              <div class="gap-20"></div>
            <div class="row">
               <div class="col-lg-7 col-md-12">
                  <h2 class="column-title title-white"><span></span> About Company </h2>
                  <p class="intro-desc">On 2013 ... in Bangladesh one of the developing nation introduced a foreign investment based company named creative bj limited.</p>   
                  <p class="intro-desc">From the very beginning company has done a tremendous work on foreign investment silutions.currently our company had more then sixty(60) real estate company and more then 1000 company is in the queue for registration under creative bj limited.</p>
               </div>
               <!-- col end-->
               <div class="col-lg-5 col-md-12">
                  <h2 class="column-title title-white"><span></span> Our aim </h2>
                  <p class="intro-desc">The only goal and aim of creative bj is provide people bulk number of invest solutions,contributing on financial planning as to establish sole property business and joint business..</p> 

               </div>
               <!-- Col end-->
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- Section chart end-->

      <section class="ts-team">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                  <h2 class="section-title"><span>Our People</span>Best Team</h2>
               </div>
            </div>
            <!-- Title row end-->
            <div class="row">
               @foreach($team_photos as $data_team)
               <div class="col-lg-3 col-md-12">
                  <div class="ts-team-wrapper">
                     <div class="team-img-wrapper">
                        <img class="img-fluid" alt="" src="uploads/team/{{ $data_team->profile_pic }}">
                     </div>
                     <div class="ts-team-content">
                        <h3 class="team-name"> {{ $data_team->name }}</h3>
                        <p class="team-designation">{{ $data_team->designation }}</p>
                     </div>
                     <!-- Team content end-->
                     <!-- social-icons-->
                  </div>
                  <!-- Team wrapper 1 end-->
               </div>
               <!-- Col end-->
               @endforeach
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- Section Team end-->

      <section class="quote-area bg-overlay overlay-color" id="quote-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 qutoe-form-inner-left">
                  <div id="quote_message">
                     <quote></quote>
                  </div>
               </div>
               <!-- Col end-->
               <div class="col-lg-6 align-self-center">
                  <div class="owl-carousel owl-theme testimonial-slide owl-dark" id="testimonial-slide">
                     <div class="item">
                        <div class="quote-item quote-square"><span class="quote-text">The Bizipress loan has been  the most attractive loan products on the market, helping numerous businesses gain access to financing they would not be able to obtain conventionally and at extremely favorable rates and terms.</span>
                           <div class="quote-item-footer">
                              <img class="testimonial-thumb" src="images\clients\testimonial1.png" alt="testimonial">
                              <div class="quote-item-info">
                                 <p class="quote-author">Gabriel Denis</p><span class="quote-subtext">Chairman, OKT</span>
                              </div>
                           </div>
                        </div>
                        <!-- Quote item end-->
                     </div>
                     <!-- Item 1 end-->
                     <div class="item">
                        <div class="quote-item quote-square"><span class="quote-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi aliquip consequat.</span>
                           <div class="quote-item-footer">
                              <img class="testimonial-thumb" src="images\clients\testimonial2.png" alt="testimonial">
                              <div class="quote-item-info">
                                 <h3 class="quote-author">Weldon Cash</h3><span class="quote-subtext">CFO, First Choice</span>
                              </div>
                           </div>
                        </div>
                        <!-- Quote item end-->
                     </div>
                     <!-- Item 2 end-->
                     <div class="item">
                        <div class="quote-item quote-square"><span class="quote-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut commodo consequat.</span>
                           <div class="quote-item-footer">
                              <img class="testimonial-thumb" src="images\clients\testimonial3.png" alt="testimonial">
                              <div class="quote-item-info">
                                 <h3 class="quote-author">Minter Puchan</h3><span class="quote-subtext">Director, AKT</span>
                              </div>
                           </div>
                        </div>
                        <!-- Quote item end-->
                     </div>
                     <!-- Item 3 end-->
                  </div>
                  <!-- Testimonial carousel end-->
               </div>
               <!-- Col end-->
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- Quote area end-->

         <section class="main-container" id="main-container">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <h3 class="addons-title"> Recent Visitor Gallery </h3>
               </div>
               @foreach($gallery_photos as $data)
               <div class="col-lg-4 col-md-12">
                  <div class="ts-case-box">
                     <div class="ts-case-image-wrapper">
                        <img class="img-fluid" src="uploads/gallery/{{ $data->photo }}" alt="">
                        <div class="ts-case-content">
                           <h4 class="case-title">
                            {{ $data->title }}</h4>
                        </div>
                     </div>
                     <!-- Case Content end-->
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </section>
      <div class="gap-40"></div>

      {{-- ================== component script start --}}

      <script src="{{ asset('js/quote.js') }}"></script>

      {{-- ================== component script end --}}

@endsection