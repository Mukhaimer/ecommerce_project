@extends('layouts.app')
@section('content')
<div class="container">
@foreach ($products as $product)
<div class="col-md-3 mt-5 trending">
        <div class="card">
            <img src="{{ asset('img/' . $product->image) }}" >
            <div class="card-body">
                <h5>{{ $product->name }}</h5>
                <small>{{ $product->selling_price }}</small>
            </div>
        </div>

</div>
@endforeach
</div>
@endsection
