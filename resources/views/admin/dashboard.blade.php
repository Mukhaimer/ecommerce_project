@extends("layouts.admin")
@section('content')
    <div class="container">
        <div class="btn-group-vertical mt-5 ">
            <a href="{{ route('users.index') }}" class="btn btn-primary mt-2">Users</a>
            <a href="{{ route('roles.index') }}" class="btn btn-primary mt-2">Roles</a>
            <a href="{{ route('categories.index') }}" class="btn btn-primary mt-2">Category</a>
            <a href="{{ route('products.index') }}" class="btn btn-primary mt-2">Products</a>
        </div>
    </div>
@endsection
