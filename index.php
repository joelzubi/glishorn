<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8">
    <title>MG Glishorn</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="src/index_images/temp-w.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/index_images/temp-w.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/index_images/temp-w.png">
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

<!-- BMF 2023 -->
<div class="container">
    <h1>Bezirksmusikfest 2023 in Glis</h1>

    <img src="src/bmf23/BMF%202023%20Logo%20farbig.png" alt="Bezirksmusikfest Glis"
         class="img-fluid mx-auto d-block" style="width: 580px;">

    <p>
        Am Auffahrtswochenende 2023 dürfen wir die Musikfamilie des Bezirks Brig
        nach 9 Jahren wieder einmal in Glis zum Bezirksmusikfest begrüssen.
        Neben den 9 Vereinen des Bezirks freut es uns ganz besonders,
        auch unsere Freunde der Trachtenkapelle Malta aus Kärnten in Österreich bei uns begrüssen zu dürfen.
        Ein OK unter der Leitung von Stadtrat Daniel Studer hat sich bereits an die Arbeit gemacht,
        um uns und Glis von der besten Seite präsentieren zu können.
        Wir hoffen, Sie alle an diesem Wochenende bei uns auf dem Dorfplatz zum Festakt,
        entlang der Gliserallee beim Einmarsch oder am Freitag und Samstag im Glsergrund
        auf dem Festareal begrüssen zu dürfen.
    </p>
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