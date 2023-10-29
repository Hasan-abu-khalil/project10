<?php

namespace App\Http\Controllers;

use App\Models\Checkout; // Assuming you have a "Checkout" model
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreCheckoutRequest;
use App\Http\Requests\UpdateCheckoutRequest;
use App\Models\orders;
use App\Models\Products;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // You can implement this method if needed.
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCheckoutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCheckoutRequest $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('checkout', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        // You can implement this method if needed.
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateCheckoutRequest $request, User $user)
    // {
    //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        // You can implement this method if needed.
    }


    // public function checkout()
    // {
    //     // Get the cart items from the session
    //     $cart = session('cart');

    //     if (!$cart) {
    //         return redirect()->route('cart')->with('error', 'Your cart is empty.');
    //     }

    //     // Check if the user is logged in
    //     if (auth()->check()) {
    //         // The user is logged in, proceed with the checkout process
    //         foreach ($cart as $id => $details) {
    //             $product = Products::find($id);

    //             if ($product) {
    //                 // Insert the product into the database as an order
    //                 $order = new orders;
    //                 $order->products_id = $product->id;
    //                 $order->user_id = auth()->user()->id;
    //                 $order->quantity = $details['quantity'];
    //                 $order->total = $details['price'] * $details['quantity'];
    //                 $order->date = now();
    //                 $order->save();
    //             }
    //         }

    //         // Clear the cart after inserting the items into the database
    //         session()->forget('cart');

    //         return redirect()->route('checkout')->with('success', 'Checkout successful.');
    //     } else {
    //         // The user is not logged in, redirect to the login page
    //         return redirect()->route('login')->with('error', 'Please log in to proceed with the checkout.');
    //     }
    // }

    public function checkout()
    {
        // Check if the user is logged in
        if (auth()->check()) {
            // The user is logged in, redirect to the checkout page
            return redirect()->route('checkout');
        } else {
            // The user is not logged in, redirect to the login page
            return redirect()->route('login')->with('error', 'Please log in to proceed with the checkout.');
        }
    }
}
