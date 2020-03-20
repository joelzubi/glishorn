<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8">
    <title>MG Glishorn</title>

    <!-- For responsive objects -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<!-- Navbar -->
<?php include('templates/header.php') ?>

<div class="jumbotron bg-danger text-white">
    <h1>Musikgesellschaft Glishorn Glis</h1>
</div>

<div class="container-sm">
    <div class="card" style="max-width: 600px;">
        <img class="card-img-top" src="src/example_poster_lg.jpg" alt="Konzertflyer">
        <div class="card-body">
            <h4 class="card-title">Konzert</h4>
            <p class="card-text">Lorem ipsum.</p>
        </div>
    </div>
</div>

<!-- Impressum -->
<?php include('templates/footer.php') ?>

<!-- Bootstrap Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>