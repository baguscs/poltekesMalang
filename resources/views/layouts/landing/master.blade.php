<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POLTEKESMA KEPERAWATAN</title>
    <link rel="icon" href="{{ asset('image/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @stack('style')
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-dark p-3" data-bs-theme="dark">
        <a class="navbar-brand" href="{{ route('landing.index') }}">
            <img src="{{ asset('image/logo.png') }}" alt="" width="8%"> <span>POLTEKESMA KEPERAWATAN</span>
        </a>
        <button class="navbar-toggler mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto d-flex">
                <li class="nav-item px-3">
                    <a class="nav-link fs-5 {{ Route::currentRouteName() == 'landing.index' ? 'active' : '' }}"
                        href="{{ route('landing.index') }}">Beranda</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link fs-5 {{ Str::startsWith(Route::currentRouteName(), 'landing.news') ? 'active' : '' }}"
                        href="{{ route('landing.news') }}">Berita</a>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle fs-5 {{ Route::currentRouteName() == 'landing.academic' ? 'active' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Akademik
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('landing.academic') }}">Kalender Akademik</a></li>
                        <li><a class="dropdown-item"
                                href="https://drive.google.com/file/d/1nuw30Dxql-CjCaDcyTLZVOe2WAJ_Affz/view">Jadwal
                                Moving Class Smt 2</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="https://drive.google.com/file/d/1RFb3BLGCaLsZInw2UTCjy3_JV7Bme3_X/view">Jadwal
                                Moving Class Smt 4</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle fs-5 {{ Route::currentRouteName() == 'landing.online' || Route::currentRouteName() == 'landing.public' ? 'active' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('landing.online') }}">Daring</a></li>
                        <li><a class="dropdown-item" href="{{ route('landing.public') }}">Publik</a></li>
                    </ul>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link fs-5"
                        href="https://drive.google.com/file/d/1UO90fJ8PdnK1M7j1PYsvw9k-knVMqxVB/view"
                        target="_blank">Info Loker</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-logo">
                    <img src="{{ asset('image/logo.png') }}" alt="Logo"> <!-- Ganti dengan path logo Anda -->
                    <div class="footer-contact mt-5">
                        <p>Jl. Dr. Ciptomangunkusumo No.2 28A</p>
                        <p>Ponorogo</p>
                        <p>Telp: 0352-461792</p>
                        <p>Email: <a href="mailto:prodiponorogo.polkesda@gmail.com">prodiponorogo.polkesda@gmail.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5 class="mt-5 mb-3 fw-bold">Jelajah</h5>
                    <ul class="footer-nav">
                        <li><a href="{{ route('landing.about') }}">Profil Kampus</a></li>
                        <li><a href="{{ route('landing.news') }}">Berita</a></li>
                        <li><a href="{{ route('landing.gallery') }}">Galeri</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="mt-5 mb-3 fw-bold">Halaman Umum</h5>
                    <ul class="footer-nav">
                        <li><a href="https://drive.google.com/file/d/1UO90fJ8PdnK1M7j1PYsvw9k-knVMqxVB/view">Karir</a>
                        </li>
                        <li><a href="{{ route('landing.academic') }}">Akademik</a></li>
                        <li><a href="{{ route('landing.contact') }}">Kontak dan Lokasi</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="mt-5 mb-3 fw-bold">Media Sosial</h5>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <h5 class="mt-5 mb-3 fw-bold">Akses Admin</h5>
                    <ul class="footer-nav">
                        <li><a href="{{ route('login') }}">Halaman Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Poltekkes Kemenkes Malang. All rights reserved. Hosting By IDCloudHost</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
