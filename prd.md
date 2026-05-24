# Product Requirements Document (PRD) - Bersandar ID

## 1. Project Overview

**Name:** Bersandar ID
**Platform:** Web Application (Laravel, Inertia.js, Vue 3, Tailwind CSS)
**Branding:**

- **Main Colors:** Orange (`#FF7761`) dan Hijau (`#095C62`)
- **Logo:** Terdapat referensi logo pada `page_design/bersandar-logo.png`
  **Description:**
  Bersandar ID adalah sebuah platform aplikasi web yang menyediakan layanan bagi pengguna untuk menemukan dan terhubung dengan "Buddy" (teman bicara, pendamping, atau mentor). Platform ini dirancang untuk memberikan ruang aman bagi pengguna yang membutuhkan dukungan emosional, teman berdiskusi, atau sekadar teman mengobrol, dengan sistem rating dan testimoni untuk menjaga kualitas layanan Buddy.

---

## 2. Fase 1: Minimum Viable Product (MVP)

Fokus pada rilis pertama (MVP) adalah kesederhanaan dan validasi ide. Aplikasi hanya terdiri dari **2 halaman utama**, dan seluruh proses transaksi dilakukan di luar sistem (melalui WhatsApp).

### 2.1 Halaman Landing Page (Beranda)

- **Referensi Desain:** `page_design/landing_page.png`
- **Informasi Layanan:** Bagian penjelasan (Hero section, About) mengenai layanan Bersandar ID dan bagaimana cara kerjanya.
- **Testimoni:** Menampilkan daftar ulasan teks dan dokumentasi foto keseruan dari folder `testimonials` untuk membangun kepercayaan pengguna.
- **Call-to-Action (CTA) "Cari Teman":** Tombol utama bagi pengguna untuk memulai layanan. Tombol ini tidak mengarahkan ke halaman form atau booking, melainkan **langsung membuka WhatsApp** (menggunakan link wa.me) dengan template pesan otomatis (contoh: _"Halo Bersandar ID, saya tertarik dan ingin mencari teman ngobrol..."_).

### 2.2 Halaman Syarat & Ketentuan (Terms and Conditions)

- **Referensi Desain:** `page_design/syarat_ketentuan.png`
- Halaman teks statis (_hardcoded_) yang berisi panduan, aturan privasi, dan batasan tanggung jawab layanan Bersandar ID.

### 2.3 Alur Transaksi & Operasional (MVP)

- **Tidak ada sistem login/registrasi pengguna di website.**
- **Tidak ada sistem pembayaran (payment gateway) otomatis.**
- Pengguna hanya melihat informasi di web, klik tombol WA, lalu pemilihan Buddy, penentuan jadwal, dan pembayaran diurus secara manual oleh Admin/CS via WhatsApp.

---

### 2.4 Konsep "The Mysterious Travel Buddy" & Syarat Ketentuan (Acuan Website)

Berdasarkan konsep "The Mysterious Travel Buddy" yang telah dirancang, berikut adalah draf Syarat dan Ketentuan yang wajib dibaca dan disetujui oleh calon pemesan (customer) sebelum melakukan transaksi melalui WhatsApp Agency:

**Syarat & Ketentuan Pemesanan (Terms of Service)**

**1. Ketentuan Identitas & Keamanan**

- **Verifikasi Data:** Customer wajib memberikan informasi identitas asli (Nama sesuai KTP dan nomor kontak aktif) saat melakukan pemesanan melalui WhatsApp Agency.
- **Prinsip Misteri:** Customer menyetujui bahwa pemilihan Teman Jalan didasarkan sepenuhnya pada profil kepribadian, minat, dan keahlian yang tercantum pada website, tanpa melihat foto fisik.
- **Pengungkapan Identitas:** Nama asli dan foto Teman Jalan baru akan diungkapkan oleh Admin setelah pembayaran dikonfirmasi, atau sesuai dengan kebijakan Reveal Point pada saat pertemuan di lokasi.

**2. Alur Pembayaran & Biaya**

- **Sistem Pembayaran Terpusat:** Semua transaksi pembayaran wajib dilakukan melalui rekening resmi Agency. Pembayaran langsung kepada Teman Jalan di luar biaya operasional harian sangat dilarang.
- **Biaya Jasa (Flat Fee):** Harga yang tertera adalah biaya jasa pendampingan Teman Jalan selama durasi yang disepakati.
- **Biaya Operasional:** Customer bertanggung jawab atas biaya operasional Teman Jalan selama perjalanan, meliputi: makan, transportasi, dan tiket masuk tempat wisata (kecuali jika mengambil paket khusus all-in).

**3. Pembatalan & Pengembalian Dana (Refund)**

- **Kebijakan DP:** Down Payment (DP) yang telah dibayarkan berfungsi sebagai pengikat komitmen dan kompensasi waktu bagi Teman Jalan.
- **Pembatalan oleh Customer:** Jika pembatalan dilakukan secara mendadak (kurang dari 24 jam sebelum jadwal), maka DP dianggap hangus.
- **Pembatalan oleh Agency:** Jika pihak Agency atau Teman Jalan berhalangan hadir karena keadaan darurat, Agency akan menawarkan jadwal ulang atau pengembalian dana 100%.

**4. Etika & Batasan Perjalanan**

- **Hubungan Profesional:** Layanan ini murni bersifat pendampingan sosial dan perjalanan. Segala bentuk perilaku asusila, penggunaan narkoba, atau tindakan melanggar hukum lainnya sangat dilarang.
- **Privasi:** Customer dilarang meminta informasi pribadi yang bersifat sangat rahasia (seperti alamat rumah atau data keluarga) dari Teman Jalan demi menjaga privasi dan keamanan partner kami.
- **Durasi Layanan:** Perjalanan harus diakhiri sesuai dengan waktu yang telah disepakati dalam pemesanan awal.

**5. Jaminan & Tanggung Jawab**

- **Monitoring Lokasi:** Demi keamanan bersama, Customer menyetujui bahwa Agency akan memantau lokasi live Teman Jalan selama masa tugas berlangsung.
- **Batas Tanggung Jawab:** Agency bertanggung jawab atas kualitas layanan dan verifikasi latar belakang partner. Namun, Agency tidak bertanggung jawab atas kehilangan barang pribadi customer atau kecelakaan di luar kendali selama perjalanan (disarankan memiliki asuransi perjalanan mandiri).
- **Catatan Penting:** Dengan melanjutkan pemesanan melalui WhatsApp, Customer dianggap telah membaca, memahami, dan menyetujui seluruh poin dalam Syarat & Ketentuan ini.

---

## 3. Technology Stack (MVP & Masa Depan)

- **Backend:** Laravel 11.x (PHP)
- **Frontend:** Vue 3 + Inertia.js
- **Styling:** Tailwind CSS (dengan Vite)
- **Database:** MySQL
- **Development Tools:** Artisan, NPM, Composer

---

## 4. Fase 2: Pengembangan Selanjutnya (Future Development)

_(Bagian ini memuat rancangan sistem lengkap yang sudah dimodelkan dalam struktur database, namun akan diimplementasikan setelah MVP tervalidasi)._

### 4.1 User Roles (Peran Pengguna)

1. **Superadmin:**
    - Memiliki akses penuh terhadap sistem.
    - Dapat mengelola data pengguna, Buddy, dan atribut (kategori hobi, bahasa, dll).
    - Mengelola testimoni (moderasi jika diperlukan).
2. **Buddy:**
    - Pengguna yang menawarkan layanan pendampingan/teman bicara.
    - Memiliki profil publik (dengan slug unik).
    - Dapat mengatur status ketersediaan (_available, busy, offline_).
    - Memiliki atribut personal (seperti hobi, keahlian, atau bahasa yang dikuasai).
3. **Customer / Regular User:**
    - Pengguna yang mendaftar untuk mencari dan menggunakan layanan Buddy.
    - Dapat memberikan testimoni dan rating (1-5 bintang) setelah berinteraksi dengan Buddy.

### 4.2 Core Features (Fitur Lanjutan)

#### 4.2.1 Manajemen Akun & Autentikasi

- Registrasi dan Login (Email, Username, Password).
- Manajemen role (_Superadmin, Buddy, Customer_).
- Aktivasi/Deaktivasi akun (_is_active_).

#### 4.2.2 Manajemen Profil Buddy

- Setiap Buddy memiliki profil yang diakses melalui URL unik (slug).
- **Status Ketersediaan:** Buddy dapat mengubah status mereka secara real-time (_available, busy, offline_).
- **Sistem Atribut Dinamis (EAV):**
    - Superadmin dapat membuat atribut dinamis (Contoh: "Hobi", "Bahasa").
    - Buddy dapat mengisi nilai dari atribut tersebut untuk ditampilkan di profil mereka.

#### 4.2.3 Sistem Rating & Testimoni

- Pengguna (Customer) dapat memberikan rating (1-5 bintang) dan ulasan teks (comment) kepada Buddy di dalam sistem.
- Rating rata-rata (_rating_avg_) akan otomatis terhitung dan ditampilkan pada profil Buddy.
- Testimoni memiliki status _is_published_ (bisa dimoderasi oleh admin atau otomatis terpublikasi).

### 4.3 Database Schema (Struktur Database)

Berdasarkan arsitektur yang sudah disiapkan untuk pengembangan ke depan, berikut adalah tabel utamanya:

1. **`users`**
    - Menyimpan data autentikasi pengguna.
    - Kolom: `id`, `username`, `email`, `password`, `role` (Superadmin, Buddy), `is_active`.
2. **`buddies`**
    - Menyimpan informasi inti dari seorang Buddy.
    - Kolom: `id`, `user_id` (FK), `slug`, `rating_avg`, `status` (available, busy, offline).
3. **`buddy_attributes`**
    - Menyimpan master data atribut yang bisa dimiliki Buddy.
    - Kolom: `id`, `label` (Hobi, Bahasa), `type` (text, number, select).
4. **`buddy_values`**
    - Menyimpan nilai atribut spesifik milik masing-masing Buddy.
    - Kolom: `id`, `buddy_id` (FK), `attribute_id` (FK), `value`.
5. **`testimonials`**
    - Menyimpan ulasan dari pengguna untuk Buddy.
    - Kolom: `id`, `buddy_id` (FK), `user_id` (FK ke customer yang mereview), `star` (1-5), `comment`, `is_published`.

### 4.4 Pengembangan Tahap Akhir (Fase 3)

- **Sistem Booking & Jadwal:** Memungkinkan pengguna untuk memesan waktu khusus dengan Buddy.
- **Sistem Chat/Telepon:** Integrasi pihak ketiga (misal: WebRTC atau Pusher) untuk fitur komunikasi langsung di dalam platform tanpa keluar ke WhatsApp.
- **Sistem Pembayaran (Payment Gateway):** Integrasi Midtrans/Xendit untuk pembayaran per sesi secara otomatis.
