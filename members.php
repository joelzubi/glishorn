<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8">
    <title>Mitglieder | MG Glishorn</title>

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
    <h1>Mitglieder</h1>
</div>

<div class="container">
    <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#sectionTable">Aktivmitglieder</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#boardTable">Vorstand und Direktion</a>
        </li>
    </ul>

    <div class="tab-content my-3">
        <!--Sections-->
        <div id="sectionTable" class="container tab-pane active">
            <?php include 'lists/sections.php';?>
        </div>

        <!-- Board -->
        <div id="boardTable" class="container tab-pane fade">
            <?php include 'lists/board.php';?>
            <?php include 'lists/conductors.php';?>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'?>
</body>
</html>