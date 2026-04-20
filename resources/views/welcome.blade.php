@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: linear-gradient(135deg, #facc15, #f87171); color:#111; padding:50px; border-radius:12px; text-align:center; margin-bottom:40px;">
    <h1 style="font-size:3rem; font-weight:bold; margin-bottom:20px;">
        🤪 Selamat Datang di Web ELLNET!
    </h1>
    <p style="font-size:1.2rem;">Butuh Solusi Untuk Strategi Bisnis Anda??</p>
    <p style="font-size:1rem; font-style:italic;">(Tapi jangan lupa rileks dulu biar bisnis makin lancar 😆)</p>
</div>

<!-- Gallery Lucu -->
<div style="display:flex; justify-content:center; gap:40px; flex-wrap:wrap; align-items:center;">
    <figure style="text-align:center;">
        <img src="{{ asset('images/book1.png') }}" alt="Buku 1" width="150" style="border-radius:50%; box-shadow:0 4px 8px rgba(0,0,0,0.2); transform:rotate(-5deg);">
        <figcaption style="margin-top:10px; font-weight:bold;">📘(Santuy Boss)</figcaption>
    </figure>

    <div style="text-align:center;">
        <h2 style="font-size:1.8rem; font-weight:bold; color:#ef4444;">🎵 CALL ME BABY 🎵</h2>
        <p style="font-size:0.9rem; color:#6b7280;">Mood booster untuk bisnis kamu 💃🕺</p>
    </div>

    <figure style="text-align:center;">
        <img src="{{ asset('images/book2.png') }}" alt="Buku 2" width="150" style="border-radius:50%; box-shadow:0 4px 8px rgba(0,0,0,0.2); transform:rotate(5deg);">
        <figcaption style="margin-top:10px; font-weight:bold;">📘(Semangat Terbang!)</figcaption>
    </figure>
</div>

<!-- Call to Action Kocak -->
<div style="margin-top:40px; text-align:center; background:#d1fae5; padding:20px; border-radius:8px;">
    <h3 style="font-size:1.2rem; font-weight:bold;">🚀 Yuk kembangkan bisnis mu bareng ELLNET!</h3>
    <button style="margin-top:10px; padding:10px 20px; background:#10b981; color:white; border:none; border-radius:6px;">
        Hubungi Kami😜
    </button>
</div>
@endsection
