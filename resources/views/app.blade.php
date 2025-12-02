<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1. 0">
    <title>@yield('title', 'CV. Surya Agung - Layanan Keamanan & Kelistrikan Profesional')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="CV. Surya Agung Logo" height="40" class="me-2">
                <div>
                    <div class="company-name">CV. Surya Agung</div>
                    <div class="company-subtitle">MECHANICAL ELECTRICAL</div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                </ul>
                <div class="d-flex">
                    <a href="https://wa.me/+6285232328282" class="btn btn-whatsapp d-flex align-items-center" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="text-white py-4" style="background: linear-gradient(135deg, #1F2937 0%, #3B4EBF 100%);">
        <div class="container">
            <div class="row g-4">
                <!-- Company Info -->
                <div class="col-lg-6 col-md-6">
                    <div class="d-flex align-items-center mb-3">
                        <div>
                            <h5 class="mb-1 fw-bold">CV. Surya Agung</h5>
                            <small class="text-light opacity-75">MECHANICAL ELECTRICAL</small>
                        </div>
                    </div>
                    <p class="text-light opacity-75 mb-3">
                        Penyedia layanan keamanan dan kelistrikan profesional terpercaya dengan pengalaman bertahun-tahun.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="https://wa.me/+6285232328282" class="text-light fs-5" target="_blank" title="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="mailto:suryaagungcctv@gmail.com" class="text-light fs-5" title="Email">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="https://www.google.com/maps/search/Jl.+Klipang+Blok+R+XVII,+Kota+Semarang,+Jawa+Tengah,+Indonesia,+50272" class="text-light fs-5" target="_blank" title="Lokasi">
                            <i class="fas fa-map-marker-alt"></i>
                        </a>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-6 col-md-6">
                    <h5 class="mb-3 fw-bold">Kontak Kami</h5>
                    <div class="contact-info">
                        <div class="contact-item mb-2">
                            <i class="fas fa-phone text-warning me-3"></i>
                            <div>
                                <strong>Telepon / WhatsApp</strong><br>
                                <a href="https://wa.me/+6285232328282" class="text-light text-decoration-none" target="_blank">
                                    +62 852-3232-8282
                                </a>
                            </div>
                        </div>
                        <div class="contact-item mb-2">
                            <i class="fas fa-envelope text-warning me-3"></i>
                            <div>
                                <strong>Email</strong><br>
                                <a href="mailto:suryaagungcctv@gmail.com" class="text-light text-decoration-none">
                                    suryaagungcctv@gmail.com
                                </a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt text-warning me-3"></i>
                            <div>
                                <strong>Alamat</strong><br>
                                <a href="https://www.google.com/maps/search/Jl.+Klipang+Blok+R+XVII,+Kota+Semarang,+Jawa+Tengah,+Indonesia,+50272" 
                                   class="text-light text-decoration-none" target="_blank">
                                    Jl. Klipang Blok R XVII Kota Semarang, Jawa Tengah 50272
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <hr class="my-3 opacity-25">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0 text-light opacity-75">
                        &copy; {{ date('Y') }} CV. Surya Agung. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="d-flex justify-content-md-end gap-2 mt-2 mt-md-0">
                        <a href="https://wa.me/+6285232328282" class="btn btn-outline-light btn-sm" target="_blank">
                            <i class="fab fa-whatsapp me-1"></i> Konsultasi Gratis
                        </a>
                        <a href="mailto:suryaagungcctv@gmail.com" class="btn btn-warning btn-sm">
                            <i class="fas fa-quote-left me-1"></i> Minta Penawaran
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>