<!DOCTYPE html>
<html lang="en">

<head>
   <!--
    Basic Page Needs
    ==================================================
    -->
   <meta charset="utf-8">
   <title> Investment and advancement consulting in Bangladesh </title>
   <!--
    Mobile Specific Metas
    ==================================================
    -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <meta name="csrf-token" content="{{ csrf_token() }}"> 
   <!-- CSS
   ================================================== -->
   <!-- Bootstrap -->
   <link rel="stylesheet" href="{{ asset('FrontEndResource\css\bootstrap.min.css') }}  ">
   <!-- FontAwesome -->
   <link rel="stylesheet" href="{{ asset('FrontEndResource\css\font-awesome.min.css') }} ">
   <!-- Morris CSS -->
   <link rel="stylesheet" href="{{ asset('FrontEndResource\css\morris.css') }} ">
   <!-- Icon font -->
   <link rel="stylesheet" href="{{ asset('FrontEndResource\css\icon-font.css') }} ">
   <!-- Animation -->
   <link rel="stylesheet" href="{{ asset('FrontEndResource\css\animate.css') }} ">
   <!-- Owl Carousel -->
   <link rel="stylesheet" href="{{ asset('FrontEndResource\css\owl.carousel.min.css') }} ">
   <!-- Owl Theme -->
   <link rel="stylesheet" href="{{ asset('FrontEndResource\css\owl.theme.default.min.css') }} ">
   <!-- Colorbox -->
   <link rel="stylesheet" href="{{ asset('FrontEndResource\css\colorbox.css') }} ">
   <!-- Template styles-->
   <link rel="stylesheet" href="{{ asset('FrontEndResource\css\style.css') }} ">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="{{ asset('FrontEndResource\css\responsive.css') }} ">

   <script> var base_url = "{{ url('/').'/' }}"; </script>
   <script src="https://unpkg.com/vue/dist/vue.js"></script>
   <script src="https://unpkg.com/vue-toastr-2/dist/vue-toastr-2.js"></script>
   <link rel="stylesheet" href="https://unpkg.com/vue-toastr-2/dist/vue-toastr-2.min.css">

</head>

<body>

   <div class="body-inner">

      <div class="site-top">
         <div class="topbar-transparent" id="top-bar">
            <div class="container">
               <div class="row">
                  <div class="col-lg-9 col-md-9 col-sm-12">
                     <ul class="top-info">
                        <li><span class="info-icon"><i class="icon icon-phone3"></i></span>
                           <div class="info-wrapper">
                              <p class="info-title">(+880) 1701296898</p>
                           </div>
                        </li>
                        <li><span class="info-icon"><i class="icon icon-envelope"></i></span>
                           <div class="info-wrapper">
                              <p class="info-title"> creativebjbdinvest@gmail.com </p>
                           </div>
                        </li>
                        <li class="last"><span class="info-icon"><i class="icon icon-map-marker2"></i></span>
                           <div class="info-wrapper">
                              <p class="info-title">Block-B, Bashundhara R/A</p>
                           </div>
                        </li>
                     </ul>
                     <!-- Ul end-->
                  </div>
                  <!--Top info end-->
                  <div class="col-lg-3 col-md-3 col-sm-12 text-lg-right text-md-center">
                     <ul class="top-social">
                        <li>
                           <a title="Facebook" href="#">
                              <span class="social-icon"><i class="fa fa-facebook"></i></span>
                           </a>
                                 <a title="Twitter" href="#">
                              <span class="social-icon"><i class="fa fa-twitter"></i></span>
                           </a>
                        </li>
                        <!-- List End -->
                     </ul>
                     <!-- Top Social End -->
                  </div>
                  <!--Col end-->
               </div>
               <!--Content row end-->
            </div>
            <!--Container end-->
         </div>
         <!--Top bar end-->

         <header class="header-trans-leftbox" id="header">
            <div class="container">
               <div class="header-wrapper clearfix">
                  <div class="site-nav-inner">
                     <nav class="navbar navbar-expand-lg">
                        <div class="navbar-brand navbar-header">
                           <div class="logo">
                              <a href="/">
                                 <img src="{{ asset('FrontEndResource\images\logo.PNG') }}" alt="">
                              </a>
                           </div>
                           <!-- logo end-->
                        </div>
                        <!-- Navbar brand end-->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span></button>
                        <!-- End of Navbar toggler-->
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                           <ul class="navbar-nav">
                              <li class="nav-item dropdown active">
                                 <a class="nav-link" href="/">Home</a>
                              </li>
                              <!-- Home li end-->
                              <li><a class="nav-link" href="{{ route('office-team') }}"> Our Team </a>
                              </li>
                               <li><a href="{{ route('gallery') }}"> Visitor Gallery </a></li>
                              <!-- Page li end-->
                              <li><a class="nav-link" href="{{ route('service') }}">Our Services</a>
                              </li>
                              <!-- News li end-->
                              <li>
                                 <a class="nav-link" href="{{ route('contact') }}" >
                                    Contact
                                 </a>
                              </li>
                              <!-- Contact li End -->
                           </ul>
                           <!--Nav ul end-->
                        </div>
                     </nav>
                     <!--Collapse end-->
                     <div class="nav-search"><span id="search"><i class="icon icon-search"></i></span></div>
                     <!-- Search end-->
                     <div class="search-block" style="display: none;">
                        <input class="form-control" type="text" placeholder="Search"><span class="search-close">×</span>
                     </div>
                     <!-- Site search end-->
                  </div>
                  <!--Site nav inner end-->
               </div>
               <!-- Header wrapper end-->
            </div>
            <!--Container end-->
         </header>
         <!--Header end-->
      </div>



       @yield('content')

      <!-- Footer start-->
      <footer class="footer" id="footer">
         <div class="footer-top">
            <div class="container">
               <div class="footer-top-bg row">
                  <div class="col-lg-4 footer-box"><i class="icon icon-map-marker2"></i>
                     <div class="footer-box-content">
                        <h3>Head Office</h3>
                        <p>House-257 (2nd floor), Road-01, Block-B, 
                             Bashundhara R/A, Dhaka - 1229, Bangladesh</p>
                     </div>
                  </div>
                  <!-- Box 1 end-->
                  <div class="col-lg-4 footer-box"><i class="icon icon-phone3"></i>
                     <div class="footer-box-content">
                        <h3>Call Us</h3>
                        <p>(+880) 1701296898</p>
                     </div>
                  </div>
                  <!-- Box 2 end-->
                  <div class="col-lg-4 footer-box"><i class="icon icon-envelope"></i>
                     <div class="footer-box-content">
                        <h3>Mail Us</h3>
                        <p>creativebjbdinvest@gmail.com</p>
                     </div>
                  </div>
                  <!-- Box 3 end-->
               </div>
               <!-- Content row end-->
            </div>
            <!-- Container end-->
         </div>
         <!-- Footer top end-->
         <div class="footer-main bg-overlay">
            <div class="container">
               <div class="gap-60"></div>
               <div class="row">
                  <div class="col-lg-4 col-md-12 footer-widget footer-about">
                     <div class="footer-logo">
                        <a href="index.html">
                           <img src="images\footer-logo.png" alt="">
                        </a>
                     </div>
                     <p>We are a awward winning multinational company. We believe in quality and standard worldwide.</p>
                     <div class="footer-social">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                     </div>
                     <!-- Footer social end-->
                  </div>
                  <!-- About us end-->
                  <div class="col-lg-4 col-md-12 footer-widget">
                     <h3 class="widget-title">Useful Links</h3>
                     <ul class="list-dash">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('service') }}">Our Services</a></li>
                        <li><a href="{{ route('office-team') }}">Our Team</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-4 col-md-12W footer-widget">
                     <h3 class="widget-title">Subscribe</h3>
                     <div class="newsletter-introtext">Don’t miss to subscribe to our new feeds, kindly fill the form below.</div>
                     <form class="newsletter-form" id="newsletter-form" action="#" method="post">
                        <div class="form-group">
                           <input class="form-control form-control-lg" id="newsletter-form-email" type="email" name="email" placeholder="Email Address" autocomplete="off">
                           <button class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                        </div>
                     </form>
                  </div>
               </div>
               <!-- Content row end-->
            </div>
            <!-- Container end-->
         </div>
         <!-- Footer Main-->
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-12">
                      <div class="copyright-info"><span>Copyright © 2019 Creativebj. All Rights Reserved.</span></div>
                  </div>
                  <div class="col-lg-6 col-md-12">
     
                  </div>
               </div>
               <!-- Row end-->
            </div>
            <!-- Container end-->
         </div>
         <!-- Copyright end-->
      </footer>
      <!-- Footer end-->

      <div class="back-to-top affix" id="back-to-top" data-spy="affix" data-offset-top="10">
         <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i>
            <!-- icon end-->
         </button>
         <!-- button end-->
      </div>
      <!-- End Back to Top-->

      <!--
      Javascript Files
      ==================================================
      -->
      <!-- initialize jQuery Library-->
      <script type="text/javascript" src="{{ asset('FrontEndResource\js\jquery.js') }}"></script>
      <!-- Popper-->
      <script type="text/javascript" src="{{ asset('FrontEndResource\js\popper.min.js') }}"></script>
      <!-- Bootstrap jQuery-->
      <script type="text/javascript" src="{{ asset('FrontEndResource\js\bootstrap.min.js') }}"></script>
      <!-- Owl Carousel-->
      <script type="text/javascript" src="{{ asset('FrontEndResource\js\owl.carousel.min.js') }}"></script>
      <!-- Counter-->
      <script type="text/javascript" src="{{ asset('FrontEndResource\js\jquery.counterup.min.js') }}"></script>
      <!-- Waypoints-->
      <script type="text/javascript" src="{{ asset('FrontEndResource\js\waypoints.min.js') }}"></script>
      <!-- Color box-->
      <script type="text/javascript" src="{{ asset('FrontEndResource\js\jquery.colorbox.js') }}"></script>
      <!-- Smoothscroll-->
      <script type="text/javascript" src="{{ asset('FrontEndResource\js\smoothscroll.js') }}"></script>
      <!-- Google Map API Key-->
      <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
      <!-- Google Map Plugin-->
      <script type="text/javascript" src="{{ asset('FrontEndResource\js\gmap3.js') }}"></script>
      <!-- For Chart-->
      <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
      <script type="text/javascript" src="{{ asset('FrontEndResource\js\morris.js') }}"></script>
      <script type="text/javascript">
         Morris.Area({
            element: 'graph',
            behaveLikeLine: true,
            lineColors: ['#e36217', '#2154cf', '#4da74d', '#afd8f8', '#edc240', '#cb4b4b', '#9440ed'],
            data: [{
                  x: '2012',
                  y: 9,
                  z: 7
               },
               {
                  x: '2013',
                  y: 6,
                  z: 8
               },
               {
                  x: '2014',
                  y: 6,
                  z: 5
               },
               {
                  x: '2015',
                  y: 8,
                  z: 10
               }
            ],
            xkey: 'x',
            ykeys: ['y', 'z'],
            labels: ['Y', 'Z']
         });
      </script>
      <!-- Template custom-->
      <script type="text/javascript" src="{{ asset('FrontEndResource\js\custom.js') }}"></script>
   </div>
   <!--Body Inner end-->
</body>

</html>