<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="{{ asset('enduser/img/logo.png') }}">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">

                        <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="{{ url('viewcategory/men') }}">Men's</a></li>
                        <li class="scroll-to-section"><a href="{{ url('viewcategory/women') }}">Women's</a></li>
                        <li class="scroll-to-section"><a href="{{ url('viewcategory/kids') }}">Kid's</a></li>
                        <li class="scroll-to-section"><a href="{{ url('viewcategory/accessories') }}">accessories</a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="scroll-to-section ">
                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="scroll-to-section">
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="submenu">
                                <a href="javascript:;">{{ Auth::user()->name }}</a>
                                <ul>
                                    <li class="dropdown-item">
                                        <a class="nav-link " aria-current="page" href="{{ route('admin.dashboard') }}">My
                                            Account</a>
                                    </li>
                                
                                <li class="dropdown-item">
                                    <a class="nav-link" href="{{ route('wishlist.index') }}">Wishlist<i
                                            class="fa fa-heart"></i></a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link" href="{{ url('cart') }}">My cart<i class="fa fa-shopping-cart"></i></a>
                                </li>

                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>

                        @endguest
                        <li>
                            <form class="d-flex w-100 " action="/search">
                                <input class="form-control me-2 search-box " id="search-product" type="text"
                                    name="query" placeholder="Search product">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>

</header>
<!-- ***** Header Area End ***** -->
