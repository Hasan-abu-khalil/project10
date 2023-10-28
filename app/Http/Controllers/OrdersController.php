<?php

namespace App\Http\Controllers;

use App\Models\orders;
use App\Models\Products;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = orders::all();
        return view('admin_dasebord\admin_orders', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(orders $admin_order)
    {
        $products = Products::all();
        return view('admin_dasebord.admin_orders_edit', compact('admin_order', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orders $admin_order)

    {

        $request->validate([
            'products_id' => 'required|exists:products,id',
            'user_id' => 'required',
            'total' => 'required',
            'quantity' => 'required',
            'date' => 'required',
        ]);

        $admin_order->update([
            'products_id' => $request->input('products_id'),
            'user_id' => $request->input('user_id'),
            'total' => $request->input('total'),
            'quantity' => $request->input('quantity'),
            'date' => $request->input('date'),


        ]);

        // Redirect back to the user list or any other appropriate page
        return redirect()->route('admin_orders.index')->with('success', 'order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = orders::find($id);
        $orders->delete();
        return redirect()->route('admin_orders.index', ['admin_orders' => $id])->with('success', 'orders deleted successfully');
    }
}
