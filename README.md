# Sistem Informasi Bengkel Maju Motor

## Deskripsi Sistem

Sistem Informasi Bengkel Maju Motor merupakan aplikasi berbasis web untuk mengelola proses bisnis bengkel seperti data pelanggan, kendaraan, servis, mekanik, sparepart, dan pembayaran.

Aplikasi ini dibuat menggunakan:
- Laravel Framework
- MySQL Database

---

# 1. Analisis Kebutuhan Sistem

## Aktor Sistem

### 1. Admin

Admin bertugas mengelola seluruh data sistem.

Hak akses:
- Mengelola data pengguna.
- Mengelola data pelanggan.
- Mengelola data kendaraan.
- Mengelola data mekanik.
- Mengelola data sparepart.
- Melihat laporan servis dan transaksi.

---

### 2. Kasir

Kasir bertugas mengelola proses pembayaran.

Hak akses:
- Melihat data servis selesai.
- Menginput pembayaran.
- Mengelola transaksi.
- Membuat nota pembayaran.

---

### 3. Mekanik

Mekanik bertugas melakukan pemeriksaan dan perbaikan kendaraan.

Hak akses:
- Melihat daftar servis.
- Melakukan pemeriksaan kendaraan.
- Menginput pekerjaan servis.
- Menggunakan sparepart.
- Mengubah status servis.

---

### 4. Pelanggan

Pelanggan merupakan pemilik kendaraan.

Hak akses:
- Melihat data kendaraan.
- Melihat riwayat servis.
- Melihat status servis.
- Melihat informasi pembayaran.

---

# Kebutuhan Fungsional Sistem

## 1. Login Pengguna

Sistem menyediakan login berdasarkan hak akses:
- Admin
- Kasir
- Mekanik
- Pelanggan

---

## 2. Manajemen Data Pelanggan

Sistem dapat:
- Menambah pelanggan.
- Mengubah data pelanggan.
- Menghapus pelanggan.
- Melihat daftar pelanggan.

---

## 3. Manajemen Data Kendaraan

Sistem dapat:
- Menambah kendaraan.
- Mengubah kendaraan.
- Menghapus kendaraan.
- Melihat kendaraan pelanggan.

---

## 4. Pendaftaran Servis

Sistem dapat mencatat:
- Pelanggan.
- Kendaraan.
- Mekanik.
- Tanggal servis.
- Keluhan.
- Status servis.

---

## 5. Pemeriksaan Kerusakan

Mekanik dapat mencatat:
- Hasil pemeriksaan.
- Diagnosa kerusakan.
- Catatan perbaikan.

---

## 6. Pekerjaan Servis

Sistem dapat menyimpan:
- Jenis pekerjaan.
- Keterangan pekerjaan.
- Biaya jasa.

---

## 7. Penggunaan Sparepart

Sistem dapat:
- Mengelola data sparepart.
- Mencatat sparepart yang digunakan.
- Menghitung biaya sparepart.

---

## 8. Perhitungan Biaya

Total biaya dihitung dari:

Biaya jasa + Biaya sparepart

---

## 9. Pembayaran

Sistem dapat:
- Menyimpan transaksi pembayaran.
- Menentukan metode pembayaran.
- Membuat nota pembayaran.

---

## 10. Laporan

Sistem menyediakan:
- Laporan servis.
- Laporan transaksi.
- Laporan pendapatan.

---

# 2. Perancangan Database

Tabel yang digunakan:

1. users
2. pelanggans
3. kendaraans
4. servis
5. detail_servis
6. mekaniks
7. spareparts
8. detail_spareparts
9. pembayarans

---

## Fitur Tambahan

- Riwayat servis kendaraan.
- Pengelolaan stok sparepart.
- Pencarian data pelanggan.
- Dashboard informasi bengkel.