@extends('layouts.app')

@section('title', 'Lions Club Jakarta Pulpintro')

@section('content')

    {{-- ================= HERO ================= --}}
    <section class="hero-section">

        <div id="heroCarousel"
            class="carousel slide carousel-fade"
            data-bs-ride="carousel"
            data-bs-interval="5000">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/banner.JPG') }}"
                        class="d-block w-100 hero-image"
                        alt="Lions Club Jakarta Pulpintro Banner">
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('assets/images/banner1.jpg') }}"
                        class="d-block w-100 hero-image"
                        alt="Lions Club Jakarta Pulpintro Banner">
                </div>

            </div>
        </div>

        {{-- HERO OVERLAY --}}
        <div class="hero-overlay">
            <div class="hero-content">

                <h1 class="hero-title">
                    LIONS CLUB JAKARTA
                </h1>

                <img src="{{ asset('assets/images/logo-panjang-pulpintro.png') }}"
                    alt="Lions Club Jakarta Pulpintro"
                    class="hero-logo">

            </div>
        </div>

    </section>


    {{-- ================= INFORMATION SECTION ================= --}}
    <section class="info-section">

        {{-- LIONS CLUB INTERNATIONAL --}}
        <div class="container">

            <div class="card info-card border-0 shadow-sm">

                <div class="card-body">

                    <div class="row align-items-center g-4">

                        {{-- LOGO --}}
                        <div class="col-12 col-md-4 col-lg-3 text-center">

                            <img src="{{ asset('assets/images/logo-lions.png') }}"
                                alt="Lions Club International"
                                class="img-fluid lions-logo">

                        </div>

                        {{-- CONTENT --}}
                        <div class="col-12 col-md-8 col-lg-9">

                            <h2 class="info-title fw-bold">
                                Lions Club International
                            </h2>

                            <p class="info-text text-secondary">
                                Lions Club International is the world's largest
                                humanitarian service club organization, dedicated
                                to empowering volunteers to create a meaningful,
                                positive impact in their communities. Our core
                                focus areas include vision, hunger relief, diabetes,
                                childhood cancer, environment protection, and
                                humanitarian aid.
                            </p>

                            <a href="https://www.lionsclubs.org/en"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="fw-bold text-decoration-none learn-more">

                                Learn More →

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- LIONS CLUB JAKARTA PULPINTRO --}}
        <div class="container">

            <div class="card info-card border-0 shadow-sm">

                <div class="card-body">

                    <div class="row align-items-center g-4">

                        {{-- LOGO --}}
                        <div class="col-12 col-md-4 col-lg-3 text-center">

                            <img src="{{ asset('assets/images/logo-jakarta-pulpintro.jpeg') }}"
                                alt="Lions Club Jakarta Pulpintro"
                                class="img-fluid lions-logo pulpintro-logo">

                        </div>

                        {{-- CONTENT --}}
                        <div class="col-12 col-md-8 col-lg-9">

                            <h2 class="info-title fw-bold">
                                Lions Club Jakarta Pulpintro
                            </h2>

                            <p class="info-text text-secondary">
                                Lions Club Jakarta Pulpintro is part of Lions Clubs
                                International, committed to creating meaningful
                                social impact through community service,
                                humanitarian activities, and collaboration with
                                various partners.
                            </p>

                            <a href="{{ route('service') }}"
                                class="fw-bold text-decoration-none learn-more">

                                Ways We Serve →

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= KEY MOMENTS ================= --}}
    <section class="key-moments-section">

        <div class="container">

            <h2 class="section-title text-center fw-bold">
                KEY MOMENTS
            </h2>

            <div class="moments-wrapper">

                {{-- LEFT BUTTON --}}
                <button
                    class="moment-btn moment-btn-left"
                    onclick="scrollMoments(-1)"
                    aria-label="Previous">

                    ❮

                </button>


                {{-- MOMENTS TRACK --}}
                <div id="momentsTrack"
                    class="moments-track">

                    @foreach($keyMoments as $moment)

                        @php
                            $momentImage = $moment['image'] ?? null;

                            if (is_array($momentImage)) {
                                $momentImage = $momentImage[0] ?? null;
                            }
                        @endphp

                        <div class="moment-card">

                            <div class="moment-image">

                                @if($momentImage)

                                    <img src="{{ asset($momentImage) }}"
                                        alt="{{ $moment['title'] }}"
                                        loading="lazy">

                                @else

                                    <span class="text-muted">
                                        ▶
                                    </span>

                                @endif

                            </div>

                            <div class="moment-body">

                                <h6 class="moment-title">
                                    {{ $moment['title'] }}
                                </h6>

                                <p class="moment-description">
                                    {{ $moment['description'] }}
                                </p>

                            </div>

                        </div>

                    @endforeach

                </div>


                {{-- RIGHT BUTTON --}}
                <button
                    class="moment-btn moment-btn-right"
                    onclick="scrollMoments(1)"
                    aria-label="Next">

                    ❯

                </button>

            </div>

        </div>

    </section>


    {{-- ================= SCRIPT ================= --}}
    <script>

        function scrollMoments(direction) {

            const track = document.getElementById('momentsTrack');

            if (!track) return;

            const card = track.querySelector('.moment-card');

            const scrollAmount = card
                ? card.offsetWidth + 20
                : 300;

            track.scrollBy({
                left: scrollAmount * direction,
                behavior: 'smooth'
            });

        }

    </script>

@endsection