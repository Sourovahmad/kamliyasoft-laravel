

@extends('layouts.app')

@section('content') 




    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container"><br> <br>
                <h4 class="inner-text-title font-weight-bold mb-2">Our services</h4>
                
        </section>
    </div>
    <!-- //inner banner -->


        <!-- service section -->
        <section class="w3l-servicesblock py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6 about-right-faq align-self pr-lg-5">
                    <h3 class="title-big">Powerful Solution For Your Business or startup</h3>
                    <p class="mt-3 mb-4">Build a powerfull solution for running your business Smooth, fast and Scable.</p>
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">Quality Services <span class="">90%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">Experienced developers <span class="">100%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%"
                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3 mb-0">
                        <h6 class="progress-tittle">Repeated clients<span class="">90%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%"
                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 left-wthree-img mt-lg-0 mt-5">
                    <img src="{{ asset('images/service2.png') }}" alt="" class="img-fluid radius-image">
                </div>
            </div>
            <div class="row mt-5 pt-5">
                <div class="col-lg-6 left-wthree-img mt-lg-0 mt-5 order-lg-first order-last">
                    <img src="{{ asset('images/service1.png') }}" alt="" class="img-fluid radius-image">
                </div>
                <div class="col-lg-6 about-right-faq align-self pl-lg-5 order-lg-last order-first">
                    <h3 class="title-big">We Provide Awesome Services For You</h3>
                    <p class="mt-3">kamliyasoft provides High quality services that can make the services that were done manually to increase workflow and productivity. Kamliyasoft concentrates on putting forward the best Process development tools and keep it comparative with the best industry standard.</p>
                    <a class="btn button-style mt-lg-5 mt-4" href="{{ route('contact') }}">Estimate Project </a>
                </div>
            </div>
        </div>
    </section>
    <!-- //service section -->



    <section class="w3l-bottom-grids-6 py-5">
        <div class="container py-lg-5 py-md-4">
            <div class="text-center mb-sm-5 mb-4">
                <label class="sub-title mb-2">Services</label>
                <h3 class="title-big">What We Provide</h3>
            </div>
            <div class="grids-area-hny main-cont-wthree-fea row">
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box">
                        <span class="fa fa-tablet-alt icon-color"></span>
                        <h4><a href="#feature" class="title-head">Mobile App development</a></h4>
                        <p>Over the last 6 years , we have provided Mobile application development services to 150+ clients and enterprises, our mobile application had a significant impact in the businesses of our clients.</p>
                        <a href="{{ route('contact') }}" class="more">Connect </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                    <div class="area-box">
                        <span class="fas fa-desktop icon-color"></span>
                        <h4><a href="#feature" class="title-head">Web Application development</a></h4>
                        <p>The world is going digital, don’t just limit yourself, Using a website you can start finding customers globally now. We ensure that you will find the best web design services at Digital Suncity!</p>
                        <a href="{{ route('contact') }}" class="more">Connect </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                    <div class="area-box">
                        <span class="fa fa-keyboard icon-color"></span>
                        <h4><a href="#feature" class="title-head">Custom Software development</a></h4>
                        <p>Custom software is built to address specific users’ needs and is considered more efficient than commercial off-the-shelf software.                         
                            <p> <br>
                        <a href="{{ route('contact') }}" class="more">Connect</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                    <div class="area-box">
                        <span class="fab fa-chromecast icon-color"></span>
                        <h4><a href="#feature" class="title-head">Network Solution</a></h4>
                        <p>To succeed in this new era of hybrid work, organizations must provide secure and collaborative work experiences wherever your employees choose to be.                                                                                                                                                                                    </p>
                        <br><br><br>
                        <a href="{{ route('contact') }}" class="more">Connect </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                    <div class="area-box">
                        <span class="fa fa-database icon-color"></span>
                        <h4><a href="#feature" class="title-head"> Database development</a></h4>
                        <p>
The information in many databases consists of natural-language texts of documents; number-oriented databases primarily contain information such as statistics, tables, financial data, and raw scientific and technical data.</p>
                        <a href="#url" class="more">Read More </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                    <div class="area-box">
                        <span class="fa fa-building icon-color"></span>
                        <h4><a href="#feature" class="title-head">ERP Development</a></h4>
                        <p>We develop scalable, enterprise-wide ERP systems to automate critical processes and provide key data insights across on-premise, mobile, and web-based platforms</p>
                        <br><br><br>
                        <a href="{{ route('contact') }}" class="more">Connect </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
   <!-- Error messages -->
   <script src="{{ asset('js/sweetAlert.js') }}"></script>


<?php 
if(!empty(session()->get('success'))){

?>
    
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Successfully Received',
})
    </script>
  

<?php       
} else if(!empty(session()->get('fail'))){
?>
<script> 
Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong!. Please Try Again',
})

</script>

<?php    }   ?>




@endsection