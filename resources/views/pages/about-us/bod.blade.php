@extends('layouts.app')
@section('title', 'Our Board of Directors')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('img/about-header.jpg') }}');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Board Of Directors</h2>
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about-us') }}">About</a></li>
                <li>Our Board of Directors</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-3 col-md-6 " data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member ">
                        <div class="member-img">
                            <img src="{{ asset('img/BOD/MVM.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Ma. Victoria L. Mercado</h4>
                            <span>Chairperson</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('img/BOD/Blank.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>David P. Mercado, Jr</h4>
                            <span>President</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('img/BOD/Blank.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Amiel M. Mercado</h4>
                            <span>Vice-Chairman & EVP</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('img/BOD/Blank.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Maria Pilar B. Mercado</h4>
                            <span>Treasurer</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('img/BOD/PGM.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Romulo I. Delos Reyes, Jr</h4>
                            <span>N/A</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('img/BOD/FHG.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Florentino H. Garces</h4>
                            <span>Corporate Secretary</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>
    </section><!-- End Team Section -->
@endsection
