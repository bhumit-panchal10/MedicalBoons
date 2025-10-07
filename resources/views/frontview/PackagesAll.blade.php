@extends('layouts.front')
@section('content')
    <section class="package-section AccesibleServiceBody">
        <div class="container">
            <h2 class="package-title">
                <span class="title-part1">Membership</span>
                <span class="title-part2">Plans</span>
            </h2>
            <div class="row g-4">
                @foreach ($plans as $plan)
                    <div class="col-sm-6 col-lg-3">
                        <div class="card package-card text-center">
                            <div class="align-items-center">
                                <img src="{{ asset('/upload/plan-images/' . $plan->plan_image) }}"
                                    alt="Full Body Checkup Plan" class="card-img-top package-image-full img card-image" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title justify-content-between d-flex" style="font-size:25px">
                                    <a href="{{ route('Front.PlanDetail', $plan->slugname) }}"
                                        class="allcard-title">{{ $plan->name }}</a>
                                         @if($plan->is_corporate == 0)
                                        <span class="package-price">₹{{ $plan->amount }}</span>
                                        @endif
                                </h5>
                                <div class="price-book-container justify-content-center d-flex">
                                 <p style="display:contents">   
                                    @if($plan->is_corporate == 1)
                                    <a href="{{ route('Front.ContactUs') }}" class="book-now-button">Contact Us</a>
                                  </p>
                                    @else
                                    <a href="{{ route('Front.Booking', $plan->slugname) }}" class="book-now-button">Book
                                        Now</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
