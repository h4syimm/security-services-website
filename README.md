<p align="center">
    <img src="https://raw.githubusercontent.com/h4syimm/security-services-website/main/public/images/logo.png" width="200" alt="CV. Surya Agung Logo">
</p>

<h1 align="center">CV. Surya Agung</h1>
<p align="center"><strong>MECHANICAL ELECTRICAL</strong></p>

<p align="center">
    <img src="https://img.shields.io/badge/Laravel-11.x-red.svg" alt="Laravel Version">
    <img src="https://img.shields.io/badge/PHP-8.1+-blue.svg" alt="PHP Version">
    <img src="https://img.shields.io/badge/Bootstrap-5.3.0-purple.svg" alt="Bootstrap Version">
    <img src="https://img.shields.io/badge/Status-Production Ready-green.svg" alt="Status">
</p>

## Tentang CV. Surya Agung

CV. Surya Agung adalah penyedia layanan keamanan dan kelistrikan profesional terpercaya dengan pengalaman bertahun-tahun. Kami melayani instalasi CCTV, sistem alarm, fire alarm, dan berbagai solusi kelistrikan untuk rumah dan komersial.

### Layanan Utama

- **🎥 Instalasi CCTV** - Sistem keamanan video surveillance modern
- **🔥 Sistem Alarm Kebakaran** - Deteksi dini dan perlindungan kebakaran
- **⚡ Layanan Kelistrikan** - Instalasi dan maintenance elektrikal
- **💧 Instalasi Hydrant** - Sistem pemadam kebakaran hydrant
- **📞 Sistem PABX** - Solusi komunikasi telepon terpusat
- **🏥 Nurse Call System** - Sistem panggilan untuk rumah sakit
- **⚡ Proteksi Petir** - Sistem penangkal petir dan grounding
- **🛡️ Alarm Keamanan** - Sistem alarm perimeter dan keamanan

### Brand Partner Terpercaya

- **Dahua** - Teknologi CCTV AI terdepan
- **Hikvision** - Leader global video surveillance
- **Hiview** - Kualitas premium CCTV
- **Telview** - Solusi ekonomis
- **Commax** - Sistem intercom
- **Asenware** - Fire alarm systems
- **Hooseki** - Hydrant systems
- **NEC** - Communication solutions
- **Albox** - Security solutions
- **Ezocable** - Cable solutions

## Teknologi Website

Website ini dibangun menggunakan teknologi modern dan responsive:

- **Framework**: Laravel 11.x
- **Frontend**: Bootstrap 5.3.0
- **Icons**: Font Awesome 6.0.0
- **Database**: MySQL
- **Server Requirements**: PHP 8.1+

### Fitur Website

- ✅ **Responsive Design** - Mobile-friendly di semua device
- ✅ **Interactive Service Modals** - Detail layanan dengan carousel gambar
- ✅ **Brand Logo Scrolling** - Infinite scroll brand partners
- ✅ **Contact Integration** - Auto WhatsApp, email, dan Google Maps
- ✅ **Professional UI/UX** - Gradient design dengan animasi smooth
- ✅ **SEO Optimized** - Meta tags dan struktur yang SEO-friendly

## Instalasi & Setup

### Requirements

- PHP >= 8.1
- Composer
- Laravel 11.x
- MySQL/MariaDB

### Langkah Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/security-services-website.git
   cd security-services-website
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Configuration**
   ```bash
   # Edit .env file untuk database connection
   php artisan migrate
   php artisan db:seed
   ```

5. **Build Assets**
   ```bash
   npm run build
   # atau untuk development
   npm run dev
   ```

6. **Run Server**
   ```bash
   php artisan serve
   ```

## Struktur Project

```
security-services-website/
├── app/
│   ├── Http/Controllers/
│   ├── Models/
│   └── Providers/
├── public/
│   ├── css/
│   ├── js/
│   └── images/
│       ├── BRAND LOGO/
│       └── Details/
├── resources/
│   ├── views/
│   │   ├── app.blade.php
│   │   └── home.blade.php
│   ├── css/
│   └── js/
├── routes/
└── database/
```

## Contact Information

**CV. Surya Agung**
- 📱 **WhatsApp/Telepon**: [+62 852-3232-8282](https://wa.me/+6285232328282)
- 📧 **Email**: [suryaagungcctv@gmail.com](mailto:suryaagungcctv@gmail.com)
- 📍 **Alamat**: [Jl. Klipang Blok R XVII, Kota Semarang, Jawa Tengah 50272](https://www.google.com/maps/search/Jl.+Klipang+Blok+R+XVII,+Kota+Semarang,+Jawa+Tengah,+Indonesia,+50272)

## Demo & Screenshots

### Homepage
- Hero section dengan slideshow background
- Service cards dengan hover effects
- Brand logo infinite scrolling
- Interactive contact section

### Service Modals
- Detailed service information
- Image galleries untuk setiap layanan
- Brand-specific product showcase
- Direct WhatsApp integration

## Deployment

### Production Deployment

1. **Server Requirements**
   - Apache/Nginx
   - PHP 8.1+ dengan extensions: BCMath, Ctype, Fileinfo, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML
   - MySQL 5.7+

2. **Environment Setup**
   ```bash
   # Set production environment
   APP_ENV=production
   APP_DEBUG=false
   
   # Configure database
   DB_CONNECTION=mysql
   DB_HOST=your-host
   DB_DATABASE=your-database
   DB_USERNAME=your-username
   DB_PASSWORD=your-password
   ```

3. **Optimization**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   composer install --no-dev --optimize-autoloader
   ```

## Contributing

Jika Anda ingin berkontribusi pada project ini:

1. Fork repository
2. Create feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to branch (`git push origin feature/AmazingFeature`)
5. Open Pull Request

## License

Project ini menggunakan [MIT License](https://opensource.org/licenses/MIT).

## Support

Untuk support teknis atau pertanyaan bisnis, silakan hubungi:
- 📱 WhatsApp: [+62 852-3232-8282](https://wa.me/+6285232328282)
- 📧 Email: [suryaagungcctv@gmail.com](mailto:suryaagungcctv@gmail.com)

---

<p align="center">
    <strong>CV. Surya Agung - Layanan Keamanan & Kelistrikan Profesional</strong><br>
    <em>Terpercaya • Professional • Berkualitas</em>
</p>
