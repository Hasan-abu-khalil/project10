@extends('layouts.master_admin')
@section('title', 'Create Category')

@section('content')
    {{-- <div class="sidebar-right-side">
        <div class="sidebar-right-table">
            <h1>Create Category</h1>
            <form method="POST" action="{{ route('admin_categorys.store') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" maxlength="30">
                </div>

                <div class="form-group">
                    <label for="image">Image URL</label>

                    <input type="file"name="image" id="image"  class="form-control"  >
                </div>


                <button type="submit" class="btn btn-primary">Add Category</button>
            </form>
        </div>
    </div>
</section> --}}


    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create Category</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin_categorys.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Category Name</label>
                                        <input type="text" name="name" id="name"
                                            class="form-control @error('name') is-invalid @enderror" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                   

                                    <div class="form-group">
                                        <label for="image">Image URL</label>

                                        <input type="file" name="image" id="image"
                                            class="form-control @error('image') is-invalid @enderror" required>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- <div class="form-group">
                                    <label for="description">Category Description</label>
                                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" required></textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                    <button type="submit" class="btn btn-primary">Create Category</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
