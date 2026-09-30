<?php

require_once __DIR__ . '/helpers.php';

$history = [
    [
        'name' => 'Alya Putri',
        'course' => 'Web Dasar',
        'total' => 240000
    ],
    [
        'name' => 'Sagara Sebastian',
        'course' => 'PHP Dasar',
        'total' => 340000
    ],
    [
        'name' => 'Dwi Farahdiba',
        'course' => 'Laravel Dasar',
        'total' => 500000
    ],
    [
        'name' => 'Mawar Salmiah',
        'course' => 'Web Dasar',
        'total' => 480000
    ]
];

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>History Pendaftaran Dummy - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <section class="section">

        <div class="container">

            <div class="summary-card">

                <h2>History Pendaftaran Dummy</h2>

                <p>
                    Data ini adalah latihan array + looping,
                    bukan database dan bukan CRUD.
                </p>

                <div class="course-table">

                    <table>

                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Kursus</th>
                                <th>Total</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php foreach ($history as $index => $item): ?>

                                <tr>

                                    <td>
                                        <?= $index + 1 ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($item['name']) ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($item['course']) ?>
                                    </td>

                                    <td>
                                        <?= rupiah($item['total']) ?>
                                    </td>

                                </tr>

                            <?php endforeach; ?>

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