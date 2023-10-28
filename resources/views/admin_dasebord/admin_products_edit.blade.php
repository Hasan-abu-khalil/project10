@extends('layouts.master_admin')

@section('title', 'Edit Product')

@section('content')
    {{-- <div class="sidebar-right-side">
        <div class="sidebar-right-table">
            <h1>Edit product</h1>
            <form method="POST" action="{{ route('product.update', ['product' => $product->id]) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                </div>

                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" id="category_id" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">description</label>
                    <input type="text" class="form-control" id="description" name="description"
                        value="{{ $product->description }}" maxlength="200">
                </div>
                <div class="form-group">
                    <label for="price">price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}"
                        min="0">
                </div>

                <div class="form-group">
                    <label for="image">Image </label>
                    <input type="file" class="form-control" id="image" name="image" value="{{ $product->image }}">
                </div>

                <button type="submit" class="btn btn-primary">Update product</button>
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
                                <form method="POST" action="{{ route('product.update', ['product' => $product->id]) }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ $product->name }}" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="category_id">Category</label>
                                        <select class="form-control" id="category_id" name="category_id">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    

                                    <div class="form-group">
                                        <label for="price">price</label>
                                        <input type="text"
                                            class="form-control @error('price') is-invalid @enderror" id="price"
                                            name="price" min="0" value="{{ $product->price }}" required>

                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="description">description</label>
                                        <input type="text"
                                            class="form-control @error('description') is-invalid @enderror" id="description"
                                            name="description" value="{{ $product->description }}" required>

                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Image URL</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            id="image" name="image" value="{{ $product->image }}"required>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>



                                    <button type="submit" class="btn btn-primary">Update Product</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
