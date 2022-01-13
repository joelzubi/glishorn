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

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/index_header.css">
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

<!-- Corona alert -->
<div id="coronaAlert" class="jumbotron-fluid py-4 mb-3 bg-info text-white">
    <div class="container">
        <h4 class="my-3">Die &laquo;Glishorn&raquo; spielt Mozart</h4>
        <p>
            Wenn Proben im Orchester nicht möglich sind, musizieren wir halt in Kleingruppen.
            Unser Konzert im Sommer 2021 fand vor einem virtuellen Publikum statt.
            9 Ensembles der
            <abbr title="Musikgesellschaft" style="text-decoration: none;">MG</abbr> Glishorn
            präsentieren verschiedene Variationen der Musik von
            <abbr title="Wolfgang" style="text-decoration: none;">W.</abbr>
            <abbr title="Amadeus" style="text-decoration: none;">A.</abbr> Mozart.
        </p>
    </div>
</div>

<!-- News box -->
<div id="news" class="container">
    <div class="row">
        <!-- Left part -->
        <div class="col-6">

            <!-- Decibel experiment -->
            <div class="card my-2">
                <img class="card-image-top" src="src/decibel_test/title_picture.png" alt="Lärmbelastung"
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

            <!-- Quarantine music -->
            <div class="card my-2">
                <img class="card-img-top" src="src/quarantine/tromboline.png" alt="Tromboline"
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
        <!-- Right part -->
        <div class="col-6">

            <!-- JM Glis in Burgdorf -->
            <div class="card my-2">
                <img class="card-img-top" src="src/burgdorf/group.png" alt="Gruppenfoto Jugendmusik Glis"
                     style="max-height: 300px;">
                <div class="card-body">
                    <h4 class="card-title">Die JM&nbsp;Glis am Eidgenössischen Jugendmusikfest in Burgdorf&nbsp;🎉</h4>
                    <p class="card-text">
                        Am Schweizer Jugendmusikfest in Burgdorf&nbsp;2019 konnte die Jugendmusik&nbsp;Glis so richtig
                        abräumen.
                        Sie erreichte den 1.&nbsp;Platz in der Kategorie Konzert Harmonie Oberstufe mit 94&nbsp;Punkten
                        sowie den 1.&nbsp;Platz in der Kategorie Parademusik M mit 93&nbsp;Punkten.
                        Hier der Bericht des Präsidenten über das "historische" Wochenende vom
                        <time datetime="2019-09-21 14:00">21./22.&nbsp;September 2021</time>.
                    </p>
                    <a href="articles/burgdorf.php" class="card-link stretched-link">Zum Bericht</a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'templates/footer.php'?>
</body>
</html>