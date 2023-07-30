<x-layout>

    <div class="page-banner-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <h2>Register</h2>
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>Pages</li>
                            <li>Register</li>
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

    <div class="register-area ptb-100">
        <div class="container">
            <div class="register-form">
                <h2>Create Your Account</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit sed do
                    eiusmod tempor incididunt ut labore.
                </p>
                <form method="POST" action="/users" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Full name</label>
                        <input type="text" name="name" class="form-control" placeholder="User name"
                            value="{{ old('name') }}" />
                        <br>
                        @error('name')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                        <br>
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Email address"
                            value="{{ old('email') }}" />
                        <br>
                        @error('email')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                        <br>
                    </div>
                    <div class="form-group">
                        <label>Mobile No:</label>
                        <input type="text" name="phone_number" class="form-control" placeholder="+123..."
                            value="{{ old('phone') }}" />
                        <br>
                        @error('phone')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                        <br>
                    </div>

                    <div class="form-group">
                        <label>Residential Address</label>
                        <input type="text" name="address" class="form-control" placeholder="residential address"
                            value="{{ old('address') }}" />
                        <br>
                        @error('address')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                        <br>
                    </div>

                    <div class="form-group">
                        <label>State Of Origin</label>
                        <input type="text" name="state_of_origin" class="form-control" placeholder="state of origin"
                            value="{{ old('state') }}" />
                        <br>
                        @error('state')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                        <br>
                    </div>

                    <div class="form-group">
                        <label>Profile picture</label>
                        <input type="file" name="profile_picture" placeholder="Profile picture">
                        <br>
                        @error('profile')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                        <br>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password"
                            value="{{ old('password') }}" />
                        <br>
                        @error('password')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                        <br>
                    </div>
                    <div class="form-group">
                        <label>Confirm password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            placeholder="Confirm password" value="{{ old('password_confirmation') }}" />
                        <br>
                        @error('password')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                        <br>
                    </div>
                    <p class="description">
                        The password should be at least eight characters long. To make it
                        stronger, use upper and lower case letters, numbers, and symbols
                        like ! " ? $ % ^ & )
                    </p>
                    <button type="submit" class="default-btn">Create Account</button>
                    <div class="account-text">
                        <span>Already have an account? <a href="/login">Login</a></span>
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
