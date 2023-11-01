@extends('layouts.master_admin')

@section('title', 'Categories')

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

                            <h4>Categories</h4>

                            <div class="ml-auto ">
                                <a href="{{ route('admin_categorys.create') }}"
                                    class="btn btn-primary btn-action  pr-4 pl-4 pt-2 pb-2 " data-toggle="tooltip"
                                    title="Edit"><i class="fas fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>

                                            <th scope="col"> image</th>
                                            <th scope="col"> Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        {{-- @foreach ($categorys as $category)
                                            <tr>
                                                <th scope="row">{{ $category->id }}</th>
                                                <td>
                                                    <img src="../img/{{ $category->image }}" alt="">
                                                </td>
                                                <td>{{ $category->name }}</td>


                                                <td class="table-form">


                                                    <form
                                                        action="{{ route('admin_categorys.edit', ['admin_category' => $category->id]) }}"
                                                        method="GET">

                                                        @csrf
                                                        <button class="btn btn-sm btn-secondary" type="submit">
                                                            <i class="fas fa-pen"></i>
                                                        </button>
                                                    </form>

                                                    <form
                                                        action="{{ route('admin_categorys.destroy', ['admin_category' => $category->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger" type="submit">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach --}}

                                        @foreach ($categorys as $category)
                                            <tr >
                                                <td  >
                                                    <img src=" ../img/{{ $category->image }}" alt="{{ $category->name }}"
                                                        width="60px" height="60px">
                                                </td>

                                                <td >{{ $category->name }}</td>

                                                <td class="d-flex flex-row align-items-center  ">

                                                    <form
                                                        action="{{ route('admin_categorys.edit', ['admin_category' => $category->id]) }}"
                                                        method="GET">
                                                        @csrf
                                                        <button style="border:none; outline:none;">
                                                            <a class="btn btn-primary btn-action mr-1">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </button>
                                                    </form>


                                                    <form
                                                        action="{{ route('admin_categorys.destroy', ['admin_category' => $category->id]) }}"
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
