<?php
$sql = "SELECT
    CONCAT(vorname, ' ', nachname) AS name,
    CASE WHEN Person.pid IN(
SELECT
    pid
FROM
    Musikant
) THEN Instrument.name WHEN Person.pid IN(
SELECT
    pid
FROM
    MitgliedDerEhrengarde
) THEN CASE WHEN Person.weiblich = 1 THEN PositionInEhrengarde.weiblicher_titel ELSE PositionInEhrengarde.maennlicher_titel
END WHEN Person.pid IN(
SELECT
    pid
FROM
    Dirigent
) THEN CASE WHEN Person.weiblich = 1 THEN TitelInDirektion.weiblicher_titel ELSE TitelInDirektion.maennlicher_titel
END ELSE ''
END AS function
FROM
    (
        (
            (
                (
                    Person
                INNER JOIN Mitglied ON Person.pid = Mitglied.pid
                )
            INNER JOIN Aktive ON Person.pid = Aktive.pid
            )
        LEFT JOIN(
                Musikant
            LEFT JOIN Instrument ON Musikant.iid = Instrument.iid
            )
        ON
            Person.pid = Musikant.pid
        )
    LEFT JOIN(
            MitgliedDerEhrengarde
        LEFT JOIN PositionInEhrengarde ON MitgliedDerEhrengarde.hid = PositionInEhrengarde.hid
        )
    ON
        Person.pid = MitgliedDerEhrengarde.pid
    )
LEFT JOIN(
        Dirigent
    LEFT JOIN TitelInDirektion ON Dirigent.cid = TitelInDirektion.cid
    )
ON
    Person.pid = Dirigent.pid
ORDER BY
    Person.nachname,
    Person.vorname,
    function";

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