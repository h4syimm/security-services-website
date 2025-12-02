# Security Services Website

<p align="center">
    <img src="https://img.shields.io/badge/Laravel-11.x-red.svg" alt="Laravel Version">
    <img src="https://img.shields.io/badge/PHP-8.1+-blue.svg" alt="PHP Version">
    <img src="https://img.shields.io/badge/Bootstrap-5.3.0-purple.svg" alt="Bootstrap Version">
    <img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License">
</p>

## About This Project

A modern, responsive website template for security and electrical services companies. Built with Laravel and Bootstrap, featuring interactive service modals, brand showcases, and professional UI/UX design.

### Key Features

- **🎥 Service Showcases** - Interactive modals with detailed service information
- **🔥 Responsive Design** - Mobile-first approach with Bootstrap 5.3.0
- **⚡ Modern UI/UX** - Gradient designs with smooth animations
- **💧 Contact Integration** - WhatsApp, email, and Google Maps integration
- **📞 Brand Gallery** - Infinite scrolling brand partner logos
- **🏥 SEO Optimized** - Clean structure and meta tags
- **⚡ Fast Loading** - Optimized assets and caching
- **🛡️ Professional Layout** - Clean, modern design patterns

### Service Categories Template

The website template includes sections for:

- CCTV Installation & Surveillance Systems
- Fire Alarm & Detection Systems  
- Electrical Services & Maintenance
- Hydrant & Fire Safety Systems
- PABX & Communication Systems
- Nurse Call & Hospital Systems
- Lightning Protection Systems
- Security Alarm & Monitoring

### Brand Integration Features

- Dynamic brand logo carousel
- Product image galleries
- Service-specific showcases
- Interactive hover effects
- Responsive grid layouts

## Technology Stack

### Backend
- **Framework**: Laravel 11.x
- **PHP Version**: 8.1+
- **Database**: MySQL/MariaDB
- **Server**: Apache/Nginx

### Frontend
- **CSS Framework**: Bootstrap 5.3.0
- **Icons**: Font Awesome 6.0.0
- **JavaScript**: Vanilla JS + Bootstrap JS
- **Animations**: CSS3 Transitions & Transforms

### Development Tools
- **Package Manager**: Composer (PHP), NPM (Node.js)
- **Task Runner**: Laravel Mix/Vite
- **Version Control**: Git

## Installation & Setup

### Prerequisites

```bash
- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL/MariaDB
```

### Step-by-Step Installation

1. **Clone Repository**
   ```bash
   git clone <repository-url>
   cd security-services-website
   ```

2. **Install PHP Dependencies**
   ```bash
   composer install
   ```

3. **Install Node Dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Setup**
   ```bash
   # Configure .env database settings
   php artisan migrate
   php artisan db:seed (optional)
   ```

6. **Build Frontend Assets**
   ```bash
   npm run build
   # For development
   npm run dev
   ```

7. **Start Development Server**
   ```bash
   php artisan serve
   ```

## Project Structure

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
│   │   ├── app.blade.php      # Main layout
│   │   └── home.blade.php     # Homepage content
│   ├── css/
│   │   └── app.css            # Custom styles
│   └── js/
│       └── app.js             # Custom scripts
├── routes/
│   └── web.php                # Web routes
└── database/
    ├── migrations/
    └── seeders/
```

## Features Documentation

### 1. Service Modals
- **Interactive Popups**: 80% screen width modals
- **Image Carousels**: Product galleries for each service
- **Contact Integration**: Direct WhatsApp and email links
- **Responsive Design**: Mobile-optimized layouts

### 2. Brand Showcase
- **Infinite Scrolling**: Smooth left-to-right animation
- **Hover Effects**: Pause and highlight interactions
- **Image Optimization**: Proper sizing and lazy loading
- **Brand Categories**: Organized by service types

### 3. Contact System
- **WhatsApp Integration**: Click-to-chat functionality
- **Email Links**: Auto-compose email actions
- **Google Maps**: Direct location linking
- **Social Media**: Icon-based social links

### 4. UI/UX Features
- **Gradient Backgrounds**: Modern color schemes
- **Smooth Animations**: CSS3 transitions
- **Hover Effects**: Interactive feedback
- **Mobile Responsive**: Bootstrap grid system

## Customization Guide

### 1. Updating Content

**Service Information:**
- Edit `resources/views/home.blade.php`
- Update modal content and service descriptions
- Modify service icons and images

**Contact Details:**
- Update footer in `resources/views/app.blade.php`
- Change WhatsApp numbers and email addresses
- Modify Google Maps location

### 2. Styling Customization

**Colors & Themes:**
```css
/* Update in resources/css/app.css */
:root {
  --primary-color: #3B4EBF;
  --secondary-color: #DC2626;
  --accent-color: #FFC107;
}
```

**Layout Modifications:**
- Adjust container sizes
- Modify grid breakpoints
- Update spacing utilities

### 3. Adding New Services

1. **Create Modal HTML** in `home.blade.php`
2. **Add Service Card** to services section
3. **Update Images** in `/public/images/Details/`
4. **Style Components** in `app.css`

## Deployment

### Production Environment

1. **Server Requirements**
   ```
   - Apache/Nginx
   - PHP 8.1+ with required extensions
   - MySQL 5.7+
   - SSL Certificate (recommended)
   ```

2. **Environment Configuration**
   ```bash
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://yourdomain.com
   ```

3. **Optimization Commands**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   composer install --no-dev --optimize-autoloader
   ```

### Performance Optimization

- **Image Optimization**: Compress images before upload
- **Caching**: Enable Laravel caching mechanisms
- **CDN Integration**: Use CDN for static assets
- **Database Optimization**: Index frequently queried columns

## Browser Support

- **Modern Browsers**: Chrome, Firefox, Safari, Edge
- **Mobile Browsers**: iOS Safari, Chrome Mobile
- **Minimum Versions**: ES6+ support required
- **Responsive**: All screen sizes supported

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/new-feature`)
3. Commit changes (`git commit -am 'Add new feature'`)
4. Push to branch (`git push origin feature/new-feature`)
5. Create Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Support & Documentation

For technical support and detailed documentation:
- Check the Laravel documentation for framework-specific questions
- Bootstrap documentation for styling and components
- Font Awesome documentation for icon usage

## Changelog

### Version 1.0.0
- Initial release with full feature set
- Responsive design implementation
- Service modal system
- Brand showcase functionality
- Contact integration features

---

**Built with Laravel & Bootstrap** | **Modern Web Technologies** | **Professional Design**
