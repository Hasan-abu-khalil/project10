<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="payment.css">
    <script src="https://kit.fontawesome.com/cccdab20bd.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Qadumi Home Center | login & sing in </title>
</head>

<body>

    <nav class="navs">
        <div class="nav-left-side">
            <img src="img/logo.png" alt="Qadumi Home Center">
        </div>

        <div class="nav-mid-right-side" id="navbar">
            <div class="nav-mid-side nav-media">
                <a href="index.html" class="active">Home</a>
                <a href="categories.html">Categories</a>
                <a href="about.html">About</a>
                <a href="contact.html">Contact US</a>

            </div>

            <div class="nav-right-side nav-media">
                <a href="login_and_singin.html">Login / Sing in</a>
                <a href="cart.html"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
                <a href="profile.htm"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
        <i class="fas fa-bars" id="icon" onclick="navigation()"></i>

    </nav>

    <section class="header">

    </section>


    <h1 class="head-h1">Payment</h1>








    <form action="cart.html" class="page">
        <div class="personal">

            <h2>Personal Details</h2>
            <div>
                <input type="text" class="personal-input" placeholder="First Name">
                <input type="text" class="personal-input" placeholder="Last Name">
            </div>
            <input type="number" class="personal-input" placeholder="Phone Number">
            <input type="number" class="personal-input" placeholder="Anther Phone Number">
            <input type="text" class="personal-input" placeholder="City">
            <input type="text" class="personal-input" placeholder="District">
            <input type="text" class="personal-input" placeholder="Street">

        

       

            <h2>payment <i class="fa-brands fa-cc-visa"></i></h2>

           

            <div>
                <input type="number" class="pay-input" placeholder="Card Number">
                <input type="number" class="pay-input" placeholder="Security Code">
            </div>
            <input type="number" class="pay-input" placeholder="Credit Expiration">


        </div>

        
        <input type="submit" value="confirm" class="confirm">
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










    <footer>

    </footer>





    <!-- <script src="payment.js"></script> -->
    <script src="main.js"></script>
</body>

</html>