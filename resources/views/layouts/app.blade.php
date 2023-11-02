<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="home-responsive-number.css">
    <script src="https://kit.fontawesome.com/cccdab20bd.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../img/logo.png">
    <title>KRKABH | @yield('title') </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- ggggggF --}}
    <link rel="stylesheet" href="{{ url('css/style.css') }} ">
    <link rel="stylesheet" href="{{ url('css/product.css') }} ">
    <link rel="stylesheet" href="{{ url('css/categories.css') }} ">
    <link rel="stylesheet" href="{{ url('css/cart.css') }} ">
    <link rel="stylesheet" href="{{ url('css/checkout.css') }} ">
    <link rel="stylesheet" href="{{ url('css/about.css') }} ">
    <link rel="stylesheet" href="{{ url('css/contact.css') }} ">





    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    @include('layouts.navigation')
    {{-- <div class="min-h-screen bg-gray-100"> --}}


    {{-- @if (session()->has('message'))
        <div>
            <button type="button" class="close-message" data-dismiss='alert'></button>
            {{ session()->get('message') }}
        </div>
    @endif --}}

    <!-- Page Heading -->
    {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    {{-- </div> --}}





    <footer class="">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-md-4 col-lg-3 mt-3">
                    <div class="blog-section">
                        <h1 class="mb-2 text-light">Pages</h1>
                        <ul>
                            <li><a href="/" class="text-light">Home Page</a></li>
                            <li><a href="about" class="text-light">About Us</a></li>
                            <li><a href="contact-us" class="text-light">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 mt-3">
                    <div class="follow-us-section">
                        <h1 class="mb-2 text-light">Follow Us</h1>
                        <ul>
                            <li><a href="#" class="text-light"><i class="fab fa-facebook"></i> Facebook</a></li>
                            <li><a href="#" class="text-light"><i class="fab fa-instagram"></i> Instagram</a></li>
                            <li><a href="#" class="text-light"><i class="fab fa-twitter"></i> Twitter</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 mt-3">
                    <div class="payment-options-section">
                        <h1 class="mb-2 text-light">Accepted Payment Methods</h1>
                        <i class="fab fa-cc-visa text-light" style="font-size: 24px;"></i>
                        <br>
                        <i class="fab fa-paypal text-light" style="font-size: 24px;"></i>

                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3 mt-3">
                    <div class="back-to-top-section text-center mt-md-0 mt-3">
                        <a href="#" class="back-to-top text-light">Back to Top <i class="fas fa-arrow-up"></i></a>
                        <div class="footer-image">
                            <img src="../img/logo.png" alt="Krkbah">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom ">
            <div class="container">
                <p class="text-center py-3 m-0 text-light">&copy; 2023 Your Company. All rights reserved.</p>
            </div>
        </div>
    </footer>










    <script>
        $(document).ready(function() {
            $("count").click(function() {
                // Toggle the cart container's visibility when clicked
                $(this).toggleClass("show-cart");
            });
        });
    </script>


    <!-- Optional JavaScript -->
    <script src="js/main.js"></script>
    <script src="js/home-responsive-number.js"></script>
    <script src="js/categories.js"></script>
    <script src="js/login_and_singin.js"></script>




    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
