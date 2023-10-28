@extends('layouts.master_admin')

@section('title', 'Edit ROLE')

@section('content')
    {{-- <div class="sidebar-right-side">
        <div class="sidebar-right-table">
            <h1>Edit User</h1>
            <h4 style=" color:#fff;"> user name : {{ $admin_user->name }}</h4>
            <form method="POST" action="{{ route('admin_user.update', ['admin_user' => $admin_user->id]) }}">




                @csrf
                @method('PUT')
                <select class="form-control" id="user_type" name="role">
                    <option value="admin" {{ $admin_user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="user" {{ $admin_user->role === 'user' ? 'selected' : '' }}>User</option>
                </select>

                <button type="submit" class="btn btn-primary">Update User</button>
            </form>
        </div>
    </div>
    </section> --}}

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit ROLE</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin_user.update', ['admin_user' => $admin_user->id]) }}"
                                    method="POST" enctype="multipart/form-data">

                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">

                                        <select class="form-control" id="user_type" name="role">
                                            <option value="admin" {{ $admin_user->role === 'admin' ? 'selected' : '' }}>
                                                Admin</option>
                                            <option value="user" {{ $admin_user->role === 'user' ? 'selected' : '' }}>User
                                            </option>
                                        </select>
                                    </div>




                                    <button type="submit" class="btn btn-primary">Update Role</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
