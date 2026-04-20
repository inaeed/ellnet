<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 5</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- CSS dari public -->
    <link rel="stylesheet" href="{{ asset('styles/della-style.css') }}">

</head>
<body>

    <h1 class="text-3xl font-bold text-blue-500">
        📚 Selamat Datang di Perpustakaan
    </h1>

    <p>Ini hasil praktikum public directory</p>

    <!-- Gambar dari public/images -->
    <img src="{{ asset('images/book1.jpg') }}" alt="Buku 1">
    <img src="{{ asset('images/book2.png') }}" alt="Buku 2">

</body>
</html>