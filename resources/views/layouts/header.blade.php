<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('img/QHI.png') }}" class="img-fluid" alt="" >
            <h1 class="d-flex align-items-center">Quickway Holdings, Inc.</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('home') }}" class="active">Home</a></li>
                <li class="dropdown"><a href="{{ route('about-us') }}"><span>About</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ route('bod') }}">Our Board of Directors</a></li>
                        <li><a href="{{ route('boc') }}">Our Group of Companies</a></li>
                        {{-- <li><a href="{{ route('management') }}">Our Management</a></li> --}}
                    </ul>
                </li>
                {{-- <li><a href="{{ route('corporate-governance') }}">Corporate Governance</a></li>
                <li><a href="{{ route('investors') }}">Investor Relations</a></li> --}}
                <li><a href="{{ route('disclosure') }}">Disclosures</a></li>
                {{-- CSR - Corporate Social Responsibilities --}}
                <li><a href="{{ route('csr') }}">CSR</a></li>
                <li><a href="{{ route('contact-us') }}">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header>
