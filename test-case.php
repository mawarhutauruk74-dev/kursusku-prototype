<?php

$tests = [
    [350000, 1, 0, 25000, 375000],
    [350000, 1, 10, 25000, 340000],
    [350000, 2, 25, 25000, 550000],
    [0, 1, 10, 0, 0],
    [2500000, 3, 10, 50000, 6800000],
];

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Test Case Kalkulator</title>

    <link
        rel="stylesheet"
        href="assets/css/style.css">

</head>

<body>

    <header class="header">

        <div class="container">

            <h1>KursusKu</h1>

            <p>Test Case Kalkulator Biaya</p>

        </div>

    </header>


    <main>

        <section class="section">

            <div class="container">

                <h2>Test Case Kalkulator</h2>

                <div class="course-table">

                    <table>

                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Fee</th>
                                <th>Peserta</th>
                                <th>Diskon</th>
                                <th>Admin</th>
                                <th>Expected Total</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach ($tests as $index => $test): ?>

                                <tr>

                                    <td>
                                        <?php echo $index + 1; ?>
                                    </td>

                                    <td>
                                        Rp <?php echo number_format($test[0], 0, ',', '.'); ?>
                                    </td>

                                    <td>
                                        <?php echo $test[1]; ?>
                                    </td>

                                    <td>
                                        <?php echo $test[2]; ?>%
                                    </td>

                                    <td>
                                        Rp <?php echo number_format($test[3], 0, ',', '.'); ?>
                                    </td>

                                    <td>
                                        Rp <?php echo number_format($test[4], 0, ',', '.'); ?>
                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </section>

    </main>


    <footer class="footer">

        <div class="container">

            <p>
                &copy;
                <?php echo date('Y'); ?>
                KursusKu. Pemrograman Web III.
            </p>

        </div>

    </footer>

</body>

</html>