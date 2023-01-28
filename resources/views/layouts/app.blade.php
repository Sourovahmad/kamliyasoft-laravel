<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Software solution, Web solution, Mobile apps and More!</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- //google-fonts -->


  
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0-2/css/all.min.css" integrity="sha512-uNOFYDWi8Y7/BN/9S2QDx/BVTEvSwdrZ53NHLgt+fDTdyQeOwmBpHrLrxOT3TQn78H0QKJWLvD7hsDOZ9Gk45A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href=" {{ asset('css/starter.css') }}">

    @yield('customCss')

    <!-- Template CSS Style link -->
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1>
                    <a class="navbar-brand" href="{{ route("home") }}">
                        <img src="{{ asset('images/logo1.png') }}" alt=" " height="160px" width="160px" class="img-responsive"></i></span>
                    </a>
                </h1>
              
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route("home") }}">Home   <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route("about") }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route("services") }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.odddevelopers.com/">Go to Odd</a>
                        </li>

                        <div class="search-right ml-lg-3">
                             <li class="nav-item">
                            <a class="nav-link" href="{{ route('buy') }}">Buy</a>
                        </li>
                        </div>




                        <div class="search-right ml-lg-3">
                             <li class="nav-item">
                            <a class="nav-link" href="{{ route("contact") }}">Contact Us</a>
                        </li>
                        </div>


                        <div class="search-right">
                            <li class="nav-item">
                           <a class="nav-link btn btn-success btn-outline text-light btn-sm" href="{{ route("estimate-projet") }}" style="font-size: 14px; padding:5px 2px; margin-top:6px">Estimate Project</a>
                       </li>
                       </div>


                    </ul>
                </div>
                <!-- //search button -->

                <!-- toggle switch for light and dark theme -->
                {{-- <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div> --}}
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->





     @yield('content')





    <footer class="w3l-footer-16">
        <div class="w3l-footer-16-main">
            <div class="container">
                <div class="row footer-p">
                    <div class="col-lg-8 mt-lg-0 mt-4 pr-lg-5">
                       
                        <div class="row footer-grids pt-4">
                            <div class="col-sm-4 col-6 column">
                                <ul class="footer-gd-16">
                                    <li><a href="index.html"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Home</a></li>
                                    <li><a href="<?= ('about') ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>About
                                            Us</a></li>
                                    <li><a href="<?= ('services') ?>"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Services</a></li>
                                    <li><a href="#blog"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog
                                            Posts</a></li>
                                    <li><a href="<?= ('contact') ?>"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-6 column pl-sm-0">
                                <ul class="footer-gd-16">
                                    <li><a href="#marketplace"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Marketplace</a></li>
                                    <li><a href="#experts"><i class="fa fa-angle-right" aria-hidden="true"></i>Our
                                            Experts</a></li>
                                    <li><a href="#customers"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Customers</a></li>
                                    <li><a href="#platform"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Platform</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-6 column pl-sm-0">
                                <ul class="footer-gd-16">
                                    <li><a href="#support"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Support</a></li>
                                    <li><a href="#privacy"><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy
                                            Policy</a></li>
                                    <li><a href="#terms"><i class="fa fa-angle-right" aria-hidden="true"></i>Terms &
                                            conditions</a></li>
                                    <li><a href="#faq"><i class="fa fa-angle-right" aria-hidden="true"></i>FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7 column mt-lg-0 mt-4">
                        <h3>Newsletter </h3>
                        <div class="end-column">

                            <form action=" {{ route('newsletter_store') }} ?>" method="POST" class="subscribe" method="post">
                                    @csrf
                                <input type="email" name="email" placeholder="Email Address" required="">
                                <button class="button-style"><span class="fa fa-paper-plane"
                                        aria-hidden="true"></span></button>
                            </form>
                            <p>Subscribe to our mailing list and get updates to your email inbox.</p>
                        </div>
                        <div class="columns-2 mt-4">
                            <ul class="social">
                                <li><a href="https://www.facebook.com/kamliyasoft"><span class="fab fa-facebook-f" aria-hidden="true"></span></a>
                                </li>
                                <li><a href="https://twitter.com/kamliyasoft"><span class="fab fa-twitter" aria-hidden="true"></span></a>
                                </li>
                                
                                <li><a href="https://www.instagram.com/kamliyasoft/"><span class="fab fa-instagram" aria-hidden="true"></span></a>
                                </li>
                                <li><a href="https://www.linkedin.com/company/kamliyasoft-services-private-limited/"><span class="fab fa-linkedin-in" aria-hidden="true"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="below-section mt-5 text-center">
                    <p class="copy-text">@ 2022 kamliyasoft. All rights reserved. Design by <a href="https://kamliyasoft.com/"
                            target="_blank">
                            kamliyasoft</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>



    



    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>

    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    @yield('customJs')



    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- //common jquery plugin -->

    <!-- banner image moving effect -->
    <script>
        var lFollowX = 0,
            lFollowY = 0,
            x = 0,
            y = 0,
            friction = 1 / 30;

        function animate() {
            x += (lFollowX - x) * friction;
            y += (lFollowY - y) * friction;

            translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

            $('.banner-image').css({
                '-webit-transform': translate,
                '-moz-transform': translate,
                'transform': translate
            });

            window.requestAnimationFrame(animate);
        }

        $(window).on('mousemove click', function (e) {

            var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
            var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
            lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
            lFollowY = (10 * lMouseY) / 100;

        });

        animate();
    </script>
    <!-- //banner image moving effect -->

    <!-- typig-text-->
    <script>
        const typedTextSpan = document.querySelector(".typed-text");
        const cursorSpan = document.querySelector(".cursor");

        const textArray = ["Designer's", "Developer's", "Creator's"];
        const typingDelay = 300;
        const erasingDelay = 10;
        const newTextDelay = 100; // Delay between current and next text
        let textArrayIndex = 0;
        let charIndex = 0;

        function type() {
            if (charIndex < textArray[textArrayIndex].length) {
                if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
                charIndex++;
                setTimeout(type, typingDelay);
            } else {
                cursorSpan.classList.remove("typing");
                setTimeout(erase, newTextDelay);
            }
        }

        function erase() {
            if (charIndex > 0) {
                // add class 'typing' if there's none
                if (!cursorSpan.classList.contains("typing")) {
                    cursorSpan.classList.add("typing");
                }
                typedTextSpan.textContent = textArray[textArrayIndex].substring(0, 0);
                charIndex--;
                setTimeout(erase, erasingDelay);
            } else {
                cursorSpan.classList.remove("typing");
                textArrayIndex++;
                if (textArrayIndex >= textArray.length) textArrayIndex = 0;
                setTimeout(type, typingDelay);
            }
        }

        document.addEventListener("DOMContentLoaded", function () { // On DOM Load initiate the effect
            if (textArray.length) setTimeout(type, newTextDelay + 250);
        });
    </script>
    <!-- //typig-text-->

    <!-- owl carousel -->
    <script src="{{ asset('js/owl_carousel.js')  }}"></script>
    
    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function () {
            $("#owl-demo2").owlCarousel({
                loop: true,
                nav: false,
                margin: 50,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    },
                    991: {
                        items: 2,
                        margin: 30,
                        nav: false
                    },
                    1080: {
                        items: 3,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->
    <!-- //owl carousel -->

    <!-- theme switch js (light and dark)-->
    <script src="{{ asset('js/theme_change.js') }}"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="{{ asset('js/counter.js') }} "></script>


    <!--bootstrap-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->