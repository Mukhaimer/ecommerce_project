@extends('layouts.app')
@section('content')
        <!-- ***** Product Area Starts ***** -->
        <section class="section" id="product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                    <div class="left-images">
                        <img src="{{ asset('img/' . $products->image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4>{{$products->name}}</h4>
                        <span class="price">{{$products->selling_price}}</span>
                        <span class="me-3 text-decoration-line-through">original price
                            :{{ $products->original_price }}</span>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>{{$products->description}}</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>{{$products->small_description}}</p>
                        </div>
                        <div class="quantity-content">
                            <div class="left-content">
                                <h6>No. of Orders</h6>
                            </div>
                            <div class="right-content">
                                <div class="quantity buttons_added">
                                    <form action="{{url('add-to-cart')}}" method="post">
                                        @csrf
                                    <input type="hidden" value="{{ $products->id }}" name="product_id">
                                    <label for="Quantity">Quantity</label>
                                    <div class="input-group text-center mb-3">
                                        <input type="number" name="product_qty" class="w-50 qty-input" min="1" value="1">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <br>
                                    <button type="submit" class="btn btn-success me-3 float-start">Add to Cart<i
                                            class="fa fa-shopping-cart"></i></button>
                                        </form>
                                        <div class="mt-2">
                                        <form action="{{route('wishlist.store')}}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{ $products->id }}" name="product_id">
                                            <button type="submit" class="btn btn-primary me-3 float-start">Add to Wishlist
                                                <i class="fa fa-heart"></i></button>
                                        </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- ***** Product Area Ends ***** -->
@endsection