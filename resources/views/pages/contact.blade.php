@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('img/bldg.png') }}');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Contact</h2>
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Contact</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container position-relative" data-aos="fade-up">

            <div class="row gy-4 d-flex justify-content-end">

                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>6/F Zeta II Annex Building, 191 Salcedo Street, Legaspi Village, Makati City</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>info.quickwayholdings@email.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>8893-0025-26 or 8893-3794</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

                    <form action="{{ route('contact.send') }}" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div><!-- End Contact Form -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3861.7315299120596!2d121.01295970075607!3d14.557339231987442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s6%2FF%20Zeta%20II%20Annex%20Building%2C%20191%20Salcedo%20Street%2C%20Legaspi%20Village%2C%20Makati%20City!5e0!3m2!1sen!2sph!4v1675001642513!5m2!1sen!2sph"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </section><!-- End Contact Section -->

    {{-- <p>Name: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Message: {{ $message }}</p> --}}
@endsection
