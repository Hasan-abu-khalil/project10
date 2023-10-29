@extends('layouts.master_admin')


@section('title', 'Admin')


@section('content')
    {{-- <div class="sidebar-right-side">
        <div class="sidebar-right-table">
            <h1>Admin</h1>

            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Name</th>
                        <th scope="col">Email</th>
                        <th scope="col"> Phone</th>
                        <th scope="col"> Address</th>
                        <th scope="col"> City</th>
                        <th scope="col">Role</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $user)
                        @if ($user->role === 'admin')
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->city }}</td>
                                <td>{{ $user->role }}</td>

                                <td class="table-form">
                                    <form action="{{ route('admin_user.edit', ['admin_user' => $user->id]) }}"
                                        method="GET">

                                        @csrf
                                        <button class="btn btn-sm btn-secondary" type="submit">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                    </form>


                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </section> --}}


    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>


            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                @php
                                    $userCount = count($users);
                                    $categoriesCount = count($categories);
                                    $productsCount = count($products);
                                    $orderCount = count($order);
                                @endphp


                                <h4>Total user </h4>
                            </div>
                            <div class="card-body">
                                {{ $userCount }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total category </h4>
                            </div>
                            <div class="card-body">
                                {{ $categoriesCount }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="far fa-file"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Products</h4>

                            </div>
                            <div class="card-body">
                                {{ $productsCount }}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Orders</h4>

                            </div>
                            <div class="card-body">
                                {{ $orderCount }}

                            </div>
                        </div>
                    </div>
                </div>
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

                            <h4>Admin</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col"> Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col"> Phone</th>
                                            <th scope="col"> Address</th>
                                            <th scope="col"> City</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Operation</th>

                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($users as $user)
                                            @if ($user->role === 'admin')
                                                <tr>
                                                    <th scope="row">{{ $user->id }}</th>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>{{ $user->address }}</td>
                                                    <td>{{ $user->city }}</td>
                                                    <td>{{ $user->role }}</td>

                                                    <td class="table-form">


                                                        <form
                                                            action="{{ route('admin_user.edit', ['admin_user' => $user->id]) }}"
                                                            method="GET">
                                                            @csrf
                                                            <button style="border:none; outline:none;">
                                                                <a class="btn btn-primary btn-action mr-1">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                            </button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            @endif
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
