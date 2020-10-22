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
    <script src="js/werewolves_create.js"></script>
</head>
<body>

<ul id="playerList" class="list-group d-none">
    <li class="list-group-item disabled">keine lebenden Spieler</li>
</ul>
<br>

<div id="page" class="container">
    <h1>Werwölfe online</h1>
    <p>
        Dies ist eine elektronische Anleitung für den Spielleiter beim Werwolfspiel.
        Sie ersetzt weder die Spielkarten noch den Spielleiter selbst.
        Diese Applikation ist als Hilfestellung gedacht, die durch intelligente
        Anweisungen einen erhöhten Spielfluss ermöglicht, insbesondere in
        komplexen Spielsituationen.
    </p>
    <p>
        Achtung: Ein Verlassen oder Neuladen dieser Seite beendet das Spiel.
        Das Spiel kann auch offline gespielt werden, sobald diese Seite geladen wurde.
    </p>
    <label class="col-form-label" for="players">Ungefähre Anzahl Spieler:</label>
    <input class="form-control" type="number" value="5" id="players">
</div>

<footer class="fixed-bottom">
    <button id="next" class="btn btn-success btn-block">
        <span class="spinner-border spinner-border-sm"></span>
        Laden..
    </button>
</footer>

</body>