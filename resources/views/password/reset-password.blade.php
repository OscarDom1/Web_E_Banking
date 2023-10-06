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
            <h2>Enter New Password</h2>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        style="width: 50%;">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">New Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" style="width: 50%;">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="password-confirm">Confirm New Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password" style="width: 50%;">
                </div>

                <button type="submit" class="btn btn-primary">
                    Reset Password
                </button>
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
