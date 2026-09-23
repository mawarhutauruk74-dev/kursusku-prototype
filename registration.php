<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Kursus - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header class="header">
    <div class="container">

        <h1>KursusKu</h1>

        <p>Form Pendaftaran Kursus</p>

        <nav class="navbar" aria-label="Navigasi utama">

    <div class="container">

        <a href="index.php">Beranda</a>

        <a href="index.php#katalog">Katalog</a>

        <a href="registration.php">Daftar Kursus</a>

    </div>

</nav>

    </div>
</header>


<main>

    <section class="section">

        <div class="container">

            <h2>Form Pendaftaran Kursus</h2>

            <p>
                Silakan isi data berikut untuk melakukan pendaftaran kursus.
            </p>


            <form
                action="process-registration.php"
                method="POST"
                class="registration-form"
            >

                <input
                    type="hidden"
                    name="source"
                    value="week-05"
                >


                <!-- Nama -->
                <div class="form-group">

                    <label for="name">
                        Nama Lengkap
                    </label>

                    <input
                        id="name"
                        name="name"
                        type="text"
                        minlength="3"
                        maxlength="100"
                        autocomplete="name"
                        required
                    >

                </div>


                <!-- Email -->
                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        id="email"
                        name="email"
                        type="email"
                        maxlength="100"
                        autocomplete="email"
                        required
                    >

                </div>


                <!-- No HP -->
                <div class="form-group">

                    <label for="phone">
                        Nomor HP
                    </label>

                    <input
                        id="phone"
                        name="phone"
                        type="tel"
                        maxlength="20"
                        autocomplete="tel"
                        required
                    >

                </div>


                <!-- Program Studi -->
                <div class="form-group">

                    <label for="study_program">
                        Program Studi
                    </label>

                    <input
                        id="study_program"
                        name="study_program"
                        type="text"
                        minlength="2"
                        maxlength="100"
                        required
                    >

                </div>


                <!-- Pilihan Kursus -->
                <div class="form-group">

                    <label for="course">
                        Pilih Kursus
                    </label>

                    <select
                        id="course"
                        name="course"
                        required
                    >

                        <option value="">
                            -- Pilih Kursus --
                        </option>

                        <option value="web-dasar">
                            Web Dasar
                        </option>

                        <option value="php-dasar">
                            PHP Dasar
                        </option>

                        <option value="laravel-fundamental">
                            Laravel Fundamental
                        </option>

                    </select>

                </div>


                <!-- Jenis Peserta -->
                <fieldset class="form-group">

                    <legend>
                        Jenis Peserta
                    </legend>

                    <label class="choice">
                        <input
                            type="radio"
                            name="participant_type"
                            value="mahasiswa"
                            required
                        >
                        Mahasiswa
                    </label>

                    <label class="choice">
                        <input
                            type="radio"
                            name="participant_type"
                            value="umum"
                        >
                        Umum
                    </label>

                </fieldset>


                <!-- Minat -->
                <fieldset class="form-group">

                    <legend>
                        Minat
                    </legend>

                    <label class="choice">
                        <input
                            type="checkbox"
                            name="interests[]"
                            value="ui-ux"
                        >
                        UI/UX
                    </label>

                    <label class="choice">
                        <input
                            type="checkbox"
                            name="interests[]"
                            value="database"
                        >
                        Database
                    </label>

                    <label class="choice">
                        <input
                            type="checkbox"
                            name="interests[]"
                            value="backend"
                        >
                        Backend
                    </label>

                </fieldset>


                <!-- Catatan -->
                <div class="form-group">

                    <label for="note">
                        Catatan
                    </label>

                    <textarea
                        id="note"
                        name="note"
                        maxlength="300"
                        rows="5"
                    ></textarea>

                    <p class="help">
                        Maksimal 300 karakter.
                    </p>

                </div>


                <!-- Tombol -->
                <button
                    type="submit"
                    class="btn-primary"
                >
                    Kirim Pendaftaran
                </button>

            </form>

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