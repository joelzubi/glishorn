<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="de-CH">
<head>
    <meta charset="UTF-8">
    <title>Mitglieder | MG Glishorn</title>
    <link rel="icon" href="src/index_images/brand.jpeg" type="image/x-icon">

    <!-- For responsive objects -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/header.css">
</head>

<body>
<?php include 'templates/header.php'?>
<?php include 'templates/navbar_main.php' ?>
<div class='container'>
    <h1>Mitglieder</h1>
</div>
<?php include 'templates/unofficial_alert.php'?>

<!-- Active members -->
<div class="container">
<?php
$servername = "localhost:3306";
$username = "guest";
$password = "guest";
$dbname = "mgglishorn";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Verbindungsfehler");
}

$sql = "SELECT
    CONCAT(firstname, ' ', lastname) AS name,
    CASE WHEN Person.pid IN(
SELECT
    pid
FROM
    Musician
) THEN Instrument.name WHEN Person.pid IN(
SELECT
    pid
FROM
    Honor
) THEN CASE WHEN Person.female = 1 THEN HonorPosition.name_female ELSE HonorPosition.name_male
END WHEN Person.pid IN(
SELECT
    pid
FROM
    Conductor
) THEN CASE WHEN Person.female = 1 THEN ConductorTitle.title_female ELSE ConductorTitle.title_male END ELSE ''
END AS function
FROM
    (
        (
            (
                (
                    Person
                INNER JOIN Member ON Person.pid = Member.pid
                )
            INNER JOIN Active ON Person.pid = Active.pid
            )
        LEFT JOIN(
                Musician
            LEFT JOIN Instrument ON Musician.iid = Instrument.iid
            )
        ON
            Person.pid = Musician.pid
        )
    LEFT JOIN(
            Honor
        LEFT JOIN HonorPosition ON Honor.hid = HonorPosition.hid
        )
    ON
        Person.pid = Honor.pid
    )
LEFT JOIN(
        Conductor
    LEFT JOIN ConductorTitle ON Conductor.cid = ConductorTitle.cid
    )
ON
    Person.pid = Conductor.pid";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo '  <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Funktion</th>
                    </tr>
                </thead>
                <tbody>';

    while($row = $result->fetch_assoc()) {
        echo "      <tr>
                        <td>{$row['name']}</td>
                        <td>{$row['function']}</td>
                    </tr>";
    }

    echo '     </tbody>
            </table>';
} else {
    echo "Keine Resultate";
}

$conn->close();
?>
</div>

<?php include 'templates/footer.php'?>

<!-- Bootstrap Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>