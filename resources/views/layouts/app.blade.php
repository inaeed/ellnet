<!DOCTYPE html>
<html>
<head>
    <title>ELLNET Project</title>
    <link rel="stylesheet" href="{{ asset('styles/della-style.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav>
        <a href="/home">Home</a> |
        <a href="/about">About</a> |
        <a href="/product">Product</a> |
        <a href="/contact">Contact</a> |
        <a href="/login">Login</a> |
        <a href="/register">Register</a> |
        <a href="/dashboard">Dashboard</a> |
        <a href="/listbarang">List Barang</a>
    </nav>
    <hr>

    <!-- Konten Halaman -->
    <div class="content">
        @yield('content')
    </div>

    <hr>
    <!-- Footer -->
    <footer>
        <p>&copy; 2026 ELLNET Project</p>
    </footer>
</body>
</html>
