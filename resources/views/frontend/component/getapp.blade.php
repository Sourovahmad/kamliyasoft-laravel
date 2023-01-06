<section class="w3l-promocode">
    <div class="promo-block py-5">
        <div class="container py-md-5 py-4">
            <div class="row aap-4-section">
                <div class="col-lg-6 app4-right-image">
                    <img src=" {{ asset('/images/mobile.png') }} " class="img-fluid" alt="App Device" />
                </div>
                <div class="col-lg-6 app4-left-text pl-lg-0 mb-lg-0 mb-5">
                    <h6>Connect with world</h6>
                    <h4>Get Our App</h4>
                    <p class="mb-4"> Download our oddEU app to connect with the world of professionals.</p>
                    <div class="app-4-connection">
                        <div class="newsletter">
                            <label>Get download Link</label>
                            <form action="{{ route('appRequest') }} " method="post" class="d-flex wrap-align">
                                   @csrf

                                <input type="text" placeholder="Enter your Mobile Number" name="email" required="required" />
                                <button type="submit" class="button-style">Get App</button>
                            </form>
                        </div>
                        <p class="mobile-text-app mt-4 pt-2">(Or) To Get Our Mobile Apps</p>
                        <div class="app-4-icon">
                            <ul>
                                <li><a href="#url" title="Apple" class="app-icon apple-vv"><span
                                            class="fab fa-apple  icon-color" aria-hidden="true"></span></a></li>
                                <li><a href="#url" title="Google play" class="app-icon play-vv"><span
                                            class="fab fa-google-play icon-color" aria-hidden="true"></span></a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>