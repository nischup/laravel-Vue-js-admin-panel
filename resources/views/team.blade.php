@extends('frontend-main.layout')
   @section('content')

      <div class="banner-area" id="banner-area" style="background-image:url({{ asset('FrontEndResource/images/banner/banner1.jpg') }});">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">Who we are</h1>
                     <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>team</li>
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

      <section id="ts-team" class="ts-team">
         <div class="container">
            <div class="row text-center">
               <div class="col-lg-12">
                  <h2 class="section-title"><span>Our People</span>Best Team</h2>
               </div>
            </div>
            <!-- Title row end-->
            <div class="row">
               @foreach($team_photos as $data_team)
               <div class="col-lg-4">
                  <div class="ts-team-classic">
                     <div class="team-img-wrapper">
                        <img class="img-responsive" alt="" src="uploads/team/{{ $data_team->profile_pic }}">
                     </div>
                     <div class="ts-team-info team-list-border">
                        <h3 class="team-name">{{ $data_team->name }}</h3>
                        <p class="team-designation">{{ $data_team->designation }}</p>
                        <p>{!! $data_team->message !!}</p>
                        <div class="team-social-classic">
                           <i class="fa fa-envelope"></i> {{ $data_team->email }}
                        </div>
                        <!-- social-icons-->
                     </div>
                     <!-- Team info 1 end-->
                  </div>
                  <!-- Team classic 1 end-->
               </div>
               @endforeach
               <!-- Col end-->
            </div>
            <!-- Content row end-->
         </div>
      </section>

      <section class="call-to-action bg-pattern-3 solid-bg pab-120">
         <div class="container">
            <div class="row text-center">
               <div class="col-lg-12">
                  <h3 class="call-to-action-title">We Offer Financial Strategies & Superior Services</h3>
                  <p>
                     Our mission is to provide quality guidance, build relationships of
                     <br> trust, and develop innovative solutions
                  </p><a class="btn btn-primary" href="">Get Free Quote</a>
               </div>
               <!-- Col end-->
            </div>
            <!-- Row end-->
         </div>
         <!-- container end-->
      </section>
@endsection