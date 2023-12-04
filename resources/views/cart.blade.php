<x-app-layout>
    @section('title', 'Cart')

    <section class="header-cart">
        <h1></h1>
    </section>
    <section class="carts">
        <div class="cart-page">
            <h1 class="head-h1">Carts</h1>
            {{-- <form method="POST" action="{{ route('remove_from_cart') }}">
                @csrf
                @method('DELETE') <!-- Add this line to override the method --> --}}

            @php
                $total = 0;
            @endphp
            @if (session()->has('message'))
                <div class="alert alert-success text-center">
                    {{ session()->get('message') }}
                </div>
            @endif


            @if (session('cart') && count(session('cart')) > 0)
                <div class="table-overflow">

                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach (session('cart') as $id => $details)
                                @php
                                    $total += $details['price'] * $details['quantity'];
                                @endphp
                                <tr class="cart">
                                    <td><img src="../img{{ $details['image'] }}" alt=""></td>

                                    <td>{{ $details['name'] }}</td>

                                    <td>jd {{ $details['price'] }}</td>

                                    <td>
                                        <div class="cart-quantity">

                                            <a href="cartdecrease/{{ $id }}"
                                                class="cart-quantity-btn cart-quantity-decrease"
                                                data-id="{{ $id }}">-</a>

                                            <input type="number" class="cart-quantity-input"
                                                name="quantity[{{ $id }}]" value="{{ $details['quantity'] }}"
                                                min="1">

                                            <a href="cart/{{ $id }}"
                                                class="cart-quantity-btn cart-quantity-increase"
                                                data-id="{{ $id }}">+</a>

                                        </div>

                                    </td>

                                    <td>jd {{ $details['price'] * $details['quantity'] }}</td>

                                    <td class="action" data-th="">

                                        <form method="POST" action="{{ route('remove_from_cart') }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="product_id" value="{{ $id }}">
                                            <button type="submit">
                                                <i class="fa-solid fa-trash"></i> Delete
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <h2 style="text-align: center; font-size:30px;">Your cart is empty.</h2>

            @endif
            {{-- </form> --}}
            <div class="carts-totl">
                <h3>Total : <samp>jd {{ $total }}</samp></h3>

                <div class="cart_total_button">

                    @if ($total > 0)
                        <form method="POST" action="{{ route('checkout') }}">
                            @csrf
                            <button type="submit">Proceed to check out</button>
                        </form>
                    @endif
                    <a href="categories"><button>Add items to Cart</button></a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
