<?php require 'templates.php' ?>
<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8">
    <title>MG Glishorn</title>
    <link rel="icon" href="src/index_images/brand.jpeg" type="image/x-icon">

    <!-- For responsive objects -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<?php echo topImage() ?>
<?php echo navbar('index') ?>
<?php echo title('Musikgesellschaft &laquo;Glishorn&raquo; Glis') ?>
<?php echo unofficial_alert() ?>

<!-- Corona alert -->
<div id="coronaAlert" class="jumbotron-fluid p-3 my-3 bg-danger text-white">
    <div class="container">
        <h4>Coronavirus</h4>
        <p>Aufgrund der aktuellen Lage wurden die Konzerte der
            <abbr title="Musikgesellschaft">MG</abbr> Glishorn und
            <abbr title="Jugendmusik">JM</abbr> Glis  abgesagt. Auch der Probebetrieb
            und interne Anlässe sind bis mindestens 19. April eingestellt.</p>
        <p>Das Lotto wird zu einem späteren Zeitpunkt durchgeführt, nach Möglichkeit
            in den Gliser Restaurants mit Beteiligung der Öffentlichkeit.</p>
        <a href="#" class="btn btn-secondary">Mehr</a>
    </div>
</div>

<?php echo footer() ?>

<!-- Bootstrap Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>