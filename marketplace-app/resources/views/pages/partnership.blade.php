@extends('layouts.app')

@section('title', 'Lions Club Jakarta Pulpintro')

@section('content')
    <section class="py-5">
        <div class="container">

            <div class="text-center mb-5 mt-5">
                <h2 class="fw-bold">Our Partnership</h2>
                <p class="text-muted">
                    Our partners who support Lions Club Jakarta Pulpintro
                </p>
            </div>

            {{-- ================= LOGO PARTNERSHIP ================= --}}
            <div class="partnership-slider">

                <div class="partnership-track">

                    {{-- Partnership 1 --}}
                    <a href="https://binainsani.ac.id/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="partner-item">

                        <img src="{{ asset('assets/images/partnership/logo1.png') }}"
                            alt="Partner 1">

                    </a>


                    {{-- Partnership 2 --}}
                    <a href="https://www.google.com"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="partner-item">

                        <img src="{{ asset('assets/images/partner-2.png') }}"
                            alt="Partner 2">

                    </a>


                    {{-- Partnership 3 --}}
                    <a href="https://www.instagram.com/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="partner-item">

                        <img src="{{ asset('assets/images/partner-3.png') }}"
                            alt="Partner 3">

                    </a>


                    {{-- Partnership 4 --}}
                    <a href="https://www.example.com"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="partner-item">

                        <img src="{{ asset('assets/images/partner-4.png') }}"
                            alt="Partner 4">

                    </a>


                    {{-- Partnership 5 --}}
                    <a href="https://www.example.com"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="partner-item">

                        <img src="{{ asset('assets/images/partner-5.png') }}"
                            alt="Partner 5">

                    </a>

                    {{-- DUPLIKASI UNTUK LOOPING --}}
                    <a href="https://binainsani.ac.id/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="partner-item">

                        <img src="{{ asset('assets/images/partnership/logo1.png') }}"
                            alt="Partner 1">

                    </a>

                    <a href="https://www.google.com"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="partner-item">

                        <img src="{{ asset('assets/images/partner-2.png') }}"
                            alt="Partner 2">

                    </a>

                    <a href="https://www.instagram.com/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="partner-item">

                        <img src="{{ asset('assets/images/partner-3.png') }}"
                            alt="Partner 3">

                    </a>

                    <a href="https://www.example.com"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="partner-item">

                        <img src="{{ asset('assets/images/partner-4.png') }}"
                            alt="Partner 4">

                    </a>

                    <a href="https://www.example.com"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="partner-item">

                        <img src="{{ asset('assets/images/partner-5.png') }}"
                            alt="Partner 5">

                    </a>

                </div>

            </div>

            <div class="text-center mb-5 mt-5">
                <h2 class="fw-bold">Why Partner with Us?</h2>
                <p class="text-muted">
                    Partnering with Lions Club Jakarta Pulpintro enables your organization to take an active stance in creating sustainable social impact. We bridge your goodwill with impactful, measurable humanitarian programs-spanning healthcare support, hunger relief, environmental protection, and community empowerment. Together, we can multiply our reach and maximaze positive impact for underserved communities.
                
                </p>
            </div>

        </div>
    </section>
@endsection