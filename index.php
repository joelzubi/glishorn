<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8">
    <title>MG Glishorn</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="src/index_images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/index_images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/index_images/favicon-16x16.png">
    <link rel="manifest" href="src/index_images/site.webmanifest">

    <!-- For responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/index_header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">

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

<!-- Corona alert -->
<div id="coronaAlert" class="jumbotron-fluid py-4 mb-3 bg-warning">
    <div class="container">
        <h4 class="my-3">Probebetrieb mit Auflagen</h4>
        <p>Aufgrund der aktuellen Lage proben wir derzeit im 2G-plus-Modus und halten uns an die
            aktuellen Vorgaben des Bundes.</p>
        <p>Nichtsdestotrotz hoffen wir auf eine baldige Normalisierung und freuen uns,
            schon bald wieder vor Publikum ein Programm zum Besten zu geben.</p>
    </div>
</div>

<!-- Mozart -->
<div class="container my-4">
    <div class="card hover-box">
        <div class="card-body">
            <div class="row">
                <div class="col-xl-8 position-relative">
                    <h3>Die &laquo;Glishorn&raquo; spielt Mozart</h3>
                    <p>
                        Im Frühjahr 2021 spielten die Mitglieder der
                        <abbr title="Musikgesellschaft" style="text-decoration: none;">MG</abbr> Glishorn
                        in Kleingruppen statt im Orchester.
                    </p>
                    <p>
                        9 Ensembles präsentieren verschiedene Variationen der Musik von
                        <abbr title="Wolfgang" style="text-decoration: none;">W.</abbr>
                        <abbr title="Amadeus" style="text-decoration: none;">A.</abbr> Mozart.
                    </p>
                </div>
                <div class="col-xl-4">
                    <img src="src/mozart/logo.jpg" class="img-fluid d-block mx-auto" alt="Mozart">
                </div>
            </div>
            <a href="articles/mozart.php" class="btn btn-primary card-link stretched-link btn-block animated">
                <span> 🎥 Hören Sie sich das Resultat hier an! </span>
            </a>
        </div>
    </div>
</div>

<!-- News box -->
<div class="container">

    <div class="row">

        <!-- JM Glis in Burgdorf -->
        <div class="col-lg-6">
            <div class="card my-2 hover-box">
                <img class="card-img-top" src="src/burgdorf/group.jpg" alt="Gruppenfoto Jugendmusik Glis"
                     style="max-height: 300px;">
                <div class="card-body">
                    <h4 class="card-title">Die JM&nbsp;Glis am Eidgenössischen Jugendmusikfest in Burgdorf&nbsp;🎉</h4>
                    <p class="card-text">
                        Am Schweizer Jugendmusikfest in Burgdorf&nbsp;2019 konnte die Jugendmusik&nbsp;Glis so richtig
                        abräumen.
                        Sie erreichte den 1.&nbsp;Platz in der Kategorie Konzert Harmonie Oberstufe mit 94&nbsp;Punkten
                        sowie den 1.&nbsp;Platz in der Kategorie Parademusik M mit 93&nbsp;Punkten.
                        Hier der Bericht des Präsidenten über das "historische" Wochenende vom
                        <time datetime="2019-09-21 14:00">21./22.&nbsp;September 2019</time>.
                    </p>
                    <a href="articles/burgdorf.php" class="card-link stretched-link">Zum Bericht</a>
                </div>
            </div>
        </div>

        <!-- Decibel experiment -->
        <div class="col-lg-6">
            <div class="card my-2 hover-box">
                <img class="card-image-top" src="src/decibel_test/title_picture.jpg" alt="Lärmbelastung"
                     style="max-height: 300px;">
                <div class="card-body">
                    <h4 class="card-title">Wie laut ist eigentlich Musik? 🎧</h4>
                    <p class="card-text">
                        Zu viel Lärmbelastung kann das Gehör schädigen.
                        Aber wie laut ist ein Musikinstrument oder gar ein ganzes Blasorchester?
                        Wir haben den Selbsttest gemacht und Erstaunliches festgestellt.
                    </p>
                    <a href="articles/decibel_test.php" class="card-link stretched-link">Zum Experiment</a>
                </div>
            </div>
        </div>

    </div>
    <div class="row">

        <!-- Quarantine music -->
        <div class="col-lg-6">
            <div class="card my-2 hover-box">
                <img class="card-img-top" src="src/quarantine/tromboline.jpg" alt="Tromboline"
                     style="height: 300px;">
                <div class="card-body">
                    <h4 class="card-title">Musik trotz Corona</h4>
                    <p class="card-text">
                        Während einer Pandemie zu musizieren erfordert Kreativität.
                        Daran fehlt es in der Oberwalliser Musikszene aber nicht.
                        Verschiedene Formationen bereichern das Leben der Menschen, auch wenn Proben und
                        Konzerte nicht stattfinden können.
                    </p>
                    <a href="articles/quarantine.php" class="card-link stretched-link">Videos</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include 'templates/footer.php'?>
</body>
</html>