@extends('layouts.master_admin')

@section('title', 'Edit Order')

@section('content')
    {{-- <div class="sidebar-right-side">
        <div class="sidebar-right-table">
            <h1>Edit Category</h1>
            <form method="POST" action="{{ route('admin_orders.update', ['admin_order' => $admin_order->id]) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $admin_order->user_id }}">
                </div>

                <div class="form-group">
                    <label for="products_id">Product</label>
                    <select class="form-control" id="products_id" name="products_id">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}"
                                {{ $product->id === $admin_order->products_id ? 'selected' : '' }}>
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="total">total</label>
                    <input type="number" class="form-control" id="total" name="total"
                        value="{{ $admin_order->total }}">
                </div>

                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity"
                        value="{{ $admin_order->quantity }}">
                </div>

                <div class="form-group">
                    <label for="date">date</label>
                    <input type="date" class="form-control" id="date" name="date"
                        value="{{ $admin_order->date }}">
                </div>



                <button type="submit" class="btn btn-primary">Update Category</button>
            </form>
        </div>
    </div>
    </section> --}}


    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Product</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <form method="POST"
                                    action="{{ route('admin_orders.update', ['admin_order' => $admin_order->id]) }}">
                                    @csrf
                                    @method('PUT')


                                    <div class="form-group">
                                        <label for="user_id">user name</label>
                                        <input type="hidden" class="form-control @error('user_id') is-invalid @enderror"
                                            id="user_id" name="user_id" value="{{ $admin_order->user_id }}" required>
                                        @error('user_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>



                                    <div class="form-group">
                                        <label for="products_id">Product</label>
                                        <select class="form-control @error('products_id') is-invalid @enderror"
                                            id="products_id" name="products_id">
                                            @foreach ($products as $product)
                                                <option value="{{ $product->id }}"
                                                    {{ $product->id == $admin_order->products_id ? 'selected' : '' }}>
                                                    {{ $product->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('products_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="total">total</label>
                                        <input type="number" class="form-control @error('total') is-invalid @enderror"
                                            id="total" name="total" value="{{ $admin_order->total }}" required>
                                        @error('total')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="quantity">Quantity</label>
                                        <input type="number" class="form-control @error('quantity') is-invalid @enderror"
                                            id="quantity" name="quantity" value="{{ $admin_order->quantity }}" required>
                                        @error('quantity')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>



                                    <div class="form-group">
                                        <label for="date">date</label>
                                        <input type="date" class="form-control" id="date" name="date"
                                            @error('quantity') is-invalid @enderror" value="{{ $admin_order->date }}">
                                        @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Order</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
