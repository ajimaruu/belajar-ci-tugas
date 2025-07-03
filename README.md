
🛒 JiToko Online - UAS Pemrograman Web Lanjut

Aplikasi Toko berbasis CodeIgniter 4 sebagai project UAS Mata Kuliah Pemrograman Web Lanjut. Aplikasi ini mendukung manajemen produk, diskon harian, proses pembelian dengan diskon otomatis, penghitungan ongkir via WebService, serta dashboard admin.

✨ Fitur

🔐 Autentikasi
- Login untuk 2 peran: admin dan guest
- Admin dapat mengelola produk & diskon
- Guest hanya dapat melihat produk dan belanja

📦 Produk
- Manajemen produk CRUD (Admin)
- Tampilan katalog produk (Guest & Admin)

💸 Diskon Harian
- Diskon otomatis berdasarkan tanggal login
- Diskon ditampilkan di header jika tersedia
- Validasi: Tidak boleh ada 2 diskon untuk tanggal sama

🛒 Keranjang & Checkout
- Tambah produk ke keranjang (diskon otomatis diterapkan)
- Edit & hapus isi keranjang
- Checkout dengan alamat + ongkir (via WebService RajaOngkir)
- Simpan transaksi + detail produk + diskon per item

🧾 Transaksi & Riwayat
- Halaman profil untuk melihat riwayat belanja
- Detail transaksi menampilkan jumlah item dan diskon yang diterapkan

📊 Dashboard
- Dashboard admin dengan data transaksi via WebService
- Menampilkan total harga, ongkir, jumlah item, status transaksi

🧰 Instalasi

1. Clone repositori:
   git clone https://github.com/ajimaruu/belajar-ci-tugas.git
   cd belajar-ci-tugas

2. Install dependensi:
   composer install

3. Buat file .env:
   Salin dari .env.example jika tersedia, atau buat manual dan atur:
   - app.baseURL = 'http://localhost:8080'
   - database.default.hostname = localhost
   - database.default.database = ci_toko
   - database.default.username = root
   - database.default.password = 
   - COST_KEY = your_rajaongkir_api_key

4. Set Permissions (Linux):
   chmod -R 777 writable

5. Jalankan migration & seed:
   php spark db:seed DiskonSeeder

6. Jalankan project:
   php spark serve

📂 Struktur Folder Penting

app/
├── Controllers/
│   ├── AuthController.php
│   ├── ProdukController.php
│   ├── TransaksiController.php
│   └── ApiController.php
│
├── Models/
│   ├── UserModel.php
│   ├── DiskonModel.php
│   ├── TransactionModel.php
│   └── TransactionDetailModel.php
│
├── Views/
│   ├── v_login.php
│   ├── v_produk.php
│   ├── v_keranjang.php
│   ├── v_checkout.php
│   ├── v_profile.php
│   └── layout.php

🌐 WebService

- Endpoint API:
  - /api → semua transaksi
  - /api/jumlah-item?id=1 → total item pada transaksi ID = 1
- Digunakan oleh dashboard sederhana (HTML + PHP + Bootstrap)

💬 Lisensi

Project ini dikembangkan untuk keperluan pembelajaran dan UAS.  
Framework: CodeIgniter 4 (https://codeigniter.com)
