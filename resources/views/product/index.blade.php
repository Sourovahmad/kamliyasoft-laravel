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
            <h3 class="fs-4 fw-bolder mt-7 mb-4">Our Product That listed for sale</h3>
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
                                  <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('images/dummyForProduct.jpg') }}" alt="">
                              </picture>
                                  <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                      <button class="btn btn-quick-add">   <iconify-icon icon="material-symbols:shopping-cart"></iconify-icon> Buy</button>
                                  </div>
                          </div>
                          <div class="card-body px-0">
                              <a class="text-decoration-none link-cover" href="{{ route('contact') }}">Software For Management</a>
                              <small class="text-muted d-block">With Source code</small>
                                      <p class="mt-2 mb-0 small"><s class="text-muted">$150</s> <span class="text-danger">$49</span></p>
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
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('images/dummyForProduct.jpg') }}" alt="">
                                </picture>
                                    <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                        <button class="btn btn-quick-add"> <iconify-icon icon="material-symbols:shopping-cart"></iconify-icon> Buy</button>
                                    </div>
                            </div>
                            <div class="card-body px-0">
                                <a class="text-decoration-none link-cover" href="{{ route('contact') }}">Software For Management</a>
                                <small class="text-muted d-block">With Source code</small>
                                        <p class="mt-2 mb-0 small"><s class="text-muted">$150</s> <span class="text-danger">$49</span></p>
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
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('images/dummyForProduct.jpg') }}" alt="">
                                </picture>
                                    <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                        <button class="btn btn-quick-add"><iconify-icon icon="material-symbols:shopping-cart"></iconify-icon> Buy</button>
                                    </div>
                            </div>
                            <div class="card-body px-0">
                                <a class="text-decoration-none link-cover" href="{{ route('contact') }}">Software For Management</a>
                                <small class="text-muted d-block">With Source code</small>
                                        <p class="mt-2 mb-0 small"><s class="text-muted">$150</s> <span class="text-danger">$49</span></p>
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