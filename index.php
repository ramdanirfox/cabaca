<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbingan Belajar "Kak Lela"</title>
    <?php require 'components/header_imports.php' ?>
</head>
<body>
    <div class="bg-utama">
    <?php 
        require 'services/kueri.php';
        var_dump(fn_ambil_pendaftaran());
        require 'components/header.php';
    ?>

        <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">Bimbingan Belajar</h1>
            <h2 class="brand-tagline">Kak Lela</h2>
        </div>
        </div>

        <?php require 'components/registrasi.php' ?>

        <div id="wrapper"></div>
    </div>
    <?php require 'components/footer_imports.php' ?>
</body>
</html>