<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8">
    <title>MG Glishorn</title>
    <link rel="icon" href="src/index_images/brand.jpeg" type="image/x-icon">

    <!-- For responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">

    <!-- jQuery, Popper JS and Bootstrap Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Icon Script -->
    <script src="https://kit.fontawesome.com/f54a4f4510.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include 'templates/header.php'?>
<?php include 'templates/navbar_main.php' ?>
<div class='container'>
    <h1>Musikgesellschaft &laquo;Glishorn&raquo; Glis</h1>
</div>
<?php include 'templates/unofficial_alert.php'?>

<!-- Description of MG Glishorn -->
<div class="container">
    <p>
        Wir sind ein Blasorchester-Verein der 1. Stärkeklasse mit 55 Aktiv-Mitgliedern.
    </p>
    <p>
        Wir sind Mitglied des
        <a href="https://www.kmvw.ch/de/mitglieder/verbaende" target="_blank">Bezirksmusikverbands Brig</a>,
        des <a href="https://www.omv-vs.ch/" target="_blank">Oberwalliser Musikverbands</a> und des
        <a href="https://www.windband.ch/de/home/" target="_blank">Schweizerischen Blasmusikverbands</a>.
    </p>
    <p>
        Unser Nachwuchs-Verein ist die
        <a href="http://www.jugendmusik-glis.ch/" target="_blank">Jugendmusik Glis</a>, derzeit
        amtierende Schweizermeisterin in der Konzert- und Parademusik.
    </p>
</div>

<?php include 'templates/footer.php'?>
</body>
</html>