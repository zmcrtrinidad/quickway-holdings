@extends('layouts.app')
@section('title', 'Our Group of Companies')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('img/bldg.png') }}');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Group of Companies</h2>
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about-us') }}">About</a></li>
                <li>Group of Companies</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Team Section ======= -->
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

        <div class="container" data-aos="fade-up">
            {{--
            <header class="section-header">
                <h2>Our Sister Companies</h2>
            </header> --}}

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    {{-- STRONGHOLD --}}
                    <div class="swiper-slide"><a href="https://strongholdinsurance.com.ph/" target="_blank"><img
                                src="{{ asset('img/companies/stronghold.png') }}" class="img-fluid" alt=""></a>
                    </div>
                    {{-- STERLING --}}
                    <div class="swiper-slide"><a href="https://sterling-insurance.com.ph/sici/" target="_blank"><img
                                src="{{ asset('img/companies/sterling.png') }}" class="img-fluid" alt=""></a>
                    </div>
                    {{-- MILESTONE --}}
                    <div class="swiper-slide"><a href="https://www.milestoneguaranty.com/wp2/" target="_blank"><img
                                src="{{ asset('img/companies/milestone.png') }}" class="img-fluid" alt=""></a>
                    </div>
                    {{-- BETHEL --}}
                    <div class="swiper-slide">
                        <a href="https://www.bethelgen.com/" target="_blank"><img
                                src="{{ asset('img/companies/bethel.png') }}" class="img-fluid" alt=""></a>
                    </div>
                    {{-- One Stop Shop --}}
                    <div class="swiper-slide">
                        <a href=""><img src="{{ asset('img/companies/1SS.png') }}" class="img-fluid"
                                alt=""></a>
                    </div>

                    {{-- Craftworks Autoshop Inc --}}
                    <div class="swiper-slide">
                        <a href=""><img src="{{ asset('img/companies/craftsworksV2.png') }}" class="img-fluid"
                                alt=""></a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section><!-- End Clients Section -->
@endsection
