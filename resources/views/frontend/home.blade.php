@extends('frontend.master_home')
@section('main')

    @include('frontend.banner')
    <!--====== BANNER PART ENDS ======-->

    <!--====== WHO WE ARE PART START ======-->

    @include('frontend.who')

    <!--====== WHO WE ARE PART ENDS ======-->

    @include('frontend.expanded')
    <!--====== SOLUTION PART START ======-->

    @include('frontend.solution')

    <!--====== SOLUTION PART ENDS ======-->

    @include('frontend.service')
    <!--====== LATEST SERVICES PART ENDS ======-->

    <!--====== WHY CHOOSE PART START ======-->

    {{-- @include('frontend.why') --}}

    <!--====== WHY CHOOSE PART ENDS ======-->

    <!--====== CASE STUDIES PART START ======-->

    {{-- @include('frontend.case') --}}

    <!--====== CASE STUDIES PART ENDS ======-->

    <!--====== TEAM MEMBER PART START ======-->

    {{-- @include('frontend.team') --}}

    <!--====== TEAM MEMBER PART ENDS ======-->

    <!--====== CONTACT US PART START ======-->

    @include('frontend.contact')

    <!--====== CONTACT US PART ENDS ======-->

    <!--====== OUE CHOOSE PART START ======-->

    {{-- @include('frontend.choose') --}}

    <!--====== OUE CHOOSE PART ENDS ======-->

    <!--====== MEET US PART START ======-->

    {{-- <div class="meet-us-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="meet-us-item bg_cover d-flex align-items-center justify-content-between"
                        style="background-image: url({{ asset('frontend/assets/images/meet-us-bg.jpg') }})">
                        <h2 class="title">Preparing For Your <br> Business Success</h2>
                        <a class="main-btn" href="#">Meet With Us <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!--====== MEET US PART ENDS ======-->

    <!--====== LATEST NEWS PART START ======-->

    {{-- @include('frontend.news') --}}

    <!--====== LATEST NEWS PART ENDS ======-->

    <!--====== BRAND 2 PART START ======-->

    <div class="brand-2-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="brand-active text-center">
                        {{-- <div class="brand-item pl-5 align-content-center">
                            <img src="{{ asset('frontend/assets/images/logos/logo.png') }}" alt="brand name">
                        </div> --}}

                        <div class="brand-item pl-5 align-content-center">
                            <img src="{{ asset('frontend/assets/images/logos/bhr.png') }}" alt="brand name">
                        </div>
                        <div class="brand-item pl-5 align-content-center">
                            <a href="https://www.albeharconsulting.com" target="_blank">
                                <img src="{{ asset('frontend/assets/images/logos/consultng.png') }}" alt="brand name">
                            </a>
                        </div>
                        <div class="brand-item pl-5 align-content-center">
                            <a href="#" target="_blank">
                                <img src="{{ asset('frontend/assets/images/logos/chemlogo.png') }}" alt="brand name">
                            </a>
                        </div>
                        <div class="brand-item pl-5 align-content-center">
                            <img src="{{ asset('frontend/assets/images/logos/r2p.png') }}" alt="brand name">
                        </div>
                        <div class="brand-item pl-5 text-center">
                            <img src="{{ asset('frontend/assets/images/logos/Edible oils.png') }}" alt="brand name">
                        </div>
                        <div class="brand-item pl-5 text-center">
                            <a href="https://albehar-engineering.com" target="_blank"><img
                                    src="{{ asset('frontend/assets/images/logos/engineering-logo.png') }}"
                                    alt="brand name"></a>
                        </div>
                        <div class="brand-item pl-5 text-center">
                            <img src="{{ asset('frontend/assets/images/logos/paper.png') }}" alt="brand name">
                        </div>
                        <div class="brand-item pl-5 text-center">
                            <img src="{{ asset('frontend/assets/images/logos/TAZWEED.png') }}" alt="brand name">
                        </div>
                    </div> <!-- brand item -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
@endsection
