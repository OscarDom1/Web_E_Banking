<x-layout>

    <div class="page-banner-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <h2>Login</h2>
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>Pages</li>
                            <li>OTP Verification</li>
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

    <div class="login-area ptb-100">
        <div class="container">
            <div class="login-form">
                <h2>Email Verification</h2>
                <p>Welcome back! Enter your email address.</p>
                <form method="POST" action="{{ route('otp.generate') }}">
                    @csrf
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="you@example.com"
                            value="{{ old('email') }}" />
                        <br>
                        @error('email')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                        <br>
                    </div>
                    <button type="submit" class="default-btn">Generate OTP</button>
                    <div class="account-text">
                        <span>Don’t have an account?
                            <a href="{{route('register')}}">Create Account</a></span>
                    </div>
                </form>
            </div>
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

</x-layout>
