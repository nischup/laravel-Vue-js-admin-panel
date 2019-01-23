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
                        <p><a class="slider btn btn-primary" href="#">Our Services</a><a class="slider btn btn-border" href="#">Contact Us</a></p>
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
                        <p><a class="slider btn btn-primary" href="#">Our Services</a><a class="slider btn btn-border" href="#">Contact Us</a></p>
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
                        <p><a class="slider btn btn-primary" href="#">Our Services</a><a class="slider btn btn-border" href="#">Contact Us</a></p>
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
                  <div class="row facts-wrapper text-center">
                     <div class="col-md-6">
                        <div class="ts-facts"><span class="facts-icon"><i class="icon icon-chart2"></i></span>
                           <div class="ts-facts-content">
                              <h4 class="ts-facts-num"><span class="counterUp">85</span></h4>
                              <p class="facts-desc">Business Growth %</p>
                           </div>
                        </div>
                        <!-- Facts end-->
                     </div>
                     <!-- Col 1 end-->
                     <div class="col-md-6">
                        <div class="ts-facts"><span class="facts-icon"><i class="icon icon-invest"></i></span>
                           <div class="ts-facts-content">
                              <h4 class="ts-facts-num"><span class="counterUp">467</span></h4>
                              <p class="facts-desc">Successful Investment</p>
                           </div>
                        </div>
                        <!-- Facts end-->
                     </div>
                     <!-- Col 1 end-->
                  </div>
                  <!--Row End -->
                  <div class="gap-30"></div>
                  <div class="row facts-wrapper text-center">
                     <div class="col-md-6">
                        <div class="ts-facts facts-col"><span class="facts-icon"><i class="icon icon-money-1"></i></span>
                           <div class="ts-facts-content">
                              <h4 class="ts-facts-num"><span class="counterUp">2435</span></h4>
                              <p class="facts-desc">Cases Completed</p>
                           </div>
                        </div>
                        <!-- Facts end-->
                     </div>
                     <!-- Col 1 end-->
                     <div class="col-md-6">
                        <div class="ts-facts"><span class="facts-icon"><i class="icon icon-deal"></i></span>
                           <div class="ts-facts-content">
                              <h4 class="ts-facts-num"><span class="counterUp">139</span></h4>
                              <p class="facts-desc">Running Projects</p>
                           </div>
                        </div>
                        <!-- Facts end-->
                     </div>
                     <!-- Col 1 end-->
                  </div>
                  <!-- Row End -->
               </div>
               <!-- Content Row 2 end-->
            </div>
            <!-- Col end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- Fun fact end-->

      <section class="ts-featured-cases">
         <div class="container">
            <div class="section-title-vertical">
               <h2 class="section-title">Featured Cases</h2>
            </div>
            <!-- Title row end-->
            <div class="row">
               <div class="owl-carousel owl-theme featured-cases-slide" id="featured-cases-slide">
                  <div class="item">
                     <div class="featured-projects-content">
                        <div class="featured-projects-text float-left">
                           <h2 class="column-title"><span>Marketing Growth</span> Modern Woodman Ltd.</h2>
                           <p class="intro-desc">A business strategy is the means by which it sets out to achieve its desired ends. You have ideas,
                              goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like
                              you and make your dream come true.</p>
                           <p><a class="btn btn-primary" href="#"> Read More</a></p>
                        </div>
                        <div class="features-slider-img float-right">
                           <img class="img-fluid" src="images\slider-small\featured-slider1.jpg" alt="">
                        </div>
                     </div>
                  </div>
                  <!-- Item 1 end-->
                  <div class="item">
                     <div class="featured-projects-content">
                        <div class="featured-projects-text pull-left">
                           <h2 class="column-title"><span>Tax Planning</span>Alpha Century Software Inc.</h2>
                           <p class="intro-desc">A business strategy is the means by which it sets out to achieve its desired ends. You have ideas,
                              goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like
                              you and make your dream come true.</p>
                           <p><a class="btn btn-primary" href="#"> Read More</a></p>
                        </div>
                        <div class="features-slider-img pull-right">
                           <img src="images\slider-small\featured-slider2.jpg" alt="">
                        </div>
                     </div>
                  </div>
                  <!-- Item 2 end-->
                  <div class="item">
                     <div class="featured-projects-content">
                        <div class="featured-projects-text float-left">
                           <h2 class="column-title"><span>Business Loan</span>Spider Microsystem</h2>
                           <p class="intro-desc">A business strategy is the means by which it sets out to achieve its desired ends. You have ideas,
                              goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like
                              you and make your dream come true.</p>
                           <p><a class="btn btn-primary" href="#"> Read More</a></p>
                        </div>
                        <div class="features-slider-img float-right">
                           <img class="img-fluid" src="images\slider-small\featured-slider3.jpg" alt="">
                        </div>
                     </div>
                  </div>
                  <!-- Item 3 end-->
               </div>
               <!-- Featured Projects slider end-->
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- Featured projects end-->

      <section class="bg-overlay ts-chart">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 col-md-12">
                  <h2 class="column-title title-white"><span>Integrity</span> Thinking of Building</h2>
                  <p class="intro-desc">We are rethoric question ran over her cheek When she reached the first hills of the Italic Mountains, she
                     had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village
                     and the subline of her own road, the Line Lane.</p>
                  <p><a class="link-more color" href="#">Explore All Cases <i class="fa fa-long-arrow-right"></i></a></p>
               </div>
               <!-- col end-->
               <div class="col-lg-7 col-md-12">
                  <div id="graph"></div>
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
               <div class="col-lg-3 col-md-12">
                  <div class="ts-team-wrapper">
                     <div class="team-img-wrapper">
                        <img class="img-fluid" alt="" src="images\team\team1.jpg">
                     </div>
                     <div class="ts-team-content">
                        <h3 class="team-name">Denise Brewer</h3>
                        <p class="team-designation">Senior Project Manager</p>
                     </div>
                     <!-- Team content end-->
                     <div class="team-social-icons"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a><a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></div>
                     <!-- social-icons-->
                  </div>
                  <!-- Team wrapper 1 end-->
               </div>
               <!-- Col end-->
               <div class="col-lg-3 col-md-12">
                  <div class="ts-team-wrapper">
                     <div class="team-img-wrapper">
                        <img class="img-fluid" alt="" src="images\team\team2.jpg">
                     </div>
                     <div class="ts-team-content">
                        <h3 class="team-name">Patrick Ryan</h3>
                        <p class="team-designation">Senior Project Manager</p>
                     </div>
                     <!-- Team content end-->
                     <div class="team-social-icons"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a><a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></div>
                     <!-- social-icons-->
                  </div>
                  <!-- Team wrapper 1 end-->
               </div>
               <!-- Col end-->
               <div class="col-lg-3 col-md-12">
                  <div class="ts-team-wrapper">
                     <div class="team-img-wrapper">
                        <img class="img-fluid" alt="" src="images\team\team3.jpg">
                     </div>
                     <div class="ts-team-content">
                        <h3 class="team-name">Craig Robinson</h3>
                        <p class="team-designation">Senior Project Manager</p>
                     </div>
                     <!-- Team content end-->
                     <div class="team-social-icons"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a><a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></div>
                     <!-- social-icons-->
                  </div>
                  <!-- Team wrapper 1 end-->
               </div>
               <!-- Col end-->
               <div class="col-lg-3 col-md-12">
                  <div class="ts-team-wrapper">
                     <div class="team-img-wrapper">
                        <img class="img-fluid" alt="" src="images\team\team4.jpg">
                     </div>
                     <div class="ts-team-content">
                        <h3 class="team-name">Andrew Robinson</h3>
                        <p class="team-designation">Senior Project Manager</p>
                     </div>
                     <!-- Team content end-->
                     <div class="team-social-icons"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a><a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></div>
                     <!-- social-icons-->
                  </div>
                  <!-- Team wrapper 1 end-->
               </div>
               <!-- Col end-->
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

      <section class="news" id="news">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                  <h2 class="section-title"><span>Don't Miss</span>Our Latest News</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <div class="latest-post post-large">
                     <div class="latest-post-media">
                        <a class="latest-post-img" href="#">
                           <img class="img-fluid" src="{{ asset('FrontEndResource\images\news\news1.jpg') }} alt="img">
                        </a><a class="post-cat" href="#">News</a>
                        <div class="post-body"><span class="post-item-date">20 Nov, 2017</span>
                           <h4 class="post-title"><a href="#">Apple reveals its new Melbourne flagship store</a></h4><a class="btn btn-primary" href="#">Read More</a>
                        </div>
                        <!-- Post body end-->
                     </div>
                     <!-- Post media end-->
                  </div>
                  <!-- Latest post end-->
               </div>
               <!-- Col big news end-->
               <div class="col-lg-6">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="latest-post">
                           <div class="post-body"><a class="post-cat" href="#">News</a>
                              <h4 class="post-title"><a href="#">Bitcoin is the gag gift you should buy this holiday season</a></h4><span class="post-item-date">20 Nov, 2017</span>
                              <div class="post-text">
                                 <p>Earlier this year, the firm announced it had reached its goal of hiring.</p>
                                 <div class="text-right"><a href="#">Read More <i class="fa fa-long-arrow-right"> </i></a></div>
                              </div>
                           </div>
                        </div>
                        <!-- Latest post end-->
                     </div>
                     <!-- Col end-->
                     <div class="col-lg-6">
                        <div class="latest-post">
                           <div class="post-body"><a class="post-cat" href="#">News</a>
                              <h4 class="post-title"><a href="#">Uber is selling off its auto-leasing business</a></h4><span class="post-item-date">20 Nov, 2017</span>
                              <div class="post-text">
                                 <p>Earlier this year, the firm announced it had reached its goal of hiring.</p>
                                 <div class="text-right"><a href="#">Read More <i class="fa fa-long-arrow-right"> </i></a></div>
                              </div>
                           </div>
                        </div>
                        <!-- Latest post end-->
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- row end-->
               </div>
               <!-- Col small news end-->
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- News end-->

      {{-- ================== component script start --}}

      <script src="{{ asset('js/quote.js') }}"></script>

      {{-- ================== component script end --}}

@endsection