<?php
$titles = array(
    'Dirigent',
    'Vize-Dirigent'
);

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
    Person.pid = Conductor.pid
WHERE
    ConductorTitle.title_male = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $title);

echo '  <table class="table table-hover">
            <thead>
                <tr>
                    <th>Funktion</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>';

foreach ($titles as $title) {
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "  <tr>
                        <td>{$row['function']}</td>
                        <td>{$row['name']}</td>
                    </tr>";
        }
    } else {
        echo "  <tr>
                    <td>$title</td>
                    <td class='text-muted'>vakant</td>
                </tr>";
    }
}

echo '      </tbody>
        </table>';

$stmt->close();