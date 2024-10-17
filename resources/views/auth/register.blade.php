
@include('layouts.custom')
<div class="hero">
    @include('layouts.navigation')
    <div class="light-box6"></div>

    <div class="blur-auth"></div>
    <div class="laravel-message2">
        <div class="image-message">
            <img src="images/exlamtion.png" alt="">
        </div>
        
        <div class="flex-col">
            <h1 class="m-b-10">Register</h1>
            <p>Create New Account</p>
        </div>
    </div>

    <form method="POST" action="{{ route('register') }}" class="form-register">
        @csrf

        <!-- Name -->
        <div class="flex-col">
            <x-input-label for="name" :value="__('Name')" class="m-b-10 f-s-18" />
            <x-text-input id="name" class="form-input-style" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="white text-shadow6 m-b-10" style="list-style-type: none" />
        </div>

        <!-- Email Address -->
        <div class="flex-col">
            <x-input-label for="email" :value="__('Email')" class="m-b-10 f-s-18" />
            <x-text-input id="email" class="form-input-style" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="white text-shadow6 m-b-10" style="list-style-type: none" />
        </div>

        <!-- Password -->
        <div class="flex-col">
            <x-input-label for="password" :value="__('Password')" class="m-b-10 f-s-18" />

            <x-text-input id="password" class="form-input-style" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="white text-shadow6 m-b-10" style="list-style-type: none" />
        </div>

        <!-- Confirm Password -->
        <div class="flex-col">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="m-b-10 f-s-18" />

            <x-text-input id="password_confirmation" class="form-input-style" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="white text-shadow6 m-b-10" style="list-style-type: none"/>
        </div>

        <div class="flex-col-align">

            <x-primary-button class="btn2 f-s-15 m-b-20">
                {{ __('Register') }}
            </x-primary-button>

            <a class="f-s-18 white text-shadow6" style="text-decoration: none;" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>
    </form>
</div>
