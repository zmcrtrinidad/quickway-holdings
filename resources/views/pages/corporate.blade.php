@extends('layouts.app')
@section('title', 'Corporate Governance')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('img/about-header.jpg') }}');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Corporate Governance</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Corporate Governance</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="portfolio-isotope" data-portfolio-filter="filter-manual" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order">

                <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter=".filter-manual" class="filter-active">Corporate Governance Manual</li>
                    <li data-filter=".filter-report">Corporate Governance Report</li>
                    <li data-filter=".filter-Committees">Board Committees</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-manual">
                        <img src="{{ asset('img/portfolio/default-bg.png') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Manual 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>

                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-report">
                        <img src="{{ asset('img/portfolio/default-bg.png') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Report 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="{{ asset('img/portfolio/default-bg.png') }}" title="Report 1"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class=" portfolio-item filter-Committees">
                        <div class="section-header pt-3">
                            <h2>Board Committees</h2>
                        </div>
                        <section id="about" class="about">
                            <div class="container" data-aos="fade-up">
                                <div class="row" data-aos="fade-up">
                                    <div class="col-lg-12">
                                        <div class="content ps-lg-5">
                                            <h3>Voluptatem dignissimos provident quasi</h3>
                                            <p>
                                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                                cupidatat non proident
                                            </p>
                                            <ul>
                                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat.</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in
                                                    reprehenderit in voluptate velit.</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="content ps-lg-5">
                                            <h3>Voluptatem dignissimos provident quasi</h3>
                                            <p>
                                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                                cupidatat non proident
                                            </p>
                                            <ul>
                                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat.</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in
                                                    reprehenderit in voluptate velit.</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
