<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test Matrix Pertemuan 6 - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <section class="section">

        <div class="container">

            <div class="summary-card">

                <h2>Test Matrix Pertemuan 6</h2>

                <div class="course-table">

                    <table>

                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Skenario</th>
                                <th>Actual</th>
                                <th>Expected</th>
                                <th>Status</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Mahasiswa + PHP Dasar</td>
                                <td>Rp 225.000</td>
                                <td>Rp 225.000</td>
                                <td>PASS</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Guru + PHP Dasar</td>
                                <td>Rp 212.500</td>
                                <td>Rp 212.500</td>
                                <td>PASS</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Umum + PHP Dasar</td>
                                <td>Rp 237.500</td>
                                <td>Rp 237.500</td>
                                <td>PASS</td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Pilih 3 minat</td>
                                <td>UI/UX, Database, Backend</td>
                                <td>Semua minat tampil</td>
                                <td>PASS</td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Tidak memilih minat</td>
                                <td>Proses tetap berhasil</td>
                                <td>Form tetap dapat diproses</td>
                                <td>PASS</td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Nama kosong</td>
                                <td>Nama wajib diisi</td>
                                <td>Nama wajib diisi</td>
                                <td>PASS</td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>Email tidak valid</td>
                                <td>Email wajib valid</td>
                                <td>Email wajib valid</td>
                                <td>PASS</td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>Pilih kursus</td>
                                <td>Web Dasar, PHP Dasar, Laravel Fundamental</td>
                                <td>Pilihan berasal dari array + foreach</td>
                                <td>PASS</td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <td>Mahasiswa</td>
                                <td>Diskon 10%</td>
                                <td>Diskon 10%</td>
                                <td>PASS</td>
                            </tr>

                            <tr>
                                <td>10</td>
                                <td>Guru</td>
                                <td>Diskon 15%</td>
                                <td>Diskon 15%</td>
                                <td>PASS</td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>Umum</td>
                                <td>Diskon 5%</td>
                                <td>Diskon 5%</td>
                                <td>PASS</td>
                            </tr>

                            <tr>
                                <td>12</td>
                                <td>History dummy</td>
                                <td>4 data tampil</td>
                                <td>Data dirender dengan foreach</td>
                                <td>PASS</td>
                            </tr>

                        </tbody>

                    </table>

                </div>

                <p>
                    <a href="registration.php" class="btn-primary">
                        Daftar Kursus
                    </a>

                    <a href="index.php" class="btn-link">
                        Beranda
                    </a>
                </p>

            </div>

        </div>

    </section>

</body>

</html>