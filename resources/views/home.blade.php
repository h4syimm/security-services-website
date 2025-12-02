@extends('app')

@section('title', 'CV. Surya Agung - Layanan Keamanan & Kelistrikan Profesional')

@section('content')
<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Layanan Keamanan & Mekanikal-Elektrikal Profesional</h1>
                <p class="lead mb-4">Kami adalah ahli dalam instalasi CCTV, pekerjaan mekanikal elektrikal, sistem alarm kebakaran, instalasi sistem hidran, telepon PABX, nurse call, proteksi petir, dan sistem alarm keamanan.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Layanan Kami</h2>
        <!-- First Row -->
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-video fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Instalasi CCTV</h5>
                        <p class="card-text">Instalasi dan penggantian sistem CCTV profesional dengan teknologi terkini.</p>
                        <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#cctvModal">Pelajari Lebih Lanjut</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-bolt fa-3x text-warning mb-3"></i>
                        <h5 class="card-title">Mekanikal Elektrikal</h5>
                        <p class="card-text">Layanan instalasi, pemeliharaan, dan perbaikan listrik yang ahli dan profesional.</p>
                        <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#electricalModal">Pelajari Lebih Lanjut</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-fire-extinguisher fa-3x text-danger mb-3"></i>
                        <h5 class="card-title">Sistem Alarm Kebakaran</h5>
                        <p class="card-text">Instalasi dan pemeliharaan sistem alarm kebakaran yang lengkap dan terpercaya.</p>
                        <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#fireAlarmModal">Pelajari Lebih Lanjut</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-tint fa-3x text-info mb-3"></i>
                        <h5 class="card-title">Layanan Hidran</h5>
                        <p class="card-text">Instalasi, testing, dan pemeliharaan hidran profesional untuk keamanan kebakaran.</p>
                        <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#hydrantModal">Pelajari Lebih Lanjut</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Second Row -->
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-phone fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Telepon PABX</h5>
                        <p class="card-text">Instalasi dan konfigurasi sistem telepon PABX canggih untuk komunikasi bisnis.</p>
                        <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#pabxModal">Pelajari Lebih Lanjut</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-user-nurse fa-3x text-pink mb-3" style="color: #e91e63;"></i>
                        <h5 class="card-title">Nurse Call</h5>
                        <p class="card-text">Instalasi sistem nurse call profesional untuk rumah sakit dan fasilitas kesehatan.</p>
                        <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#nurseCallModal">Pelajari Lebih Lanjut</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-bolt fa-3x text-warning mb-3"></i>
                        <h5 class="card-title">Proteksi Petir</h5>
                        <p class="card-text">Desain dan instalasi sistem proteksi petir yang komprehensif untuk bangunan.</p>
                        <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#lightningModal">Pelajari Lebih Lanjut</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-shield-alt fa-3x text-dark mb-3"></i>
                        <h5 class="card-title">Alarm Keamanan</h5>
                        <p class="card-text">Instalasi dan monitoring sistem alarm keamanan lengkap untuk rumah dan bisnis.</p>
                        <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#alarmModal">Pelajari Lebih Lanjut</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Brand Logos Scrolling -->
        <div class="brand-scroll-container mt-3">
            <div class="brand-scroll-track">
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/dahua.jpg') }}" alt="Dahua" class="img-fluid">
                </div>
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/hikvision.jpg') }}" alt="Hikvision" class="img-fluid">
                </div>
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/telview.jpg') }}" alt="Telview" class="img-fluid">
                </div>
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/commax.jpg') }}" alt="Commax" class="img-fluid">
                </div>
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/asenware.jpg') }}" alt="Asenware" class="img-fluid">
                </div>
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/hooseki.jpg') }}" alt="Hooseki" class="img-fluid">
                </div>
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/nec.jpg') }}" alt="NEC" class="img-fluid">
                </div>
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/albox.jpg') }}" alt="Albox" class="img-fluid">
                </div>
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/ezocable.jpg') }}" alt="Ezocable" class="img-fluid">
                </div>
                
                <!-- Duplicate for infinite scroll -->
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/dahua.jpg') }}" alt="Dahua" class="img-fluid">
                </div>
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/hikvision.jpg') }}" alt="Hikvision" class="img-fluid">
                </div>
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/telview.jpg') }}" alt="Telview" class="img-fluid">
                </div>
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/commax.jpg') }}" alt="Commax" class="img-fluid">
                </div>
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/asenware.jpg') }}" alt="Asenware" class="img-fluid">
                </div>
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/hooseki.jpg') }}" alt="Hooseki" class="img-fluid">
                </div>
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/nec.jpg') }}" alt="NEC" class="img-fluid">
                </div>
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/albox.jpg') }}" alt="Albox" class="img-fluid">
                </div>
                <div class="brand-logo">
                    <img src="{{ asset('images/BRAND LOGO/ezocable.jpg') }}" alt="Ezocable" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Modals -->
<!-- CCTV Modal -->
<div class="modal fade" id="cctvModal" tabindex="-1" aria-labelledby="cctvModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" style="max-width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cctvModalLabel"><i class="fas fa-video me-2 text-primary"></i>Instalasi CCTV</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold text-primary">Layanan Kami</h6>
                        <ul>
                            <li>Instalasi sistem CCTV untuk rumah dan komersial</li>
                            <li>Upgrade dan penggantian sistem lama</li>
                            <li>Konfigurasi dan setup monitoring</li>
                            <li>Maintenance dan perbaikan</li>
                            <li>Konsultasi keamanan dan survei lokasi</li>
                        </ul>
                        
                        <h6 class="fw-bold text-primary mt-4">Merek Unggulan</h6>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="brand-card p-3 text-center border rounded">
                                    <img src="{{ asset('images/Details/CCTV/DAHUA.png') }}" alt="Dahua" class="img-fluid mb-2" style="max-height: 100px;">
                                    <h6>Dahua</h6>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="brand-card p-3 text-center border rounded">
                                    <img src="{{ asset('images/Details/CCTV/cctv isi new/hikvision/5.jpg') }}" alt="Hikvision" class="img-fluid mb-2" style="max-height: 100px;">
                                    <h6>Hikvision</h6>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="brand-card p-3 text-center border rounded">
                                    <img src="{{ asset('images/Details/CCTV/hiview.png') }}" alt="Hiview" class="img-fluid mb-2" style="max-height: 100px;">
                                    <h6>Hiview</h6>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="brand-card p-3 text-center border rounded">
                                    <img src="{{ asset('images/Details/CCTV/telview.jpg') }}" alt="Telview" class="img-fluid mb-2" style="max-height: 100px;">
                                    <h6>Telview</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="cctvCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#cctvCarousel" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#cctvCarousel" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#cctvCarousel" data-bs-slide-to="2"></button>
                                <button type="button" data-bs-target="#cctvCarousel" data-bs-slide-to="3"></button>
                            </div>
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/Details/CCTV/cctv isi new/dahua/1.jpg') }}" class="d-block w-100" alt="Dahua CCTV" style="height: 250px; object-fit: cover;">
                                    <div class="carousel-caption">
                                        <h5 class="mb-0">Dahua Technology</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/Details/CCTV/cctv isi new/hikvision/1.jpg') }}" class="d-block w-100" alt="Hikvision CCTV" style="height: 250px; object-fit: cover;">
                                    <div class="carousel-caption">
                                        <h5 class="mb-0">Hikvision</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/Details/CCTV/cctv isi new/hiview/1.jpg') }}" class="d-block w-100" alt="Hiview CCTV" style="height: 250px; object-fit: cover;">
                                    <div class="carousel-caption">
                                        <h5 class="mb-0">Hiview</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/Details/CCTV/cctv isi new/telview/1.jpg') }}" class="d-block w-100" alt="Telview CCTV" style="height: 250px; object-fit: cover;">
                                    <div class="carousel-caption">
                                        <h5 class="mb-0">Telview</h5>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#cctvCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#cctvCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                        </div>
                        
                        <!-- Feature highlights -->
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="feature-highlight p-3 bg-light rounded text-center">
                                    <i class="fas fa-eye fa-2x text-primary mb-2"></i>
                                    <h6 class="fw-bold mb-1">HD Quality</h6>
                                    <small class="text-muted">Resolusi tinggi</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="feature-highlight p-3 bg-light rounded text-center">
                                    <i class="fas fa-shield-alt fa-2x text-success mb-2"></i>
                                    <h6 class="fw-bold mb-1">Waterproof</h6>
                                    <small class="text-muted">Tahan cuaca</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="feature-highlight p-3 bg-light rounded text-center">
                                    <i class="fas fa-moon fa-2x text-warning mb-2"></i>
                                    <h6 class="fw-bold mb-1">Night Vision</h6>
                                    <small class="text-muted">Infrared</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="feature-highlight p-3 bg-light rounded text-center">
                                    <i class="fas fa-mobile-alt fa-2x text-info mb-2"></i>
                                    <h6 class="fw-bold mb-1">Remote View</h6>
                                    <small class="text-muted">Akses mobile</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="https://wa.me/+6285232328282?text=Saya tertarik dengan layanan Instalasi CCTV" class="btn btn-primary">
                    <i class="fab fa-whatsapp me-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Fire Alarm Modal -->
<div class="modal fade" id="fireAlarmModal" tabindex="-1" aria-labelledby="fireAlarmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" style="max-width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fireAlarmModalLabel"><i class="fas fa-fire-extinguisher me-2 text-danger"></i>Sistem Alarm Kebakaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold text-danger">Layanan Kami</h6>
                        <ul>
                            <li>Instalasi sistem alarm kebakaran lengkap</li>
                            <li>Smoke detector dan heat detector</li>
                            <li>Fire alarm panel dan control system</li>
                            <li>Sirene dan strobo light</li>
                            <li>Maintenance berkala dan testing</li>
                            <li>Sertifikasi dan compliance</li>
                        </ul>
                        
                        <h6 class="fw-bold text-danger mt-4">Komponen Sistem</h6>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="component-card p-3 border rounded">
                                    <h6><i class="fas fa-microchip me-2"></i>Control Panel</h6>
                                    <p class="small text-muted">Pusat kontrol sistem dengan monitoring 24/7</p>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="component-card p-3 border rounded">
                                    <h6><i class="fas fa-burn me-2"></i>Detector</h6>
                                    <p class="small text-muted">Smoke detector dan heat detector sensitif tinggi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <img src="{{ asset('images/Details/Fire Alarm/firealarm_upload.jpg') }}" class="img-fluid rounded mb-3" alt="Fire Alarm System">
                            <p class="text-muted">Sistem alarm kebakaran terintegrasi untuk perlindungan maksimal</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="https://wa.me/+6285232328282?text=Saya tertarik dengan layanan Sistem Alarm Kebakaran" class="btn btn-primary">
                    <i class="fab fa-whatsapp me-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Electrical Services Modal -->
<div class="modal fade" id="electricalModal" tabindex="-1" aria-labelledby="electricalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" style="max-width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="electricalModalLabel"><i class="fas fa-plug me-2 text-warning"></i>Layanan Listrik</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold text-warning">Layanan Kami</h6>
                        <ul>
                            <li>Instalasi listrik rumah dan komersial</li>
                            <li>Perbaikan dan maintenance elektrikal</li>
                            <li>Instalasi panel listrik dan MCB</li>
                            <li>Wiring dan grounding system</li>
                            <li>Emergency electrical services</li>
                            <li>Electrical safety inspection</li>
                        </ul>
                        
                        <h6 class="fw-bold text-warning mt-4">Keunggulan</h6>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="feature-card p-3 border rounded">
                                    <h6><i class="fas fa-shield-alt me-2"></i>Standar SNI</h6>
                                    <p class="small text-muted">Semua instalasi sesuai standar keamanan nasional</p>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="feature-card p-3 border rounded">
                                    <h6><i class="fas fa-tools me-2"></i>Tim Bersertifikat</h6>
                                    <p class="small text-muted">Teknisi berpengalaman dan berlisensi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <div class="bg-warning bg-opacity-10 p-5 rounded">
                                <i class="fas fa-plug fa-5x text-warning mb-3"></i>
                                <h5>Layanan Listrik Profesional</h5>
                            </div>
                            <p class="text-muted mt-3">Layanan listrik profesional dengan standar keamanan tinggi</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="https://wa.me/+6285232328282?text=Saya tertarik dengan layanan Electrical Services" class="btn btn-primary">
                    <i class="fab fa-whatsapp me-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Hydrant Modal -->
<div class="modal fade" id="hydrantModal" tabindex="-1" aria-labelledby="hydrantModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" style="max-width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hydrantModalLabel"><i class="fas fa-water me-2 text-info"></i>Instalasi Hydrant</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold text-info">Layanan Kami</h6>
                        <ul>
                            <li>Instalasi sistem hydrant indoor dan outdoor</li>
                            <li>Hydrant box dan fire hose reel</li>
                            <li>Pompa hydrant dan pressure tank</li>
                            <li>Testing dan commissioning</li>
                            <li>Maintenance dan inspection rutin</li>
                            <li>Emergency repair service</li>
                        </ul>
                        
                        <h6 class="fw-bold text-info mt-4">Jenis Hydrant</h6>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="type-card p-3 text-center border rounded">
                                    <i class="fas fa-building fa-2x text-info mb-2"></i>
                                    <h6>Indoor</h6>
                                    <p class="small text-muted">Hydrant dalam gedung</p>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="type-card p-3 text-center border rounded">
                                    <i class="fas fa-road fa-2x text-info mb-2"></i>
                                    <h6>Outdoor</h6>
                                    <p class="small text-muted">Hydrant area luar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <img src="{{ asset('images/Details/Hydrant/hydrant_upload.jpg') }}" class="img-fluid rounded mb-3" alt="Hydrant System">
                            <p class="text-muted">Sistem hydrant lengkap untuk perlindungan kebakaran</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="https://wa.me/+6285232328282?text=Saya tertarik dengan layanan Instalasi Hydrant" class="btn btn-primary">
                    <i class="fab fa-whatsapp me-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>

<!-- PABX Modal -->
<div class="modal fade" id="pabxModal" tabindex="-1" aria-labelledby="pabxModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" style="max-width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pabxModalLabel"><i class="fas fa-phone me-2 text-success"></i>Sistem PABX</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold text-success">Layanan Kami</h6>
                        <ul>
                            <li>Instalasi sistem PABX digital dan analog</li>
                            <li>Konfigurasi extension dan routing</li>
                            <li>Integrasi dengan sistem VoIP</li>
                            <li>Auto attendant dan voice mail</li>
                            <li>Maintenance dan support teknis</li>
                            <li>Upgrade dan migrasi sistem</li>
                        </ul>
                        
                        <h6 class="fw-bold text-success mt-4">Fitur Unggulan</h6>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="feature-card p-3 border rounded">
                                    <h6><i class="fas fa-users me-2"></i>Multi Extension</h6>
                                    <p class="small text-muted">Mendukung hingga ratusan extension</p>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="feature-card p-3 border rounded">
                                    <h6><i class="fas fa-voicemail me-2"></i>Voice Mail</h6>
                                    <p class="small text-muted">Sistem pesan suara otomatis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <img src="{{ asset('images/Details/PABX/pabx_upload.jpg') }}" class="img-fluid rounded mb-3" alt="PABX System">
                            <p class="text-muted">Sistem telepon terpusat untuk komunikasi efisien</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="https://wa.me/+6285232328282?text=Saya tertarik dengan layanan Sistem PABX" class="btn btn-primary">
                    <i class="fab fa-whatsapp me-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Nurse Call Modal -->
<div class="modal fade" id="nurseCallModal" tabindex="-1" aria-labelledby="nurseCallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" style="max-width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nurseCallModalLabel"><i class="fas fa-user-nurse me-2 text-primary"></i>Sistem Nurse Call</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold text-primary">Layanan Kami</h6>
                        <ul>
                            <li>Instalasi sistem nurse call untuk rumah sakit</li>
                            <li>Bedside call unit dan nurse station</li>
                            <li>Emergency call button</li>
                            <li>Audio dan visual notification</li>
                            <li>Integration dengan sistem lain</li>
                            <li>Training dan maintenance</li>
                        </ul>
                        
                        <h6 class="fw-bold text-primary mt-4">Komponen Utama</h6>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="component-card p-3 text-center border rounded">
                                    <i class="fas fa-bed fa-2x text-primary mb-2"></i>
                                    <h6>Bedside Unit</h6>
                                    <p class="small text-muted">Unit panggilan pasien</p>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="component-card p-3 text-center border rounded">
                                    <i class="fas fa-desktop fa-2x text-primary mb-2"></i>
                                    <h6>Nurse Station</h6>
                                    <p class="small text-muted">Panel kontrol perawat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <img src="{{ asset('images/Details/Nurse Call/nurse_upload.jpg') }}" class="img-fluid rounded mb-3" alt="Nurse Call System">
                            <p class="text-muted">Sistem komunikasi pasien-perawat yang efisien</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="https://wa.me/+6285232328282?text=Saya tertarik dengan layanan Sistem Nurse Call" class="btn btn-primary">
                    <i class="fab fa-whatsapp me-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Lightning Protection Modal -->
<div class="modal fade" id="lightningModal" tabindex="-1" aria-labelledby="lightningModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" style="max-width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lightningModalLabel"><i class="fas fa-bolt me-2 text-warning"></i>Proteksi Petir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold text-warning">Layanan Kami</h6>
                        <ul>
                            <li>Instalasi sistem penangkal petir</li>
                            <li>Grounding system dan earthing</li>
                            <li>Surge protection device (SPD)</li>
                            <li>Lightning risk assessment</li>
                            <li>Testing dan commissioning</li>
                            <li>Sertifikasi dan compliance</li>
                        </ul>
                        
                        <h6 class="fw-bold text-warning mt-4">Jenis Proteksi</h6>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="type-card p-3 text-center border rounded">
                                    <i class="fas fa-arrow-up fa-2x text-warning mb-2"></i>
                                    <h6>Eksternal</h6>
                                    <p class="small text-muted">Penangkal petir Franklin</p>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="type-card p-3 text-center border rounded">
                                    <i class="fas fa-microchip fa-2x text-warning mb-2"></i>
                                    <h6>Internal</h6>
                                    <p class="small text-muted">Surge protection</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <img src="{{ asset('images/Details/Lightning Protection/lightning_upload.jpg') }}" class="img-fluid rounded mb-3" alt="Lightning Protection">
                            <p class="text-muted">Sistem proteksi petir untuk keamanan maksimal</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="https://wa.me/+6285232328282?text=Saya tertarik dengan layanan Proteksi Petir" class="btn btn-primary">
                    <i class="fab fa-whatsapp me-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Security Alarm Modal -->
<div class="modal fade" id="alarmModal" tabindex="-1" aria-labelledby="alarmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" style="max-width: 80%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="alarmModalLabel"><i class="fas fa-bell me-2 text-danger"></i>Sistem Alarm Keamanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold text-danger">Layanan Kami</h6>
                        <ul>
                            <li>Instalasi sistem alarm perimeter</li>
                            <li>Motion detector dan door sensor</li>
                            <li>Panic button dan emergency alarm</li>
                            <li>Remote monitoring system</li>
                            <li>Integration dengan CCTV</li>
                            <li>24/7 monitoring service</li>
                        </ul>
                        
                        <h6 class="fw-bold text-danger mt-4">Komponen Sistem</h6>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="component-card p-3 text-center border rounded">
                                    <i class="fas fa-running fa-2x text-danger mb-2"></i>
                                    <h6>Motion Sensor</h6>
                                    <p class="small text-muted">Deteksi gerakan</p>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="component-card p-3 text-center border rounded">
                                    <i class="fas fa-door-open fa-2x text-danger mb-2"></i>
                                    <h6>Door Sensor</h6>
                                    <p class="small text-muted">Sensor pintu/jendela</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <img src="{{ asset('images/Details/Alarm/alarm_upload.jpg') }}" class="img-fluid rounded mb-3" alt="Security Alarm">
                            <p class="text-muted">Sistem alarm keamanan terpadu untuk perlindungan total</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="https://wa.me/+6285232328282?text=Saya tertarik dengan layanan Sistem Alarm Keamanan" class="btn btn-primary">
                    <i class="fab fa-whatsapp me-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="mb-4">Mengapa Memilih Kami?</h2>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Tenaga profesional berlisensi dan bersertifikat</li>
                    <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Berpengalaman dalam berbagai proyek</li>
                    <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Teknologi dan peralatan terkini</li>
                    <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Harga yang kompetitif</li>
                    <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Jaminan kualitas pekerjaan</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="https://via.placeholder.com/500x400" alt="Tim Profesional" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Dapatkan Penawaran Gratis Anda</h2>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="service_type" class="form-label">Layanan yang Diperlukan</label>
                            <select class="form-control" id="service_type" name="service_type" required>
                                <option value="">Pilih Layanan</option>
                                <option value="cctv">Instalasi CCTV</option>
                                <option value="electrical">Mekanikal Elektrikal</option>
                                <option value="fire_alarm">Sistem Alarm Kebakaran</option>
                                <option value="hydrant">Layanan Hidran</option>
                                <option value="pabx">Telepon PABX</option>
                                <option value="nurse_call">Nurse Call</option>
                                <option value="lightning_protection">Proteksi Petir</option>
                                <option value="security_alarm">Alarm Keamanan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Detail Proyek</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Kirim Permintaan Penawaran</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection