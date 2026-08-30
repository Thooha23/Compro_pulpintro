<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lions Club Jakarta Pulpintro')</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="font-sans text-gray-800 antialiased">

    {{-- ================= NAVBAR ================= --}}

    <nav class="navbar navbar-light main-navbar sticky-top">

        <div class="container-fluid px-4 navbar-wrapper">

            {{-- ================= BRAND ================= --}}

            <a
                href="{{ route('home') }}"
                class="navbar-brand d-flex align-items-center me-0"
            >

                <img
                    src="{{ asset('assets/images/logo-lions.png') }}"
                    alt="Lions Club"
                    class="navbar-logo me-2"
                >

                <img
                    src="{{ asset('assets/images/logo-jakarta-pulpintro.jpeg') }}"
                    alt="Jakarta Pulpintro"
                    class="navbar-logo-jakarta me-3"
                >

                <div class="brand-title">

                    <div class="title-main">
                        Lions Club
                    </div>

                    <div class="title-sub">
                        Jakarta Pulpintro
                    </div>

                </div>

            </a>


            {{-- ================= MENU ================= --}}

            <div class="navbar-collapse">

                <ul class="navbar-nav mx-auto mb-0">

                    <li class="nav-item">
                        <a
                            href="{{ route('home') }}"
                            class="nav-link"
                        >
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            href="{{ route('about') }}"
                            class="nav-link"
                        >
                            About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            href="{{ route('service') }}"
                            class="nav-link"
                        >
                            Our Service & Impact
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            href="{{ route('partnership') }}"
                            class="nav-link"
                        >
                            Our Partnership
                        </a>
                    </li>

                </ul>


                {{-- ================= ACTION BUTTON ================= --}}

                <div class="navbar-action">

                    <a
                        href="{{ route('join') }}"
                        class="btn btn-join"
                    >
                        Join
                    </a>

                    <a
                        href="#"
                        class="btn btn-fundraising"
                    >
                        Fundraising
                    </a>

                </div>

            </div>

        </div>

    </nav>
    
    <!-- <nav class="navbar navbar-expand-lg navbar-light main-navbar sticky-top">

        <div class="container-fluid px-4 navbar-wrapper">

            {{-- ================= BRAND ================= --}}

            <a
                href="{{ route('home') }}"
                class="navbar-brand d-flex align-items-center me-0"
            >

                <img
                    src="{{ asset('assets/images/logo-lions.png') }}"
                    alt="Lions Club"
                    class="navbar-logo me-2"
                >

                <img
                    src="{{ asset('assets/images/logo-jakarta-pulpintro.jpeg') }}"
                    alt="Jakarta Pulpintro"
                    class="navbar-logo-jakarta me-3"
                >

                <div class="brand-title">

                    <div class="title-main">
                        Lions Club
                    </div>

                    <div class="title-sub">
                        Jakarta Pulpintro
                    </div>

                </div>

            </a>


            {{-- ================= HAMBURGER ================= --}}

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >

                <span class="navbar-toggler-icon"></span>

            </button>


            {{-- ================= MENU ================= --}}

            <div class="collapse navbar-collapse" id="mainNavbar">

                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a href="{{ route('home') }}"
                            class="nav-link">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('about') }}"
                            class="nav-link">
                            About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('service') }}"
                            class="nav-link">
                            Our Service & Impact
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('partnership') }}"
                            class="nav-link">
                            Our Partnership
                        </a>
                    </li>

                </ul>


                {{-- ================= ACTION BUTTON ================= --}}

                <div class="navbar-action">
                    <a href="#" class="btn btn-join">
                        Join
                    </a>

                    <a href="#" class="btn btn-fundraising">
                        Fundraising
                    </a>
                </div>

            </div>

        </div>

    </nav> -->

    {{-- ================= KONTEN HALAMAN ================= --}}
    <main>
        @yield('content')
    </main>
    

    {{-- ================= FOOTER ================= --}}
    <footer class="footer-section">

        <div class="container py-5">

            <div class="row g-4 g-lg-5">


                {{-- ================= KOLOM KIRI ================= --}}

                <div class="col-12 col-md-4">

                    <img
                        src="{{ asset('assets/images/logo-jakarta-pulpintro.jpeg') }}"
                        alt="Lions Club Jakarta Pulpintro"
                        class="footer-logo mb-3"
                    >

                    <p class="footer-address mb-0">

                        Duren Sawit, Kec. Duren Sawit,<br>

                        Kota Jakarta Timur,<br>

                        Daerah Khusus Ibukota Jakarta,<br>

                        Jakarta 13440

                    </p>

                </div>


                {{-- ================= KOLOM TENGAH ================= --}}

                <div class="col-12 col-md-4">

                    <h5 class="footer-title">
                        Quick Links
                    </h5>

                    <div class="footer-links">

                        <a href="{{ route('home') }}">
                            Home
                        </a>

                        <a href="{{ route('about') }}">
                            About Us
                        </a>

                        <a href="{{ route('service') }}">
                            Our Service & Impact
                        </a>

                        <a href="{{ route('partnership') }}">
                            Our Partnership
                        </a>

                    </div>

                </div>


                {{-- ================= KOLOM KANAN ================= --}}

                <div class="col-12 col-md-4">

                    <h5 class="footer-title">
                        Get in touch
                    </h5>

                    <div class="footer-contact">

                        <div class="contact-item">

                            <i class="bi bi-telephone-fill"></i>

                            <span>
                                +62 895727739652
                            </span>

                        </div>


                        <div class="contact-item">

                            <i class="bi bi-tiktok"></i>

                            <span href="#" target="_blank">
                                lionsclub.pulpintro   
                            </span>
    
                        </div>


                        <div class="contact-item">

                            <i class="bi bi-instagram"></i>

                            <a href="https://www.instagram.com/lionsclubjakarta_pulpintro?igsi=MWVxNDVuY2F6bWFkOQ==" target="_blank">
                                <span>lionsclubjakarta_pulpintro</span>
                            </a>

                        </div>


                        <div class="contact-item">

                            <i class="bi bi-envelope-fill"></i>

                            <span class="text-break">
                                lionsclubjakartapulpintro@gmail.com
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- ================= COPYRIGHT ================= --}}

        <div class="footer-bottom">

            <div class="container">

                <p class="mb-0 text-center">

                    Copyright © 2026 Lions Club Jakarta Pulpintro.
                    All Rights Reserved.

                </p>

            </div>

        </div>

    </footer>

    {{-- ================= BOOTSTRAP JS ================= --}}

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>