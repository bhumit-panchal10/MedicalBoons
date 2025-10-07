@extends('layouts.front')

<style>
    @media (max-width: 767px) {
  .testimonial-wrapper .owl-item {
    display: flex;
    justify-content: center;
  }
  .testimonial-wrapper .testimonial-card {
    max-width: 90%;
    text-align: center;
  }
}

</style>

@section('content')
    {!! Toastr::message() !!}
    <div class="banner-wrapper">
        <div class="banner-section banner-bg ">
            
            <img src="{{ asset('assets/images/Front/newbanner.jpeg') }}" class="img-fluid" style="width:100%"/>
            <a href="{{ route('Front.Plan') }}" class="btn popular-btn explore-btn" >Explore Plan</a>
            <!-- Left Content -->
            
        </div>
    </div>

    <!-- <---------------------------------Section-2------------------------------------------->

    <div class="Accessible-Services align-items-center p-3 p-md-5" id="popular-profiles">
        <div class="d-flex justify-content-center align-items-center mb-3">
            <div class="left">
                <span class="fw-bold fs-4 popular-title-green">Accessible </span>
                <span class="fw-bold fs-4 popular-title-pink">Services</span>
            </div>
        </div>

        <div class="pera">
            <p class="fs-6">
                We provide a wide range of affordable healthcare services — from
                discounted and complimentary OPDs to physiotherapy, radiology, and lab
                testing. Imaging, healing, fitness, and home care visits are all
                designed to support your well-being.
            </p>
        </div>

        <!-- Static Cards Grid -->
        <div class="row mt-4  justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center  Accessible-Services-card">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="profile-image-wrapper mb-3">
                            <img src="{{ asset('assets/images/Front/opd.png') }}" alt="Arthritis Profile"
                                class="w-100 h-100 object-fit-fill" />
                        </div>
                        <h5 class="card-title mb-2">DR's Consultation (Free + Discounted)</h5>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center  Accessible-Services-card">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="profile-image-wrapper mb-3">
                            <img src="{{ asset('assets/images/Front/hospitalization.jpg') }}" alt="Lipid Profile"
                                class="w-100 h-100 object-fit-cover" />
                        </div>
                        <h5 class="card-title mb-2">
                            Hospitalization
                        </h5>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center  Accessible-Services-card">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="profile-image-wrapper mb-3">
                            <img src="{{ asset('assets/images/Front/Lab Testing.png') }}" alt="Lipid Profile"
                                class="w-100 h-100 object-fit-fill" />
                        </div>
                        <h5 class="card-title mb-2">Lab Test</h5>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center  Accessible-Services-card">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="profile-image-wrapper mb-3">
                            <img src="{{ asset('assets/images/Front/Imaging Services.jpg') }}" alt="Arthritis Profile"
                                class="w-100 h-100 object-fit-fill" />
                        </div>
                        <h5 class="card-title mb-2">Radiology Services</h5>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center  Accessible-Services-card">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="profile-image-wrapper mb-3">
                            <img src="{{ asset('assets/images/Front/Radiology Services.jpg') }}" alt="Diabetic"
                                class="w-100 h-100 object-fit-fill" />
                        </div>
                        <h5 class="card-title mb-2">Imaging Services</h5>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center  Accessible-Services-card">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="profile-image-wrapper mb-3">
                            <img src="{{ asset('assets/images/Front/Physiotherapy.jpg') }}" alt="Diabetic"
                                class="w-100 h-100 object-fit-fill" />
                        </div>
                        <h5 class="card-title mb-2">Physiotherapy</h5>
                    </div>
                </div>
            </div>
            <!-- Card 1 -->
            

            

            
            <!-- Card 1 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center  Accessible-Services-card">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="profile-image-wrapper mb-3">
                            <img src="{{ asset('assets/images/Front/Healing.png') }}" alt="Arthritis Profile"
                                class="w-100 h-100 object-fit-fill" />
                        </div>
                        <h5 class="card-title mb-2">Healing</h5>
                    </div>
                </div>
            </div>

            

            <!-- Card 3 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center  Accessible-Services-card">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="profile-image-wrapper mb-3">
                            <img src="{{ asset('assets/images/Front/homecareimage.jpg') }}" alt="Diabetic"
                                class="w-100 h-100 object-fit-cover" />
                        </div>
                        <h5 class="card-title mb-2">Home Care</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <---------------------------------Section-3------------------------------------------->

    <div class="">
        <div class="popular-packages align-items-center p-4 p-md-5" id="popular-packages">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="col-md-11 text-center left popular-heading">
                    <span class="text-green fw-bold fs-4">Membership</span>
                    <span class="text-pink fw-bold fs-4">Plans</span>
                </div>
                <div class="col-md-1 right">
                    <a href="{{ route('Front.Plan') }}">
                        <button type="button" class="btn popular-btn">View All</button>
                    </a>
                </div>
            </div>

            <div class="pera">
                <p class="fs-6">
                    Discover our range of in-demand healthcare packages, tailored to
                    meet diverse needs. From comprehensive full-body checkups to
                    specialised profiles, we have the perfect package to address your
                    health requirements efficiently and effectively.
                </p>
            </div>

            <div id="customPackageCarousel" class="mt-4">
                <div class="custom-carousel-viewport">
                    <div class="custom-carousel-track">
                        @foreach ($plans as $plan)
                            <a href="{{ route('Front.PlanDetail', $plan->slugname) }}" class="card carousel-card">
                                <img src="{{ asset('upload/plan-images/' . $plan->plan_image) }}"
                                    class="card-img-top rounded img-border" alt="Full Body Checkup" />
                                <div class="card-body d-flex justify-content-between">
                                    <h6 class="card-title mb-0">{{ $plan->name }}</h6>
                                     @if($plan->is_corporate == 0)
                                       <h5 class="card-title mb-0">{{ $plan->amount }}</h5>
                                     @endif

                                    <p class="card-text text-muted small">
                                        {{-- {{ $plan->terms_and_condition }} --}}
                                    </p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="custom-carousel-controls">
                    <button id="prevBtn" class="prevBtn">&lt; Prev</button>
                    <button id="nextBtn" class="nextBtn">Next &gt;</button>
                </div>
            </div>
        </div>
    </div>

    <!-- <---------------------------------Section-4------------------------------------------->

    <!-- Popular Tests Section -->
    <div class="">
        <div class="basic-tests-section p-4 p-md-5 section-container" id="popular-tests">
            <div class="d-flex  align-items-center mb-3">
                <div class="col-md-11 section-title gap-1" style="margin-bottom:0">
                    <!--<span class="text-pink fw-bold fs-4">Popular Packages</span>-->
                    <span class="fw-bold fs-4 popular-title-green">Popular </span>
                <span class="fw-bold fs-4 popular-title-pink">Packages</span>
                </div>
                <div class="col-md-1 section-action">
                    <a href="{{ route('Front.Plan') }}">
                        <button type="button" class="btn view-all-btn">View All</button>
                    </a>
                </div>
            </div>

            <div class="pera">
                <p class="fs-6">
                    Explore our extensive selection of frequently requested medical
                    tests including Lipid Profile, Basic Diabetes Package, H1N1 (Swine
                    Flu), etc, to prioritise your health with confidence and
                    convenience.
                </p>
            </div>

            <div id="customTestsCarousel" class="mt-4">
                <div class="custom-carousel-viewport">
                    <div class="custom-carousel-track" id="testsCarouselTrack">
                      <!--@if (!empty($data[0]['labmaster']))-->
                      <!--  @foreach ($data[0]['labmaster'] as $d)-->
                            <div class="tests-carousel-item">
                                <div class="test-card card text-center h-100">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <div class="test-logo rounded-circle overflow-hidden mb-3">

                                            <img src="{{ asset('/assets/images/Front/diabetes_heart_care.png') }}"
                                            alt="Diabetes and Heart Care Profile" class="w-100 h-100 object-fit-cover" />
                                        </div>
                                        <h5 class="card-title mb-2">Diabetes and Heart Care</h5>
                                        <!--<button class="btn book-now-btn mt-auto">Book Now</button>-->
                                    </div>
                                </div>
                            </div>
                             <div class="tests-carousel-item">
                                <div class="test-card card text-center h-100">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <div class="test-logo rounded-circle overflow-hidden mb-3">
                                             <img src="{{ asset('/assets/images/Front/fitness.png') }}"
                                            alt="Diabetes and Heart Care Profile" class="w-100 h-100 object-fit-cover" />
                                        </div>
                                        <h5 class="card-title mb-2">fitness fatigue care</h5>
                                        <!--<button class="btn book-now-btn mt-auto">Book Now</button>-->
                                    </div>
                                </div>
                            </div>
                            <div class="tests-carousel-item">
                                <div class="test-card card text-center h-100">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <div class="test-logo rounded-circle overflow-hidden mb-3">
                                            <img src="{{ asset('/assets/images/Front/Hormone_profile.png') }}"
                                            alt="Diabetes and Heart Care Profile" class="w-100 h-100 object-fit-cover" />
                                        </div>
                                        <h5 class="card-title mb-2">Hormone Profile</h5>
                                        <!--<button class="btn book-now-btn mt-auto">Book Now</button>-->
                                    </div>
                                </div>
                            </div>
                             <div class="tests-carousel-item">
                                <div class="test-card card text-center h-100">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <div class="test-logo rounded-circle overflow-hidden mb-3">
                                            <img src="{{ asset('/assets/images/Front/complete_health_checkup.png') }}"
                                            alt="Diabetes and Heart Care Profile" class="w-100 h-100 object-fit-cover" />
                                        </div>
                                        <h5 class="card-title mb-2">Complete Health Check-UP</h5>
                                        <!--<button class="btn book-now-btn mt-auto">Book Now</button>-->
                                    </div>
                                </div>
                            </div>
                             <div class="tests-carousel-item">
                                <div class="test-card card text-center h-100">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <div class="test-logo rounded-circle overflow-hidden mb-3">
                                            <img src="{{ asset('/assets/images/Front/pcos_pcod.png') }}"
                                            alt="Diabetes and Heart Care Profile" class="w-100 h-100 object-fit-cover" />
                                        </div>
                                        <h5 class="card-title mb-2">PCOD/PCOS profile</h5>
                                        <!--<button class="btn book-now-btn mt-auto">Book Now</button>-->
                                    </div>
                                </div>
                            </div>
                        <!--@endforeach-->
                        <!--@endif-->
                    </div>
                </div>
                <div class="custom-carousel-controls">
                    <button id="testPrevBtn" class="testPrevBtn">&lt; Prev</button>
                    <button id="testNextBtn" class="testNextBtn">Next &gt;</button>
                </div>
            </div>
        </div>
    </div>
    <!-- <---------------------------------Section-5-------------------------------------------->

    <div class="popular-profiles-section align-items-center p-3 p-md-5" id="popular-profiles">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="left">

                <span class="fw-bold fs-4 popular-title-green">{{ $data[1]['name'] ?? '' }}</span>
            </div>
            <div class="right">
                <a href="{{ route('Front.Plan') }}">
                    <button type="button" class="btn view-all-btn">View All</button>
                </a>
            </div>
        </div>

        <div class="pera">
            <p class="fs-6">
                Explore our popular health profiles, including the Lipid Profile,
                Arthritis Profile, Cancer Marker Profile for Females, and Cancer
                Marker Profile for Males. Prioritise your health with these
                comprehensive and convenient testing options.
            </p>
        </div>

        <!-- Static Cards Grid -->
        <div class="row mt-4 gap-3 justify-content-center">
            <!-- Card 1 -->
            @if (!empty($data[1]['labmaster']))
            @foreach ($data[1]['labmaster'] as $d1)
                <div class="col-md-3 mb-4">
                    <div class="card h-100 text-center shadow-sm profile-card">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="profile-image-wrapper mb-3">
                                <img src="{{ asset('/upload/LabTest-images/' . $d1['image']) }}" alt="Arthritis Profile"
                                    class="w-100 h-100 object-fit-cover" />
                            </div>
                            <h5 class="card-title mb-2">{{ $d1['Test_Name'] ?? '' }}</h5>
                            <button class="btn fw-bold book-now-btn">Book Now</button>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
    </div>

    <!-- <---------------------------------Section-6------------------------------------------->

    <link rel="stylesheet" href="../../style.css" />

    <div class="why-medicalboons-section py-4 bg-light-gray">
        <div class="text-center mb-5">
            <h1 class="section-heading text-white m-0">
                <span class="highlight-green fw-bold">Why Choose</span>
                <span class="highlight-pink fw-bold">Medical Boons?</span>
            </h1>
        </div>

        <div class="container">
            <div class="row text-black">
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="feature d-flex align-items-start mb-4">
                        <img src="{{ asset('assets/images/Front/affrodable.png') }}"
                            alt="Your Lab at Home" />
                        <div class="ms-3">
                            <h5 class="fw-bold">Affordable Care Model</h5>
                            <p>
                                Through our Health Card, enjoy significant cost savings on healthcare services.
                            </p>
                        </div>
                    </div>

                    <div class="feature d-flex align-items-start mb-4">
                        <img src="{{ asset('assets/images/Front/local_focus.png') }}" alt="Local Focus" />
                        <div class="ms-3">
                            <h5 class="fw-bold">Local Focus</h5>
                            <p>
                               Serving Ahmedabad with prominence and familiarity.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="feature d-flex align-items-start mb-4">
                        <img src="{{ asset('assets/images/Front/realiable_icon-removebg-preview.png') }}"
                            alt="Sample Collection" />
                        <div class="ms-3">
                            <h5 class="fw-bold">Reliable Network</h5>
                            <p>
                                We carefully choose partners for quality and credibility.
                            </p>
                        </div>
                    </div>

                    <div class="feature d-flex align-items-start mb-4">
                        <img src="{{ asset('assets/images/Front/user_experience.png') }}" alt="Simple User Experience" />
                        <div class="ms-3">
                            <h5 class="fw-bold">Simple User Experience</h5>
                            <p>
                               Transparent process from signup to service delivery.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <---------------------------------Section-7------------------------------------------->

    <div class="how-it-works-section">
        <div class="section-title">
            <!--<h1 class="title-text">How Medical Boons Works</h1>-->
            <span class="fw-bold fs-4 popular-title-green " style="margin-right:5px">How Medical </span>
                <span class="fw-bold fs-4 popular-title-pink"> Boons Works</span>
        </div>

        <div class="steps-row row text-center justify-content-center g-4">
            <div class="step col-md-3 col-sm-6">
                <img src="{{ asset('assets/images/Front/Search and Book Lab Tests at Your Doorstep.png') }}"
                    class="step-icon" alt="Step 1" />
                <h5 class="step-title">Search on App or Call us</h5>
                <p class="step-description text-muted">
                    Experience a seamless process to search and book lab tests, all from
                    the comfort of your home.
                </p>
            </div>

            <div class="step col-md-3 col-sm-6">
                <img src="{{ asset('assets/images/Front/On-Time Home Sample Collection.jpg') }}" class="step-icon"
                    alt="Step 2" />
                <h5 class="step-title">On-Time Appointment Booking</h5>
                <p class="step-description text-muted">
                    Our in-house phlebotomists are assigned for home sample collection,
                    ensuring they reach your desired location on time.
                </p>
            </div>

            <div class="step col-md-3 col-sm-6">
                <img src="{{ asset('assets/images/Front/Cold Chain Logistics.jpg') }}" class="step-icon"
                    alt="Step 3" />
                <h5 class="step-title">Follow Up Schedule</h5>
                <p class="step-description text-muted">
                    Rest assured, your collected samples are securely delivered to the
                    selected lab using cold chain logistics for optimal sample
                    integrity.
                </p>
            </div>

            <div class="step col-md-3 col-sm-6">
                <img src="{{ asset('assets/images/Front/On-Time Reports.png') }}" class="step-icon" alt="Step 4" />
                <h5 class="step-title">Report And Reviews</h5>
                <p class="step-description text-muted">
                    Access your digital reports promptly as per the respective
                    turnaround times (TAT), available on mobile app.
                </p>
            </div>
        </div>
    </div>

    <!-- <---------------------------------Section-8------------------------------------------->

    <div class="" id="social">
        <div class="container">
            <div class="row align-items-center playstroapp">
                <!-- Left Side: Text + Buttons -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="promo-heading">
                        <span class="promo-green">Buy a Plan Now & </span><br />
                        <span class="promo-pink">Start Saving</span>
                    </h2>
                    <p class="promo-description">
                        Download the Medical Boons App and book Lab Tests as per your
                        convenience. Experience a hassle free booking process through our
                        mobile application.
                    </p>
                    <div class="d-flex gap-3">
                        <!-- Google Play Button -->
                        <a href="https://play.google.com/store/apps/details?id=com.apollo.medical_boons" target="_blank" class="google-play-btn">
                            <img src="{{ asset('assets/images/Front/playstore.png') }}" alt="Google Play" width="20"
                                class="me-2" />
                            Google Play
                        </a>
                    </div>
                </div>

                <!-- Right Side: Image -->
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/images/Front/contact-us.png') }}" alt="Curelo App Preview"
                        class="app-promo-image" />
                </div>
            </div>
        </div>
    </div>

    <!-- <---------------------------------Section-9------------------------------------------->

    <section class="trusted-clients">
        <div class="d-flex justify-content-between align-items-center mb-4 position-relative px-3 px-md-5">
            <h4 class="section-heading text-center mx-auto" style="font-size: 2rem">
                <span class="highlight-green">Top & Trusted Network-</span>
                <span class="highlight-pink">Partners</span>
            </h4>
            <a href="{{ route('Front.AccessibleServices') }}">
                <button type="button" class="btn popular-btn">View All</button>
            </a>
        </div>

        <div class="client-carousel">
            <div class="client-track">
                @foreach ($Ourclients as $Ourclient)
                    <div class="client-logo">
                        <img src="{{ asset('/upload/OurClient-images/' . $Ourclient->image) }}" alt="Client 1" />
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- <---------------------------------Section-10------------------------------------------->

    <section class="testimonial-section">
        <div class="container">
            <h2 class="section-title gap-1">
                <span class="green-text">Happy</span>
                <span class="pink-text">Customers</span>
            </h2>
            <!--<div class="testimonial-wrapper">-->
            <!--    <div class="testimonial-track">-->
            <!--        @foreach ($Testimonial as $Testimoni)-->
            <!--            <div class="testimonial-card">-->
            <!--                <img src="{{ asset('/upload/testimonial/' . $Testimoni->photo) }}" class="testimonial-img"-->
            <!--                    alt="Customer" />-->
            <!--                <h5 class="testimonial-name">{{ $Testimoni->name ?? '' }}</h5>-->
            <!--                <p class="testimonial-text">-->
            <!--                    {{ $Testimoni->comment ?? '' }}-->
            <!--                </p>-->
            <!--            </div>-->
            <!--        @endforeach-->

            <!--    </div>-->
            <!--</div>-->
            <div class="testimonial-wrapper">
    <div class="owl-carousel owl-theme mx-auto">
        @foreach ($Testimonial as $Testimoni)
            <div class="testimonial-card text-center p-3">
                <img src="{{ asset('/upload/testimonial/' . $Testimoni->photo) }}"
                     class="testimonial-img mx-auto mb-3"
                     alt="Customer"
                     style="width:80px;height:80px;border-radius:50%;object-fit:cover;" />
                <h5 class="testimonial-name">{{ $Testimoni->name ?? '' }}</h5>
                <p class="testimonial-text text-center">
                    {{ $Testimoni->comment ?? '' }}
                </p>
            </div>
        @endforeach
    </div>
</div>
        </div>
    </section>
@endsection
