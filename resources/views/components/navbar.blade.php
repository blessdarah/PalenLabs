<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-0">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="margin-right: 0;">
            <img src="{{ asset('PNG/Palen Diagnostics_Color Logo.png') }}" alt="" width="180" height="70">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            {{-- <ul class="navbar-nav me-auto">
                    </ul> --}}

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item fw-normal">
                    <a class="nav-link {{ Request::is('lab-services') ? 'active' : '' }}" aria-current="page"
                        href="/lab-services">Lab Services</a>
                </li>
                <li class="nav-item fw-normal">
                    <a class="nav-link {{ Request::is('doctors') ? 'active' : '' }}" aria-current="page"
                        href="/doctors">Doctors</a>
                </li>
                <li class="nav-item fw-normal">
                    <a class="nav-link {{ Request::is('partners') ? 'active' : '' }}" aria-current="page"
                        href="/partners">Partners</a>
                </li>
                <li class="nav-item fw-normal">
                    <a class="nav-link" aria-current="page" href="/change-lang">En/Fr</a>
                </li>
                <li class="nav-item fw-normal">
                    <a class="btn btn-primary text-white" role="button" aria-current="page" href="/book-a-test">Book a
                        Test</a>
                </li>
                <li class="nav-item fw-normal">
                    @auth
                        <a class="btn btn-success text-white ml-2" role="button" aria-current="page"
                            href="/admin">Dashboard</a>
                    @else
                        <a class="btn btn-danger text-white ml-2" role="button" aria-current="page"
                            href="/admin">Login</a>
                    @endauth
                </li>
            </ul>
            {{-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
        </div>
    </div>
</nav>
