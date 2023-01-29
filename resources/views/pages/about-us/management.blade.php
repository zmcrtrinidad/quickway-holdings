@extends('layouts.app')
@section('title', 'Our Management')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center"
    style="background-image: url('{{ asset('img/about-header.jpg') }}');">
    <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Management</h2>
        <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about-us') }}">About</a></li>
            <li>Our Management</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->
<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6 " data-aos="fade-up" data-aos-delay="100">
                <div class="team-member ">
                    <div class="member-img">
                        <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                    </div>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="team-member">
                    <div class="member-img">
                        <img src="{{ asset('img/team/team-2.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Sarah Jhonson</h4>
                        <span>Product Manager</span>
                    </div>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="team-member">
                    <div class="member-img">
                        <img src="{{ asset('img/team/team-3.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                    </div>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="team-member">
                    <div class="member-img">
                        <img src="{{ asset('img/team/team-4.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Amanda Jepson</h4>
                        <span>Accountant</span>
                    </div>
                </div>
            </div><!-- End Team Member -->

        </div>

    </div>
</section><!-- End Team Section -->
@endsection
