@php

    $services = App\Models\Services::with([
        'subservices' => function ($q) {
            $q->where('iStatus', 1)->where('isDelete', 0)->orderBy('subservice_name');
        },
    ])
        ->where('iStatus', 1)
        ->where('isDelete', 0)
        ->orderBy('sequence_no')
        ->get();
@endphp
<style>
    /* Mega dropdown container */
    .dropdown-mega {
        position: absolute;
        top: 100%;
        left: 0;
        width: 600px;
        /* adjust width */
        background: #fff;
        border: 1px solid #ddd;
        display: none;
        z-index: 1000;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Desktop hover */
@media (min-width: 992px) { /* lg and up */
  .nav-item.dropdown:hover .dropdown-mega {
    display: flex;
  }
}

/* Mobile click: when .show is added manually */
.nav-item.dropdown.show .dropdown-mega {
  display: flex;
}

    /* Left column (categories) */
    .dropdown-mega .mega-left {
        width: 40%;
        border-right: 1px solid #eee;
        background: #f9f9f9;
    }

    .dropdown-mega .mega-left a {
        display: block;
        padding: 10px 15px;
        font-weight: 600;
        color: #333;
        text-decoration: none;
    }

    .dropdown-mega .mega-left a:hover {
        background: #007bff;
        color: #fff;
    }

    /* Right column (sub-services) */
    .dropdown-mega .mega-right {
        width: 60%;
        padding: 15px;
        max-height: 300px;
        overflow-y: auto;
        /* scrollable */
    }

    .dropdown-mega .mega-right h6 {
        font-weight: 600;
        margin-bottom: 10px;
    }

    .dropdown-mega .mega-right a {
        display: block;
        padding: 5px 0;
        color: #444;
        text-decoration: none;
        font-size: 14px;
    }

    .dropdown-mega .mega-right a:hover {
        color: #007bff;
    }
</style>

<!-- Sticky Navbar -->
<div class="nav-bar-commone">
    <nav class="navbar navbar-expand-lg py-3 nav-bar-main">
        <div class="container-fluid">
            <!-- Logo and City Selector -->
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('Front.index')}}">
                <img src="{{ asset('assets/images/Front/new-logo-color.png') }}" alt="Medical Boons Logo"
                    class="nav-logo" />
                <!--<span class="fw-bold text-success">Medical</span>-->
                <!--<span class="fw-bold title-word-2">Boons</span>-->
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Nav Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-semibold">
                    <li class="nav-item me-4">
                        <a class="nav-link text-dark" href="{{ route('Front.Plan') }}">Plans</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link text-dark" href="{{ route('Front.AboutUs', 'AboutUs') }}">About Us</a>
                    </li>


                    <li class="nav-item me-4 dropdown">
                        <a class="nav-link text-dark dropdown-toggle" href="#" id="servicesMenu" data-bs-toggle="dropdown" aria-expanded="false">Services</a>

                        <div class=" dropdown-mega">
                            <!-- Left column -->
                            <div class="mega-left">
                                @foreach ($services as $svc)
                                    <a href="#" data-target="svc-{{ $svc->id }}">{{ $svc->name }}</a>
                                @endforeach
                            </div>

                            <!-- Right column -->
                            @foreach ($services as $svc)
                                <div class="mega-right {{ $loop->first ? '' : 'd-none' }}" id="svc-{{ $svc->id }}">
                                    <h6>{{ $svc->name }}</h6>
                                    @foreach ($svc->subservices as $sub)
                                        <a href="#">{{ $sub->subservice_name }}</a>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </li>

                    {{-- <li class="nav-item me-4">
                        <a class="nav-link text-dark" href="#">Services</a>
                    </li> --}}

                    <li class="nav-item me-4">
                        <a class="nav-link d-flex align-items-center gap-1 text-dark" target="_blank" href="https://play.google.com/store/apps/details?id=com.apollo.medical_boons">
                            <img src="{{ asset('assets/images/Front/downloads.png') }}" alt="App" width="18" />
                            Download App
                        </a>
                    </li>
                    <li class="nav-item dropdown me-4">
                        <a class="nav-link dropdown-toggle d-flex align-items-center gap-1 text-dark" href=""
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/images/Front/login.png') }}" alt="Login" width="18" />
                            Login
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm drop-menu">
                            <li>
                                <a class="dropdown-item py-2 px-3 drop-items" href="{{ route('B2B.login') }}"
                                    onmouseover="this.style.backgroundColor='#f0f4ff'"
                                    onmouseout="this.style.backgroundColor='transparent'">
                                    Associate Login
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item py-2 px-3 drop-items" href="{{ route('corporate.login') }}"
                                    onmouseover="this.style.backgroundColor='#f0f4ff'"
                                    onmouseout="this.style.backgroundColor='transparent'">
                                    Corporate Login
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sub Navbar (Service Links + Contact) -->
    <div class="text-white py-2 nav-2-small">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <!-- Left Links -->
            <div class="d-flex gap-3 flex-wrap small fw-medium">
                <a href="#popular-packages" class="text-white text-decoration-none">Membership Plans</a>
                <span>|</span>
                <a href="#popular-tests" class="text-white text-decoration-none">Popular Packages</a>
                <span>|</span>
                <a href="#popular-profiles" class="text-white text-decoration-none">Accessible Services</a>
            </div>

            <!-- Contact Info -->
            <div class="d-flex align-items-center gap-2 mt-2 mt-md-0 small">
                <img src="{{ asset('assets/images/Front/call.png') }}" alt="Call Icon" width="18" height="18" />
                <span>+91 99746 60451</span>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll(".mega-left a").forEach(link => {
        link.addEventListener("mouseover", function() {
            let target = this.getAttribute("data-target");
            document.querySelectorAll(".mega-right").forEach(div => div.classList.add("d-none"));
            document.getElementById(target).classList.remove("d-none");
        });
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const servicesMenu = document.getElementById('servicesMenu');
  const servicesDropdown = servicesMenu.closest('.dropdown');

  servicesMenu.addEventListener('click', function (e) {
    e.preventDefault();
    servicesDropdown.classList.toggle('show'); // toggle open/close
  });

  // Optional: close dropdown when clicking outside
  document.addEventListener('click', function (e) {
    if (!servicesDropdown.contains(e.target)) {
      servicesDropdown.classList.remove('show');
    }
  });

  // existing mega-left hover code stays the same
  document.querySelectorAll(".mega-left a").forEach(link => {
    link.addEventListener("mouseover", function() {
      let target = this.getAttribute("data-target");
      document.querySelectorAll(".mega-right").forEach(div => div.classList.add("d-none"));
      document.getElementById(target).classList.remove("d-none");
    });
  });
});
</script>

