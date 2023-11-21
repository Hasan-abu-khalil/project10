<x-guest-layout>
    @section('title', 'Forgot password')


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('../img/bg_1.jpg');"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>Forgot Password <strong class="logo-login">KRKBAH</strong></h3>
                        <br>

                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')"
                                    style="font-weight: bold; color: #3498db;" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autofocus
                                    style="border: none; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1); border-radius: 4px; height: 45px; background: #fff; outline: none; padding: 10px; width: 100%;" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <br>

                            <div class="d-flex justify-content-between">
                               
                                <a href="/">Home</a>

                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="btn btn-block submit">
                                    {{ __('Email Password Reset Link') }}
                                </x-primary-button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
