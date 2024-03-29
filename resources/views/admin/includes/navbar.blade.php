<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('admin.dashboard') }}">dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @if (LaravelLocalization::getCurrentLocale() == "en")
                            <li><a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('ar') }}">اللغه العربيه</a></li>
                        @else
                            <li><a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('en') }}">En</a></li>
                        @endif
                        
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
