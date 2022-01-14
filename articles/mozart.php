<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8">
    <title>Glishorn spielt Mozart</title>

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
    <link rel="stylesheet" href="../css/mozart.css">

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

<!-- Article -->
<div class="container">
    <h1>Die &laquo;Glishorn&raquo; spielt Mozart</h1>
    <p>Wolfgang Amadeus Mozart war ein Salzburger Musiker und Komponist der Wiener Klassik.
        Sein umfangreiches Werk geniesst weltweite Anerkennung und gehört zu den bedeutendsten im Repertoire der
        klassischen Musik.</p>
    <p>9 Ensembles, bestehend aus Mitgliedern der
        <abbr title="Musikgesellschaft" style="text-decoration: none;">MG</abbr> Glishorn,
        haben die unterschiedlichsten Variationen seiner Musik einstudiert und aufgenommen.</p>
    <p>Viel Vergnügen!</p>

    <h3 class="mt-5">Klarinettenquartett</h3>
    <div class="row">
        <div id="video-klarinettenquartett" class="col-lg-6 position-relative text-center">
            <a href="https://www.youtube.com/embed/FVFdi_SiWs4" target="_blank">
                <img src="../src/mozart/klarinettenquartett.jpg" class="img-fluid d-block mx-auto"
                    alt="Klarinettenquartett">
                <a href="https://www.youtube.com/embed/FVFdi_SiWs4" target="_blank"
                   class="position-absolute stretched-link fab fa-youtube text-decoration-none youtube-video"></a>
            </a>
        </div>
        <div class="col-lg-6">
            <ul class="list-group pb-2">
                <li class="list-group-item">Divertimento Nr. 3 (Wolfgang Amadeus Mozart</li>
            </ul>
        </div>
    </div>

    <hr>

    <h3 class="mt-5">Perkussionsensemble</h3>
    <div class="row">
        <div id="video-perkussionsensemble" class="col-lg-6 position-relative text-center">
            <a href="https://www.youtube.com/embed/2DkpfTCcZiI" target="_blank">
                <img src="../src/mozart/perkussionsensemble.jpg" class="img-fluid d-block mx-auto"
                     alt="Perkussionsensemble">
                <a href="https://www.youtube.com/embed/2DkpfTCcZiI" target="_blank"
                   class="position-absolute stretched-link fab fa-youtube text-decoration-none youtube-video"></a>
            </a>
        </div>
        <div class="col-lg-6">
            <ul class="list-group pb-2">
                <li class="list-group-item">Die Hochzeit des Figaro – Ouvertüre (Wolfgang Amadeus Mozart, arr. Beat Jaggy 2021)</li>
                <li class="list-group-item">HMPF (Beat Jaggy 2020)</li>
            </ul>
        </div>
    </div>

    <hr>

    <h3 class="mt-5">Saxensemble</h3>
    <div class="row">
        <div id="video-saxensemble" class="col-lg-6 position-relative text-center">
            <a href="https://www.youtube.com/embed/JqiUNBiVIyI" target="_blank">
                <img src="../src/mozart/saxensemble.jpg" class="img-fluid d-block mx-auto"
                     alt="Saxensemble">
                <a href="https://www.youtube.com/embed/JqiUNBiVIyI" target="_blank"
                   class="position-absolute stretched-link fab fa-youtube text-decoration-none youtube-video"></a>
            </a>
        </div>
        <div class="col-lg-6">
            <ul class="list-group pb-2">
                <li class="list-group-item">Symphony 40 (Wolfgang Amadeus Mozart)</li>
                <li class="list-group-item">D'ont Stop Me Now</li>
            </ul>
        </div>
    </div>

    <hr>

    <h3 class="mt-5">Klarinettenquintett</h3>
    <div class="row">
        <div id="video-klarinettenquintett" class="col-lg-6 position-relative text-center">
            <a href="https://www.youtube.com/embed/v_ZBDnn9YP4" target="_blank">
                <img src="../src/mozart/klarinettenquintett.jpg" class="img-fluid d-block mx-auto"
                     alt="Klarinettenquintett">
                <a href="https://www.youtube.com/embed/v_ZBDnn9YP4" target="_blank"
                   class="position-absolute stretched-link fab fa-youtube text-decoration-none youtube-video"></a>
            </a>
        </div>
        <div class="col-lg-6">
            <ul class="list-group pb-2">
                <li class="list-group-item">Serenade in C-Moll KV388 (Wolfgang Amadeus Mozart)</li>
            </ul>
        </div>
    </div>

    <hr>

    <h3 class="mt-5">Blechbläserquintett</h3>
    <div class="row">
        <div id="video-blechblaeserquintett" class="col-lg-6 position-relative text-center">
            <a href="https://www.youtube.com/embed/K_3k1jfYdDY" target="_blank">
                <img src="../src/mozart/blechblaeserquintett.jpg" class="img-fluid d-block mx-auto"
                     alt="Blechbläserquintett">
                <a href="https://www.youtube.com/embed/K_3k1jfYdDY" target="_blank"
                   class="position-absolute stretched-link fab fa-youtube text-decoration-none youtube-video"></a>
            </a>
        </div>
        <div class="col-lg-6 ">
            <ul class="list-group pb-2">
                <li class="list-group-item">Die Zauberflöte - Ouvertüre (Wolfgang Amadeus Mozart)</li>
                <li class="list-group-item">Oh Minuetto, where'd you go (Wolfgang Amadeus Mozart)</li>
            </ul>
        </div>
    </div>

    <hr>

    <h3 class="mt-5">Flötenquartett</h3>
    <div class="row">
        <div id="video-floetenquartett" class="col-lg-6 position-relative text-center">
            <a href="https://www.youtube.com/embed/Z9KbFW9mA6o" target="_blank">
                <img src="../src/mozart/floetenquartett.jpg" class="img-fluid d-block mx-auto"
                     alt="Flötenquartett">
                <a href="https://www.youtube.com/embed/Z9KbFW9mA6o" target="_blank"
                   class="position-absolute stretched-link fab fa-youtube text-decoration-none youtube-video"></a>
            </a>
        </div>
        <div class="col-lg-6">
            <ul class="list-group pb-2">
                <li class="list-group-item">Andante in F-Dur KV616 (Wolfgang Amadeus Mozart)</li>
                <li class="list-group-item">Coloratura</li>
            </ul>
        </div>
    </div>

    <hr>

    <h3 class="mt-5">Posaunenquartett</h3>
    <div class="row">
        <div id="video-posaunenquartett" class="col-lg-6 position-relative text-center">
            <a href="https://www.youtube.com/embed/g8FTcOkFrNs" target="_blank">
                <img src="../src/mozart/posaunenquartett.jpg" class="img-fluid d-block mx-auto"
                     alt="Posaunenquartett">
                <a href="https://www.youtube.com/embed/g8FTcOkFrNs" target="_blank"
                   class="position-absolute stretched-link fab fa-youtube text-decoration-none youtube-video"></a>
            </a>
        </div>
        <div class="col-lg-6">
            <ul class="list-group pb-2">
                <li class="list-group-item">Rondo Alla Turca (Wolfgang Amadeus Mozart)</li>
                <li class="list-group-item">Gospel Time (Jeffrey Agrell)</li>
            </ul>
        </div>
    </div>

    <hr>

    <h3 class="mt-5">Brassensemble</h3>
    <div class="row">
        <div id="video-brassensemble" class="col-lg-6 position-relative text-center">
            <a href="https://www.youtube.com/embed/WlULpkWGUk0" target="_blank">
                <img src="../src/mozart/brassensemble.jpg" class="img-fluid d-block mx-auto"
                     alt="Brassensemble">
                <a href="https://www.youtube.com/embed/WlULpkWGUk0" target="_blank"
                   class="position-absolute stretched-link fab fa-youtube text-decoration-none youtube-video"></a>
            </a>
        </div>
        <div class="col-lg-6">
            <ul class="list-group pb-2">
                <li class="list-group-item">Ave Verum Corpus (Wolfgang Amadeus Mozart)</li>
                <li class="list-group-item">Alright, ok you win</li>
            </ul>
        </div>
    </div>

    <hr>

    <h3 class="mt-5">Oboenquartett</h3>
    <div class="row">
        <div id="video-oboenquartett" class="col-lg-6 position-relative text-center">
            <a href="https://www.youtube.com/embed/vP2wQh06j5s" target="_blank">
                <img src="../src/mozart/oboenquartett.jpg" class="img-fluid d-block mx-auto"
                     alt="Oboenquartett">
                <a href="https://www.youtube.com/embed/vP2wQh06j5s" target="_blank"
                   class="position-absolute stretched-link fab fa-youtube text-decoration-none youtube-video"></a>
            </a>
        </div>
        <div class="col-lg-6">
            <ul class="list-group pb-2">
                <li class="list-group-item">Oboenquartett KV370 (Wolfgang Amadeus Mozart)</li>
            </ul>
        </div>
    </div>

    <hr>

    <p>Alle Videos finden Sie auch auf dem
        <a href="https://www.youtube.com/channel/UCQV1_h3s6fHY7VdfOwRioKQ" class="alert-link" target="_blank">
            offiziellen YouTube-Kanal der
            <abbr title="Musikgesellschaft" style="text-decoration: none;">MG</abbr> Glishorn
            und
            <abbr title="Jugendmusik" style="text-decoration: none;">JM</abbr> Glis</a>.
    </p>
</div>

<?php include '../templates/footer.php'?>

<!-- End-of-Page element, needed for JS to append HTML element to body -->
<div id="endOfPage"></div>

<!-- Custom script -->
<script src="../js/mozart.js"></script>

</body>
</html>