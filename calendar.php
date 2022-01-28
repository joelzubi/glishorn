<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8">
    <title>Kalender | MG Glishorn</title>

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
    <link rel="stylesheet" href="css/footer.css">

    <style>
        /* Responsive iFrame */

        .responsive-iframe-container {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px;
            height: 0;
            overflow: hidden;
        }

        .responsive-iframe-container iframe,
        .vresponsive-iframe-container object,
        .vresponsive-iframe-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>

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
    <h1>Kalender</h1>
</div>

<!-- Google Calendar phone -->
<div class="container responsive-iframe-container d-block d-sm-none">
    <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23ffffff&ctz=Europe%2FZurich&showTitle=1&title=MG%20Glishorn&showTabs=1&showCalendars=0&showTz=0&mode=AGENDA&showNav=1&showDate=0&src=bWdnbGlzaG9ybkBnbWFpbC5jb20&color=%23039BE5"
            style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>
<!-- Google Calendar laptop -->
<div class="container responsive-iframe-container d-none d-sm-block">
    <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23ffffff&ctz=Europe%2FZurich&showTitle=1&title=MG%20Glishorn&showTabs=1&showCalendars=0&showTz=0&mode=MONTH&showNav=1&showDate=1&src=bWdnbGlzaG9ybkBnbWFpbC5jb20&color=%23039BE5"
            style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>
<!-- Link to full screen -->
<div class="container mt-2">
    <a href="https://calendar.google.com/calendar/embed?src=mgglishorn%40gmail.com&ctz=Europe%2FZurich"
       target="_blank" class="btn btn-primary btn-block">
        In Google Kalender öffnen
    </a>
</div>

<?php include 'templates/footer.php'?>
</body>
</html>