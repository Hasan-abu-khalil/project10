@extends('layouts.master_admin')


@section('title', 'Orders')

@section('content')
    {{-- <div class="sidebar-right-side">
        <div class="sidebar-right-table">
            <h1>orders</h1>


            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> user_id</th>
                        <th scope="col">products</th>
                        <th scope="col"> quantity</th>
                        <th scope="col"> total</th>
                        <th scope="col"> date</th>

                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($orders as $order)
                        <tr>
                            <th scope="row">{{ $order->id }}</th>
                            <td>{{ $order->user->id }} -
                                {{ $order->user->name }}</td>
                            <td>{{ $order->products->name }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->total }}</td>
                            <td>{{ $order->date }}</td>



                            <td class="table-form">
                                <form action="{{ route('admin_orders.edit', ['admin_order' => $order->id]) }}"
                                    method="GET">
                                    @csrf
                                    <button class="btn btn-sm btn-secondary" type="submit">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </form>

                                <form action="{{ route('admin_orders.destroy', ['admin_order' => $order->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
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

                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between m-2">

                            <h4>Orders</h4>


                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col"> user_id</th>
                                            <th scope="col"> phone</th>
                                            <th scope="col">products</th>
                                            <th scope="col"> quantity</th>
                                            <th scope="col"> total</th>
                                            <th scope="col"> date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($orders as $order)
                                            <tr>
                                                <th scope="row">{{ $order->id }}</th>
                                                <td>{{ $order->user->id }} -
                                                    {{ $order->user->name }}</td>
                                                <td>{{ $order->user->phone }}</td>
                                                <td>{{ $order->products->name }}</td>
                                                <td>{{ $order->quantity }}</td>
                                                <td>{{ $order->total }}</td>
                                                <td>{{ $order->date }}</td>


                                                <td class="d-flex flex-row align-items-center ">

                                                    <form
                                                        action="{{ route('admin_orders.edit', ['admin_order' => $order->id]) }}"
                                                        method="GET">
                                                        @csrf
                                                        <button style="border:none; outline:none;">
                                                            <a class="btn btn-primary btn-action mr-1">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </button>
                                                    </form>


                                                    <form
                                                        action="{{ route('admin_orders.destroy', ['admin_order' => $order->id]) }}"
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
