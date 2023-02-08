@extends('layouts.app')
@section('title', 'Corporate Governance')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('img/bldg.png') }}');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>CORPORATE SOCIAL RESPONSIBILITIES</h2>
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>CSR</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->


    <br><br>
    <h1 class="d-flex justify-content-center">News and Events</h1>
    <section class="section">
        <div class="container">
            <div class="row mb-5">
                {{-- Stronghold Start --}}
                <div class="col-md-4 d-flex  align-items-stretch mt-3">
                    <div class="card w-100 flex">
                        <div class="d-flex align-items-center justify-content-center h-100 w-100 ">
                            <img src="{{ asset('img/news_event/SICI_NE.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body  d-flex align-items-end">
                            <div class="card-body text-center ">
                                <h2 class="title">
                                    {{-- <a href="{{ route('csr-detail') }}">Stronghold Insurance Events </a> --}}
                                    Stronghold Insurance
                                </h2>

                                {{-- <>Find out how our Stronghold Insurance Company has made a
                                    positive impact on the
                                    world
                                    and discover our
                                    commitment to sustainability and social responsibility. --}}

                                <p>Get inspired by the stories of those who have made a difference in others' lives,
                                    and learn how you can create a ripple effect of kindness.</p>

                                <br>
                                <br>


                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="read-more mt-auto d-flex justify-content-center">
                                <a href="https://strongholdinsurance.com.ph/events" class="stretched-link"
                                    target="_blank">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END --}}

                {{-- Sterling Start --}}
                <div class="col-md-4 d-flex  align-items-stretch mt-3">
                    <div class="card w-100 flex">
                        <div class="d-flex  justify-content-center w-100 ">
                            <img src="{{ asset('img/news_event/STER_NE.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body  d-flex ">
                            <div class="card-body text-center ">
                                <h2 class="title">
                                    {{-- <a href="{{ route('csr-detail') }}">Stronghold Insurance Events </a> --}}
                                    Sterling Insurance
                                </h2>

                                <p>Get an inside look at the magnificent events and the vital responsibilities that
                                    made it all possible</p>
                                <br>
                                <br>


                            </div>


                        </div>
                        <div class="card-footer">
                            <div class="read-more mt-auto d-flex justify-content-center">
                                <a href="https://sterling-insurance.com.ph/sici/events/" class="stretched-link"
                                    target="_blank">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>

                        {{-- <footer>
                            <div class="read-more mt-auto d-flex justify-content-center">
                                <a href="" class="st">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </footer> --}}
                    </div>
                </div>
                {{-- End --}}

                {{-- Milestone Start --}}
                <div class="col-md-4 d-flex  align-items-stretch mt-3">
                    <div class="card w-100 flex">
                        <div class="d-flex  justify-content-center w-100 ">
                            <img src="{{ asset('img/news_event/MS_NE.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body  d-flex ">
                            <div class="card-body text-center ">
                                <h2 class="title">
                                    {{-- <a href="{{ route('csr-detail') }}">Stronghold Insurance Events </a> --}}
                                    Milestone Insurance
                                </h2>

                                <p>Explore the impressive achievements and the crucial roles that led to its success.</p>
                                <br>
                                <br>


                            </div>

                        </div>

                        <div class="card-footer">
                            <div class="read-more mt-auto d-flex justify-content-center">
                                <a href="https://www.milestoneguaranty.com/wp2/events/" class="stretched-link"
                                    target="_blank">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End --}}

                {{-- Bethel Start --}}
                <div class="col-md-4 d-flex  align-items-stretch mt-3">
                    <div class="card w-100 flex">
                        <div class="d-flex  justify-content-center w-100 ">
                            <img src="{{ asset('img/news_event/BET_NE.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body  d-flex ">
                            <div class="card-body text-center ">
                                <h2 class="title">
                                    {{-- <a href="{{ route('csr-detail') }}">Stronghold Insurance Events </a> --}}
                                    Bethel Insurance
                                </h2>

                                <p>Learn about the remarkable accomplishments and the responsibilities that made it
                                    possible</p>
                                <br>
                                <br>


                            </div>

                        </div>

                        <div class="card-footer">
                            <div class="read-more mt-auto d-flex justify-content-center">
                                <a href="https://bethelgen.com/news" class="stretched-link" target="_blank">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End --}}



            </div>
        </div>
    </section>
    {{-- End Blog Section --}}

    {{-- Start Sterling Section --}}
    <section class="section">
        <div class="container">
            <div class="row mb-5">

            </div>
        </div>
    </section>
    {{-- End Blog Section --}}




@endsection
