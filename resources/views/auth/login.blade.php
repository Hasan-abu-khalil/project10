<x-guest-layout>

    @section('title', 'Login')

    <script src="https://kit.fontawesome.com/659ed253a5.js" crossorigin="anonymous"></script>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('../img/bg_1.jpg');"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>Login to <strong class="logo-login">KRKBAH</strong></h3>
                        <br>

                        <form method="POST" action="{{ route('login') }}" class="mb-5">
                            @csrf

                            <!-- email -->

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
                                    autocomplete="current-password"
                                    style="border: none; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1); border-radius: 4px; height: 45px; background: #fff; outline: none; padding: 10px; width: 100%;" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />

                            </div>

                            <!-- Remember Me -->
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
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('register') }}">Register</a>
                                <a href="/">Home</a>

                            </div>
                            <div class="login-google">
                                <a href="{{ route('google') }}"><i class="fa-brands fa-google"></i></a>

                            </div>

                            <x-primary-button type="submit" class="btn btn-block submit">Log In</x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
