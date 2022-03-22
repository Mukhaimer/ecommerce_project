@extends('layouts.admin')
@section('content')

    <div class="container">
        <h1 class="text-center">Create users</h1>
        <form method="post" action="{{route('users.update' , $user->id)}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{$user->password}}">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection()
