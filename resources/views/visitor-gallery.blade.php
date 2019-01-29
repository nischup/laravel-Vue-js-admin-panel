@extends('frontend-main.layout')
   @section('content')

      <div class="banner-area" id="banner-area" style="background-image:url({{ asset('FrontEndResource/images/banner/banner1.jpg') }});">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title"> Visitor Gallery </h1>
                     <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li> Visitor </li>
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
            <div class="row">
               <div class="col-12">
                  <h3 class="addons-title"> Gallery Image </h3>
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
@endsection