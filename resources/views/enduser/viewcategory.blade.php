    @extends('layouts.app')
    @section('content')
            <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>{{$category->name}}</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            @foreach ($products as $product)
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ url('category/' . $product->category->slug . '/' . $product->slug) }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ url('category/' . $product->category->slug . '/' . $product->slug) }}"><i class="fa fa-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('img/' . $product->image) }}" style="height: 50vh">
                                </div>
                                <div class="down-content">
                                    <h4>{{$product->name}}</h4>
                                    <span>{{$product->selling_price}}</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->
    @endsection
