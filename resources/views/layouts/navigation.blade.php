<nav class="navs">
    <div class="nav-left-side">
        <img src="../img/logo.png" alt="Krkbah">
    </div>

    <div class="nav-mid-right-side" id="navbar">
        <div class="nav-mid-side nav-media">
            <a href="/">Home</a>


            <a href="categories" class="{{ request()->is('categories*') ? 'active' : '' }}">Products</a>
            <a href="about" class="{{ request()->is('about*') ? 'active' : '' }}">About</a>
            <a href="contact-us" class="{{ request()->is('contact-us*') ? 'active' : '' }}">Contact US</a>
        </div>

        <div class="nav-right-side nav-media">
            <a href="{{ route('cart.index') }}"><i class="fa-sharp fa-solid fa-cart-shopping"> <span
                        class="count">{{ count((array) session('cart')) }} </span></i></a>
            <li class="has-children">
                @if (Auth::check())
                    <a href="#">
                        <div><i class="fa-solid fa-user "></i>
                        </div>
                        <ul class="dropdown">
                            <li><a href="{{ route('profile.edit') }}"class="{{ request()->is('profile*') ? 'active' : '' }}">Profile</a> </li>
                            <li><a href="chatify" class="{{ request()->is('chatify*') ? 'active' : '' }}">Message</a> </li>
                            <li>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit">{{ __('Log Out') }}</button>
                                </form>
                            </li>
                        </ul>
                    </a>
                @else
            <li class="{{ request()->is('login*') ? 'active' : '' }}"><a href="{{ route('login') }}">Login</a></li>
            <li class="{{ request()->is('register*') ? 'active' : '' }}"><a
                    href="{{ route('register') }}">Register</a></li>
            @endif
            </li>
        </div>
    </div>
    <i class="fas fa-bars" id="icon" onclick="navigation()"></i>
</nav>
