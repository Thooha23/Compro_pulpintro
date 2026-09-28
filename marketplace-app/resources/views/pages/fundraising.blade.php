@extends('layouts.app')

@section('title', 'Fundraising - Lions Club Jakarta Pulpintro')

@section('content')

    {{-- ================= HERO ================= --}}
    <section
        class="fundraising-hero d-flex align-items-center position-relative"
        style="background-image: url('{{ asset('assets/images/fundraising2.jpeg') }}');"
    >
        <div class="fundraising-hero-overlay"></div>
        <div class="container position-relative" style="z-index: 10;">
            <div class="fundraising-hero-copy mb-3">
                <span class="fundraising-hero-line fundraising-hero-line-main">Every purchase,</span>
                <span class="fundraising-hero-line">is a kindness,</span>
                <span class="fundraising-hero-line">for others.</span>
            </div>

            <form method="GET" action="{{ route('fundraising') }}" class="fundraising-search d-flex bg-white rounded-pill p-2 position-relative" style="max-width:480px; z-index: 20;">
                @if($category)
                    <input type="hidden" name="category" value="{{ $category }}">
                @endif
                <input
                    type="text"
                    name="search"
                    value="{{ $search ?? '' }}"
                    class="form-control border-0 shadow-none"
                    placeholder="Cari produk fundraising..."
                    style="position: relative; z-index: 21;"
                >
                <button type="submit" class="btn btn-fund-primary rounded-pill px-4" style="position: relative; z-index: 21;">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
    </section>

    <script>
        (function () {
            const hero = document.querySelector('.fundraising-hero');

            if (!hero) return;

            const updateHeroParallax = () => {
                const rect = hero.getBoundingClientRect();
                const offset = Math.max(-120, Math.min(120, (window.scrollY - (hero.offsetTop || 0)) * 0.12));
                hero.style.setProperty('--hero-shift', offset + 'px');

                const viewportRatio = Math.min(1, Math.max(0, (window.innerHeight - rect.top) / (window.innerHeight + rect.height)));
                hero.style.setProperty('--hero-opacity', (0.45 + viewportRatio * 0.55).toFixed(2));
            };

            window.addEventListener('scroll', updateHeroParallax, { passive: true });
            window.addEventListener('resize', updateHeroParallax);
            updateHeroParallax();
        })();
    </script>

    {{-- ================= CATALOG ================= --}}
    <section class="py-5">
        <div class="container">
            <div class="row g-4">

                {{-- SIDEBAR CATEGORY --}}
                <div class="col-12 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h6 class="fw-bold mb-3">Kategori</h6>
                        <ul class="list-unstyled mb-0 fundraising-category-list">
                            <li class="mb-2">
                                <a href="{{ route('fundraising') }}"
                                   class="d-flex justify-content-between text-decoration-none {{ !$category ? 'fw-bold text-fund-active' : 'text-secondary' }}">
                                    Semua Produk
                                    <span class="badge rounded-pill bg-light text-dark">{{ $totalProducts }}</span>
                                </a>
                            </li>
                            @foreach($categories as $cat)
                                <li class="mb-2">
                                    <a href="{{ route('fundraising', ['category' => $cat]) }}"
                                       class="d-flex justify-content-between text-decoration-none {{ $category === $cat ? 'fw-bold text-fund-active' : 'text-secondary' }}">
                                        {{ $cat }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- PRODUCT GRID --}}
                <div class="col-12 col-lg-9">

                    @if(count($products) === 0)
                        <div class="text-center py-5">
                            <p class="text-muted mb-0">Produk tidak ditemukan.</p>
                        </div>
                    @else
                        <div class="row g-4">
                            @foreach($products as $product)
                                <div class="col-6 col-md-4">
                                    <div class="card product-card border-0 shadow-sm rounded-4 h-100">

                                        <a href="{{ route('fundraising.detail', $product['id']) }}" class="text-decoration-none text-dark">
                                            <div class="product-image d-flex justify-content-center align-items-center bg-secondary-subtle position-relative">
                                                <span class="badge product-badge position-absolute top-0 end-0 m-2">
                                                    {{ $product['category'] }}
                                                </span>
                                                @if(!empty($product['images'][0]))
                                                    <img src="{{ asset($product['images'][0]) }}" alt="{{ $product['name'] }}" class="w-100 h-100" style="object-fit:cover;">
                                                @else
                                                    <i class="bi bi-basket2-fill" style="font-size:2.2rem; color:#aaa;"></i>
                                                @endif
                                            </div>
                                        </a>

                                        <div class="card-body d-flex flex-column p-3">
                                            <a href="{{ route('fundraising.detail', $product['id']) }}" class="text-decoration-none text-dark">
                                                <h6 class="fw-bold mb-1 fundraising-product-name">{{ $product['name'] }}</h6>
                                            </a>

                                            <div class="d-flex align-items-center gap-1 mb-2 small text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <span class="text-dark">{{ number_format($product['rating'], 1) }}</span>
                                                <span class="text-secondary">({{ $product['reviews_count'] }})</span>
                                            </div>

                                            <p class="fw-bold product-price mb-3">
                                                Rp {{ number_format($product['price'], 0, ',', '.') }}
                                            </p>

                                            <a href="{{ route('fundraising.detail', $product['id']) }}#pesan" class="btn btn-buy w-100 mt-auto">
                                                Pesan Sekarang
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- PAGINATION (visual only - katalog masih sedikit) --}}
                        <nav class="d-flex justify-content-center mt-5">
                            <ul class="pagination fundraising-pagination">
                                <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                                <li class="page-item active"><span class="page-link">1</span></li>
                                <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                            </ul>
                        </nav>
                    @endif

                </div>

            </div>
        </div>
    </section>

@endsection