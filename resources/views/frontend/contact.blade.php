

@extends('layouts.app')

@section('content') 




    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container"><br> <br>
                <h4 class="inner-text-title font-weight-bold mb-2">Contact us for A great begening </h4>
                
        </section>
    </div>
    <!-- //inner banner -->


    <section class="w3l-contact py-5" id="contact">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="text-center mb-sm-5 mb-4">
                <label class="sub-title mb-2">Get In Touch</label>
                <h3 class="title-big">Contact Us</h3>
            </div>
            <div class="mx-auto pt-lg-4 pt-md-5 pt-4" style="max-width:1000px">
                <div class="row contact-block">
                    <div class="col-md-5 contact-left">
                        <h3 class="font-weight-bold mb-md-5 mb-4">Contact Details</h3>
                        <div class="cont-details">
                            <div class="d-flex contact-grid">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-globe icon-color"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Company Address</h6>
                                    <p>E Block Sector 3 Noida 201301..</p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-phone icon-color"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Call Us</h6>
                                    <p><a href="tel:+1(21) 234 4567">+91 9837458038</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-envelope-open icon-color"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Email Us</h6>
                                    <p><a href="info@kamliyasoft.com" class="mail">info@kamliyasoft.com</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-headphones icon-color"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Skype</h6>
                                    <p><a href="#" class="mail">kamliyasoft</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 contact-right mt-md-0 mt-4">
                        <form action="{{ route("contactRequest") }}" method="post" class="signin-form">
                        @csrf
                            <div class="input-grids">
                                <input type="text" name="name" id="w3lName" placeholder="Your Name*"
                                    class="contact-input" required="" />
                                <input type="email" name="email" id="w3lSender" placeholder="Your Email*"
                                    class="contact-input" required="" />
                                <input type="text" name="subject" id="w3lSubect" placeholder="Subject*"
                                    class="contact-input" required="" />
                                <input type="text" name="website" id="w3lWebsite" placeholder="Website URL"
                                    class="contact-input" />
                            </div>
                            <div class="form-input">
                                <textarea name="message" id="w3lMessage" placeholder="Type your message here*"
                                    required=""></textarea>
                            </div>
                            <button type="submit" class="btn button-style">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- end of form -->

     @include('frontend.component.getapp')



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