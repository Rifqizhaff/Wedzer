@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">New Wedding Packages</h1>
            
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('packages.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name :</label>
                        <input type="text" class="form-control" name="name" placeholder="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="category">Category :</label>
                        <input type="number" class="form-control" name="category" placeholder="category [1-11]" value="{{ old('category') }}">
                    </div>

                    <div class="form-group">
                        <label for="price">Price :</label>
                        <input type="number" class="form-control" name="price" placeholder="price" value="{{ old('price') }}">
                    </div>

                    <div class="form-group">
                        <label for="image">Image :</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Create
                    </button>
                </form>
            </div>
        </div>
        
    </div>
    <!-- /.container-fluid -->
@endsection
