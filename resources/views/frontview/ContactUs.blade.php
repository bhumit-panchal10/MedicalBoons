@extends('layouts.front')
@section('content')
    <section class="py-2 bg-light BackGroundColor" id="contact-us">
        <div class="container">
            <h2 class="fw-bold text-center mb-5">
                <span class="text-forest">Contact</span>
                <span class="text-pink">Us</span>
            </h2>

            <div class="row align-items-center">
                <!-- Contact Form -->
                <div class="col-md-6">
                    <form action="{{ route('Front.ContactUs_sendmail') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required
                                placeholder="Enter your name" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address <span
                                    class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required
                                placeholder="Enter your email" />
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile Number <span
                                    class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="mobile" name="mobile" required
                                placeholder="Enter your number" />
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="subject" name="subject" required
                                placeholder="Subject of your message" />
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Type your message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success text-white rounded-pill px-4 py-2">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Image Section -->
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/images/Front/contactUs.jpg') }}" alt="Contact Us Illustration"
                        class="img-fluid rounded-3 contact-img" />

                    <div class="mt-4">
                        <h5 class="mb-2">Follow us on</h5>
                        <div class="d-flex justify-content-center gap-4">
                            <a href="#" class="text-dark"><img src="{{ asset('assets/images/Front/facebook.png') }}"
                                    alt="Facebook" class="social-icon" /></a>
                            <a href="#" class="text-dark"><img src="{{ asset('assets/images/Front/instagram.png') }}"
                                    alt="Instagram" class="social-icon" /></a>
                            <a href="#" class="text-dark"><img src="{{ asset('assets/images/Front/twitter.png') }}"
                                    alt="Twitter" class="social-icon" /></a>
                            <a href="#" class="text-dark"><img src="{{ asset('assets/images/Front/linkeidn.png') }}"
                                    alt="LinkedIn" class="social-icon" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
