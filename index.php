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
    <link rel="stylesheet" href="css/index_header.css">

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

<!-- Corona alert -->
<div id="coronaAlert" class="jumbotron-fluid py-4 mb-3 bg-danger text-white">
    <div class="container">
        <h4>Coronavirus</h4>
        <p>Aufgrund der aktuellen Lage wurden sämtliche Auftritte der
            <abbr title="Musikgesellschaft" style="text-decoration: none;">MG</abbr> Glishorn und
            <abbr title="Jugendmusik" style="text-decoration: none;">JM</abbr> Glis  abgesagt.
            Dazu gehören kirchliche Auftritte wie Firmung und Allerheiligen sowie unser Winterkonzert in der
            Wallfahrtskirche, das für den <time datetime="2020-11-29 18:00">29. November</time>  geplant war.</p>
        <p>Auch der Probebetrieb ist eingeschränkt. Geprobt wird nur sitzend, in kleinen
            Gruppen und unter Einhaltung der nötigen Massnahmen wie Abstandhalten.</p>
    </div>
</div>

<!-- News box -->
<div id="news" class="container">
    <div class="row">

        <!-- JM Glis in Burgdorf -->
        <div class="col-lg-6">
            <div class="card">
                <img class="card-img-top" src="src/burgdorf/group.jpg" alt="Gruppenfoto Jugendmusik Glis">
                <div class="card-body">
                    <h4 class="card-title">Die JM Glis am Eidgenössischen Jugendmusikfest in Burgdorf</h4>
                    <p class="card-text">
                        Am Schweizer Jugendmusikfest in Burgdorf 2019 konnte die Jugendmusik Glis so richtig abräumen.
                        Sie erreichte den 1. Platz in der Kategorie Konzert Harmonie Oberstufe mit 94 Punkten sowie den
                        1. Platz in der Kategorie Parademusik M mit 93 Punkten. Hier der Bericht des Präsidenten über das
                        "historische" Wochenende vom <time datetime="2019-09-21 14:00">21./22. September</time>.
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