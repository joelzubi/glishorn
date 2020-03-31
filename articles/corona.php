<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8">
    <title>Corona | MG Glishorn</title>
    <link rel="icon" href="../src/index_images/brand.jpeg" type="image/x-icon">

    <!-- For responsive objects -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="../css/header.css">
</head>

<body>
<?php include '../templates/header.php'?>
<?php include '../templates/navbar_other.php' ?>
<div class='container'>
    <h1>COVID-19</h1>
</div>
<?php include '../templates/unofficial_alert.php'?>

<!-- Corona info -->
<div class="container">
    <p>
        Die Jahreskonzerte der <abbr title="Musikgesellschaft">MG</abbr> Glishorn
        und <abbr title="Musikgesellschaft">JM</abbr> Glis sind abgesagt, ebenso
        das Oberwalliser Musikfest in Lalden sowie sämtliche Bezirksmusikfeste im
        Oberwallis.
    </p>
    <p>
        Unser Ziel bleibt weiterhin, das Vereinslotto zu einem späteren Zeitpunkt
        in den Restaurants von Glis durchzuführen. Auch um diese nach der Krise
        etwas zu unterstützen. Die gekauften Lottokarten bleiben auf jeden Fall
        gültig.
    </p>
</div>

<?php include '../templates/footer.php'?>

<!-- Bootstrap Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>