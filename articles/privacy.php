<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8">
    <title>Datenschutz | MG Glishorn</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../src/index_images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../src/index_images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../src/index_images/favicon-16x16.png">
    <link rel="manifest" href="../src/index_images/site.webmanifest">

    <!-- For responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">

    <!-- jQuery, Popper JS and Bootstrap Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Icon Script -->
    <script src="https://kit.fontawesome.com/f54a4f4510.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include '../templates/header.php'?>
<?php include '../templates/navbar_article.php' ?>

<!-- Policy -->
<div class="container">
    <h1>Cookie-Richtlinien</h1>
    <div id="personal-notice-before" class="container">
        <!-- (content set by JS) -->
    </div>
    <p>Diese Website verwendet möglicherweise Cookies von Drittanbietern, insbesondere Tracking-Cookies,
        zum Beispiel zur Anzeige von Facebook- oder YouTube-Videos.
        Dazu bedarf es Ihrer Zustimmung.</p>
    <p>Ausserdem setzen wir ein Cookie, um die Cookie-Einstellungen zu speichern.
        Dieses kann auch dann gesetzt werden, wenn Sie Cookies abgelehnt haben.</p>
    <p>Wenn Sie unsere Cookie-Richtlinien akzeptieren, gehen wir für 1 Jahr von Ihrem Einverständnis
        für sämtliche Cookies auf dieser Website aus.
        Dies gilt jedoch nicht, wenn Cookies für diese Seite in den Browsereinstellungen deaktiviert sind.</p>
    <div id="personal-notice-after" class="container">
        <!-- (content set by JS) -->
    </div>
</div>

<?php include '../templates/footer.php'?>

<!-- Custom script -->
<script src="../js/privacy.js"></script>

</body>
</html>