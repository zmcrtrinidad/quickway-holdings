@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    {{-- <img src="{{ asset('img/QHI.png') }}" class="img-fluid" alt=""> --}}
                    <h2 data-aos="fade-up">Quickway Holdings, Inc.</h2>
                    <blockquote data-aos="fade-up" data-aos-delay="100">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis cum recusandae eum
                            laboriosam voluptatem repudiandae odio, vel exercitationem officiis provident minima. </p>
                    </blockquote>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="btn-get-started">Get Started</a>
                        {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                        class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
                    </div>

                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->
    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>WHO ARE WE</h2>
            </div>
            <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
                <div class="col-xl-5 img-bg" style="background-image: url('{{ asset('img/cta-bg.jpg') }}')"></div>
                <div class="col-xl-7 slides  position-relative">
                    <div class="slides-1 swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Let's grow your business together</h3>
                                    <h4 class="mb-3">Optio reiciendis accusantium iusto architecto at quia minima maiores
                                        quidem, dolorum.</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, ipsam
                                        perferendis asperiores explicabo vel tempore velit totam, natus nesciunt accusantium
                                        dicta quod quibusdam ipsum maiores nobis non, eum. Ullam reiciendis dignissimos
                                        laborum aut, magni voluptatem velit doloribus quas sapiente optio.</p>
                                </div>
                            </div><!-- End slide item -->

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Unde perspiciatis ut repellat dolorem</h3>
                                    <h4 class="mb-3">Amet cumque nam sed voluptas doloribus iusto. Dolorem eos aliquam
                                        quis.
                                    </h4>
                                    <p>Dolorem quia fuga consectetur voluptatem. Earum consequatur nulla maxime
                                        necessitatibus cum accusamus. Voluptatem dolorem ut numquam dolorum delectus autem
                                        veritatis facilis. Et ea ut repellat ea. Facere est dolores fugiat dolor.</p>
                                </div>
                            </div><!-- End slide item -->

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Aliquid non alias minus</h3>
                                    <h4 class="mb-3">Necessitatibus voluptatibus explicabo dolores a vitae voluptatum.
                                    </h4>
                                    <p>Neque voluptates aut. Soluta aut perspiciatis porro deserunt. Voluptate ut itaque
                                        velit. Aut consectetur voluptatem aspernatur sequi sit laborum. Voluptas enim
                                        dolorum fugiat aut.</p>
                                </div>
                            </div><!-- End slide item -->

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Necessitatibus suscipit non voluptatem quibusdam</h3>
                                    <h4 class="mb-3">Tempora quos est ut quia adipisci ut voluptas. Deleniti laborum
                                        soluta
                                        nihil est. Eum similique neque autem ut.</h4>
                                    <p>Ut rerum et autem vel. Et rerum molestiae aut sit vel incidunt sit at voluptatem.
                                        Saepe dolorem et sed voluptate impedit. Ad et qui sint at qui animi animi rerum.</p>
                                </div>
                            </div><!-- End slide item -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>

            </div>

        </div>
    </section><!-- End Why Choose Us Section -->
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Our Sister Companies</h2>
            </header>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><a href="https://strongholdinsurance.com.ph/" target="_blank"><img
                                src="{{ asset('img/companies/stronghold.png') }}" class="img-fluid" alt=""></a>


                    </div>
                    <div class="swiper-slide"><a href="https://sterling-insurance.com.ph/sici/" target="_blank"><img
                                src="{{ asset('img/companies/sterling.png') }}" class="img-fluid" alt=""></a>


                    </div>
                    <div class="swiper-slide"><a href="https://www.milestoneguaranty.com/wp2/" target="_blank"><img
                                src="{{ asset('img/companies/milestone.png') }}" class="img-fluid" alt=""></a>

                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.bethelgen.com/" target="_blank"><img
                                src="{{ asset('img/companies/bethel.png') }}" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section><!-- End Clients Section -->

@endsection
