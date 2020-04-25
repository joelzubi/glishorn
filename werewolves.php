<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8">
    <title>Werwölfe online</title>
    <link rel="icon" href="src/index_images/brand.jpeg" type="image/x-icon">

    <!-- For responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery, Popper JS and Bootstrap Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Custom Script -->
    <script src="js/werewolves.js"></script>
</head>
<body>

<ul id="overview" class="list-group">
    <li class="list-group-item disabled">keine lebenden Spieler</li>
</ul>
<div id="page" class="container">Klicke zum Starten</div>
<button id="next" class="btn btn-success btn-block">
    <span class="spinner-border spinner-border-sm"></span>
    Laden..
</button>

</body>