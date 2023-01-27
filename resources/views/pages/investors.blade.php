@extends('layouts.app')
@section('title', 'Investor Relations')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center"
    style="background-image: url('{{ asset('img/about-header.jpg') }}');">
    <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Investor Relations</h2>
        <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Investor Relations</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->
<!-- ======= Features Section ======= -->
<section id="features" class="features">

    <div class="container" data-aos="fade-up">
        <div class="row gy-4">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="my-5">
                    <h3 class="my-2">Powerful Features for Your Business</h3>
                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque in. Et ligula
                        ullamcorper malesuada proin. Pharetra convallis posuere morbi leo urna. Scelerisque viverra
                        mauris
                        in aliquam sem.</small>
                </div>
                <div class="row gy-4 ">
                    <div class="col-md-6">
                        <div class="icon-list d-flex">
                            <i class="ri-store-line" style="color: #ffbb2c;"></i>
                            <span>Easy Cart Features</span>
                        </div>
                    </div><!-- End Icon List Item-->

                    <div class="col-md-6">
                        <div class="icon-list d-flex">
                            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                            <span>Sit amet consectetur adipisicing</span>
                        </div>
                    </div><!-- End Icon List Item-->

                    <div class="col-md-6">
                        <div class="icon-list d-flex">
                            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                            <span>Ipsum Rerum Explicabo</span>
                        </div>
                    </div><!-- End Icon List Item-->

                    <div class="col-md-6">
                        <div class="icon-list d-flex">
                            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                            <span>Easy Cart Features</span>
                        </div>
                    </div><!-- End Icon List Item-->

                    <div class="col-md-6">
                        <div class="icon-list d-flex">
                            <i class="ri-database-2-line" style="color: #47aeff;"></i>
                            <span>Easy Cart Features</span>
                        </div>
                    </div><!-- End Icon List Item-->

                    <div class="col-md-6">
                        <div class="icon-list d-flex">
                            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                            <span>Sit amet consectetur adipisicing</span>
                        </div>
                    </div><!-- End Icon List Item-->

                    <div class="col-md-6">
                        <div class="icon-list d-flex">
                            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                            <span>Ipsum Rerum Explicabo</span>
                        </div>
                    </div><!-- End Icon List Item-->

                    <div class="col-md-6">
                        <div class="icon-list d-flex">
                            <i class="ri-base-station-line" style="color: #ff5828;"></i>
                            <span>Easy Cart Features</span>
                        </div>
                    </div><!-- End Icon List Item-->
                </div>
            </div>
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container" data-aos="fade-up">

                    <div class="portfolio-isotope" data-portfolio-filter="filter-manual" data-portfolio-layout="masonry"
                        data-portfolio-sort="original-order">

                        <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                            <li data-filter=".filter-stockholders" class="filter-active">Stockgholders</li>
                            <li data-filter=".filter-report">Annual Report</li>
                        </ul><!-- End Portfolio Filters -->

                        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">

                            <div class="col-lg-4 col-md-6 portfolio-item filter-stockholders">
                                <img src="{{ asset('img/portfolio/default-bg.png') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Stockholder</h4>
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
                        </div><!-- End Portfolio Container -->
                    </div>
                </div>
            </section><!-- End Portfolio Section -->
        </div>
    </div>
</section><!-- End Features Section -->

<!-- ======= Recent Blog Posts Section ======= -->
@endsection
