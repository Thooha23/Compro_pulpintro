@extends('layouts.app')

@section('title', 'Lions Club Jakarta Pulpintro')

@section('content')

    {{-- ================= HERO ================= --}}
    <section class="relative">
        {{-- Ganti bg-gray-300 dengan gambar Anda: style="background-image:url('{{ asset('images/hero.jpg') }}')" --}}
        <div class="h-[420px] bg-gray-300 bg-cover bg-center flex flex-col items-center justify-center text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-wide text-gray-900">LIONS CLUB JAKARTA</h1>
            <p class="mt-24 md:mt-32 text-sm md:text-base tracking-[0.3em] font-medium text-gray-800">CREATIVE SOLIDARITY</p>
        </div>
    </section>

    {{-- ================= LIONS CLUB INTERNATIONAL ================= --}}
    <section class="max-w-5xl mx-auto px-8 py-12 flex flex-col md:flex-row items-start gap-6">
        <img src="{{ asset('images/logo-lions.png') }}" alt="Lions Club International" class="w-20 h-20 object-contain flex-shrink-0">
        <div>
            <h2 class="text-lg font-bold text-gray-900 mb-2">Lions Club International</h2>
            <p class="text-sm text-gray-600 leading-relaxed">
                Lions Clubs International is the world's largest humanitarian service club organization,
                dedicated to empowering volunteers to create a meaningful, positive impact in their
                communities. Our core focus areas include vision, hunger relief, diabetes, childhood cancer,
                environmental protection, and humanitarian aid.
            </p>
            <a href="#" class="inline-block mt-3 text-sm font-semibold text-gray-900 underline">Learn More</a>
        </div>
    </section>

    <hr class="max-w-5xl mx-auto border-gray-200">

    {{-- ================= LIONS CLUB JAKARTA PULPINTRO ================= --}}
    <section class="max-w-5xl mx-auto px-8 py-12 flex flex-col md:flex-row items-start gap-6">
        <img src="{{ asset('images/logo-jakarta-pulpintro.png') }}" alt="Lions Club Jakarta Pulpintro" class="w-20 h-20 object-contain flex-shrink-0">
        <div>
            <h2 class="text-lg font-bold text-gray-900 mb-2">Lions Club Jakarta Pulpintro</h2>
            <p class="text-sm text-gray-600 leading-relaxed">
                Lions Clubs International is the world's largest humanitarian service club organization,
                dedicated to empowering volunteers to create a meaningful, positive impact in their
                communities. Our core focus areas include vision, hunger relief, diabetes, childhood cancer,
                environmental protection, and humanitarian aid.
            </p>
            <a href="#" class="inline-block mt-3 text-sm font-semibold text-gray-900 underline">Ways We Serve</a>
        </div>
    </section>

    {{-- ================= KEY MOMENTS ================= --}}
    <section class="bg-[#f3e6d6] py-14">
        <h2 class="text-center text-lg font-bold tracking-widest text-gray-900 mb-8">KEY MOMENTS</h2>

        <div class="relative max-w-5xl mx-auto px-10">
            <button type="button" onclick="scrollMoments(-1)"
                class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 text-2xl text-gray-500 hover:text-gray-800">
                &#10094;
            </button>

            <div id="momentsTrack" class="flex gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory no-scrollbar">
                @foreach ($keyMoments as $moment)
                    <div class="snap-start flex-shrink-0 w-64 bg-white rounded-md shadow-sm overflow-hidden">
                        <div class="h-40 bg-gray-300 flex items-center justify-center">
                            {{-- Ganti dengan <img> atau <video> --}}
                            <span class="w-10 h-10 rounded-full bg-white/70 flex items-center justify-center text-gray-700">&#9658;</span>
                        </div>
                        <div class="p-4">
                            <p class="text-sm font-bold text-gray-900 mb-1">{{ $moment['title'] }}</p>
                            <p class="text-xs text-gray-500 leading-relaxed">{{ $moment['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <button type="button" onclick="scrollMoments(1)"
                class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 text-2xl text-gray-500 hover:text-gray-800">
                &#10095;
            </button>
        </div>
    </section>

    <script>
        function scrollMoments(direction) {
            const track = document.getElementById('momentsTrack');
            track.scrollBy({ left: direction * 280, behavior: 'smooth' });
        }
    </script>

@endsection