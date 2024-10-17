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
            <h1 class="m-b-10">Login</h1>
            <p>Welcome Back</p>
        </div>
    </div>


    <form method="POST" action="{{ route('login') }}" class="form-register">
        @csrf

        <!-- Email Address -->
        <div class="flex-col">
            <x-input-label for="email" :value="__('Email')" class="m-b-10 f-s-18" />
            <x-text-input id="email" class="form-input-style" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="white text-shadow6 m-b-10" style="list-style-type: none" />
        </div>

        <!-- Password -->
        <div class="flex-col">
            <x-input-label for="password" :value="__('Password')" class="m-b-10 f-s-18" />

            <x-text-input id="password" class="form-input-style"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="white text-shadow6 m-b-10" style="list-style-type: none" />
        </div>

        <!-- Remember Me -->
        <div class="m-b-10">
            <label for="remember_me" class="text-shadow6">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex-col-align">

            <x-primary-button class="btn2 f-s-15 m-b-20">
                {{ __('Log in') }}
            </x-primary-button>

            @if (Route::has('password.request'))
            <a class="f-s-18 white text-shadow6" style="text-decoration: none;" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
        </div>
    </form>

</div>