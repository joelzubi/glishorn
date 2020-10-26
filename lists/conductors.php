<?php
$titles = array(
    'Dirigent',
    'Vize-Dirigent'
);

$sql = "SELECT CASE WHEN
    Person.weiblich = 1 THEN TitelInDirektion.weiblicher_titel ELSE TitelInDirektion.maennlicher_titel
END AS function,
CONCAT(
    Person.vorname,
    ' ',
    Person.nachname
) AS name
FROM
    Person
INNER JOIN(
        Dirigent
    INNER JOIN TitelInDirektion ON Dirigent.cid = TitelInDirektion.cid
    )
ON
    Person.pid = Dirigent.pid
WHERE
    TitelInDirektion.maennlicher_titel = ?";

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