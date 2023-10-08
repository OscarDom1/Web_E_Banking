<x-mail::message>
    # Introduction

    Welcome to {{ config('app.name') }}. You are receiving this email because you are attempting to log in.

    Your OTP for login is: <h1> {{ $otp }} </h1>

    If you didn't request this, you can ignore this email.

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
