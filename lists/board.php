<?php
$titles = array(
    'Präsident',
    'Vize-Präsident',
    'Jugendmusik-Präsident',
    'Kassier',
    'Aktuar',
    'Materialverwalter',
    'Uniform-Verwalter'
);

$sql = "SELECT CASE WHEN
    Person.weiblich = 1 THEN Vorstandsamt.weiblicher_titel ELSE Vorstandsamt.maennlicher_titel
END AS function,
CONCAT(
    Person.vorname,
    ' ',
    Person.nachname
) AS name
FROM
    (
        Person
    INNER JOIN Mitglied ON Person.pid = Mitglied.pid
    )
INNER JOIN(
        Vorstandsmitglied
    INNER JOIN Vorstandsamt ON Vorstandsmitglied.bid = Vorstandsamt.bid
    )
ON
    Person.pid = Vorstandsmitglied.pid
WHERE
    Vorstandsamt.maennlicher_titel = ?";

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
        echo "  <tr class='text-muted'>
                    <td>$title</td>
                    <td>vakant</td>
                </tr>";
    }
}

echo '      </tbody>
        </table>';

$stmt->close();