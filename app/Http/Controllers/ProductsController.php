<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// use App\Models\User;
// use App\Models\Carts;


class ProductsController extends Controller
{




    public function cart(Request $request, $id)
    {
        $product = Products::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $cart[$id]['subtotal'] = $cart[$id]['price'] * $cart[$id]['quantity'];
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->name,
                'description' => $product->description,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1,
                'subtotal' => $product->price,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('message', 'Product added to cart successfully');
    }

    public function cartdecrease(Request $request, $id)
    {
        $product = Products::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $cart = session()->get('cart', []);


        $cart[$id]['quantity']--;
        $cart[$id]['subtotal'] = $cart[$id]['price'] * $cart[$id]['quantity'];


        session()->put('cart', $cart);

        return redirect()->back()->with('message', 'Product added to cart successfully');
    }



    public function remove(Request $request)
    {
        $productId = $request->input('product_id');

        if ($productId) {
            $cart = session('cart', []);

            // Check if the product is in the cart
            if (isset($cart[$productId])) {
                // Remove the product from the cart
                unset($cart[$productId]);

                // Update the cart in the session
                session(['cart' => $cart]);

                return redirect()->route('cart.index')->with('success', 'Product removed from cart');
            }
        }

        return redirect()->route('cart.index')->with('error', 'Product not found in cart');
    }


    public function filterProducts(Request $request)
    {
        $categories = Category::all();

        // Retrieve the selected category
        $selectedCategory = $request->input('category');
        $priceRange = $request->input('price_range');
        $minPrice = null;
        $maxPrice = null;

        if ($priceRange) {
            list($minPrice, $maxPrice) = explode('-', $priceRange);
        }

        $searchQuery = $request->input('product_name');

        $products = Products::query();

        if ($selectedCategory && $selectedCategory !== 'all') {
            $products->whereHas('category', function ($query) use ($selectedCategory) {
                $query->where('name', $selectedCategory);
            });
        }

        if ($minPrice !== null && $maxPrice !== null) {
            $products->whereBetween('price', [$minPrice, $maxPrice]);
        }

        if ($searchQuery) {
            $products->where('name', 'like', '%' . $searchQuery . '%');
        }

        $products = $products->paginate(8); // Adjust the number of products per page as needed

        if ($products->isEmpty()) {
            return view('categories', compact('products', 'categories'))->with('message', 'No matching products found.');
        }

        return view('categories', compact('products', 'categories'));
    }






    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view('home', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Products::all();


        $categories = Category::all(); // Retrieve categories

        return view('admin_dasebord\admin_products_create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Products();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->category_id = $request->input('category_id');

        $relativeImagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newImageName = uniqid() . '-' . $image->getClientOriginalName();
            $image->move(public_path('img'), $newImageName);
            $relativeImagePath = '/' . $newImageName;
        }

        // Check if $relativeImagePath is null and set a default image if needed
        if (!$relativeImagePath) {
            $relativeImagePath = '/default_image.jpg'; // Change to your default image path
        }

        // Set the 'image' field to the path
        $product->image = $relativeImagePath;

        $product->save();

        $productid = $product->id;

        return redirect()->route('admin_products', ['product' => $productid])->with('success', 'Product created successfully');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function getProductDetails($product)
    {
        // Replace this with your actual logic to fetch product details
        // For example, you may fetch product details from the database.
        // I'm assuming the details are stored in the product model.
        return [
            'quantity' => $product->quantity, // Replace with the actual property name
            // Add other details here
        ];
    }

    public function show(Products $product)
    {
        $categories = Category::all();
        $details = $this->getProductDetails($product);
        return view('product', compact('product', 'categories', 'details'));
    }

    public function shows()
    {
        $products = Products::all();
        return view('admin_dasebord\admin_products', compact('products'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
    {
        $categories = Category::all();
        return view('admin_dasebord/admin_products_edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $product)
    {
        $product->update([
            'name' => $request->input('name'),
            // 'image' => $request->input('image'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newImageName = uniqid() . '-' . $image->getClientOriginalName();
            $image->move(public_path('img'), $newImageName);
            $product->image = '/' . $newImageName;
        }

        $product->update($request->except('image'));

        return redirect()->route('admin_products', ['product' => $product->id])->with('success', 'Products updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);
        $product->delete();
        return redirect()->route('admin_products', ['product' => $id])->with('success', 'Products deleted successfully');
    }


    public function yousef($id)
    {
        $products = Products::where('category_Id', $id)->paginate(8);
        $categories = Category::all();


        return view('categories', compact('products', 'categories'));
    }
}
