@extends('layouts.master_admin')

@section('title', 'products')

@section('content')



    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            


            <div class="row">

                <div class="col-lg-12 col-md-12 col-12 col-sm-12">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header d-flex justify-content-between m-2">

                            <h4>products</h4>

                            <div class="ml-auto ">
                                <a href="{{ route('product.create') }}"
                                    class="btn btn-primary btn-action  pr-4 pl-4 pt-2 pb-2 " data-toggle="tooltip"
                                    title="Edit"><i class="fas fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col"> image</th>
                                            <th scope="col"> Name</th>
                                            <th scope="col"> Description</th>
                                            <th scope="col"> Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($products as $product)
                                            <tr>
                                                <th scope="row">{{ $product->id }}</th>
                                                <td>
                                                    <img src="../img/{{ $product->image }}"
                                                        alt="{{ $product->name }}" width="60px" height="60px">
                                                </td>

                                                <td>{{ $product->name }}</td>
                                                <td>
                                                    <div class="description">
                                                        <span
                                                            class="truncated-description">{{ Str::limit($product->description, 50) }}</span>
                                                        <span class="full-description"
                                                            style="display: none;">{{ $product->description }}</span>
                                                        <button class="btn btn-link toggle-description">Show More</button>
                                                    </div>
                                                </td>
                                                <td>{{ $product->price }}</td>

                                                <td class="d-flex flex-row align-items-center ">

                                                    <form action="{{ route('product.edit', ['product' => $product->id]) }}"
                                                        method="GET">
                                                        @csrf
                                                        <button style="border:none; outline:none;">
                                                            <a class="btn btn-primary btn-action mr-1">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </button>
                                                    </form>


                                                    <form
                                                        action="{{ route('product.destroy', ['product' => $product->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" style="border:none; outline:none; "
                                                            data-toggle="tooltip" title="Delete"
                                                            onclick="return confirm('Are You Sure? This action cannot be undone. Do you want to continue?')">
                                                            <a class="btn btn-danger btn-action mr-1">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </button>
                                                    </form>


                                                </td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
