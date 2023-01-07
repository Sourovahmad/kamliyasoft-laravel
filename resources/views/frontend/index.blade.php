

@extends('layouts.app')

@section('content') 

    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="banner-image">

        </div>
        <div class="banner-content">
            <div class="container pt-5 pb-md-4">
                <div class="row align-items-center">
                    <div class="col-md-6 pt-md-0 pt-4">
                        <h3 class="mb-lg-4 mb-3 title">We Are <span class="typed-text"></span><span
                                class="cursor">&nbsp</span></h3>
                        <p>Kamliyasoft services private limited a leading and growing Software company, providing services in Mobile apps, website development, Web application and custom solutuon.</p>
                        <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
                            <a class="btn button-style" href="contact.html">Estimate Project</a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4">
                        <img class="img-fluid" src="{{ asset('images/bann1.png') }}" alt=" ">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- about section -->
    <div class="w3l-content-photo-5 py-5">
        <div class="container py-lg-5 py-4">
            <div class="row align-items-center">
                <div class="col-md-6 content-photo order-md-first order-last">
                    <a href="#image"><img src="{{ asset('images/home-ab.png') }} " class="img-fluid" alt="content-photo"></a>
                </div>
                <div class="col-md-6 content-left mb-md-0 mb-5 pl-lg-5 order-md-last order-first">
                    <h3 class="mb-3">Welcome To kamliyasoft</h3>
                    <p>kamliyasoft is expertise in the field of software development, Blockchain development, Native apps, Cross-platform apps, ERP solutions, web design, Development, IoT, Artificial intelligence, consultancy services.</p>
                    <p class="mt-3">We provide the best Application service and provide the best web application development. Software development, Blockchain development, Web development, Website Designing, IOS App Development, Android App Development are some core functionalities of kamliyasoft professionals. We have advanced and extensive knowledge of Social Media Marketing, Branding, and reputation management.</p>
                    <a class="btn button-style mt-lg-5 mt-4" href="services.html">Learn More </a>
                </div>
            </div>
        </div>
    </div>
    <!-- //about section -->

   

    <!-- features section -->
    <section class="features-section pt-5" id="work">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 left-wthree-img order-lg-first order-last">
                    <img src="{{ asset('images/home1.png') }} " alt="" class="img-fluid img-responsive">
                </div>
                <div class="col-lg-8 right-wthree-img align-self order-lg-last order-first">
                    <div class="row text-center">
                        <div class="col-sm-4 col-6 icon-text-style">
                            <i class="fas fa-tablet-alt icon-color"></i>
                            <p>Mobile apps Development</p>
                        </div>
                        <div class="col-sm-4 col-6 icon-text-style">
                            <i class="fa fa-desktop icon-color"></i>
                            <p>Web Application development</p>
                        </div>
                        <div class="col-sm-4 col-6 icon-text-style  border-right-0">
                            <i class="fa fa-keyboard icon-color"></i>
                            <p>Custom software development</p>
                        </div>
                        <div class="col-sm-4 col-6 icon-text-style icon-text-style-2">
                            {{-- <i class="fa-solid fa-gamepad icon-color"></i> --}}
                            <i class="fa fa-gamepad icon-color"></i>
                            <p>GAME DEVELOPMENT</p>
                        </div>
                        <div class="col-sm-4 col-6 icon-text-style icon-text-style-2">
                            <i class="fa fa-database  icon-color"></i>
                            <p>Database development and management</p>
                        </div>
                        <div class="col-sm-4 col-6 icon-text-style icon-text-style-2 border-right-0">
                            <i class="fa fa-building icon-color"></i>
                            <p>ERP solution and management</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //features section -->

   

    <!-- testimonials section -->
    @include('frontend.component.testomonial')
    <!-- //testimonials section -->

    <!-- 3 grids -->
    <section class="w3l-features-4">
        <div class="features4-block text-center py-5">
            <div class="container py-md-5 py-3">
                <div class="row features4-grids justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fas fa-business-time icon-color" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.html">1. Planning & Research</a></h5>
                            <p>Our team plan the project and research all possibilities to deliver a Good Product.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-2">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fas fa-laptop-code icon-color" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.html">2. Coding and development</a></h5>
                            <p>Our experience team have the execellent knowledge of coding and development that help your project to deliver with effeciency.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-2">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fas fa-clipboard-check icon-color" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.html">3. Result</a></h5>
                            <p>With our team efforts, we deliver the project with all possibilities and best end result to grow your business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 3 grids -->




    <!-- promocode section -->
    @include('frontend.component.getapp') 
    <!-- //promocode section -->

    <!-- footer -->
    




    <!-- //footer -->




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



    @endSection
