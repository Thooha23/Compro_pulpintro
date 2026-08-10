<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lions Club Jakarta Pulpintro')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->

</head>
<body class="font-sans text-gray-800 antialiased">

    {{-- ================= NAVBAR ================= --}}
    <header class="border-bottom bg-white shadow-sm">
        <div class="container-fluid px-4">

            <div class="d-flex align-items-center justify-content-between py-3">

                <!-- Logo -->
                <div class="d-flex align-items-center">

                    <img src="{{ asset('assets/images/logo-lions.png') }}"
                        class="me-2"
                        width="55">

                    <img src="{{ asset('assets/images/logo-jakarta-pulpintro.jpeg') }}"
                        class="me-3"
                        width="45">

                    <div class="lh-sm">
                        <h4 class="mb-0 fw-bold" style="font-size:23px;">Lions Club</h4>
                        <h4 class="mb-0 fw-bold" style="font-size:21px;">Jakarta Pulpintro</h4>
                    </div>

                </div>

                <!-- Menu -->
                <div class="d-none d-lg-flex align-items-center gap-5">

                    <a href="{{ route('home') }}"
                    class="text-decoration-none text-dark fw-bold">
                        <h6>Home</h6>
                    </a>

                    <a href="{{ route('about') }}"
                    class="text-decoration-none text-dark fw-bold">
                        <h6>About Us</h6>
                    </a>

                    <a href="{{ route('service') }}"
                    class="text-decoration-none text-dark fw-bold">
                        <h6>Our Service & Impact</h6>
                    </a>

                    <a href="{{ route('partnership') }}"
                    class="text-decoration-none text-dark fw-bold">
                        <h6>Our Partnership</h6>
                    </a>

                </div>

                <!-- Button -->
                <div class="d-flex gap-3">

                    <a href="#"
                    class="btn rounded-pill px-4 text-white"
                    style="background:#F5298E;">
                        Join
                    </a>

                    <a href="#"
                    class="btn rounded-pill px-4 text-white"
                    style="background:#F68B1F;">
                        Fundraising
                    </a>

                </div>

            </div>

        </div>
    </header>

    {{-- ================= KONTEN HALAMAN ================= --}}
    <main>
        @yield('content')
    </main>
    

    {{-- ================= FOOTER ================= --}}
    <footer class="footer-section">
        <div class="container py-5">
            <div class="row g-5">
                {{-- ================= KOLOM KIRI ================= --}}
                <div class="col-12 col-md-4">
                    <img src="{{ asset('assets/images/logo-jakarta-pulpintro.jpeg') }}"
                        alt="Lions Club Jakarta Pulpintro"
                        class="footer-logo mb-3">
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
                            <span>+62 895727739652</span>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-tiktok"></i>
                            <span>lionsclub.pulpintro</span>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-instagram"></i>
                            <span>lionsclub_jakarta_pulpintro</span>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-envelope-fill"></i>
                            <span>
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

</body>
</html>