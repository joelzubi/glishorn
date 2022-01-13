<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8">
    <title>Kalender | MG Glishorn</title>
    <link rel="icon" href="src/index_images/brand.jpg" type="image/x-icon">

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
    <h1>Kalender</h1>
</div>

<!-- Google Calendar -->
<div class="container">
    <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23f2e4b5&ctz=Europe%2FZurich&showTabs=0&showPrint=0&showDate=1&showTz=0&showCalendars=0&showNav=1&showTitle=1&mode=MONTH&hl=de&title=MG%20Glishorn&src=am1xdTltaG9xODFjbTRwYzJhNzc0dGIydWo1MWEzdjZAaW1wb3J0LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%238E24AA"
            style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
</div>

<?php include 'templates/footer.php'?>
</body>
</html>