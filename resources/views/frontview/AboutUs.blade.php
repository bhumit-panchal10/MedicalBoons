@extends('layouts.front')
@section('content')
    <section class="about-us-content last-about-section BackGroundColor">
        <div class="container">
            <h2 class="fw-bold mb-4">
                <span class="text-2">{{ $CMSMaster->strTitle }}</span>
            </h2>

            <p class="fs-5">
                {!! $CMSMaster->strDescription !!}
            </p>

        </div>
    </section>
@endsection
