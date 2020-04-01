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

$sql = "SELECT CASE WHEN
    Person.female = 1 THEN ConductorTitle.title_female ELSE ConductorTitle.title_male
END AS function,
CONCAT(
    Person.firstname,
    ' ',
    Person.lastname
) AS name
FROM
    Person
INNER JOIN(
        Conductor
    INNER JOIN ConductorTitle ON Conductor.cid = ConductorTitle.cid
    )
ON
    Person.pid = Conductor.pid;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo '  <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Funktion</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>';

    while($row = $result->fetch_assoc()) {
        echo "      <tr>
                        <td>{$row['function']}</td>
                        <td>{$row['name']}</td>
                    </tr>";
    }

    echo '     </tbody>
            </table>';
} else {
    echo "Keine Resultate";
}

$conn->close();