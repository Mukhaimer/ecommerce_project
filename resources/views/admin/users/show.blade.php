@extends('layouts.admin')
@section('content')

    <div class="container">
        <h1 class="text-center">Show {{$user->name}} Information</h1>
        <form>
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" value="{{$user->name}}" name="name" readonly>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" value="{{$user->email}}" name="email" readonly>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection()
