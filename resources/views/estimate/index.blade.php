<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Estimate you project | Kamliyasoft</title>
        <link rel="stylesheet" href="{{ asset('estimate/style.css') }}" />
        <script src="{{ asset('estimate/script.js') }}" defer></script>
    </head>
    <body>
        <nav>
            <div class="top">
                <img src="{{ asset('images/logo1.png') }}" alt=" " height="160px" width="160px" class="img-responsive logo"></i></span>
                <a href="#" class="back-btn">
                    <img
                        src="https://www.innoapps.com/assets/images/back-home.svg"
                        alt="back-btn"
                    />
                    <p>Back</p></a
                >
            </div>
            <ul class="stepper">
                <li class="active">
                    <p>Type</p>
                </li>
                <li class="">
                    <p>Scope</p>
                </li>
                <li>
                    <p>Date</p>
                </li>
                <li>
                    <p>Details</p>
                </li>
            </ul>
        </nav>
        <main>
            <div class="wrapper steps">
                <h4 class="title">What type of project are you building?</h4>
                <div class="steps container">
                    <div class="card">
                        <input
                            type="checkbox"
                            class="check"
                            data-id="Desktop"
                        />
                        <img
                            class="card-img not-selected"
                            src="{{ asset('estimate/assets/web-developement.svg') }}"
                            alt=""
                        />
                        <img
                            class="card-img selected"
                            src="{{ asset('estimate/assets/web-developement-clicked.svg') }}"
                            alt=""
                        />
                        <p>Desktop</p>
                        <div class="check-box"></div>
                    </div>
                    <div class="card">
                        <input type="checkbox" class="check" data-id="Mobile" />
                        <img
                            class="card-img not-selected"
                            src="{{ asset('estimate/assets/mobile-app.svg') }}"
                            alt=""
                        />
                        <img
                            class="card-img selected"
                            src="{{ asset('estimate/assets/mobile-app-clicked.svg') }}"
                            alt=""
                        />
                        <p>Mobile</p>
                        <div class="check-box"></div>
                    </div>
                    <div class="card">
                        <input type="checkbox" class="check" data-id="Other" />
                        <img
                            class="card-img not-selected"
                            src="{{ asset('estimate/assets/other.svg') }}"
                            alt=""
                        />
                        <img
                            class="card-img selected"
                            src="{{ asset('estimate/assets/other-clicked.svg') }}"
                            alt=""
                        />
                        <p>Other</p>
                        <div class="check-box"></div>
                    </div>
                </div>
                <form class="form-control">
                    <div class="top">
                        <div>
                            <label for="">Name</label>
                            <input class="name" type="text" />
                        </div>
                        <div>
                            <label for="">Email</label>
                            <input class="email" type="email" />
                        </div>
                        <div>
                            <label for="">Phone Number (Optional)</label>
                            <input class="phone" type="tel" />
                        </div>
                    </div>
                    <label for="">Project description</label>
                    <textarea type="text" class="description"></textarea>

                    <div class="condition">
                        <p class="accept">
                            <input class="accept-condition" type="checkbox" /> I
                            accept Kamliyasoft NDA
                        </p>
                        <span>OR</span>
                        <p class="nda">
                            Do you have NDA? Attach
                            <label for="attach_nda">here</label>
                        </p>
                        <input type="file" id="attach_nda" hidden />
                    </div>
                    <div class="form-btns">
                        <button type="button" class="btn form-prev">
                            Previous Step
                        </button>
                        <button class="btn form-submit">Estimate</button>
                    </div>
                </form>
                <div class="btns outer">
                    <button class="btn prev">Previous Step</button>
                    <button class="btn next">Continue</button>
                </div>
            </div>
        </main>
    </body>
</html>
