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
                <h2>Mobile Number Verification</h2>
                <p>Welcome Back, Enter your Otp</p>
                <form method="POST" action="{{ route('otp.getLogin') }}">
                    @csrf

                    <input type="hidden" name="user_id" value="{{ $user_id }}">
                    <div class="form-group">
                        <label>One Time Password</label>
                        <input type="text" name="otp" class="form-control" placeholder="Enter one time password"
                            value="{{ old('otp') }}" />
                        <br>
                        @error('otp')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                        <br>

                    </div>
                
                    <button type="submit" class="default-btn">Login</button>
                    <div class="account-text">
                        <span>Don’t have an account?
                            <a href="/register">Create Account</a></span>
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
