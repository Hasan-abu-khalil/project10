@extends('layouts.master_admin')

@section('title', 'User')

@section('content')


    <!-- Main Content -->
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

                            <h4>User</h4>

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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($users as $user)
                                            @if ($user->role === 'user')
                                                <tr>
                                                    <th scope="row">{{ $user->id }}</th>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>{{ $user->address }}</td>
                                                    <td>{{ $user->city }}</td>
                                                    <td>{{ $user->role }}</td>
                                                    <td class="d-flex flex-row align-items-center ">

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


                                                        <form
                                                            action="{{ route('admin_user.destroy', ['admin_user' => $user->id]) }}"
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
