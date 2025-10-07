
<footer class="footer-section text-white pt-4 pb-4">
    <div class="container">
        <div class="row text-center text-md-start">
            <!-- Left: Logo + Info -->
            <div class="col-md-4 mb-4">
                <div class="logo-container">
                    <a href="{{ route('Front.index')}}">
                    <img src="{{ asset('assets/images/Front/new-logo-color.png') }}" alt="Curelo Logo"
                        class="logo-image" />
                        </a>
                </div>
                <div class="mt-3 text-center" >
                    <p class="small mb-1 text-center text-md-start">© 2025 Medical Boons, All rights reserved.</p>
                </div>
            </div>

            <!-- Middle: Links & Social -->
            <div class="col-md-4 mb-4">
                <div class="row">
                    <!-- Know Us -->
                    <div class="col-md-6">
                        <h6 class="fw-bold">Know Us</h6>
                        <ul class="list-unstyled small">
                            <li><a href="{{ route('Front.index') }}" class="footer-link">Home</a></li>
                            <li>
                                <a href="{{ route('Front.AboutUs', 'AboutUs') }}" class="footer-link">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('Front.Plan') }}" class="footer-link">plans</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Partner With Us -->
                    <div class="col-md-6">
                        <h6 class="fw-bold">Quick Links</h6>
                        <ul class="list-unstyled small mt-3">
                            <li>
                                <a href="{{ route('Front.PartnerWithUs') }}" class="footer-link">Associated Member</a>
                            </li>
                            <li>
                                <a href="{{ route('Front.AboutUs', 'terms-conditions') }}" class="footer-link">Terms &
                                    Conditions</a>
                            </li>
                            <li>
                                <a href="{{ route('Front.AboutUs', 'privacy-policy') }}" class="footer-link">Privacy
                                    Policy</a>
                            </li>
                            <li>
                                <a href="{{ route('Front.AboutUs', 'refund-policy') }}" class="footer-link">Refund
                                    Policy</a>
                            </li>
                            <li>
                                <a href="{{ route('Front.AboutUs', 'ShippingDelivery') }}" class="footer-link">Shipping
                                    &
                                    Delivery</a>
                            </li>
                            <li>
                                <a href="{{ route('Front.AboutUs', 'AboutUs') }}" class="footer-link">About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Social Media Icons -->
                <div class="mt-4">
                    <h6 class="fw-bold mb-3">Follow Us On</h6>
                    <div class="social-icons">
                        <a href="#"><img src="{{ asset('assets/images/Front/facebook.png') }}" alt="Facebook"
                                class="social-icon" /></a>
                        <a href="#"><img src="{{ asset('assets/images/Front/twitter.png') }}" alt="X"
                                class="social-icon" /></a>
                        <a href="#"><img src="{{ asset('assets/images/Front/instagram.png') }}" alt="Instagram"
                                class="social-icon" /></a>
                        <a href="#"><img src="{{ asset('assets/images/Front/linkeidn.png') }}" alt="LinkedIn"
                                class="social-icon" /></a>
                        <a href="#"><img src="{{ asset('assets/images/Front/youtube.png') }}" alt="YouTube"
                                class="social-icon" /></a>
                    </div>
                </div>
            </div>

            <!-- Right: Contact Info + Button -->
            <div class="col-md-4 mb-4">
                <div class="contact-section d-flex flex-column align-items-center">
                    <h6 class="fw-bold">Contact Us</h6>
                    <p class="small mb-1 address-text">
                        C-2, Rajkamal Plaza -A,<br/> Nr C U Shah College,<br />
                        Income Tax, Ashram Road,<br> Ahmedabad. Gujarat,India
                    </p>
                    <p class="small mb-1">info@medicalboons.com</p>
                    <p class="small mb-3">+91 99746 60451</p>
                    <a href="{{ route('Front.ContactUs') }}" class="btn contact-button">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
