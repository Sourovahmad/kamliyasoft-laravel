

@extends('layouts.app')

@section('content') 




<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container"><br> <br>
            <h4 class="inner-text-title font-weight-bold mb-2">About kamliyasoft</h4>
            
    </section>
</div>






    <!-- about2 section -->
    <section class="w3l-about2 py-5">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 about-2-secs-right">
                    <img src="{{ asset('images/about.png') }}" alt="" class="img-fluid img-responsive" />
                </div>
                <div class="col-lg-6 about-2-secs pl-lg-5 mb-lg-0 mb-4">
                    <h3 class="title-big">We have 6+ years of work experience.</h3>
                    <p>kamliyasoft is expertise in the field of software development, web design, blockchain development, smart contracts, Nft, Development, Mobile Apps. We provide the best Application service and provide the best web Application development. Software development, Web development, Website Designing, Graphic Designing, Logo Design, IOS App Development, Android App Development are some core functionalities of kamliyasoft professionals.
                    </p>
                    <ul>
                        <li><span class="fas fa-check-circle icon-color" aria-hidden="true"></span>Dedicated team on request.</li>
                        <li><span class="fas fa-check-circle icon-color" aria-hidden="true"></span>Completed more then 500+ Projects.</li>
                        <li><span class="fas fa-check-circle  icon-color" aria-hidden="true"></span>Team that deliver values.</li>
                        <li><span class="fas fa-check-circle icon-color" aria-hidden="true"></span>Delivered solution for more then 15+ countries.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

        <!-- //about2 section -->





            <!-- stats -->
    <section class="w3_stats py-5" id="stats">
        <div class="container py-md-4 py-3">
            <div class="w3-stats">
                <div class="row text-center">
                    <div class="col-md-3 col-6">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="300"+ data-speed="1500"></div>
                            <p class="count-text">Websites Designed</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="200"+ data-speed="1500"></div>
                            <p class="count-text">Apps Developed</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-4">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="150"+ data-speed="1500"></div>
                            <p class="count-text">Software developed</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-4">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="30"+ data-speed="1000"></div>
                            <p class="count-text">Blockchain Project developed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->



    <!-- team with content section -->
    <section class="w3l-content-4 py-5" id="features">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="content-left col-lg-6">
                    <h3 class="title-big">Passion, Dedication And Hard Work</h3>
                    <p class="mt-4">As an Experienced Software comapany, kamliyasoft offers Standard solutions and delivery models to help you move forward. Digital transformation can only occur when supported by innovation and enhanced customer experience. The kamliyasoft process is full lifecycle, starting with the end-user, and covers all aspects of your business functions. </p>
                    <p class="mt-4">Our development and design teams uniquely enable you to make your product best and collaboration technologies more efficiently..</p>
                    <a class="btn button-style mt-lg-5 mt-4" href="{{ route('services') }}"> Learn More </a>
                </div>
                <div class="content-right col-lg-6 pl-lg-4 mt-lg-0 mt-md-5 mt-5 align-self">
                    <div class="row content4-right-grids mb-lg-5 mb-5">
                        <div class="col-2 content4-right-icon">
                            <div class="content4-icon">
                                <span class="fas fa-mobile icon-color"></span>
                            </div>
                        </div>
                        <div class="col-10 content4-right-info">
                            <h6><a href="#url">
                                   Mobile App Development</a>
                            </h6>
                            <p>An experience team that developed and managed more then 200+ Mobile apps for startups, small medium business and enterprises.</p>
                        </div>
                    </div>
                    <div class="row content4-right-grids mb-lg-5 mb-5">
                        <div class="col-2 content4-right-icon">
                            <div class="content4-icon">
                                <span class="fa fa-cogs icon-color"></span>
                            </div>
                        </div>
                        <div class="col-10 content4-right-info">
                            <h6><a href="#url">
                                    Web application development and design</a>
                            </h6>
                            <p>Our team have developed 300+ Web application and website, an team with designer, developer and tester.</p>
                        </div>
                    </div>
                    <div class="row content4-right-grids">
                        <div class="col-2 content4-right-icon">
                            <div class="content4-icon">
                                <span class="fa fa-link icon-color"></span>
                            </div>
                        </div>
                        <div class="col-10 content4-right-info">
                            <h6><a href="#url">
                                    ERP solution, Database development and management</a>
                            </h6>
                            <p>Our team have developed and managed the ERP for companies, small business and startup.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of team with content -->





      <!-- content about -->
      <section class="w3l-content-about py-5">
        <div class="container py-md-5 py-4">
           <div class="row mt-sm-5 mt-4">
                <div class="col-lg-6 about-left-inner pr-lg-5">
                    <h3 class="title-main-2 font-weight-bold">We create a new standard for businesses</h3>
                </div>
                <div class="col-lg-6 about-right-inner mt-lg-0 mt-4">
                    <p>Development and designing of services in an organization are the great ways to make the operation of the business more efficient and quick. For customer centric approach, it is important for businesses to improve their processes and give it more relevance. It is important to remove errors to enhance performance. </p>

                    <p class="mt-3">kamliyasoft provides High quality services that can make the services that were done manually to increase workflow and productivity. Kamliyasoft concentrates on putting forward the best Process development tools and keep it comparative with the best industry standard.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- content about -->







    
    <!-- testimonials section -->
   @include('frontend.component.testomonial')
    <!-- //testimonials section -->







    
    <!-- promocode section -->
    @include('frontend.component.getapp')
    <!-- //promocode section -->



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