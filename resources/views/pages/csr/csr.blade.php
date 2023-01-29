@extends('layouts.app')
@section('title', 'Corporate Governance')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('img/about-header.jpg') }}');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>CORPORATE SOCIAL RESPONSIBILITIES</h2>
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>CSR</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            {{-- <div class="row g-5">
                <div class="" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-5 posts-list">
                        <div class="col-lg-6">
                            <article class="d-flex flex-column">
                                <div class="post-img">
                                    <img src="{{ asset('img/cta-bg.jpg') }}" alt="" class="img-fluid">
                                </div>
                                <h2 class="title">
                                    <a href="{{ route('csr-detail') }}">Dolorum optio tempore voluptas dignissimos cumque
                                        fuga qui
                                        quibusdam quia</a>
                                </h2>

                                <div class="content">
                                    <p>
                                        Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi
                                        praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                    </p>
                                </div>

                                <div class="read-more mt-auto align-self-end">
                                    <a href="{{ route('csr-detail') }}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-6">
                            <article class="d-flex flex-column">
                                <div class="post-img">
                                    <img src="{{ asset('img/cta-bg.jpg') }}" alt="" class="img-fluid">
                                </div>
                                <h2 class="title">
                                    <a href="{{ route('csr-detail') }}">Nisi magni odit consequatur autem nulla
                                        dolorem</a>
                                </h2>
                                <div class="content">
                                    <p>
                                        Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum
                                        voluptatum et. Quo libero rerum voluptatem pariatur nam.
                                    </p>
                                </div>

                                <div class="read-more mt-auto align-self-end">
                                    <a href="{{ route('csr-detail') }}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>

                            </article>
                        </div><!-- End post list item -->
                    </div><!-- End blog posts list -->
                    {{-- <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div><!-- End blog pagination --> --}}
        </div>
        </div> --}}
        </div>
    </section><!-- End Blog Section -->

@endsection
