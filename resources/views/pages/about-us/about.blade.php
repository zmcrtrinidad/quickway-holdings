@extends('layouts.app')
@section('title', 'About Us')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center"
    style="background-image: url('{{ asset('img/about-header.jpg') }}');">
    <div class="container position-relative d-flex flex-column align-items-center">

        <h2>About</h2>
        <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>About</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
            <div class="col-lg-4">
                <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8">
                <div class="content ps-lg-5">
                    <h3>Quickway Holdings, Inc.</h3>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident
                    </p>
                    {{-- <ul>
                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate
                            velit.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</li>
                    </ul> --}}
                </div>
            </div>
        </div>

    </div>
</section><!-- End About Section -->

<!-- ======= Our Services Section ======= -->
<section id="services-list" class="services-list">
    <div class="container" data-aos="fade-up">

        <div class="row gy-5">
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
                <div>
                    <h4 class="title"><a href="#" class="stretched-link">Our Mission</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                        sint occaecati cupiditate non provident</p>
                </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
                <div>
                    <h4 class="title"><a href="#" class="stretched-link">Our Vision</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat tarad limino ata</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
                <div>
                    <h4 class="title"><a href="#" class="stretched-link">Values</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur</p>
                </div>
            </div><!-- End Service Item -->
        </div>

    </div>
</section><!-- End Our Services Section -->

<!-- ======= Services Cards Section ======= -->

<!-- ======= Call To Action Section ======= -->
<section id="call-to-action" class="call-to-action">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h3>Need Anything?</h3>
                <p>We are here to assist. Contact us by phone or email.</p>
                <a class="cta-btn" href="#">Contact Us</a>
            </div>
        </div>

    </div>
</section><!-- End Call To Action Section -->

@endsection
