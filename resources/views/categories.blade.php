<x-app-layout>



    <header class="header-category">
        <h1>Categories</h1>
    </header>

    <section class="slider-categories">
        {{-- <div class="container-categories">
            <button data-name="all">All Categories</button>
            @foreach ($categories as $category)
                <button data-name="{{ $category->name }}">{{ $category->name }}</button>
            @endforeach



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
                    <input type="text" name="product_name" id="product_name" value="{{ old('product_name') }}"
                        placeholder="search">
                    <button type="submit">Search</button>
                </form>
            </div> --}}

        <form action="{{ route('filterProducts') }}" method="GET">
            <div class="container-categories">
                <button data-name="all">All Categories</button>
                @foreach ($categories as $category)
                    <button data-name="{{ $category->name }}" name="category"
                        value="{{ $category->name }}">{{ $category->name }}</button>
                @endforeach
            </div>

            <div class="form-search-categories">
                <select name="price_range" id="price_range">
                    <option value="">Any</option>
                    <option value="0-20">0 - 20</option>
                    <option value="21-80">21 - 80</option>
                    <option value="81-150">81 - 150</option>
                    <option value="150-500">150 - 500</option>
                    <option value="501-1000">501 - 1000</option>
                </select>

                <input type="text" name="product_name" id="product_name" value="{{ old('product_name') }}"
                    placeholder="search">
                <button type="submit">Search</button>
            </div>
        </form>

        </div>




        <div class="slide-categories-card">
            @if (isset($message))
                <p>{{ $message }}</p>
            @else
                @foreach ($products as $product)
                    <div class="categories-card" data-name="{{ $product->category->name }}">
                        <img src="../{{ $product->image }}" alt="">
                        <div class="categories-icon">
                            <a href="{{ route('cart', $product->id) }}"><i class="fa-solid fa-cart-shopping"></i></a>
                        </div>
                        <div class="categories-card-body">
                            <h3>{{ $product->name }}</h3>
                            <p>jd {{ $product->price }}</p>
                            <a href="{{ route('product.show', $product->id) }}">View Details</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="pagination">
            {{ $products->links() }}
        </div>



    </section>



</x-app-layout>
