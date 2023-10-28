{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-1" style="background-image: url('../img/bg_1.jpg');"></div>
        <div class="contents order-2 order-md-2">
            <div class="container">
                <div class="row align-items-center justify-content-center mt-3">
                    <div class="col-md-7">
                        <h3>Register for <strong class="logo-login">KRKBAH</strong></h3>
                        <br>

                        <form method="POST" action="{{ route('register') }}" class="mb-5">
                            @csrf

                            <!-- Name -->
                            <div class="form-group first">
                                <label for="name" style="font-weight: bold; color: #3498db;">Name</label>
                                <x-text-input id="name" type="text" name="name" :value="old('name')" required
                                    autofocus autocomplete="name"
                                    style="border: none; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1); border-radius: 4px; height: 45px; background: #fff; outline: none; padding: 10px; width: 100%;" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />

                            </div>

                            <!-- Email -->
                            <div class="form-group first">
                                <label for="email" style="font-weight: bold; color: #3498db;">Email</label>
                                <x-text-input id="email" type="email" name="email" :value="old('email')" required
                                    autofocus autocomplete="email"
                                    style="border: none; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1); border-radius: 4px; height: 45px; background: #fff; outline: none; padding: 10px; width: 100%;" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

                            </div>

                            <!-- Password -->
                            <div class="form-group last mb-3">
                                <label for="password" style="font-weight: bold; color: #3498db;">Password</label>
                                <x-text-input id="password" type="password" name="password" required
                                    autocomplete="new-password"
                                    style="border: none; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1); border-radius: 4px; height: 45px; background: #fff; outline: none; padding: 10px; width: 100%;" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2  text-danger" />

                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group last mb-3">
                                <label for="password_confirmation" style="font-weight: bold; color: #3498db;">Confirm
                                    Password</label>
                                <x-text-input id="password_confirmation" type="password" name="password_confirmation"
                                    required autocomplete="new-password"
                                    style="border: none; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1); border-radius: 4px; height: 45px; background: #fff; outline: none; padding: 10px; width: 100%;" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2  text-danger" />

                            </div>

                            <div class="d-flex mb-4 align-items-center">
                                <label class="control control--checkbox mb-0">
                                    <span class="caption">Remember me</span>
                                    <input type="checkbox" name="remember" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="forgot-pass">Forgot
                                            Password</a>
                                    @endif
                                </span>
                            </div>

                            <div>
                                <a href="{{ route('login') }}">Login</a>
                                <br>
                                <br>
                            </div>

                            <x-primary-button type="submit" class="btn btn-block submit">Register</x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
