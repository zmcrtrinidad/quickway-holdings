@extends('layouts.app')
@section('title', 'Disclosures')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center"
    style="background-image: url('{{ asset('img/about-header.jpg') }}');">
    <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Disclosures</h2>
        <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Disclosures</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>SEC 17-C</h2>
        </div>
        <div class="portfolio-isotope" data-portfolio-filter="filter-manual" data-portfolio-layout="masonry"
            data-portfolio-sort="original-order">

            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter=".filter-2016" class="filter-active">2016</li>
                <li data-filter=".filter-2017">2017</li>
                <li data-filter=".filter-2018">2018</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">

                <div class="col-lg-4 col-md-6 portfolio-item filter-2016">
                    <img src="{{ asset('img/portfolio/default-bg.png') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>2016</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>

                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-2017">
                    <img src="{{ asset('img/portfolio/default-bg.png') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>2017</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class=" col-lg-4 col-md-6 portfolio-item filter-2018">
                    <img src="{{ asset('img/portfolio/default-bg.png') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>2018</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->
            </div><!-- End Portfolio Container -->
        </div>
    </div>
</section><!-- End Portfolio Section -->

@endsection
