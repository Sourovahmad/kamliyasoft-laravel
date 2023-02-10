@extends('layouts.app')

@section('customCss')

<link rel="stylesheet" href="{{ asset('product/css/vendor.css') }}">
<link rel="stylesheet" href="{{ asset('product/css/theme.css') }}">


<link rel="preconnect" href="https://fonts.gstatic.com">

<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">



<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
  rel="stylesheet">

<noscript>
    <style>
      /**
          * Reinstate scrolling for non-JS clients
          */
      .simplebar-content-wrapper {
        overflow: auto;
      }
    </style>
  </noscript>


@endsection


  @section('content')
    <section class="mt-4">


      <div class="container-fluid mt-5">


    <div class="row g-0">

        <!-- Related Products-->
        <div class="col-12" data-aos="fade-up" style="margin-top: 85px">
            <h3 class="fs-4 fw-bolder mt-7 mb-4">Game</h3>
            <!-- Swiper Latest -->
            <div class="swiper-container" data-swiper data-options='{
                "spaceBetween": 10,
                "loop": true,
                "autoplay": {
                  "delay": 5000,
                  "disableOnInteraction": false
                },
                "navigation": {
                  "nextEl": ".swiper-next",
                  "prevEl": ".swiper-prev"
                },   
                "breakpoints": {
                  "600": {
                    "slidesPerView": 2
                  },
                  "1024": {
                    "slidesPerView": 3
                  },       
                  "1400": {
                    "slidesPerView": 4
                  }
                }
              }'>
              <div class="swiper-wrapper">


                    <div class="swiper-slide">

                      <!-- Card Product-->
                      <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                          <div class="card-img position-relative">
                              <div class="card-badges">
                                      {{-- <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span> --}}
                              </div>
                              <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"></span>
                              <picture class="position-relative overflow-hidden d-block bg-light">
                                  <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('images/football.jpg') }}" alt="">
                              </picture>
                                  <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                      <button class="btn btn-quick-add">   <iconify-icon icon="material-symbols:shopping-cart"></iconify-icon> Estimate</button>
                                  </div>
                          </div>
                          <div class="card-body px-0">
                              <a class="text-decoration-none link-cover" href="{{ route('estimate-projet') }}">Football  game with Animation</a>
                     
                          </div>
                      </div>
                      <!--/ Card Product-->

                    </div>



                    <div class="swiper-slide">

                        <!-- Card Product-->
                        <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                            <div class="card-img position-relative">
                                <div class="card-badges">
                                        {{-- <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span> --}}
                                </div>
                                <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"></span>
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('images/cricket.jpg') }}" alt="">
                                </picture>
                                    <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                        <button class="btn btn-quick-add"> <iconify-icon icon="material-symbols:shopping-cart"></iconify-icon> Estimate</button>
                                    </div>
                            </div>
                            <div class="card-body px-0">
                                <a class="text-decoration-none link-cover" href="{{ route('estimate-projet') }}">Cricket game</a>
                                
                            </div>
                        </div>
                        <!--/ Card Product-->
  
                      </div>



                      <div class="swiper-slide">

                        <!-- Card Product-->
                        <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                            <div class="card-img position-relative">
                                <div class="card-badges">
                                        {{-- <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span> --}}
                                </div>
                                <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted">  </span>
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('images/poker.jpg') }}" alt="">
                                </picture>
                                    <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                        <button class="btn btn-quick-add"><iconify-icon icon="material-symbols:shopping-cart"></iconify-icon> Estimate</button>
                                    </div>
                            </div>
                            <div class="card-body px-0">
                                <a class="text-decoration-none link-cover" href="{{ route('estimate-projet') }}">Poker Game</a>
                            </div>
                        </div>
                        <!--/ Card Product-->
  
                      </div>





                      
                      <div class="swiper-slide">

                        <!-- Card Product-->
                        <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                            <div class="card-img position-relative">
                                <div class="card-badges">
                                        {{-- <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span> --}}
                                </div>
                                <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted">  </span>
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('images/fantasy.jpg') }}" alt="">
                                </picture>
                                    <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                        <button class="btn btn-quick-add"><iconify-icon icon="material-symbols:shopping-cart"></iconify-icon> Estimate</button>
                                    </div>
                            </div>
                            <div class="card-body px-0">
                                <a class="text-decoration-none link-cover" href="{{ route('estimate-projet') }}">Fantasy game</a>
                            </div>
                        </div>
                        <!--/ Card Product-->
  
                      </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
              </div>
            
              <!-- Add Arrows -->
              <div
                class="swiper-prev top-50  start-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 start-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                <iconify-icon icon="material-symbols:arrow-back-ios"></iconify-icon>
            
            </div>
              <div
                class="swiper-next top-50 end-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 end-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                <iconify-icon icon="material-symbols:arrow-back-ios" rotate="180deg"></iconify-icon>
            
            
            </div>
            <!-- / Swiper Latest-->                </div>
        <!-- / Related Products-->

        <!-- Reviews-->
        <!-- / Reviews-->
    </div>




    {{-- Second List --}}



<div class="col-12" data-aos="fade-up" style="margin-top: 85px">
            <h3 class="fs-4 fw-bolder mt-7 mb-4">website or web application</h3>
            <!-- Swiper Latest -->
            <div class="swiper-container" data-swiper data-options='{
                "spaceBetween": 10,
                "loop": true,
                "autoplay": {
                  "delay": 5000,
                  "disableOnInteraction": false
                },
                "navigation": {
                  "nextEl": ".swiper-next",
                  "prevEl": ".swiper-prev"
                },   
                "breakpoints": {
                  "600": {
                    "slidesPerView": 2
                  },
                  "1024": {
                    "slidesPerView": 3
                  },       
                  "1400": {
                    "slidesPerView": 4
                  }
                }
              }'>
              <div class="swiper-wrapper">


                    <div class="swiper-slide">

                      <!-- Card Product-->
                      <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                          <div class="card-img position-relative">
                              <div class="card-badges">
                                      {{-- <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span> --}}
                              </div>
                              <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"></span>
                              <picture class="position-relative overflow-hidden d-block bg-light">
                                  <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('images/onlineshop.jpg') }}" alt="">
                              </picture>
                                  <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                      <button class="btn btn-quick-add">   <iconify-icon icon="material-symbols:shopping-cart"></iconify-icon> Estimate</button>
                                  </div>
                          </div>
                          <div class="card-body px-0">
                              <a class="text-decoration-none link-cover" href="{{ route('estimate-projet') }}">online shop website</a>
                       
                          </div>
                      </div>
                      <!--/ Card Product-->

                    </div>



                    <div class="swiper-slide">

                        <!-- Card Product-->
                        <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                            <div class="card-img position-relative">
                                <div class="card-badges">
                                        {{-- <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span> --}}
                                </div>
                                <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"></span>
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('images/personal.jpg') }}" alt="">
                                </picture>
                                    <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                        <button class="btn btn-quick-add"> <iconify-icon icon="material-symbols:shopping-cart"></iconify-icon> Estimate</button>
                                    </div>
                            </div>
                            <div class="card-body px-0">
                                <a class="text-decoration-none link-cover" href="{{ route('estimate-projet') }}">Personal website</a>
                                
                            </div>
                        </div>
                        <!--/ Card Product-->
  
                      </div>



                      <div class="swiper-slide">

                        <!-- Card Product-->
                        <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                            <div class="card-img position-relative">
                                <div class="card-badges">
                                        {{-- <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span> --}}
                                </div>
                                <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted">  </span>
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('images/university.jpg') }}" alt="">
                                </picture>
                                    <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                        <button class="btn btn-quick-add"><iconify-icon icon="material-symbols:shopping-cart"></iconify-icon> Estimate</button>
                                    </div>
                            </div>
                            <div class="card-body px-0">
                                <a class="text-decoration-none link-cover" href="{{ route('estimate-projet') }}">university website</a>
                            </div>
                        </div>
                        <!--/ Card Product-->
  
                      </div>




                      <div class="swiper-slide">

                        <!-- Card Product-->
                        <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                            <div class="card-img position-relative">
                                <div class="card-badges">
                                        {{-- <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span> --}}
                                </div>
                                <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted">  </span>
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('images/ecommerceonlineshop.jpg') }}" alt="">
                                </picture>
                                    <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                        <button class="btn btn-quick-add"><iconify-icon icon="material-symbols:shopping-cart"></iconify-icon> Estimate</button>
                                    </div>
                            </div>
                            <div class="card-body px-0">
                                <a class="text-decoration-none link-cover" href="{{ route('estimate-projet') }}">E-commerce and online shop website</a>
                            </div>
                        </div>
                        <!--/ Card Product-->
  
                      </div>
                    
                    
                    
                    
                    
                    
                    
                    
              </div>
            
              <!-- Add Arrows -->
              <div
                class="swiper-prev top-50  start-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 start-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                <iconify-icon icon="material-symbols:arrow-back-ios"></iconify-icon>
            
            </div>
              <div
                class="swiper-next top-50 end-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 end-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                <iconify-icon icon="material-symbols:arrow-back-ios" rotate="180deg"></iconify-icon>
            
            
            </div>
            <!-- / Swiper Latest-->                </div>
        <!-- / Related Products-->

        <!-- Reviews-->
        <!-- / Reviews-->
    </div>


     {{-- Third List --}}



     <div class="col-12" data-aos="fade-up" style="margin-top: 85px">
      <h3 class="fs-4 fw-bolder mt-7 mb-4">Mobile apps, 
      </h3>
      <!-- Swiper Latest -->
      <div class="swiper-container" data-swiper data-options='{
          "spaceBetween": 10,
          "loop": true,
          "autoplay": {
            "delay": 5000,
            "disableOnInteraction": false
          },
          "navigation": {
            "nextEl": ".swiper-next",
            "prevEl": ".swiper-prev"
          },   
          "breakpoints": {
            "600": {
              "slidesPerView": 2
            },
            "1024": {
              "slidesPerView": 3
            },       
            "1400": {
              "slidesPerView": 4
            }
          }
        }'>
        <div class="swiper-wrapper">


              <div class="swiper-slide">

                <!-- Card Product-->
                <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                    <div class="card-img position-relative">
                        <div class="card-badges">
                                {{-- <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span> --}}
                        </div>
                        <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"></span>
                        <picture class="position-relative overflow-hidden d-block bg-light">
                            <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('images/ecommerceapp.jpg') }}" alt="">
                        </picture>
                            <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                <button class="btn btn-quick-add">   <iconify-icon icon="material-symbols:shopping-cart"></iconify-icon> Estimate</button>
                            </div>
                    </div>
                    <div class="card-body px-0">
                        <a class="text-decoration-none link-cover" href="{{ route('estimate-projet') }}">eCommerce  App</a>
                       
                    </div>
                </div>
                <!--/ Card Product-->

              </div>



              <div class="swiper-slide">

                  <!-- Card Product-->
                  <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                      <div class="card-img position-relative">
                          <div class="card-badges">
                                  {{-- <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span> --}}
                          </div>
                          <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"></span>
                          <picture class="position-relative overflow-hidden d-block bg-light">
                              <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('images/onlineexam.jpg') }}" alt="">
                          </picture>
                              <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                  <button class="btn btn-quick-add"> <iconify-icon icon="material-symbols:shopping-cart"></iconify-icon> Estimate</button>
                              </div>
                      </div>
                      <div class="card-body px-0">
                          <a class="text-decoration-none link-cover" href="{{ route('estimate-projet') }}">Online Exam App</a>
                          
                      </div>
                  </div>
                  <!--/ Card Product-->

                </div>



                <div class="swiper-slide">

                  <!-- Card Product-->
                  <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                      <div class="card-img position-relative">
                          <div class="card-badges">
                                  {{-- <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span> --}}
                          </div>
                          <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted">  </span>
                          <picture class="position-relative overflow-hidden d-block bg-light">
                              <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('images/marketplace.jpg') }}" alt="">
                          </picture>
                              <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                  <button class="btn btn-quick-add"><iconify-icon icon="material-symbols:shopping-cart"></iconify-icon> Estimate</button>
                              </div>
                      </div>
                      <div class="card-body px-0">
                          <a class="text-decoration-none link-cover" href="{{ route('estimate-projet') }}">Marketplace App</a>
                          
                      </div>
                  </div>
                  <!--/ Card Product-->

                </div>




                

                <div class="swiper-slide">

                  <!-- Card Product-->
                  <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                      <div class="card-img position-relative">
                          <div class="card-badges">
                                  {{-- <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span> --}}
                          </div>
                          <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted">  </span>
                          <picture class="position-relative overflow-hidden d-block bg-light">
                              <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('images/social.jpg') }}" alt="">
                          </picture>
                              <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                  <button class="btn btn-quick-add"><iconify-icon icon="material-symbols:shopping-cart"></iconify-icon> Estimate</button>
                              </div>
                      </div>
                      <div class="card-body px-0">
                          <a class="text-decoration-none link-cover" href="{{ route('estimate-projet') }}">Social Apps</a>
                          
                      </div>
                  </div>
                  <!--/ Card Product-->

                </div>
              
              
              
              
              
              
              
              
        </div>
      
        <!-- Add Arrows -->
        <div
          class="swiper-prev top-50  start-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 start-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
          <iconify-icon icon="material-symbols:arrow-back-ios"></iconify-icon>
      
      </div>
        <div
          class="swiper-next top-50 end-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 end-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
          <iconify-icon icon="material-symbols:arrow-back-ios" rotate="180deg"></iconify-icon>
      
      
      </div>
      <!-- / Swiper Latest-->                </div>
  <!-- / Related Products-->

  <!-- Reviews-->
  @include('frontend.component.testomonial')
  <!-- / Reviews-->
</div>



</div>

<!-- /Page Content -->
</section>




@section('customJs')

<script src="{{ asset('product/js/vendor.js') }}"></script>
<script src="{{ asset('product/js/theme.js') }}"></script>


@endsection


@endsection