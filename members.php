<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8">
    <title>Mitglieder | MG Glishorn</title>
    <link rel="icon" href="src/index_images/brand.jpeg" type="image/x-icon">

    <!-- For responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/header.css">

    <!-- jQuery, Popper JS and Bootstrap Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<?php include 'templates/header.php'?>
<?php include 'templates/navbar_main.php' ?>
<div class='container'>
    <h1>Mitglieder</h1>
</div>
<?php include 'templates/unofficial_alert.php'?>

<div class="container">
    <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#activeTable">Aktivmitglieder</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#sectionTable">Nach Registern</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#boardTable">Vorstand</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#conductorTable">Direktion</a>
        </li>
    </ul>

    <?php
    $servername = "localhost:3306";
    $username = "guest";
    $password = "guest";
    $dbname = "mgglishorn";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Verbindungsfehler");
    }
    $conn->set_charset("utf8");
    ?>

    <div class="tab-content my-3">
        <!-- Active members -->
        <div id="activeTable" class="container tab-pane active">
            <?php include 'lists/active_members.php';?>
        </div>

        <!--Test-->
        <div id="sectionTable" class="container tab-pane fade">
            <?php include 'lists/sections.php';?>
        </div>

        <!-- Board -->
        <div id="boardTable" class="container tab-pane fade">
            <?php include 'lists/board.php';?>
        </div>

        <!-- Conductors -->
        <div id="conductorTable" class="container tab-pane fade">
            <?php include 'lists/conductors.php';?>
        </div>
    </div>

    <?php $conn->close();?>
</div>

<?php include 'templates/footer.php'?>
</body>
</html>