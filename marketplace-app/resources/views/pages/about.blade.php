@extends('layouts.app')

@section('title', 'Lions Club Jakarta Pulpintro')

@section('content')
    <section class="py-2" style="background:#F6EADB;">
        {{-- ================= Visi & Misi ================= --}}
        <div class="container my-2">
            <div class="card info-card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 p-md-5">
                    <div class="row align-items-center g-4">
                        {{-- CONTENT --}}
                        <div>
                            <h2 class="fw-bold mb-3" style="text-align: center;">
                                VISION
                            </h2>
                            <p class="text-secondary mb-4" style="text-align: center;">
                                Establishing a sustainable social club that thrives economically
                                while delivering meaningful social impact. This positive output 
                                directly targets three core pillars: our members, the club's 
                                longvity, and the communities we serve.
                            </p>
                            <br>
                            <h2 class="fw-bold mb-3" style="text-align: center;">
                                MISSION
                            </h2>
                            <p class="text-secondary mb-4" style="text-align: center;">
                                Establishing financial independence for our social impact
                                initiatives through strategic fundraising. Both operational 
                                and charitable funds are actively driven by commercial activities
                                of our members. Including the sale of their products and services.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                    <img src="{{ asset('assets/images/Reykhando_Rifki_Awiliyanto.jpg') }}">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="fw-bold mb-1">
                                        Reykhando Rifki Awiliyanto
                                    </h6>
                                    <small class="text-muted">
                                        President
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card-fluid structure-card h-100 border-0 shadow-sm">
                                <div class="structure-image">
                                    <img src="{{ asset('assets/images/Muhamad_Akmal.jpg') }}">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="fw-bold mb-1">
                                        Muhamad Akmal
                                    </h6>
                                    <small class="text-muted">
                                        Vice President
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