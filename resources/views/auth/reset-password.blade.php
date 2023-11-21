<x-guest-layout>

    @section('title', 'Reset Password')

    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('../img/bg_1.jpg');"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>Reset Password <strong class="logo-login">KRKBAH</strong></h3>
                        <br>

                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')"
                                    style="font-weight: bold; color: #3498db;" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email', $request->email)" required autofocus autocomplete="username"
                                    style="border: none; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1); border-radius: 4px; height: 45px; background: #fff; outline: none; padding: 10px; width: 100%;" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')"
                                    style="font-weight: bold; color: #3498db;" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="new-password"
                                    style="border: none; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1); border-radius: 4px; height: 45px; background: #fff; outline: none; padding: 10px; width: 100%;" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')"
                                    style="font-weight: bold; color: #3498db;" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                    name="password_confirmation" required autocomplete="new-password"
                                    style="border: none; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1); border-radius: 4px; height: 45px; background: #fff; outline: none; padding: 10px; width: 100%;" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">
                                
                                <a href="/">Home</a>

                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="btn btn-block submit">
                                    {{ __('Reset Password') }}
                                </x-primary-button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
