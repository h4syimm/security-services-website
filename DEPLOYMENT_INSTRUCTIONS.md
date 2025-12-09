# 🚀 CV. SURYA AGUNG - DEPLOYMENT INSTRUCTIONS

## 📦 Files Yang Sudah Dipersiapkan:
✅ security-services-website.zip - Project archive
✅ .env.production - Environment file untuk production
✅ index_production.php - Index file untuk hosting shared
✅ .htaccess - Web server configuration

## 📋 LANGKAH DEPLOYMENT KE HOSTINGER:

### 1️⃣ UPLOAD FILES
1. Login ke Hostinger hPanel
2. Buka File Manager
3. Navigate ke public_html/
4. Upload security-services-website.zip
5. Extract archive di public_html/

### 2️⃣ SETUP STRUCTURE
Setelah extract, structure folder akan seperti ini:
```
public_html/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── .env.production
├── index_production.php
├── .htaccess
├── artisan
└── composer.json
```

### 3️⃣ MOVE PUBLIC FOLDER CONTENTS
1. Pindahkan SEMUA isi folder public/ ke root public_html/
2. Delete folder public/ setelah dipindahkan
3. Rename index_production.php menjadi index.php
4. Rename .env.production menjadi .env

Final structure:
```
public_html/
├── css/ (dari public/css/)
├── js/ (dari public/js/)  
├── images/ (dari public/images/)
├── app/
├── bootstrap/
├── config/
├── database/
├── resources/
├── routes/
├── storage/
├── vendor/ (install composer)
├── .env
├── .htaccess
├── index.php
└── artisan
```

### 4️⃣ SETUP DATABASE
1. Di hPanel → Databases → MySQL Databases
2. Create Database: u123456_security_services
3. Create User: u123456_admin  
4. Assign user to database dengan full privileges
5. Update .env file dengan database credentials

### 5️⃣ UPDATE .ENV FILE
Edit file .env dan update:
```env
APP_URL=https://yourdomain.com
DB_DATABASE=u123456_security_services
DB_USERNAME=u123456_admin
DB_PASSWORD=your_database_password
MAIL_USERNAME=contact@yourdomain.com
MAIL_PASSWORD=your_email_password
```

### 6️⃣ INSTALL COMPOSER DEPENDENCIES
Via SSH (jika tersedia):
```bash
cd public_html
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Atau upload folder vendor/ manual jika tidak ada SSH access.

### 7️⃣ SET PERMISSIONS
Set permissions untuk folders:
- storage/ → 755
- bootstrap/cache/ → 755

### 8️⃣ POINT DOMAIN
1. Update nameservers domain ke Hostinger
2. Add domain di hPanel
3. Enable SSL certificate

## 🔧 TROUBLESHOOTING:

### Error 500:
- Check .env file configuration
- Verify database credentials
- Clear cache: php artisan cache:clear

### Images not loading:
- Ensure images folder moved correctly
- Check paths in CSS files

### Database connection error:
- Verify database credentials
- Check database user privileges

## 📞 SUPPORT:
Untuk bantuan deployment, kontak support Hostinger atau check dokumentasi Laravel.

## ⚡ OPTIMIZATION TIPS:
1. Enable OPcache di PHP settings
2. Use CloudFlare untuk CDN
3. Compress images untuk loading speed
4. Monitor database performance

=== READY TO DEPLOY! ===