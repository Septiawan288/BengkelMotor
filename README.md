# Sistem Informasi Bengkel Maju Motor

## Deskripsi Sistem

Aplikasi berbasis web untuk mengelola proses bisnis Bengkel Maju Motor menggunakan Laravel dan MySQL.

## Aktor Sistem

### Admin
- Mengelola data pengguna
- Mengelola pelanggan
- Mengelola kendaraan
- Mengelola laporan

### Kasir
- Mengelola pembayaran
- Melihat transaksi

### Mekanik
- Melihat data servis
- Melakukan pemeriksaan kendaraan
- Mencatat pekerjaan servis

### Pelanggan
- Melakukan pendaftaran servis
- Melihat riwayat servis

## Fitur Sistem

1. Login pengguna sesuai hak akses
2. Manajemen pelanggan
3. Manajemen kendaraan
4. Pendaftaran servis
5. Data mekanik
6. Pengelolaan sparepart
7. Penggunaan sparepart pada servis
8. Pembayaran
9. Laporan servis dan pendapatan

## Database

Tabel yang digunakan:

- users
- pelanggans
- kendaraans
- servis
- detail_servis
- mekaniks
- spareparts
- detail_spareparts
- pembayarans

## Teknologi

- Laravel
- PHP
- MySQL
- Bootstrap/HTML

## Cara Menjalankan

```bash
composer install
php artisan migrate
php artisan serve