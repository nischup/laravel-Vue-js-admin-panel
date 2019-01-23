@extends('frontend-main.layout')
   @section('content')

      <div class="banner-area" id="banner-area" style="background-image:url({{ asset('FrontEndResource/images/banner/banner1.jpg') }});">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">Our Pricing</h1>
                     <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Pricing Table</li>
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
         <div class="pricing-box-default">
            <div class="container">
               <div class="row text-center">
                  <div class="col-md-12">
                     <h2 class="section-title"><span>Buy Plan</span>Our Pricing</h2>
                  </div>
                  <!-- Col End -->
               </div>
               <!-- Row End -->
               <div class="row mrt-40">
                  <div class="col-lg-4">
                     <div class="plan text-center">
                        <div class="price-icon-wrapper">
                           <i class=""></i>
                        </div>
                        <h2 class="plan-name">Starter Plan</h2>
                        <h3 class="plan-price">
                           <sup class="currency">$</sup>
                           <strong>49.99</strong>
                           <sub>/mo</sub>
                        </h3>
                        <ul class="list-unstyled">
                           <li>Invoices/Estimates</li>
                           <li>Online Payments</li>
                           <li>Projects and Time Sheet</li>
                           <li>Recurring Transations</li>
                           <li>Client Portal</li>
                        </ul>
                        <div class="text-center ">
                           <a target="_self" href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="plan featured text-center">
                        <div class="price-icon-wrapper">
                           <i class=""></i>
                        </div>
                        <h2 class="plan-name">Starter Plan</h2>
                        <h3 class="plan-price">
                           <sup class="currency">$</sup>
                           <strong>69.99</strong>
                           <sub>/mo</sub>
                        </h3>
                        <ul class="list-unstyled">
                           <li>Invoices/Estimates</li>
                           <li>Online Payments</li>
                           <li>Projects and Time Sheet</li>
                           <li>Recurring Transations</li>
                           <li>Client Portal</li>
                        </ul>
                        <div class="text-center ">
                           <a target="_self" href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="plan text-center plan-last">
                        <div class="price-icon-wrapper">
                           <i class=""></i>
                        </div>
                        <h2 class="plan-name">Starter Plan</h2>
                        <h3 class="plan-price">
                           <sup class="currency">$</sup>
                           <strong>99.99</strong>
                           <sub>/mo</sub>
                        </h3>
                        <ul class="list-unstyled">
                           <li>Invoices/Estimates</li>
                           <li>Online Payments</li>
                           <li>Projects and Time Sheet</li>
                           <li>Recurring Transations</li>
                           <li>Client Portal</li>
                        </ul>
                        <div class="text-center ">
                           <a target="_self" href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container End -->
         </div>

         <div class="ts-price-box solid-bg">
            <div class="container">
               <div class="row text-center">
                  <div class="col-md-12">
                     <h2 class="section-title"><span>Buy Plan</span>Our Pricing</h2>
                  </div>
                  <!-- Col End -->
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="pricing-boxed">
                        <div class="single-price-box">
                           <div class="pricing-plan">
                              <div class="pricing-header border-left">
                                 <h2 class="plan-name">Starter Plan</h2>
                                 <h3 class="plan-price">
                                    <sup class="currency">$</sup>
                                    <strong>49.99</strong>
                                    <sub>/mo</sub>
                                 </h3>
                              </div>
                              <ul class="list-unstyled">
                                 <li>Invoices/Estimates</li>
                                 <li>Online Payments</li>
                                 <li>Projects and Time Sheet</li>
                                 <li>Recurring Transations</li>
                                 <li>Client Portal</li>
                              </ul>
                              <div>
                                 <a target="_self" href="#" class="btn btn-primary">Buy Now</a>
                              </div>
                           </div>
                        </div>
                        <div class="single-price-box featured">
                           <div class="pricing-plan">
                              <div class="pricing-header">
                                 <h2 class="plan-name">
                                    Basic Plan
                                 </h2>
                                 <h3 class="plan-price">
                                    <sup class="currency">$</sup>
                                    <strong>69.99</strong>
                                    <sub>/mo</sub>
                                 </h3>
                              </div>
                              <ul class="list-unstyled">
                                 <li>Invoices/Estimates</li>
                                 <li>Online Payments</li>
                                 <li>Projects and Time Sheet</li>
                                 <li>Recurring Transations</li>
                                 <li>Client Portal</li>
                              </ul>
                              <div>
                                 <a target="_self" href="#" class="btn btn-primary">Buy Now</a>
                              </div>
                           </div>
                        </div>
                        <div class="single-price-box">
                           <div class="pricing-plan">
                              <div class="pricing-header border-right">
                                 <h2 class="plan-name">Advanced Plan</h2>
                                 <h3 class="plan-price">
                                    <sup class="currency">$</sup>
                                    <strong>99.99</strong>
                                    <sub>/mo</sub>
                                 </h3>
                              </div>
                              <ul class="list-unstyled">
                                 <li>Invoices/Estimates</li>
                                 <li>Online Payments</li>
                                 <li>Projects and Time Sheet</li>
                                 <li>Recurring Transations</li>
                                 <li>Client Portal</li>
                              </ul>
                              <div>
                                 <a target="_self" href="#" class="btn btn-primary">Buy Now</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- main Container End -->

      <div class="gap-40"></div>
@endsection