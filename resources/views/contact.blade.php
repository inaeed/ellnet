@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">📩 Contact Us</h1>
<form style="max-width:400px; margin:auto; background:#f9fafb; padding:20px; border-radius:8px;">
    <label>Nama:</label><br>
    <input type="text" name="nama" style="width:100%; margin-bottom:10px;"><br>
    <label>Email:</label><br>
    <input type="email" name="email" style="width:100%; margin-bottom:10px;"><br>
    <label>Pesan:</label><br>
    <textarea name="pesan" style="width:100%; margin-bottom:10px;"></textarea><br>
    <button type="submit" style="padding:10px 20px; background:#4f46e5; color:white; border:none; border-radius:6px;">
        Kirim
    </button>
</form>
@endsection
