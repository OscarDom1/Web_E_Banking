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
                            <li>Login</li>
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
    <div class="container" style="margin-bottom: 20px; margin-top: 20px;">
        <div class="reset-password-form">
            <h2 class="form-title">Reset Password</h2>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required style="width: 50%; margin-bottom: 20px;">
                </div>
                <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
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

</x-layout>
