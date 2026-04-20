@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: linear-gradient(135deg, #4f46e5, #6366f1); color:white; padding:60px; border-radius:12px; text-align:center; margin-bottom:40px;">
    <h1 style="font-size:3rem; font-weight:bold; margin-bottom:20px;">
        💼 Solusi untuk Bisnis Anda
    </h1>
    <p style="font-size:1.2rem;">
        Kami membantu UMKM dan perusahaan berkembang dengan layanan digital modern.
    </p>
    <button style="margin-top:20px; padding:12px 24px; background:#facc15; color:#111; font-weight:bold; border:none; border-radius:8px;">
        Mulai Sekarang
    </button>
</div>

<!-- Highlight Section -->
<div style="display:flex; gap:20px; margin-bottom:40px;">
    <div style="flex:1; background:#f9fafb; padding:20px; border-radius:8px; text-align:center;">
        <h2>🌐 Website Modern</h2>
        <p>Bangun citra profesional dengan website company profile yang elegan.</p>
    </div>
    <div style="flex:1; background:#f9fafb; padding:20px; border-radius:8px; text-align:center;">
        <h2>🛒 E-Commerce</h2>
        <p>Jual produk Anda secara online dengan sistem toko digital yang aman.</p>
    </div>
    <div style="flex:1; background:#f9fafb; padding:20px; border-radius:8px; text-align:center;">
        <h2>📊 Dashboard Bisnis</h2>
        <p>Pantau penjualan, pelanggan, dan laporan bisnis dalam satu dashboard interaktif.</p>
    </div>
</div>

<!-- Call to Action -->
<div style="text-align:center; padding:30px; background:#e0f2fe; border-radius:8px;">
    <h2 style="font-size:1.5rem; font-weight:bold;">🚀 Siap kembangkan bisnis Anda?</h2>
    <p>Hubungi tim kami untuk konsultasi gratis dan solusi terbaik.</p>
    <button style="margin-top:15px; padding:10px 20px; background:#4f46e5; color:white; border:none; border-radius:6px;">
        Hubungi Kami
    </button>
</div>
@endsection
