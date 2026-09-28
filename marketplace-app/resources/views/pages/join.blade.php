@extends('layouts.app')

@section('title', 'Join Us - Lions Club Jakarta Pulpintro')

@section('content')

    {{-- ================= HERO JOIN ================= --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-yellow-50 via-white to-blue-50">

        {{-- Decorative Circle --}}
        <div class="absolute -top-24 -right-24 w-72 h-72 bg-yellow-300/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-blue-400/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-6xl mx-auto px-6 sm:px-8 py-20 lg:py-28">

            <div class="grid lg:grid-cols-2 gap-12 items-center">

                {{-- ================= LEFT CONTENT ================= --}}
                <div class="text-center lg:text-left">

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold
                               text-gray-900 leading-tight mb-6">

                        Join Us &
                        <span class="text-yellow-500">
                            Make a Difference
                        </span>

                    </h1>

                    <p class="text-base md:text-lg text-gray-600 leading-relaxed
                              max-w-xl mx-auto lg:mx-0 mb-8">

                        Bergabunglah bersama
                        <strong class="text-gray-800">
                            Lions Club Jakarta Pulpintro
                        </strong>
                        dan menjadi bagian dari komunitas yang peduli,
                        berbagi, serta berkontribusi untuk menciptakan
                        perubahan positif bagi masyarakat.

                    </p>

                </div>


                {{-- ================= RIGHT VISUAL ================= --}}
                <div class="relative">

                    <div class="relative bg-white rounded-3xl p-4
                                shadow-2xl shadow-gray-200/70
                                rotate-1 hover:rotate-0
                                transition duration-500">

                        <img src="{{ asset('assets/images/banner1.jpg') }}"
                             alt="Join Lions Club Jakarta Pulpintro"
                             class="w-full h-[380px] object-cover
                                    rounded-2xl">

                        {{-- Floating Card --}}
                        <div class="absolute -bottom-6 -left-6
                                    bg-white rounded-2xl
                                    shadow-xl p-4
                                    flex items-center gap-3">

                            <div class="w-12 h-12 rounded-full
                                        bg-yellow-100
                                        flex items-center justify-center">

                                <i class="bi bi-heart-fill text-yellow-500 text-xl"></i>

                            </div>

                            <div>
                                <p class="text-xs text-gray-500">
                                    Together We
                                </p>

                                <p class="font-bold text-gray-900">
                                    Serve & Care
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= WHY JOIN ================= --}}
    <section id="why-join" class="bg-white py-20">

        <div class="max-w-6xl mx-auto px-6 sm:px-8">

            {{-- Section Header --}}
            <div class="text-center max-w-2xl mx-auto mb-12">

                <span class="text-sm font-semibold text-yellow-500 uppercase tracking-wider">
                    Why Join Us?
                </span>

                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">
                    Be Part of the Change
                </h2>

                <p class="text-gray-500 leading-relaxed">
                    Dengan bergabung bersama kami, kamu tidak hanya menjadi
                    anggota sebuah organisasi, tetapi juga menjadi bagian
                    dari gerakan untuk memberikan dampak positif.
                </p>

            </div>


            {{-- Benefits --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

                {{-- Card 1 --}}
                <div class="group p-6 rounded-2xl bg-gray-50
                            hover:bg-yellow-50
                            border border-transparent
                            hover:border-yellow-100
                            transition duration-300">

                    <div class="w-12 h-12 rounded-xl
                                bg-yellow-100
                                flex items-center justify-center mb-5">

                        <i class="bi bi-heart-fill text-yellow-500 text-xl"></i>

                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        Serve Others
                    </h3>

                    <p class="text-sm text-gray-500 leading-relaxed">
                        Berkontribusi secara langsung dalam berbagai kegiatan
                        sosial dan kemanusiaan.
                    </p>

                </div>


                {{-- Card 2 --}}
                <div class="group p-6 rounded-2xl bg-gray-50
                            hover:bg-blue-50
                            border border-transparent
                            hover:border-blue-100
                            transition duration-300">

                    <div class="w-12 h-12 rounded-xl
                                bg-blue-100
                                flex items-center justify-center mb-5">

                        <i class="bi bi-people-fill text-blue-500 text-xl"></i>

                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        Build Connections
                    </h3>

                    <p class="text-sm text-gray-500 leading-relaxed">
                        Bertemu dan membangun relasi dengan orang-orang
                        yang memiliki semangat untuk membantu sesama.
                    </p>

                </div>


                {{-- Card 3 --}}
                <div class="group p-6 rounded-2xl bg-gray-50
                            hover:bg-green-50
                            border border-transparent
                            hover:border-green-100
                            transition duration-300">

                    <div class="w-12 h-12 rounded-xl
                                bg-green-100
                                flex items-center justify-center mb-5">

                        <i class="bi bi-lightbulb-fill text-green-500 text-xl"></i>

                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        Grow Together
                    </h3>

                    <p class="text-sm text-gray-500 leading-relaxed">
                        Mengembangkan kemampuan, pengalaman, dan potensi
                        melalui berbagai kegiatan organisasi.
                    </p>

                </div>


                {{-- Card 4 --}}
                <div class="group p-6 rounded-2xl bg-gray-50
                            hover:bg-purple-50
                            border border-transparent
                            hover:border-purple-100
                            transition duration-300">

                    <div class="w-12 h-12 rounded-xl
                                bg-purple-100
                                flex items-center justify-center mb-5">

                        <i class="bi bi-stars text-purple-500 text-xl"></i>

                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        Create Impact
                    </h3>

                    <p class="text-sm text-gray-500 leading-relaxed">
                        Bersama-sama menciptakan dampak nyata dan perubahan
                        positif bagi masyarakat.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <section class="join-cta-section bg-gray-50">
        <div class="max-w-5xl mx-auto px-6 sm:px-8 text-center">
            <div class="join-cta-row d-flex flex-column flex-sm-row justify-content-center align-items-center gap-3 gap-sm-4">
                <a href="https://forms.google.com/"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="join-cta-btn join-cta-primary text-decoration-none">
                    <i class="bi bi-person-plus-fill"></i>
                    Join Us
                </a>

                <a href="#why-join"
                   class="join-cta-btn join-cta-secondary text-decoration-none">
                    <i class="bi bi-arrow-down-circle"></i>
                    Learn More
                </a>
            </div>
        </div>
    </section>

@endsection