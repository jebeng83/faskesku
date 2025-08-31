# 🏥 Faskesku

<div align="center">
  <img src="public/assets/logo.PNG" alt="Faskesku Logo" width="200">
  
  [![Laravel](https://img.shields.io/badge/Laravel-10.x-red.svg)](https://laravel.com)
  [![PHP](https://img.shields.io/badge/PHP-8.1+-blue.svg)](https://php.net)
  [![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
  [![PWA](https://img.shields.io/badge/PWA-Ready-orange.svg)](https://web.dev/progressive-web-apps/)
  
  **Sistem Informasi Kesehatan Terpadu untuk Fasilitas Kesehatan**
  
  *Solusi digital komprehensif untuk manajemen pelayanan kesehatan modern*
</div>

---

## 📋 Deskripsi

**Faskesku** adalah sistem informasi kesehatan terpadu yang dirancang khusus untuk fasilitas kesehatan di Indonesia. Aplikasi ini menyediakan solusi digital komprehensif untuk manajemen pelayanan kesehatan, mulai dari pendaftaran pasien hingga pelaporan medis.

### 🎯 Visi
Menjadi platform digital terdepan yang mendukung transformasi digital fasilitas kesehatan Indonesia menuju pelayanan yang lebih efisien, akurat, dan terjangkau.

## ✨ Fitur Utama

### 👥 Manajemen Pasien
- 📝 **Pendaftaran Pasien** - Sistem pendaftaran online dan offline
- 🔍 **Pencarian Pasien** - Pencarian cepat berdasarkan berbagai kriteria
- 📊 **Riwayat Medis** - Tracking lengkap riwayat kesehatan pasien
- 🆔 **Kartu Identitas** - Integrasi dengan sistem identitas nasional

### 🏥 Pelayanan Medis
- 🩺 **Pemeriksaan Rawat Jalan** - Manajemen pemeriksaan poliklinik
- 🛏️ **Rawat Inap** - Sistem manajemen pasien rawat inap
- 🤰 **Antenatal Care (ANC)** - Pemeriksaan kehamilan terpadu
- 📋 **Partograf** - Monitoring persalinan digital
- 🦷 **Kesehatan Gigi** - Manajemen pelayanan dental

### 💊 Farmasi & Laboratorium
- 💉 **Manajemen Obat** - Inventory dan distribusi obat
- 🧪 **Laboratorium** - Sistem informasi laboratorium
- 📈 **Tracking Stok** - Monitoring real-time persediaan

### 🔗 Integrasi Sistem
- 🏛️ **BPJS Kesehatan** - Integrasi penuh dengan sistem BPJS
- 🌐 **SATUSEHAT** - Koneksi dengan platform kesehatan nasional
- 📱 **PCare** - Integrasi sistem primary care BPJS
- 🔄 **Bridge System** - Koneksi dengan sistem eksternal

### 📊 Pelaporan & Analytics
- 📈 **Dashboard Real-time** - Monitoring kinerja fasilitas kesehatan
- 📋 **Laporan Medis** - Generate laporan otomatis
- 📊 **Statistik Kesehatan** - Analisis data kesehatan
- 📑 **Export Data** - Export ke berbagai format (PDF, Excel, CSV)

### 🔐 Keamanan & Compliance
- 🛡️ **Enkripsi Data** - Keamanan data tingkat enterprise
- 👤 **Role-based Access** - Kontrol akses berdasarkan peran
- 📝 **Audit Trail** - Tracking semua aktivitas sistem
- ⚖️ **Compliance** - Sesuai standar kesehatan Indonesia

## 🚀 Teknologi

### Backend
- **Framework**: Laravel 10.x
- **Database**: MySQL 8.0+
- **Cache**: Redis
- **Queue**: Laravel Queue
- **Storage**: Local/Cloud Storage

### Frontend
- **UI Framework**: AdminLTE 3.x
- **JavaScript**: Vanilla JS + jQuery
- **CSS Framework**: Bootstrap 4.x
- **Real-time**: Livewire
- **PWA**: Service Worker

### Integrasi
- **BPJS**: REST API Integration
- **SATUSEHAT**: FHIR R4 Standard
- **Payment Gateway**: Multiple providers
- **Notification**: SMS, Email, Push

## 📦 Instalasi

### Persyaratan Sistem
- PHP 8.1 atau lebih tinggi
- Composer 2.x
- Node.js 16.x atau lebih tinggi
- MySQL 8.0 atau MariaDB 10.4+
- Redis (opsional, untuk cache)
- Web Server (Apache/Nginx)

### Langkah Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/faskesku.git
   cd faskesku
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
   # Edit .env file dengan konfigurasi database
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=faskesku
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Database Migration**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Build Assets**
   ```bash
   npm run build
   # atau untuk development
   npm run dev
   ```

7. **Start Application**
   ```bash
   php artisan serve
   ```

   Aplikasi akan berjalan di `http://localhost:8000`

### Konfigurasi Tambahan

#### BPJS Integration
```env
BPJS_CONS_ID=your_cons_id
BPJS_SECRET_KEY=your_secret_key
BPJS_BASE_URL=https://apijkn-dev.bpjs-kesehatan.go.id
```

#### SATUSEHAT Integration
```env
SATUSEHAT_BASE_URL=https://api-satusehat-dev.dto.kemkes.go.id
SATUSEHAT_CLIENT_ID=your_client_id
SATUSEHAT_CLIENT_SECRET=your_client_secret
```

## 🔧 Konfigurasi

### Environment Variables

| Variable | Description | Default |
|----------|-------------|----------|
| `APP_NAME` | Nama aplikasi | Faskesku |
| `APP_ENV` | Environment | local |
| `APP_DEBUG` | Debug mode | true |
| `FASKESKU_UI_VERTICAL` | UI Layout | true |
| `QUEUE_CONNECTION` | Queue driver | sync |
| `CACHE_DRIVER` | Cache driver | file |

### Konfigurasi PWA

Edit file `config/laravelpwa.php` untuk menyesuaikan pengaturan Progressive Web App:

```php
'name' => 'Faskesku',
'short_name' => 'Faskesku',
'start_url' => '/',
'background_color' => '#ffffff',
'theme_color' => '#007bff',
```

## 📱 Progressive Web App (PWA)

Faskesku mendukung PWA yang memungkinkan:
- ✅ Instalasi di perangkat mobile
- ✅ Akses offline terbatas
- ✅ Push notifications
- ✅ Fast loading dengan service worker

## 🔐 Keamanan

### Autentikasi
- Multi-level user authentication
- Role-based access control (RBAC)
- Session management
- Password encryption

### Data Protection
- Data encryption at rest
- HTTPS enforcement
- SQL injection prevention
- XSS protection
- CSRF protection

## 📚 Dokumentasi API

### Endpoint Utama

#### Pasien
```http
GET    /api/pasien           # List pasien
POST   /api/pasien           # Tambah pasien
GET    /api/pasien/{id}      # Detail pasien
PUT    /api/pasien/{id}      # Update pasien
DELETE /api/pasien/{id}      # Hapus pasien
```

#### Pemeriksaan
```http
GET    /api/pemeriksaan      # List pemeriksaan
POST   /api/pemeriksaan      # Tambah pemeriksaan
GET    /api/pemeriksaan/{id} # Detail pemeriksaan
```

### Authentication

Semua API endpoint memerlukan authentication token:

```http
Authorization: Bearer {your-token}
Content-Type: application/json
```

## 🧪 Testing

### Unit Testing
```bash
php artisan test
```

### Feature Testing
```bash
php artisan test --testsuite=Feature
```

### Browser Testing
```bash
php artisan dusk
```

## 🚀 Deployment

### Production Setup

1. **Server Requirements**
   - Ubuntu 20.04+ / CentOS 8+
   - PHP 8.1+ dengan extensions
   - MySQL 8.0+ / MariaDB 10.4+
   - Nginx / Apache
   - SSL Certificate

2. **Environment Configuration**
   ```bash
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://yourdomain.com
   ```

3. **Optimization**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   composer install --optimize-autoloader --no-dev
   ```

### Docker Deployment

```dockerfile
# Dockerfile tersedia untuk deployment dengan Docker
docker build -t faskesku .
docker run -p 8000:8000 faskesku
```

## 🤝 Kontribusi

Kami menyambut kontribusi dari komunitas! Silakan baca [CONTRIBUTING.md](CONTRIBUTING.md) untuk panduan kontribusi.

### Development Workflow

1. Fork repository
2. Buat feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

### Code Style

- Ikuti PSR-12 coding standard
- Gunakan PHP CS Fixer: `./vendor/bin/php-cs-fixer fix`
- Tulis unit tests untuk fitur baru
- Update dokumentasi jika diperlukan

## 📄 Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE) - lihat file LICENSE untuk detail.

## 👥 Tim Pengembang

- **Faskesku Development Team** - *Initial work* - [GitHub](https://github.com/faskesku)

## 🙏 Acknowledgments

- Kementerian Kesehatan RI
- BPJS Kesehatan
- Komunitas Laravel Indonesia
- Semua kontributor yang telah membantu pengembangan

## 📞 Dukungan

- 📧 **Email**: support@faskesku.com
- 🌐 **Website**: [https://faskesku.com](https://faskesku.com)
- 📱 **WhatsApp**: +62-85229977208
- 💬 **Telegram**: @faskesku_support

## 🔄 Changelog

Lihat [CHANGELOG.md](CHANGELOG.md) untuk riwayat perubahan versi.

## 🗺️ Roadmap

- [ ] Mobile App (React Native)
- [ ] Telemedicine Integration
- [ ] AI-powered Diagnosis Assistant
- [ ] Blockchain for Medical Records
- [ ] IoT Device Integration
- [ ] Multi-language Support

---

<div align="center">
  <p><strong>Dibuat dengan ❤️ untuk kemajuan kesehatan Indonesia</strong></p>
  <p>© 2025 Faskesku. All rights reserved.</p>
</div>
