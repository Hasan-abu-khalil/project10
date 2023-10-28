<x-app-layout>



    <header class="header">
        <h1>Categories</h1>
    </header>

    <section class="slider-categories">
        <div class="container-categories">

            <button data-name="all">All Categories</button>
            <button data-name="antique">Antique</button>
            <button data-name="houseware">Houseware</button>
            <button data-name="electrical">Electrical appliances</button>
            <button data-name="miscellaneous">Miscellaneous</button>


            {{-- @foreach ($categorys as $category)
                <button data-name="{{ $category->name }}">{{ $category->name }}</button>
            @endforeach --}}


        </div>


        <div class="form-search-categories">


            <form action="{{ route('cat') }}" method="GET">

                <select name="price_range" id="price_range">
                    <option value="">Any</option>
                    <option value="0-20">0 - 20</option>
                    <option value="21-80">21 - 80</option>
                    <option value="81-150">81 - 150</option>
                    <option value="150-500">150 - 500</option>
                    <option value="501-1000">501 - 1000</option>
                </select>

                <button type="submit">Search</button>
            </form>

            <div>
                <form action="{{ route('searchByName') }}" method="GET">

                    <input type="text" name="product_name" id="product_name" value="{{ request('product_name') }}"
                        placeholder="search">

                    <button type="submit">Search</button>
                </form>

            </div>

        </div>




        <div class="slide-categories-card">

            @foreach ($products as $product)
                <div class="categories-card" data-name="">
                    <img src="../{{ $product->image }}" alt="">
                    <div class="categories-icon">
                        <a href="{{ route('cart', $product->id) }}"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                    <div class="categories-card-body">
                        <h3>{{ $product->name }}</h3>
                        <p>jd{{ $product->price }}</p>
                        <a href="{{ route('product.show', $product->id) }}">View Details</a>
                    </div>
                </div>
            @endforeach


            <!-- <<<<<<<<<<<<<<<<<<<<<<<< antique >>>>>>>>>>>>>>>>>>>>>>>>>> -->

            {{-- <div class="categories-card" data-name="antique">
                <img src="img/1-1.jpg" alt="">
                <div class="categories-icon">

                    <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>pocket watch</h3>
                    <p>jd 15</p>
                    <a href="product.html">View Details</a>
                </div>

            </div>

            <div class="categories-card" data-name="antique">
                <img src="img/1-2.jpg" alt="">
                <div class="categories-icon">

                    <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>flower vase</h3>
                    <p>jd 5.50</p>
                    <a href="product.html">View Details</a>

                </div>
            </div>

            <div class="categories-card" data-name="antique">
                <img src="img/1-3.jpg" alt="">
                <div class="categories-icon">

                    <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>vase</h3>
                    <p>jd 25.80</p>
                    <a href="product.html">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="antique">
                <img src="img/1-4.jpg" alt="">
                <div class="categories-icon">

                    <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>Land Line</h3>
                    <p>jd 21</p>
                    <a href="product.html">View Details</a>
                </div>
            </div>


            <div class="categories-card" data-name="antique">
                <img src="img/1-5.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>statue</h3>
                    <p>jd 10.50</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="antique">
                <img src="img/1-6.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>Globe statue</h3>
                    <p>jd 12</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="antique">
                <img src="img/1-7.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>statue of Liberty</h3>
                    <p>jd 18</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="antique">
                <img src="img/1-8.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>vase</h3>
                    <p>jd 15.50</p>
                    <a href="#">View Details</a>
                </div>
            </div>


            <!-- <<<<<<<<<<<<<<<<<<<<<<<< houseware >>>>>>>>>>>>>>>>>>>>>>>>>> -->
            <div class="categories-card" data-name="houseware">
                <img src="img/2-1.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>Glass set</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="houseware">
                <img src="img/2-2.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>Cookware set </h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>
            <div class="categories-card" data-name="houseware">
                <img src="img/2-3.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>Cup set</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="houseware">
                <img src="img/2-4.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>dish set</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="houseware">
                <img src="img/2-5.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>Forks set</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="houseware">
                <img src="img/2-6.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>Soap box</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>
            <div class="categories-card" data-name="houseware">
                <img src="img/2-7.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>frying pan</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="houseware">
                <img src="img/2-8.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>Soap box</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>





            <!-- <<<<<<<<<<<<<<<<<<<<<<<< electrical >>>>>>>>>>>>>>>>>>>>>>>>>> -->


            <div class="categories-card" data-name="electrical">
                <img src="img/3-1.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>Microwave</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="electrical">
                <img src="img/3-2.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>mixer</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>
            <div class="categories-card" data-name="electrical">
                <img src="img/3-3.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>Earphone</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="electrical">
                <img src="img/3-4.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>iron</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="electrical">
                <img src="img/3-5.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>hand blender</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="electrical">
                <img src="img/3-6.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>heater</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>
            <div class="categories-card" data-name="electrical">
                <img src="img/3-7.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>Toaster of bread</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="electrical">
                <img src="img/3-8.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>Air Fryer</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>





            <!-- <<<<<<<<<<<<<<<<<<<<<<<< miscellaneous >>>>>>>>>>>>>>>>>>>>>>>>>> -->

            <div class="categories-card" data-name="miscellaneous">
                <img src="img/4-1.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>pocket watch</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="miscellaneous">
                <img src="img/4-2.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>pocket watch</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>
            <div class="categories-card" data-name="miscellaneous">
                <img src="img/4-3.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>pocket watch</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="miscellaneous">
                <img src="img/1-8.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>pocket watch</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="miscellaneous">
                <img src="img/1-8.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>pocket watch</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="miscellaneous">
                <img src="img/1-8.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>pocket watch</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>
            <div class="categories-card" data-name="miscellaneous">
                <img src="img/1-8.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>pocket watch</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <div class="categories-card" data-name="miscellaneous">
                <img src="img/1-8.jpg" alt="">
                <div class="categories-icon">

                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="categories-card-body">
                    <h3>pocket watch</h3>
                    <p>jd 15</p>
                    <a href="#">View Details</a>
                </div>
            </div>
 --}}




        </div>


    </section>



</x-app-layout>
