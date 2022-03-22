@extends('layouts.app')
@section('content')
        <div class="main-banner" id="top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left-content">
                            <div class="thumb">
                                <div class="inner-content">
                                    <h4>We Are Hexashop</h4>
                                    <span>Awesome, clean &amp; creative HTML5 Template</span>
                                    <div class="main-border-button">
                                        <a href="{{ url('cart') }}">Purchase Now!</a>
                                    </div>
                                </div>
                                <img src="{{asset ('enduser/img/left-banner-image.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="right-first-image">
                                        <div class="thumb">
                                            <div class="inner-content">
                                                <h4>Women</h4>
                                                <span>Best Clothes For Women</span>
                                            </div>
                                            <div class="hover-content">
                                                <div class="inner">
                                                    <h4>Women</h4>
                                                    <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                    <div class="main-border-button">
                                                        <a href="{{url('viewcategory/women')}}">Discover More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="{{asset('enduser/img/baner-right-image-01.jpg')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="right-first-image">
                                        <div class="thumb">
                                            <div class="inner-content">
                                                <h4>Men</h4>
                                                <span>Best Clothes For Men</span>
                                            </div>
                                            <div class="hover-content">
                                                <div class="inner">
                                                    <h4>Men</h4>
                                                    <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                    <div class="main-border-button">
                                                        <a href="{{url('viewcategory/men')}}">Discover More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="{{ asset('enduser/img/baner-right-image-02.jpg')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="right-first-image">
                                        <div class="thumb">
                                            <div class="inner-content">
                                                <h4>Kids</h4>
                                                <span>Best Clothes For Kids</span>
                                            </div>
                                            <div class="hover-content">
                                                <div class="inner">
                                                    <h4>Kids</h4>
                                                    <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                    <div class="main-border-button">
                                                        <a href="{{url('viewcategory/kids')}}">Discover More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="{{ asset ('enduser/img/baner-right-image-03.jpg')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="right-first-image">
                                        <div class="thumb">
                                            <div class="inner-content">
                                                <h4>Accessories</h4>
                                                <span>Best Trend Accessories</span>
                                            </div>
                                            <div class="hover-content">
                                                <div class="inner">
                                                    <h4>Accessories</h4>
                                                    <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                    <div class="main-border-button">
                                                        <a href="{{url('viewcategory/accessories')}}">Discover More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="{{ asset('enduser/img/baner-right-image-04.jpg')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Start All Products  --}}
        <section class="section" id="men" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-heading">
                            <h2>Trending Products</h2>
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
                                @foreach ($trending_products as $product)
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
@endsection