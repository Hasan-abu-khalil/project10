<x-app-layout>

    @section('title', 'Home')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="10000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                <div>
                    <h1>KRKBAH</h1>

                </div>
            </div>

            <div class="carousel-item active">
                <video controls="true" autoplay="autoplay" loop muted class="d-block w-100 "
                    src="img/Untitled video - Made with Clipchamp (1).mp4" alt="Video Slide"></video>

            </div>

            <div class="carousel-item">
                <video controls="true" autoplay="autoplay" loop muted class="d-block w-100"
                    src="img/Untitled video - Made with Clipchamp (2).mp4" alt="Video Slide"></video>
            </div>

            <div class="carousel-item">
                <video controls="true" autoplay="autoplay" loop muted class="d-block w-100"
                    src="img/Untitled video - Made with Clipchamp (3).mp4" alt="Video Slide"></video>
            </div>

            <div class="carousel-item">
                <video controls="true" autoplay="autoplay" loop muted class="d-block w-100"
                    src="img/Untitled video - Made with Clipchamp (4).mp4" alt="Video Slide"></video>
            </div>




        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>







    <section class="categories-home">
        <h1 class="head-h1">Categories</h1>
        <div class="categories-home-card">

            @foreach ($categorys as $category)
                <div>
                    <img src="{{ $category->image }}" alt="">
                    <h2>{{ $category->name }}</h2>
                    {{-- <a href="categories" class="categories-btn"> View Details</a> --}}
                    <a href="{{ route('yousef', $category->id) }}" class="categories-btn"> View Details</a>
                </div>
            @endforeach



        </div>
    </section>






    <!--
    <div class="wrappers">

        <div class="containers">
            <i class="fa-solid fa-truck responsive-icon"></i>
            <span class="num" data-vla="25000">000</span>
            <span class="text"> Delivered</span>
        </div>

        <div class="containers">
            <i class="fas fa-solid fa-smile-beam responsive-icon"></i>
            <span class="num" data-vla="22500">000</span>
            <span class="text">Happy customers</span>
        </div>

        <div class="containers">
            <i class="fas fa-solid fa-list responsive-icon"></i>
            <span class="num" data-vla="20500">000</span>
            <span class="text">Menu items</span>
        </div>

        <div class="containers">
            <i class="fas fa-solid fa-star responsive-icon"></i>
            <span class="num" data-vla="18550">000</span>
            <span class="text">Five stars</span>
        </div>
    </div> -->






    <section class="collection">
        <h1 class="head-h1">New Collection</h1>
        <div class="collection-card">

            @php $count = 0 @endphp
            @foreach ($products as $product)
                @if ($count < 8)
                    <div class="contant">
                        <img src="../{{ $product->image }}" alt="">
                        <div class="contant-div">
                            <h2>{{ $product->name }}</h2>
                            <p>jd {{ $product->price }}</p>
                        </div>
                        <div class="contant-div">
                            <div>
                                <a href="{{ route('cart', $product->id) }}"><i
                                        class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                            <a href="{{ route('product.show', $product->id) }}" class="collection-btn">View Details</a>
                        </div>

                    </div>

                    @php $count++ @endphp
                @endif
            @endforeach





    </section>




    <section class="services">
        <h1 class="head-h1">Services</h1>
        <div class="services-card">
            <div class="">
                <h2>delivery</h2>
                <i class="fa-solid fa-truck"></i>
                <p>Efficient and reliable delivery service that ensures your packages reach their destination promptly
                    and securely.</p>
            </div>

            <div class="">
                <h2>Gifts</h2>
                <i class="fa-solid fa-gift"></i>
                <p>Tailored gift-to-services that offer unique experiences and specialized assistance, creating
                    unforgettable moments for your loved ones.</p>
            </div>

            <div class="">
                <h2>Payment on delivery</h2>
                <i class="fa-solid fa-money-bill-1-wave"></i>
                <p>Convenient payment on delivery services that allow you to pay for your purchases upon receiving them,
                    ensuring a secure and hassle-free transaction.</p>
            </div>

            <div class="">
                <h2>payment</h2>
                <i class="fa-brands fa-cc-visa"></i>
                <p>Streamlined and secure payment services that simplify transactions, providing a seamless and
                    convenient way to make purchases and transfer funds.</p>
            </div>
        </div>
    </section>
</x-app-layout>
