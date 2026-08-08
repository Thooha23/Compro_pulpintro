@extends('layouts.app')

@section('title', 'Lions Club Jakarta Pulpintro')

@section('content')

    {{-- ================= HERO ================= --}}
    <section class="hero-section py-3" style="background: #F6EADB;">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/banner/banner.jpg') }}"
                        class="d-block w-100 hero-image"
                        alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/banner/banner1.jpg') }}"
                        class="d-block w-100 hero-image"
                        alt="Banner 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/banner/banner3.jpg') }}"
                        class="d-block w-100 hero-image"
                        alt="Banner 3">
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
                <h2 class="hero-subtitle">
                    CREATIVE SOLIDARITY
                </h2>
            </div>
        </div>
    </section>

    <section class="py-5" style="background:#F6EADB;">
        <div class="container">
            {{-- ================= LIONS CLUB INTERNATIONAL ================= --}}
            <div class="container">
                <div class="card info-card border-0 shadow-sm rounded-4">
                    <div class="card-body p-5">
                        <div class="row align-items-center">
                            <div class="col-md-3 text-center">
                                <img src="{{ asset('assets/images/logo-lions.png') }}"
                                    width="170">
                            </div>
                            <div class="col-md-9">
                                <h2 class="fw-bold mb-3">
                                    Lions Club International
                                </h2>
                                <p class="text-secondary">
                                    ...
                                </p>
                                <a href="#"
                                class="fw-bold text-decoration-none">
                                    Learn More →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            <br>

            {{-- ================= LIONS CLUB JAKARTA PULPINTRO ================= --}}
                <div class="card info-card border-0 shadow-sm rounded-4">
                    <div class="card-body p-5">
                        <div class="row align-items-center">
                            <div class="col-md-3 text-center">
                                <img src="{{ asset('assets/images/logo-jakarta-pulpintro.jpeg') }}"
                                    width="170">
                            </div>
                            <div class="col-md-9">
                                ...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    {{-- ================= KEY MOMENTS ================= --}}
    <section class="py-5" style="background:#F6EADB;">
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
                        <div class="card flex-shrink-0"
                            style="width:260px;">
                            <div class="bg-secondary-subtle d-flex justify-content-center align-items-center"
                                style="height:180px;">
                                ▶
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