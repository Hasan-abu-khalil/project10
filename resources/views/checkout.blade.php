<x-app-layout>
    <section class="header-checkout">

    </section>


    <h1 class="head-h1">Payment</h1>







    <form action="{{ route('user.store') }}" method="POST" class="page">
        @csrf

        @if (Auth::check())
            @php
                $user = Auth::user();
            @endphp

            <div class="personal">
                <h2>Personal Details</h2>
                <input type="hidden" name="email" class="personal-input" placeholder="Email" value="{{ $user->email }}" required>
                <input type="hidden" name="password" class="personal-input" placeholder="Email" value="{{ $user->password }}" required>
                <input type="text" name="name" class="personal-input" placeholder="Name" value="{{ $user->name }}" required>
                <input type="number" name="phone" class="personal-input" placeholder="Phone Number" value="{{ $user->phone }}" required>
                <input type="text" name="address" class="personal-input" placeholder="Address" value="{{ $user->address }}" required>
                <input type="text" name="city" class="personal-input" placeholder="City" value="{{ $user->city }}" required>
                <input type="submit" value="Confirm" class="confirm">
            </div>
        @endif

    </form>




  

    <div class="payment-card">

        <div class="">
            <img src="img/4.jpg" alt="">
            <h3>Easy pay</h3>
        </div>

        <div class="">
            <img src="img/5.webp" alt="">
            <h3> Safe Package</h3>

        </div>

        <div class="">
            <img src="img/6.jpg" alt="">
            <h3>Quick Delivery</h3>

        </div>
    </div>


</x-app-layout>
