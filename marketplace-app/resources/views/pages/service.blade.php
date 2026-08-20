@extends('layouts.app')

@section('title', 'Lions Club Jakarta Pulpintro')

@section('content')
    <section class="py-5" style="background:#F6EADB;">
        {{-- ================= Visi & Misi ================= --}}
            <div class="card info-card border-0 shadow-sm">
                <div class="card-body p-4 p-md-2">
                    <div class="row align-items-center g-4">
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
                    </div>
                </div>
            </div>
        <!-- <div class="container my-2">
            <div class="card info-card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 p-md-5">
                    <div class="row align-items-center g-4">
                        {{-- CONTENT --}}
                        <div>
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
                </div>
            </div>
        </div> -->

        <br>

        {{-- ================= Structure ================= --}}
        <div class="container my-2">
            <div class="card info-card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 p-md-5">
                    <h2 class="fw-bold mb-3" style="text-align: center;">
                        STUCTURE
                    </h2>
                    <br>

                    <!-- This section is intended to display the organizational structure
                     of the Lions Club Jakarta Pulpintro.Each member's name and position 
                     will be displayed in a card format. The images for each member can 
                     be added in the 'structure-image' div. The layout is responsive and 
                     will adjust based on the screen size. -->

                    <div class="row g-4 justify-content-center">

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card-fluid structure-card h-100 border-0 shadow-sm">
                                <div class="structure-image">
                                    <img>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="fw-bold mb-1">
                                        Nama
                                    </h6>
                                    <small class="text-muted">
                                        Jabatan
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card-fluid structure-card h-100 border-0 shadow-sm">
                                <div class="structure-image">
                                    <img>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="fw-bold mb-1">
                                        Nama
                                    </h6>
                                    <small class="text-muted">
                                        Jabatan
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card-fluid structure-card h-100 border-0 shadow-sm">
                                <div class="structure-image">
                                    <img>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="fw-bold mb-1">
                                        Nama
                                    </h6>
                                    <small class="text-muted">
                                        Jabatan
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card-fluid structure-card h-100 border-0 shadow-sm">
                                <div class="structure-image">
                                    <img>
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="fw-bold mb-1">
                                        Nama
                                    </h6>
                                    <small class="text-muted">
                                        Jabatan
                                    </small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection