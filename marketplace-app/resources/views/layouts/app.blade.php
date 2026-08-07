<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lions Club Jakarta Pulpintro')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-800 antialiased">

    {{-- ================= NAVBAR ================= --}}
    <header class="flex items-center justify-between px-8 py-4 border-b border-gray-200">
        <div class="flex items-center gap-3">
            {{-- Ganti src di bawah dengan logo Anda sendiri --}}
            <img src="{{ asset('images/logo-lions.png') }}" alt="Lions Club International" class="h-10 w-10 object-contain">
            <img src="{{ asset('images/logo-jakarta-pulpintro.png') }}" alt="Lions Club Jakarta Pulpintro" class="h-10 w-10 object-contain">
            <div class="leading-tight">
                <p class="font-semibold text-sm text-gray-900">Lions Club</p>
                <p class="font-semibold text-sm text-gray-900">Jakarta Pulpintro</p>
            </div>
        </div>

        <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-700">
            <a href="{{ route('home') }}" class="hover:text-gray-900 {{ request()->routeIs('home') ? 'text-gray-900 font-semibold' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="hover:text-gray-900 {{ request()->routeIs('about') ? 'text-gray-900 font-semibold' : '' }}">About Us</a>
            <a href="{{ route('service') }}" class="hover:text-gray-900 {{ request()->routeIs('service') ? 'text-gray-900 font-semibold' : '' }}">Our Service & Impact</a>
            <a href="{{ route('partnership') }}" class="hover:text-gray-900 {{ request()->routeIs('partnership') ? 'text-gray-900 font-semibold' : '' }}">Our Partnership</a>
        </nav>

        <div class="flex items-center gap-3">
            <a href="#" class="px-5 py-2 rounded-full bg-pink-500 text-white text-sm font-semibold hover:bg-pink-600 transition">Join</a>
            <a href="#" class="px-5 py-2 rounded-full bg-orange-400 text-white text-sm font-semibold hover:bg-orange-500 transition">Fundraising</a>
        </div>
    </header>

    {{-- ================= KONTEN HALAMAN ================= --}}
    <main>
        @yield('content')
    </main>

    {{-- ================= FOOTER ================= --}}
    <footer class="bg-[#173a5e] text-white px-8 py-12">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Kolom kiri: logo + alamat --}}
            <div>
                <img src="{{ asset('images/logo-jakarta-pulpintro.png') }}" alt="Lions Club Jakarta Pulpintro" class="h-14 w-14 object-contain mb-4">
                <p class="text-sm text-gray-300 leading-relaxed">
                    Duren Sawit, Kec. Duren<br>
                    Sawit, Kota Jakarta Timur,<br>
                    Daerah Khusus Ibukota<br>
                    Jakarta 13440
                </p>
            </div>

            {{-- Kolom tengah: nav links --}}
            <div>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white">About Us</a></li>
                    <li><a href="{{ route('service') }}" class="hover:text-white">Our Service & Impact</a></li>
                    <li><a href="{{ route('partnership') }}" class="hover:text-white">Our Partnership</a></li>
                </ul>
            </div>

            {{-- Kolom kanan: kontak --}}
            <div>
                <p class="font-semibold mb-3">Get in touch</p>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li class="flex items-center gap-2">
                        <span>📱</span> +62 895727739652
                    </li>
                    <li class="flex items-center gap-2">
                        <span>🎵</span> lionsclub.pulpintro
                    </li>
                    <li class="flex items-center gap-2">
                        <span>📷</span> lionsclub_jakarta_pulpintro
                    </li>
                    <li class="flex items-center gap-2">
                        <span>✉️</span> lionsclubjakartapulpintro@gmail.com
                    </li>
                </ul>
            </div>
        </div>

        <p class="text-center text-xs text-gray-400 mt-10">
            copyright © 2026 Lions Club Jakarta Pulpintro All Rights Reserved.
        </p>
    </footer>

</body>
</html>