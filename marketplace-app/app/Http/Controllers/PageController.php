<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        
        $keyMoments = [
            [
                'title' => 'Childhood Cancer',
                'description' => 'In collaboration with Lions Club Victory Pioneer, serving children with cancer through play and creative arts.',
                'image' => 'assets/images/childhood_cancer.jpg',
            ],
            [
                'title' => 'Childhood Cancer',
                'description' => 'In collaboration with Lions Club Victory Pioneer, serving children with cancer through play and creative arts.',
                'image' => 'assets/images/diabetes.jpg',
            ],
            [
                'title' => 'Childhood Cancer',
                'description' => 'In collaboration with Lions Club Victory Pioneer, serving children with cancer through play and creative arts.',
                'image' => 'assets/images/environment.jpg',
            ],
        ];

        return view('pages.home', compact('keyMoments'));
    }

    
    public function about()
    {
        return view('pages.about');
    }

    
    public function service()
    {
        return view('pages.service');
    }

    
    public function partnership()
    {
        return view('pages.partnership');
    }

    public function join()
    {
        return view('pages.join');
    }

    public function faq()
    {
        $generalFaqs = [
            [
                'question' => 'Is there a free trial available?',
                'answer' => 'Yes, you can try us for free for 30 days. If you want, we will provide you with a free 30-minute onboarding call to get you up and running.',
            ],
            [
                'question' => 'Can I change my plan later?',
                'answer' => 'Absolutely. You can upgrade, downgrade, or switch plans at any time from your account dashboard.',
            ],
            [
                'question' => 'What is your cancellation policy?',
                'answer' => 'You can cancel any time before the next billing cycle. Your access remains active until the end of the current period.',
            ],
            [
                'question' => 'Can other info be added to an invoice?',
                'answer' => 'Yes. You can add billing details, project references, and custom notes to your invoice before sending it.',
            ],
            [
                'question' => 'How does billing work?',
                'answer' => 'Billing is automatic and charged monthly according to your selected plan and active members or usage as applicable.',
            ],
        ];

        $fundraisingFaqs = [
            [
                'question' => 'How do I buy fundraising products?',
                'answer' => 'Browse the fundraising catalog, choose a product, and click “Pesan Sekarang” to continue to the order flow.',
            ],
            [
                'question' => 'What happens to the funds raised?',
                'answer' => 'A portion of each sale supports the activity and community programs organized by Lions Club Jakarta Pulpintro.',
            ],
            [
                'question' => 'Can I order in bulk?',
                'answer' => 'Yes. For larger quantities, you can contact the seller or team directly to discuss custom order arrangements and pricing.',
            ],
            [
                'question' => 'How long does delivery take?',
                'answer' => 'Delivery timing depends on the product and shipping destination, but most orders are processed and dispatched within a few working days.',
            ],
            [
                'question' => 'Can I request a different item or size?',
                'answer' => 'Yes. If the product is still available, you can contact the seller and request details on size, variant, or special arrangements.',
            ],
        ];

        return view('pages.faq', compact('generalFaqs', 'fundraisingFaqs'));
    }

    public function fundraising(Request $request)
    {
        $products = $this->getProducts();

        $category = $request->query('category');
        if ($category && $category !== 'all') {
            $products = array_values(array_filter($products, fn ($p) => $p['category'] === $category));
        }

        $search = $request->query('search');
        if ($search) {
            $products = array_values(array_filter(
                $products,
                fn ($p) => str_contains(strtolower($p['name']), strtolower($search))
            ));
        }

        $categories = collect($this->getProducts())->pluck('category')->unique()->values()->all();
        $totalProducts = count($this->getProducts());

        return view('pages.fundraising', compact('products', 'categories', 'category', 'search', 'totalProducts'));
    }

    public function fundraisingDetail($id)
    {
        $products = $this->getProducts();

        $product = collect($products)->firstWhere('id', (int) $id);

        if (!$product) {
            abort(404);
        }

        $related = collect($products)
            ->where('category', $product['category'])
            ->where('id', '!=', $product['id'])
            ->take(4)
            ->values()
            ->all();

        // Fallback: kalau produk kategori sama kurang dari 4, isi sisanya dari produk lain
        if (count($related) < 4) {
            $others = collect($products)
                ->where('id', '!=', $product['id'])
                ->whereNotIn('id', collect($related)->pluck('id'))
                ->take(4 - count($related))
                ->values()
                ->all();
            $related = array_merge($related, $others);
        }

        return view('pages.fundraising-detail', compact('product', 'related'));
    }

    /**
     * Data produk statis sementara.
     * Nanti bisa dipindah ke tabel `products` + tabel `sellers` di database.
     *
     * destination_type: 'wa' | 'shopee' | 'tokopedia'
     * destination_value: nomor WA (format 62xxxxxxxxxx) ATAU url produk e-commerce
     *
     * PENTING: rating, reviews_count, dan stock di bawah ini masih PLACEHOLDER DUMMY,
     * belum berasal dari data review/stok sungguhan. Ganti begitu ada datanya.
     */
    private function getProducts(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Peyek Kacang Bu Siti',
                'price' => 25000,
                'description' => 'Peyek kacang renyah buatan rumahan, digoreng fresh tiap hari. Cocok untuk camilan atau oleh-oleh.',
                'images' => [
                    'assets/images/products/peyek.jpeg',
                ],
                'category' => 'Makanan',
                'seller_name' => 'Siti Rahayu',
                'rating' => 5.0,
                'reviews_count' => 24,
                'stock' => 'Tersedia',
                'sku' => 'FR-001',
                'destination_type' => 'wa',
                'destination_value' => '6281234567801',
            ],
            [
                'id' => 2,
                'name' => 'Pempek Palembang Asli',
                'price' => 35000,
                'description' => 'Pempek ikan tenggiri asli, dikirim beku, lengkap dengan cuko. Isi 10 pcs per pack.',
                'images' => [
                    'assets/images/products/pempek.jpeg',
                ],
                'category' => 'Makanan',
                'seller_name' => 'Ahmad Fauzi',
                'rating' => 4.8,
                'reviews_count' => 56,
                'stock' => 'Tersedia',
                'sku' => 'FR-002',
                'destination_type' => 'wa',
                'destination_value' => '6281234567802',
            ],
            [
                'id' => 3,
                'name' => 'Asinan Betawi Segar',
                'price' => 20000,
                'description' => 'Asinan sayur khas Betawi, segar dan pedas manis, dibuat fresh sesuai pesanan.',
                'images' => [
                    'assets/images/products/asinan-betawi.jpeg',
                ],
                'category' => 'Makanan',
                'seller_name' => 'Dewi Lestari',
                'rating' => 4.9,
                'reviews_count' => 31,
                'stock' => 'Tersedia',
                'sku' => 'FR-003',
                'destination_type' => 'wa',
                'destination_value' => '6281234567803',
            ],
            [
                'id' => 4,
                'name' => 'Kue Kering Nastar Homemade',
                'price' => 60000,
                'description' => 'Nastar homemade dengan selai nanas asli, tanpa bahan pengawet. Kemasan toples 500gr.',
                'images' => [
                    'assets/images/products/nastar.jpeg',
                ],
                'category' => 'Makanan',
                'seller_name' => 'Ratna Sari',
                'rating' => 4.7,
                'reviews_count' => 18,
                'stock' => 'Tersedia',
                'sku' => 'FR-004',
                'destination_type' => 'wa',
                'destination_value' => '6281234567804',
            ],
            [
                'id' => 5,
                'name' => 'Kaos Lions Club Jakarta Pulpintro',
                'price' => 120000,
                'description' => 'Kaos katun combed 24s, sablon logo Lions Club Jakarta Pulpintro. Tersedia size S-XL.',
                'images' => [
                    'assets/images/products/shirts.jpeg',
                ],
                'category' => 'Apparel',
                'seller_name' => 'Budi Santoso',
                'rating' => 4.6,
                'reviews_count' => 42,
                'stock' => 'Tersedia',
                'sku' => 'FR-005',
                'destination_type' => 'shopee',
                'destination_value' => 'https://shopee.co.id/product/000000/000000',
            ],
            [
                'id' => 6,
                'name' => 'Tumbler Stainless Lions Club',
                'price' => 85000,
                'description' => 'Tumbler stainless 500ml, cetak logo Lions Club, menjaga minuman tetap dingin/panas.',
                'images' => [
                    'assets/images/products/tumblr.jpeg',
                ],
                'category' => 'Lifestyle',
                'seller_name' => 'Budi Santoso',
                'rating' => 4.8,
                'reviews_count' => 37,
                'stock' => 'Tersedia',
                'sku' => 'FR-006',
                'destination_type' => 'tokopedia',
                'destination_value' => 'https://www.tokopedia.com/toko/product/000000',
            ],
            [
                'id' => 7,
                'name' => 'Tote Bag Charity Edition',
                'price' => 45000,
                'description' => 'Tote bag kanvas tebal, desain eksklusif edisi galang dana childhood cancer.',
                'images' => [
                    'assets/images/products/totebag.jpeg',
                ],
                'category' => 'Lifestyle',
                'seller_name' => 'Rina Wijaya',
                'rating' => 4.9,
                'reviews_count' => 29,
                'stock' => 'Tersedia',
                'sku' => 'FR-007',
                'destination_type' => 'wa',
                'destination_value' => '6281234567805',
            ],
            [
                'id' => 8,
                'name' => 'Pin Enamel Lions Club',
                'price' => 25000,
                'description' => 'Pin enamel koleksi logo Lions Club Jakarta Pulpintro, cocok untuk lencana anggota.',
                'images' => [
                    'assets/images/products/enamel-pin.jpeg',
                ],
                'category' => 'Aksesoris',
                'seller_name' => 'Rina Wijaya',
                'rating' => 5.0,
                'reviews_count' => 15,
                'stock' => 'Tersedia',
                'sku' => 'FR-008',
                'destination_type' => 'wa',
                'destination_value' => '6281234567805',
            ],
        ];
    }
}