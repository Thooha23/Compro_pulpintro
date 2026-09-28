@extends('layouts.app')

@section('title', $product['name'] . ' - Fundraising')

@section('content')

    <section class="py-4" style="background: var(--serve-bg);">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '/';">
                <ol class="breadcrumb mb-0 small">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('fundraising') }}" class="text-decoration-none">Fundraising</a></li>
                    <li class="breadcrumb-item active text-secondary" aria-current="page">{{ $product['name'] }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-5">

                {{-- GALLERY --}}
                <div class="col-12 col-lg-6">
                    <div class="product-gallery-main product-zoom-container d-flex justify-content-center align-items-center bg-secondary-subtle rounded-4 mb-3">
                        @if(!empty($product['images'][0]))
                            <img id="mainProductImage" src="{{ asset($product['images'][0]) }}" alt="{{ $product['name'] }}" class="w-100 h-100 rounded-4" style="object-fit:cover;">
                        @else
                            <i class="bi bi-basket2-fill" style="font-size:4rem; color:#aaa;"></i>
                        @endif
                    </div>
                    <div class="d-flex gap-2">
                        @foreach($product['images'] as $thumb)
                            <div class="product-gallery-thumb d-flex justify-content-center align-items-center bg-secondary-subtle rounded-3 overflow-hidden">
                                <img src="{{ asset($thumb) }}" alt="{{ $product['name'] }}" class="w-100 h-100" style="object-fit:cover;">
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- INFO --}}
                <div class="col-12 col-lg-6">
                    <span class="badge product-badge mb-2">{{ $product['category'] }}</span>
                    <h2 class="fw-bold mb-2">{{ $product['name'] }}</h2>

                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill" style="background:#e8f6ec; color:#2f8a4b;">{{ $product['stock'] }}</span>
                        <div class="d-flex align-items-center gap-1 small text-warning">
                            <i class="bi bi-star-fill"></i>
                            <span class="text-dark">{{ number_format($product['rating'], 1) }}</span>
                            <span class="text-secondary">({{ $product['reviews_count'] }} ulasan)</span>
                        </div>
                    </div>

                    <p class="fw-bold product-price mb-3" style="font-size:1.6rem;">
                        Rp {{ number_format($product['price'], 0, ',', '.') }}
                    </p>

                    <p class="text-secondary mb-4">{{ $product['description'] }}</p>

                    <div class="d-flex align-items-center gap-3 mb-4">
                        <span class="fw-semibold small">Jumlah</span>
                        <div class="qty-selector d-flex align-items-center border rounded-pill">
                            <button type="button" class="btn btn-sm border-0" id="qtyMinus">-</button>
                            <span class="px-3 fw-semibold" id="qtyValue">1</span>
                            <button type="button" class="btn btn-sm border-0" id="qtyPlus">+</button>
                        </div>
                    </div>

                    <div id="pesan">
                        <button
                            type="button"
                            id="pesanBtn"
                            class="btn btn-buy btn-lg px-5"
                            data-destination-type="{{ $product['destination_type'] }}"
                            data-destination-value="{{ $product['destination_value'] }}"
                            data-product-name="{{ $product['name'] }}"
                            data-product-price="{{ $product['price'] }}"
                        >
                            Pesan Sekarang
                        </button>
                    </div>

                    <hr class="my-4">

                    <p class="small text-secondary mb-1">SKU: {{ $product['sku'] }}</p>
                    <p class="small text-secondary mb-1">Dijual oleh: {{ $product['seller_name'] }}</p>
                    <p class="small text-secondary mb-0">
                        Kategori: <a href="{{ route('fundraising', ['category' => $product['category']]) }}" class="text-decoration-none">{{ $product['category'] }}</a>
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- RELATED PRODUCTS --}}
    @if(count($related) > 0)
    <section class="py-5" style="background: var(--serve-bg);">
        <div class="container">
            <h4 class="fw-bold text-center mb-4">Produk Lainnya</h4>
            <div class="row g-4">
                @foreach($related as $item)
                    <div class="col-6 col-md-3">
                        <div class="card product-card border-0 shadow-sm rounded-4 h-100">
                            <a href="{{ route('fundraising.detail', $item['id']) }}" class="text-decoration-none text-dark">
                                <div class="product-image d-flex justify-content-center align-items-center bg-secondary-subtle overflow-hidden">
                                    @if(!empty($item['images'][0]))
                                        <img src="{{ asset($item['images'][0]) }}" alt="{{ $item['name'] }}" class="w-100 h-100" style="object-fit:cover;">
                                    @else
                                        <i class="bi bi-basket2-fill" style="font-size:2rem; color:#aaa;"></i>
                                    @endif
                                </div>
                                <div class="card-body p-3">
                                    <h6 class="fw-bold mb-1 fundraising-product-name">{{ $item['name'] }}</h6>
                                    <p class="fw-bold product-price mb-0">Rp {{ number_format($item['price'], 0, ',', '.') }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <script>
        (function () {
            const qtyValue = document.getElementById('qtyValue');
            const qtyMinus = document.getElementById('qtyMinus');
            const qtyPlus = document.getElementById('qtyPlus');
            const pesanBtn = document.getElementById('pesanBtn');
            const zoomContainer = document.querySelector('.product-zoom-container');
            const mainProductImage = document.getElementById('mainProductImage');
            const zoomInBtn = document.getElementById('zoomInBtn');
            const zoomOutBtn = document.getElementById('zoomOutBtn');
            const zoomValueLabel = document.getElementById('zoomValueLabel');

            let zoomLevel = 1;

            function applyZoom() {
                mainProductImage.style.transform = 'scale(' + zoomLevel + ')';
                zoomValueLabel.textContent = Math.round(zoomLevel * 100) + '%';
            }

            if (zoomContainer && mainProductImage) {
                zoomContainer.addEventListener('mouseenter', function () {
                    zoomContainer.classList.add('zoom-active');
                });

                zoomContainer.addEventListener('mouseleave', function () {
                    zoomContainer.classList.remove('zoom-active');
                    mainProductImage.style.transformOrigin = 'center center';
                });

                zoomContainer.addEventListener('mousemove', function (event) {
                    const rect = zoomContainer.getBoundingClientRect();
                    const x = ((event.clientX - rect.left) / rect.width) * 100;
                    const y = ((event.clientY - rect.top) / rect.height) * 100;

                    mainProductImage.style.transformOrigin = x + '% ' + y + '%';
                    zoomContainer.classList.add('zoom-active');
                });
            }

            if (zoomInBtn && zoomOutBtn && mainProductImage) {
                zoomInBtn.addEventListener('click', function () {
                    zoomLevel = Math.min(2.5, Number((zoomLevel + 0.2).toFixed(2)));
                    applyZoom();
                });

                zoomOutBtn.addEventListener('click', function () {
                    zoomLevel = Math.max(1, Number((zoomLevel - 0.2).toFixed(2)));
                    applyZoom();
                });

                applyZoom();
            }

            let qty = 1;

            qtyMinus.addEventListener('click', function () {
                if (qty > 1) {
                    qty--;
                    qtyValue.textContent = qty;
                }
            });

            qtyPlus.addEventListener('click', function () {
                qty++;
                qtyValue.textContent = qty;
            });

            pesanBtn.addEventListener('click', function () {
                const destinationType = pesanBtn.dataset.destinationType;
                const destinationValue = pesanBtn.dataset.destinationValue;
                const productName = pesanBtn.dataset.productName;
                const productPrice = Number(pesanBtn.dataset.productPrice);

                if (destinationType === 'wa') {
                    const message =
                        'Halo, saya mau pesan produk fundraising:\n' +
                        '- Produk: ' + productName + '\n' +
                        '- Jumlah: ' + qty + '\n' +
                        '- Harga satuan: Rp ' + productPrice.toLocaleString('id-ID');

                    const waUrl = 'https://wa.me/' + destinationValue + '?text=' + encodeURIComponent(message);
                    window.open(waUrl, '_blank');
                } else {
                    // shopee / tokopedia / e-commerce lain: langsung ke link produk
                    window.open(destinationValue, '_blank');
                }
            });
        })();
    </script>

@endsection