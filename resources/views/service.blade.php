@extends('frontend-main.layout')
   @section('content')
      <div class="banner-area" id="banner-area" style="background-image:url({{ asset('FrontEndResource/images/banner/banner5.jpg') }});">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">Service</h1>
                     <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>service</li>
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
            <div class="heading">
               <h2 class="content-title"> What We Do </h2>
            </div>
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

         </div>
      </section>

@endsection