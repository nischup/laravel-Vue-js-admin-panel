@extends('frontend-main.layout')
   @section('content')

      <div class="banner-area" id="banner-area" style="background-image:url({{ asset('FrontEndResource/images/banner/banner2.jpg') }});">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">Contact Us</h1>
                     <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>contact</li>
                     </ol>
                  </div>
               </div>
               <!-- Col end-->
            </div>
            <!-- Row end-->
         </div>
         <!-- Container end-->
      </div>
      <!-- Banner area end-->
      <section class="main-container" id="main-container">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                  <h2 class="section-title"><span>Send Us Message</span>Contact Us</h2>
               </div>
            </div>
            <!-- Title row end-->
            <div class="row">
               <div class="col-lg-4">
                  <div class="ts-col-inner">
                     <div class="ts-contact-info box-border"><span class="ts-contact-icon float-left"><i class="icon icon-map-marker2"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title">Find Us</h3>
                           <p>
                             House-257 (2nd floor), Road-01, Block-B, 
                             Bashundhara R/A, Dhaka - 1229, Bangladesh
                           </p>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     <!-- End Contact info 1-->
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="ts-col-inner">
                     <div class="ts-contact-info box-border"><span class="ts-contact-icon float-left"><i class="icon icon-phone3"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title">Call Us</h3>
                           <p>(+880) 1701296898</p>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     <!-- End Contact info 1-->
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="ts-col-inner">
                     <div class="ts-contact-info box-border"><span class="ts-contact-icon float-left"><i class="icon icon-envelope"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title">Mail Us</h3>
                           <p>creativebjbdinvest@gmail.com</p>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     <!-- End Contact info 1-->
                  </div>
               </div>
            </div>
            <!-- Row End-->
         </div>
         <!-- container end-->
         <div class="gap-60"></div>
         <div class="ts-form" id="ts-form">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div id="contact_message">
                        <contact></contact>
                     </div>
                     <!-- Form end-->
                  </div>
                  <div class="col-lg-6">
                     <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12277.429781603332!2d90.41169779355941!3d23.814981916590142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64c82097045%3A0x31facf4b615e4df3!2sJapan+Taguchi+Construction+Co.+Ltd.+JTCCL!5e0!3m2!1sen!2sbd!4v1547322142249" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script src="{{ asset('js/contact.js') }}"></script>
@endsection