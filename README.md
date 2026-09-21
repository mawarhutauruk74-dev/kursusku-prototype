# KursusKu

KursusKu adalah prototype website pembelajaran teknologi yang dibuat untuk praktikum Pemrograman Web III.

## Teknologi

- PHP
- HTML
- CSS
- Laragon
- Visual Studio Code

## Fitur

Website KursusKu memiliki beberapa fitur:

1. Landing page KursusKu
2. Server-side PHP
3. Katalog 6 kursus
4. Perhitungan biaya kursus
5. Fungsi reusable PHP
6. Pengujian fungsi dengan test-functions.php
7. Tampilan responsive untuk desktop dan mobile
8. Video pembelajaran

## Daftar File

- `index.php` — halaman utama dan katalog kursus
- `server-time.php` — demonstrasi waktu dari server PHP
- `fee-calculator.php` — kalkulator biaya kursus
- `helpers.php` — fungsi reusable untuk format Rupiah, status kursus, sisa kursi, dan tanggal
- `test-functions.php` — pengujian fungsi pada `helpers.php`

## Fungsi Helpers

### rupiah()

Mengubah angka menjadi format Rupiah.

Contoh:

```text
250000 → Rp 250.000