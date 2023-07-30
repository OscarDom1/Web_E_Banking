<!DOCTYPE html>
<html lang="ar" dir="ltr">
<!-- Mirrored from templates.hibootstrap.com/snuff/rtl/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Jun 2023 21:04:54 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css
" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/remixicon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/rtl.css') }}" />
    <title>CHB | E-Banking</title>
    <link rel="icon" type="image/png" href="{{ asset('images/my logo.png') }}" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    
</head>

<style>
    .moving-words-container {
        overflow: hidden;
        width: 500px;
        height: 23px;
    }

    .moving-word {
        display: inline-block;
        margin-right: 10px;
        animation: movingWords 10s linear infinite;
        white-space: nowrap;
    }

    .moving-word h5 {
        color: white;
    }

    .ttext {
        font-style: italic;
        color: orange;
        font-size: 0.9rem;
    }

    @keyframes movingWords {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }
</style>

<body>

    <div class="topbar-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <ul class="topbar-information">
                        <div class="moving-words-container">
                            <span class="moving-word">
                                <h5>CHINEDU'S HERITAGE BANK <span class="ttext">............ Simple, Quick,
                                        Secure</span></h5>
                            </span>
                        </div>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul class="topbar-action">
                        <li>
                            <a href="/contact">Support</a>
                        </li>
                        <li>
                            <a href="/help">Help</a>
                        </li>
                        <li class="dropdown language-option">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="ri-global-line"></i>
                                <span class="lang-name"></span>
                            </button>
                            <div class="dropdown-menu language-dropdown-menu">
                                <a class="dropdown-item" href="#">
                                    <img src="{{ asset('images/uk.png') }}" alt="flag" />
                                    English
                                </a>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('images/my logo.png') }}" class="black-logo" alt="image" />
                            <img src="{{ asset('images/my logo.png') }}" class="white-logo" alt="image" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md gap-5 justify-content-between navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('images/my logo.png') }}" class="black-logo" alt="image" />
                        <img src="{{ asset('images/my logo.png') }}" class="white-logo" alt="image" />
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto gap-4">

                            <li class="nav-item">
                                <a href="/" class="nav-link">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="/contact" class="nav-link active">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="/about" class="nav-link">About Us</a>
                            </li>


                        </ul>
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="/login" class="optional-btn">Log In</a>
                            </div>
                            <div class="option-item">
                                <a href="/register" class="default-btn">Create Account</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="/" class="nav-link active">Home</a>
                            </div>
                            <div class="option-item">
                                <a href="/contact" class="nav-link">Contact</a>

                            </div>
                            <div class="option-item">
                                <a href="/about" class="nav-link">About Us</a>

                            </div>
                            <div class="option-item">
                                <a href="/login" class="optional-btn">Log In</a>
                            </div>
                            <div class="option-item">
                                <a href="/register" class="default-btn">Create Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-banner-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50"
                        data-aos-duration="500" data-aos-once="true">
                        <h2>Contact Us</h2>
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-image" data-aos="fade-left" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <img src="{{ asset('images/page-banner/banner.png') }}" alt="image" />
                        <div class="banner-shape">
                            <img src="{{ asset('images/page-banner/shape.png') }}" alt="image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-information-area pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span>Contact Information</span>
                <h2>We're More Than International Payments, Get In Touch</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="contact-information-card">
                        <div class="icon">
                            <i class="ri-map-pin-line"></i>
                        </div>
                        <h3>Address:</h3>
                        <p>30 Iyiagu Estate Awka, Anambra State</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact-information-card">
                        <div class="icon">
                            <i class="ri-mail-line"></i>
                        </div>
                        <h3>Email Address:</h3>
                        <p>
                            CHBank@gmail.com
                            CHBank@gmail.com
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact-information-card">
                        <div class="icon">
                            <i class="ri-phone-line"></i>
                        </div>
                        <h3>Phone Number:</h3>
                        <p>
                            <a href="tel:44789289528790">+234-90 3306 0678</a> <br />
                            <a href="tel:44 89289524329">+234-90 3306 0678</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact-information-card">
                        <div class="icon">
                            <i class="ri-printer-line"></i>
                        </div>
                        <h3>Fax:</h3>
                        <p>
                            <a href="tel:12129876543">+234-80 3786 8812</a> <br />
                            <a href="tel:121298765436709">+234-80 3786 8812</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Contact Information</span>
                <h2>
                    Fill In Your Information And We'll Be In Touch As Soon As We Can
                </h2>
            </div>
            <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                @csrf
                <input type="hidden" name="contact_number">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Your Name *</label>
                            <input type="text" name="user_name" id="name" class="form-control" placeholder="Eg: Thomas Adison" required data-error="Please enter your name" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="user_email" id="email" class="form-control" placeholder="example@gmail.com" required data-error="Please enter your email" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Phone *</label>
                            <input type="text" name="user_phone_number" id="phone_number" placeholder="Enter your phone number" required data-error="Please enter your number" class="form-control" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" id="msg_subject" placeholder="Enter your subject" class="form-control" required data-error="Please enter your subject" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Your Message</label>
                            <textarea name="message" class="form-control" id="message" placeholder="Type your message" cols="30" rows="6" required data-error="Write your message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required />
                                <label class="form-check-label" for="gridCheck">
                                    I agree to the <a href="/terms">terms</a> and <a href="/privacy">privacy policy</a>
                                </label>
                                <div class="help-block with-errors gridCheck-error"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="send-btn">
                            <button type="submit" class="default-btn">Submit Now</button>
                        </div>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
            
        </div>
    </div>

    <div class="overview-area ptb-100">
        <div class="container">
            <div class="overview-content" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                data-aos-once="true">
                <span>Connect Us</span>
                <h3>
                    Sending International Business Payments or Sending Money To Family
                    Overseas? Snuff Are Your Fast And Simple Solution.
                </h3>
                <ul class="overview-btn-group">
                    <li>
                        <a href="/help" class="default-btn">Personal Account</a>
                    </li>
                    <li>
                        <a href="/help" class="optional-btn">Business Account</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="overview-shape">
            <img src="{{ asset('images/overview/shape-1.png') }}" alt="image" />
        </div>
        <div class="overview-shape-2">
            <img src="{{ asset('images/overview/shape-2.png') }}" alt="image" />
        </div>
    </div>

    <footer class="footer-area pt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <div class="widget-logo">
                            <img src="{{ asset('images/my logo.png') }}" class="black-logo" alt="image" />
                            <img src="{{ asset('images/my logo.png') }}" class="white-logo" alt="image" />
                        </div>
                        <p>To get exclusive updates and benefits.</p>
                        <form class="newsletter-form" data-bs-toggle="validator">
                            <input type="email" class="input-newsletter" placeholder="Enter email" name="EMAIL"
                                required autocomplete="off" />
                            <button type="submit" class="default-btn">Subscribe</button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                        <ul class="widget-social">
                            <li>
                                <a href="https://www.facebook.com/EnvyTheme" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/?lang=en" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/signup" target="_blank">
                                    <i class="ri-linkedin-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="60"
                        data-aos-duration="600" data-aos-once="true">
                        <h3>Company And Team</h3>
                        <ul class="quick-links">
                            <li><a href="/team">Company And Team</a></li>
                            {{-- <li><a href="/blog">News And Blog</a></li> --}}
                            <li><a href="/about">About Us</a></li>
                            <li>
                                <a href="/help">Affiliates And Partnerships</a>
                            </li>
                            <li><a href="/about">Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="70"
                        data-aos-duration="700" data-aos-once="true">
                        <h3>Resources</h3>
                        <ul class="quick-links">
                            <li><a href="/help">Security</a></li>
                            <li><a href="/faq">FAQ's</a></li>
                            <li><a href="/help">Community</a></li>
                            <li><a href="/privacy">Privacy Policy</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                        data-aos-once="true">
                        <h3>Contact Info</h3>
                        <ul class="info-links">
                            <li>
                                <span>Location:</span> 30 Iyiagu Estate Awka, Anambra State
                            </li>
                            <li>
                                <span>Email:</span>
                                Oscars@gmail.com
                            </li>
                            <li>
                                <span>Phone:</span>
                                <a href="tel:44789289524329">+234 08952 4329</a>
                            </li>
                            <li>
                                <span>Fax:</span>
                                <a href="tel:1212-9876543">+1-212-9876543</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-area-content">
                    <p>
                        Copyright @
                        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All Rights Reserved by
                        <span class="text-info">Oscar's inc</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div class="go-top">
        <i class="ri-arrow-up-s-line"></i>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9"></script>
<script type="text/javascript">
    (function() {
        // Initialize EmailJS with your user ID
        emailjs.init('_RAmrKX3RzOszYWU6');
    })();

    window.onload = function() {
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Generate a five-digit number for the contact_number variable
            this.contact_number.value = Math.random() * 100000 | 0;
            // Use the service and template IDs from your EmailJS dashboard
            emailjs.sendForm('service_aykq60s', 'template_59j30wl', this)
                .then(function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Message sent successfully.',
                    });
                    // Add code to handle success behavior, such as redirecting to a thank you page
                })
                .catch(function(error) {
                    console.log('FAILED...', error);
                    // Add code to handle failure behavior, such as displaying an error message
                });
        });
    }
</script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

    <x-flash-message />

    <script src="{{ asset('js/vendor/modernizr.min.js') }}"></script>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/odometer.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('js/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/form-validator.min.js') }}"></script>
    <script src="{{ asset('js/contact-form-script.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="//code.tidio.co/cnoxeypkkxeun34hiz1zyodn8skxalw5.js" async></script>
</body>

</html>
