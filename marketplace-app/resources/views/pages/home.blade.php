@extends('layouts.app')

@section('title', 'Lions Club Jakarta Pulpintro')

@section('content')

    {{-- ================= HERO ================= --}}
    <section class="hero-section py-3" style="background: #F6EADB;">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/banner.JPG') }}"
                        class="d-block w-100 hero-image"
                        alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/banner1.jpg') }}"
                        class="d-block w-100 hero-image"
                        alt="Banner 2">
                </div>
            </div>
        </div>
        <div class="hero-overlay">
            <div class="hero-content">
                <h1 class="hero-title">
                    LIONS CLUB JAKARTA
                </h1>
                <img src="{{ asset('assets/images/logo-panjang-pulpintro.png') }}"
                    alt="Logo"
                    class="hero-logo">
                <!-- <h2 class="hero-subtitle">
                    CREATIVE SOLIDARITY
                </h2> -->
            </div>
        </div>
    </section>

    <section class="py-5" style="background:#F6EADB;">
            {{-- ================= LIONS CLUB INTERNATIONAL ================= --}}
            <div class="container my-2">
                <div class="card info-card border-0 shadow-sm rounded-4">
                    <div class="card-body p-4 p-md-5">
                        <div class="row align-items-center g-4">
                            {{-- LOGO --}}
                            <div class="col-12 col-md-3 text-center">
                                <img src="{{ asset('assets/images/logo-lions.png') }}"
                                    alt="Lions Club International"
                                    class="img-fluid lions-logo">
                            </div>
                            {{-- CONTENT --}}
                            <div class="col-12 col-md-9">
                                <h2 class="fw-bold mb-3">
                                    Lions Club International
                                </h2>
                                <p class="text-secondary mb-4">
                                    Lions Club International is the world's largest
                                    humanitarian service club organization, dedicated
                                    to empowering volunteers to create a meaningful,
                                    positive impact in their communities. Our core
                                    focus areas include vision, hunger relief, diabetes,
                                    childhood cancer, environment protection, and
                                    humanitarian aid.
                                </p>
                                <a href="https://www.lionsclubs.org/en" target="_blank" rel="noopener noreferrer"
                                class="fw-bold text-decoration-none learn-more">
                                    Learn More →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            {{-- ================= LIONS CLUB JAKARTA PULPINTRO ================= --}}
            <div class="container my-2">
                <div class="card info-card border-0 shadow-sm rounded-4">
                    <div class="card-body p-4 p-md-5">
                        <div class="row align-items-center g-4">
                            {{-- LOGO --}}
                            <div class="col-12 col-md-3 text-center">
                                <img src="{{ asset('assets/images/logo-jakarta-pulpintro.jpeg') }}"
                                    alt="Lions Club Jakarta Pulpintro"
                                    class="img lions-logo">
                            </div>
                            {{-- CONTENT --}}
                            <div class="col-12 col-md-9">
                                <h2 class="fw-bold mb-3">
                                    Lions Club Jakarta Pulpintro
                                </h2>
                                <p class="text-secondary mb-4">
                                    Lions Club International is the world's largest
                                    humanitarian service club organization, dedicated
                                    to empowering volunteers to create a meaningful,
                                    positive impact in their communities. Our core
                                    focus areas include vision, hunger relief, diabetes,
                                    childhood cancer, environment protection, and
                                    humanitarian aid.
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
    <section class="py-2" style="background:#F6EADB;">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">
                KEY MOMENTS
            </h2>
            <div class="position-relative">
                <button class="btn btn-light position-absolute top-50 start-0 translate-middle-y rounded-circle shadow"
                        onclick="scrollMoments(-1)"
                        style="z-index:5">
                    ❮
                </button>
                <div id="momentsTrack"
                    class="d-flex overflow-auto gap-4 px-5">
                    @foreach($keyMoments as $moment)
                        @php
                            $momentImage = $moment['image'] ?? null;
                            if (is_array($momentImage)) {
                                $momentImage = $momentImage[0] ?? null;
                            }
                        @endphp
                        <div class="card flex-shrink-0"
                            style="width:260px;">
                            <div class="bg-secondary-subtle d-flex justify-content-center align-items-center overflow-hidden"
                                style="height:180px;">
                                @if($momentImage)
                                    <img src="{{ asset($momentImage) }}" alt="{{ $moment['title'] }}" class="w-100 h-100" style="object-fit:cover; display:block;">
                                @else
                                    <span class="text-muted">▶</span>
                                @endif
                            </div>
                            <div class="card-body">
                                <h6 class="fw-bold">
                                    {{ $moment['title'] }}
                                </h6>
                                <small class="text-muted">
                                    {{ $moment['description'] }}
                                </small>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="btn btn-light position-absolute top-50 end-0 translate-middle-y rounded-circle shadow"
                        onclick="scrollMoments(1)"
                        style="z-index:5">
                    ❯
                </button>
            </div>
        </div>
        <br>
    </section>

    <script>
        function scrollMoments(direction){
            const track=document.getElementById('momentsTrack');
            track.scrollBy({
                left:300*direction,
                behavior:'smooth'
            });
        }
    </script>

@endsection