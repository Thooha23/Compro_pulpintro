@extends('layouts.app')

@section('title', 'Lions Club Jakarta Pulpintro')

@section('content')
    <section class="py-2" style="background:#F6EADB;">
        {{-- ================= Visi & Misi ================= --}}
            <div class="card info-card border-0 shadow-sm">
                <div class="card-body p-4 p-md-2">
                    <div class="row align-items-center g-4">
                        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/images/banner.jpg') }}"
                                        class="d-block w-100 hero-image"
                                        alt="Banner 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/images/banner1.jpg') }}"
                                        class="d-block w-100 hero-image"
                                        alt="Banner 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/images/banner3.jpg') }}"
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
        <section class="ways-section">

            <div class="container">

                <h2 class="ways-title">
                    WAYS WE SERVE
                </h2>

                <div class="row g-4">

                    <!-- ================= CHILDHOOD CANCER ================= -->

                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="service-card shadow-sm">

                            <div class="service-image">

                                <img src="{{ asset('assets/images/childhood_cancer1.jpg') }}"
                                    alt="Childhood Cancer">

                                <div class="service-icon">

                                    <img src="{{ asset('assets/images/Childhood_Cancer.png') }}"
                                        alt="Childhood Cancer Icon">

                                </div>

                            </div>

                            <div class="service-body">

                                <h3 class="service-title title-yellow">
                                    Childhood Cancer
                                </h3>

                                <p class="service-description">
                                    We provide support of the needs of children and families
                                    affected by childhood cancer.
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- ================= DIABETES ================= -->

                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="service-card shadow-sm">

                            <div class="service-image">

                                <img src="{{ asset('assets/images/diabetes.jpg') }}"
                                    alt="Diabetes">

                                <div class="service-icon">

                                    <img src="{{ asset('assets/images/Diabetes.png') }}"
                                        alt="Diabetes Icon">

                                </div>

                            </div>

                            <div class="service-body">

                                <h3 class="service-title title-blue">
                                    Diabetes
                                </h3>

                                <p class="service-description">
                                    We work to reduce the prevalence of diabetes and improve
                                    quality of life for those living with diabetes.
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- ================= DISASTER RELIEF ================= -->

                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="service-card shadow-sm">

                            <div class="service-image">

                                <img src="{{ asset('assets/images/disaster-relief.jpg') }}"
                                    alt="Disaster Relief">

                                <div class="service-icon">

                                    <img src="{{ asset('assets/images/Disaster_Relief.png') }}"
                                        alt="Disaster Relief Icon">

                                </div>

                            </div>

                            <div class="service-body">

                                <h3 class="service-title title-purple">
                                    Disaster Relief
                                </h3>

                                <p class="service-description">
                                    We take steps to meet immediate needs and provide
                                    long-term support for communities devastated by
                                    natural disasters.
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- ================= ENVIRONMENT ================= -->

                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="service-card shadow-sm">

                            <div class="service-image">

                                <img src="{{ asset('assets/images/environment.jpg') }}"
                                    alt="Environment">

                                <div class="service-icon">

                                    <img src="{{ asset('assets/images/Environment.png') }}"
                                        alt="Environment Icon">

                                </div>

                            </div>

                            <div class="service-body">

                                <h3 class="service-title title-green">
                                    Environment
                                </h3>

                                <p class="service-description">
                                    We find ways to protect the environment to create
                                    healthier communities and a more sustainable world.
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- ================= HUMANITARIAN ================= -->

                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="service-card shadow-sm">

                            <div class="service-image">

                                <img src="{{ asset('assets/images/humanitarian.jpg') }}"
                                    alt="Humanitarian">

                                <div class="service-icon">

                                    <img src="{{ asset('assets/images/Humanitarian_Efforts.png') }}"
                                        alt="Humanitarian Icon">

                                </div>

                            </div>

                            <div class="service-body">

                                <h3 class="service-title title-red">
                                    Humanitarian
                                </h3>

                                <p class="service-description">
                                    We identify the world's most crucial needs and provide
                                    humanitarian aid where it's needed most.
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- ================= HUNGER ================= -->

                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="service-card shadow-sm">

                            <div class="service-image">

                                <img src="{{ asset('assets/images/hunger.jpg') }}"
                                    alt="Hunger">

                                <div class="service-icon">

                                    <img src="{{ asset('assets/images/Hunger.png') }}"
                                        alt="Hunger Icon">

                                </div>

                            </div>

                            <div class="service-body">

                                <h3 class="service-title title-orange">
                                    Hunger
                                </h3>

                                <p class="service-description">
                                    We strive to improve food security and access to
                                    nutritious food to help alleviate hunger.
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- ================= VISION ================= -->

                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="service-card shadow-sm">

                            <div class="service-image">

                                <img src="{{ asset('assets/images/vision1.jpg') }}"
                                    alt="Vision">

                                <div class="service-icon">

                                    <img src="{{ asset('assets/images/Vision.png') }}"
                                        alt="Vision Icon">

                                </div>

                            </div>

                            <div class="service-body">

                                <h3 class="service-title title-dark-purple">
                                    Vision
                                </h3>

                                <p class="service-description">
                                    We help prevent avoidable blindness and improve
                                    quality of life for people who are blind or visually
                                    impaired.
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- ================= YOUTH ================= -->

                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="service-card shadow-sm">

                            <div class="service-image">

                                <img src="{{ asset('assets/images/youth.jpg') }}"
                                    alt="Youth">

                                <div class="service-icon">

                                    <img src="{{ asset('assets/images/Youth.png') }}"
                                        alt="Youth Icon">

                                </div>

                            </div>

                            <div class="service-body">

                                <h3 class="service-title title-teal">
                                    Youth
                                </h3>

                                <p class="service-description">
                                    We support young people so they can make positive
                                    choices, lead healthy and productive lives, and become
                                    the next generation of service leaders.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            
        </section>
        
    </section>
@endsection