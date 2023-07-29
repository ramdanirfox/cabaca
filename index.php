<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabaca</title>
    <link rel="stylesheet" href="assets/css/pure-min.css">
    <link rel="stylesheet" href="assets/css/gridjs-mermaid.min.css.css">
    <link rel="stylesheet" href="assets/css/cabaca.css">
</head>
<body>
    <div class="bg-utama">
    <?php 
        require 'services/kueri.php';
        var_dump(fn_ambil_pendaftaran());
        require 'component/header.php';
    ?>

        <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">A Sample Blog</h1>
            <h2 class="brand-tagline">Creating a blog layout using Pure</h2>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="pure-button" href="http://purecss.io">Pure</a>
                    </li>
                </ul>
            </nav>
        </div>
        </div>
    </div>
</body>
</html>