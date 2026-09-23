<?php

$name = trim($_POST['name'] ?? '');

$email = trim($_POST['email'] ?? '');

$phone = trim($_POST['phone'] ?? '');

$studyProgram = trim($_POST['study_program'] ?? '');

$course = $_POST['course'] ?? '';

$participantType = $_POST['participant_type'] ?? '';

$interests = $_POST['interests'] ?? [];

$note = trim($_POST['note'] ?? '');

$source = $_POST['source'] ?? '';


$interestText = implode(', ', $interests);


function e($value): string
{
    return htmlspecialchars(
        (string) $value,
        ENT_QUOTES,
        'UTF-8'
    );
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Hasil Pendaftaran - KursusKu</title>

    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >

</head>


<body>

<header class="header">

    <div class="container">

        <h1>KursusKu</h1>

        <p>Hasil Pendaftaran Kursus</p>

    </div>

</header>


<main>

    <section class="section">

        <div class="container">

            <div class="alert-success">

                <h2>
                    Pendaftaran Berhasil
                </h2>

                <p>
                    Data pendaftaran berhasil diterima.
                </p>

            </div>


            <div class="summary-card">

                <h2>
                    Ringkasan Pendaftaran
                </h2>


                <div class="summary-list">

                    <p>
                        <strong>Nama:</strong>
                        <?php echo e($name); ?>
                    </p>


                    <p>
                        <strong>Email:</strong>
                        <?php echo e($email); ?>
                    </p>


                    <p>
                        <strong>Nomor HP:</strong>
                        <?php echo e($phone); ?>
                    </p>


                    <p>
                        <strong>Program Studi:</strong>
                        <?php echo e($studyProgram); ?>
                    </p>


                    <p>
                        <strong>Kursus:</strong>
                        <?php echo e($course); ?>
                    </p>


                    <p>
                        <strong>Jenis Peserta:</strong>
                        <?php echo e($participantType); ?>
                    </p>


                    <p>
                        <strong>Minat:</strong>
                        <?php echo e($interestText); ?>
                    </p>


                    <p>
                        <strong>Catatan:</strong>
                        <?php echo e($note); ?>
                    </p>


                    <p>
                        <strong>Source:</strong>
                        <?php echo e($source); ?>
                    </p>

                </div>

            </div>


            <p>

                <a
                    href="registration.php"
                    class="btn-link"
                >
                    Kembali ke Form Pendaftaran
                </a>

            </p>

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