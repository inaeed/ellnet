@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold text-indigo-600 mb-4">
    💼 Produk & Layanan Bisnis Kami
</h1>

<p class="mb-6">ELLNET menyediakan berbagai solusi digital untuk mendukung bisnis Anda:</p>

<!-- Grid produk -->
<div style="display:grid; grid-template-columns: repeat(3, 1fr); gap:20px;">
    <div style="border:1px solid #ddd; border-radius:8px; padding:15px; text-align:center;">
        <h2>🌐 Website Company Profile</h2>
        <p>Bangun citra profesional dengan website modern untuk perusahaan Anda.</p>
        <button style="margin-top:10px; padding:8px 12px; background:#4f46e5; color:white; border:none; border-radius:4px;">
            Lihat Detail
        </button>
    </div>

    <div style="border:1px solid #ddd; border-radius:8px; padding:15px; text-align:center;">
        <h2>🛒 E-Commerce Solution</h2>
        <p>Jual produk Anda secara online dengan sistem toko digital yang aman & mudah.</p>
        <button style="margin-top:10px; padding:8px 12px; background:#4f46e5; color:white; border:none; border-radius:4px;">
            Lihat Detail
        </button>
    </div>

    <div style="border:1px solid #ddd; border-radius:8px; padding:15px; text-align:center;">
        <h2>📊 Business Dashboard</h2>
        <p>Monitoring data penjualan, pelanggan, dan laporan bisnis dalam satu dashboard interaktif.</p>
        <button style="margin-top:10px; padding:8px 12px; background:#4f46e5; color:white; border:none; border-radius:4px;">
            Lihat Detail
        </button>
    </div>
</div>
@endsection
