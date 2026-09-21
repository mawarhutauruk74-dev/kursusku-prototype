<?php

$courseName = 'Laravel Fundamental';
$fee = 350000;
$participantCount = 2;
$discountPercent = 10;
$adminFee = 25000;
$isActive = true;

$subtotal = $fee * $participantCount;

$discount = $subtotal * $discountPercent / 100;

$total = $subtotal - $discount + $adminFee;

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Kalkulator Biaya Kursus</title>

    <link
        rel="stylesheet"
        href="assets/css/style.css">

</head>

<body>

    <header class="header">

        <div class="container">

            <h1>KursusKu</h1>

            <p>Kalkulator Biaya Kursus</p>

        </div>

    </header>


    <main>

        <section class="section">

            <div class="container">

                <h2>Kalkulator Biaya Kursus</h2>

                <p>
                    Perhitungan biaya untuk:
                    <strong>
                        <?php echo $courseName; ?>
                    </strong>
                </p>


                <div class="course-card">

                    <p>
                        <strong>Biaya Kursus:</strong>
                        Rp <?php echo number_format($fee, 0, ',', '.'); ?>
                    </p>

                    <p>
                        <strong>Jumlah Peserta:</strong>
                        <?php echo $participantCount; ?>
                    </p>

                    <p>
                        <strong>Diskon:</strong>
                        <?php echo $discountPercent; ?>%
                    </p>

                    <p>
                        <strong>Biaya Admin:</strong>
                        Rp <?php echo number_format($adminFee, 0, ',', '.'); ?>
                    </p>

                    <hr>

                    <p>
                        <strong>Subtotal:</strong>
                        Rp <?php echo number_format($subtotal, 0, ',', '.'); ?>
                    </p>

                    <p>
                        <strong>Potongan Diskon:</strong>
                        Rp <?php echo number_format($discount, 0, ',', '.'); ?>
                    </p>

                    <p>
                        <strong>Total Pembayaran:</strong>
                        Rp <?php echo number_format($total, 0, ',', '.'); ?>
                    </p>

                    <p>
                        <strong>Status:</strong>

                        <?php if ($isActive): ?>

                            Aktif

                        <?php else: ?>

                            Tidak Aktif

                        <?php endif; ?>

                    </p>

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