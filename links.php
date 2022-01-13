<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8">
    <title>Links | MG Glishorn</title>

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
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/links.css">
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
    <h1>Links</h1>
</div>

<!-- Wind bands -->
<div class="container my-3">
    <h4>Musikgesellschaften</h4>
    <div class="row">
        <div class="col-md-4 my-1">
            <a href="https://mgbryscheralp.ch/" target="_blank" class="btn btn-outline-primary">
                <img src="src/bands/mund.jpg" alt="MG Bryscheralp" class="link-image">
                <div class="caption">
                    <abbr title="Musikgesellschaft" style="text-decoration: none;">MG</abbr>
                    &laquo;Bryscheralp&raquo; Mund
                </div>
            </a>
        </div>
        <div class="col-md-4 my-1">
            <a href="https://www.mg-belalp.ch/" target="_blank" class="btn btn-outline-primary">
                <img src="src/bands/naters.jpg" alt="MG Belalp" class="link-image">
                <div class="caption">
                    <abbr title="Musikgesellschaft" style="text-decoration: none;">MG</abbr>
                    &laquo;Belalp&raquo; Naters
                </div>
            </a>
        </div>
        <div class="col-md-4 my-1">
            <a href="https://www.stadtmusik-saltina.ch/" target="_blank" class="btn btn-outline-primary">
                <img src="src/bands/brig.jpg" alt="Stadtmusik Saltina" class="link-image">
                <div class="caption">
                    <abbr title="Blasorchester" style="text-decoration: none;">BO</abbr>
                    Stadtmusik &laquo;Saltina&raquo; Brig
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 my-1">
            <a href="https://www.mgsaflischtermen.com/" target="_blank" class="btn btn-outline-primary">
                <img src="src/bands/termen.jpg" alt="MG Saflisch" class="link-image"">
                <div class="caption">
                    <abbr title="Musikgesellschaft" style="text-decoration: none;">MG</abbr>
                    &laquo;Saflisch&raquo; Termen
                </div>
            </a>
        </div>
        <div class="col-md-4 my-1">
            <a href="https://findneralp.ch/"
               target="_blank" class="btn btn-outline-primary">
                <img src="src/bands/eggerberg.jpg" alt="MG Findleralp" class="link-image">
                <div class="caption">
                    <abbr title="Musikgesellschaft" style="text-decoration: none;">MG</abbr>
                    &laquo;Findleralp&raquo; Eggerberg
                </div>
            </a>
        </div>
        <div class="col-md-4 my-1">
            <a href="https://www.mgeintracht.ch/" target="_blank" class="btn btn-outline-primary">
                <img src="src/bands/moerel_filet.jpg" alt="MG Eintracht" class="link-image">
                <div class="caption">
                    <abbr title="Musikgesellschaft" style="text-decoration: none;">MG</abbr>
                    &laquo;Eintracht&raquo; Mörel-Filet
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 my-1">
            <a href="http://www.mg-simplon.ch/" target="_blank" class="btn btn-outline-primary">
                <img src="src/bands/ried_brig.jpg" alt="MG Simplon" class="link-image">
                <div class="caption">
                    <abbr title="Musikgesellschaft" style="text-decoration: none;">MG</abbr>
                    &laquo;Simplon&raquo; Ried-Brig
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Young bands -->
<div class="container my-3">
    <h4>Jugendmusiken</h4>
    <div class="row">
        <div class="col-md-4 my-1">
                <a href="http://www.jugendmusik-glis.ch/" target="_blank" class="btn btn-outline-primary">
                    <img src="src/bands/jm_glis.jpg" alt="JM Glis" class="link-image">
                    <div class="caption">
                        Jugendmusik Glis
                    </div>
                </a>
        </div>
        <div class="col-md-4 my-1">
                <a href="https://www.jm-brig.ch/" target="_blank" class="btn btn-outline-primary">
                    <img src="src/bands/jm_brig.jpg" alt="JM Brig" class="link-image">
                    <div class="caption">
                        Jugendmusik Brig
                    </div>
                </a>
        </div>
        <div class="col-md-4 my-1">
                <a href="https://www.mg-belalp.ch/jugendmusikschule/"
                   target="_blank" class="btn btn-outline-primary">
                    <img src="src/bands/jm_naters.jpg" alt="JM Belalp" class="link-image">
                    <div class="caption">
                        Jugendmusik &laquo;Belalp&raquo; Naters
                    </div>
                </a>
        </div>
    </div>
</div>

<!-- Cool bands -->
<div class="container my-3">
    <h4>Bands im Oberwallis</h4>
    <div class="row">
        <div class="col-md-4 my-1">
            <a href="https://www.modernwheatbeat.com/" target="_blank" class="btn btn-outline-primary">
                <img src="src/bands/modern_wheat_beat.jpg" alt="Modern Wheat Beat" class="link-image">
                <div class="caption">
                    Modern Wheat Beat
                </div>
            </a>
        </div>
        <div class="col-md-4 my-1">
                <a href="https://www.soundonstreet.ch/" target="_blank" class="btn btn-outline-primary">
                    <img src="src/bands/sos.jpg" alt="SOS" class="link-image">
                    <div class="caption">
                        Sound on Street (SOS)
                    </div>
                </a>
        </div>
        <div class="col-md-4 my-1">
                <a href="http://www.tonymalonys.ch/" target="_blank" class="btn btn-outline-primary">
                    <img src="src/bands/malonys.jpg" alt="Tony Malony's" class="link-image">
                    <div class="caption">
                        Tony Malony's
                    </div>
                </a>
        </div>
    </div>
</div>

<!-- Head organizations -->
<div class="container my-3">
    <h4>Verbände</h4>
    <div class="row">
        <div class="col-md-4 my-1">
            <div class="thumbnail">
                <a href="https://www.windband.ch/de/home/" target="_blank" class="btn btn-outline-primary">
                    <img src="src/bands/sbv.jpg" alt="SBV" class="link-image">
                    <div class="caption">
                        Schweizer Blasmusikverband
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 my-1">
            <div class="thumbnail">
                <a href="https://www.kmvw.ch/" target="_blank" class="btn btn-outline-primary">
                    <img src="src/bands/kmvw.jpg" alt="KMVW" class="link-image">
                    <div class="caption">
                        Kantonaler Musikverband Wallis
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 my-1">
            <div class="thumbnail">
                <a href="https://www.omv-vs.ch/" target="_blank" class="btn btn-outline-primary">
                    <img src="src/bands/omv.jpg" alt="OMV" class="link-image">
                    <div class="caption">
                        Oberwalliser Musikverband
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 my-1">
            <div class="thumbnail">
                <a href="https://www.jugendmusik.ch/de" target="_blank" class="btn btn-outline-primary">
                    <img src="src/bands/jm_ch.jpg" alt="Jugendmusik" class="link-image">
                    <div class="caption">
                        Schweizer Jugendmusikverband
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Schools -->
<div class="container my-3">
    <h4>Musikschulen</h4>
    <div class="row">
        <div class="col-md-4 my-1">
            <div class="thumbnail">
                <a href="https://www.amovisp.ch/" target="_blank" class="btn btn-outline-primary">
                    <img src="src/bands/amo.jpg" alt="AMO" class="link-image">
                    <div class="caption">
                        Allgemeine Musikschule Oberwallis
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'?>
</body>
</html>