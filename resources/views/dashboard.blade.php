@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold text-green-600 mb-4">
    📊 Dashboard ELLNET
</h1>

<p class="mb-6">Selamat datang di Dashboard ELLNET. Berikut ringkasan data tim & project:</p>

<!-- Statistik ringkas -->
<div class="stats" style="display:flex; gap:20px; margin-bottom:30px;">
    <div style="flex:1; padding:20px; background:#f0f9ff; border-radius:8px; text-align:center;">
        <h2>👥 Anggota</h2>
        <p><strong>3</strong> orang</p>
    </div>
    <div style="flex:1; padding:20px; background:#fef9f0; border-radius:8px; text-align:center;">
        <h2>📂 Project</h2>
        <p><strong>1</strong> aktif</p>
    </div>
    <div style="flex:1; padding:20px; background:#f0fff4; border-radius:8px; text-align:center;">
        <h2>✅ Status</h2>
        <p>On Progress</p>
    </div>
</div>

<!-- Tabel data -->
<table border="1" cellpadding="8" style="width:100%; border-collapse:collapse;">
    <thead style="background:#e2e8f0;">
        <tr>
            <th>Nama Anggota</th>
            <th>Tugas</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Della</td>
            <td>Halaman Home & Dashboard</td>
            <td>Selesai ✅</td>
        </tr>
        <tr>
            <td>Anggota 2</td>
            <td>Halaman About & Contact</td>
            <td>On Progress ⏳</td>
        </tr>
        <tr>
            <td>Anggota 3</td>
            <td>Halaman Product & Register</td>
            <td>Selesai ✅</td>
        </tr>

    </tbody>
</table>
@endsection
