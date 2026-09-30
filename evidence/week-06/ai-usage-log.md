# AI Usage Log - Pertemuan 6

| Masalah/tujuan | Saran AI | Keputusan | Hasil uji |
|---|---|---|---|
| Branching diskon | Pisahkan aturan diskon berdasarkan participant_type | Diterima | Diskon mahasiswa, guru, dan umum tampil berbeda |
| Checkbox kosong | Gunakan `$_POST['interests'] ?? []` dan validasi array | Diterima | Tidak ada warning saat minat kosong |
| Looping kursus | Render daftar kursus dari array dengan foreach | Diterima | Pilihan kursus tampil otomatis dari array |
| History dummy | Gunakan array dan foreach untuk menampilkan data | Diterima | Empat data dummy tampil pada halaman history |