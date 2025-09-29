<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Judul Default')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Header -->
    <header class="text-white p-1 ps-3 pt-1 d-flex bg-gradient-green font-funnel">
        <div class="logo-frames ms-4" id="logoAnimation"></div>
        <h2 class="ms-3 mt-1">VirtuPlants</h2>
        <nav class="w-100 d-flex align-items-center me-auto">
            <ul class="nav nav-pills justify-content-center font-funnel ms-auto text-navbar">
                <li class="nav-item">
                    <a class="nav-link text-white me-4 transition-fast" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white me-4 transition-fast" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white me-4 transition-fast" href="#">Plants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white me-4 transition-fast" href="#">Shop</a>
                </li>
            </ul>
        </nav>
    </header>

    @yield('hero')

    <div class="container mt-0">
        <div class="row">
            <!-- Konten Utama -->
            <main class="col-md-12">
                @yield('content') {{-- konten utama beda tiap halaman --}}
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script>
    // ngambil path sekarang
    const currentPath = window.location.pathname;
    // ambil semua nav link
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        // Remove semua aria current
        link.removeAttribute('aria-current');
        
        // ngambil href dari link
        const href = link.getAttribute('href');
        
        // ngechek link yang sesuai
        if (href === currentPath || 
            (currentPath === '/' && href === '/') ||
            (currentPath === '/about' && href.includes('about'))) {
            link.setAttribute('aria-current', 'page');
        }
    });
</script>
</html>