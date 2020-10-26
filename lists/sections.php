<?php
$sections = array(
    'Flöten',
    'Klarinetten',
    'Oboen',
    'Fagotte',
    'Saxofone',
    'Trompeten',
    'Hörner',
    'Posaunen',
    'Euphonien',
    'Tuben',
    'Streichbässe',
    'E-Bässe',
    'Schlagzeug',
    'Klaviere',
    'Gitarren',
    'Streicher'
);

$sql = "SELECT
    CONCAT(
        Person.vorname,
        ' ',
        Person.nachname
    ) AS name,
    Register.singular AS singular
FROM
    (
        Person
    INNER JOIN Aktive ON Person.pid = Aktive.pid
    )
INNER JOIN(
        Musikant
    INNER JOIN(
            Instrument
        INNER JOIN Register ON Instrument.sid = Register.sid
        )
    ON
        Musikant.iid = Instrument.iid
    )
ON
    Person.pid = Musikant.pid
WHERE
    Register.plural = ?
ORDER BY
    Person.nachname,
    Person.vorname";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $section);

foreach ($sections as $section) {
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($result->num_rows == 1) {
            $section = $row['singular'];
        }

        echo "  <div class='container my-3'>
                    <h4>$section</h4>
                    <ul class='list-group list-group-flush'>";
        do {
            echo "      <li class='list-group-item'>{$row['name']}</li>";
        } while ($row = $result->fetch_assoc());
        echo '      </ul>
                </div>';
    }
}

$stmt->close();