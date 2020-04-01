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
        Person.firstname,
        ' ',
        Person.lastname
    ) AS name,
    Section.singular AS singular
FROM
    (
        Person
    INNER JOIN(
            Musician
        INNER JOIN(
                Instrument
            INNER JOIN Section ON Instrument.sid = Section.sid
            )
        ON
            Musician.iid = Instrument.iid
        )
    ON
        Person.pid = Musician.pid
    )
WHERE
    Section.plural = ?
ORDER BY
    Person.lastname, Person.firstname";

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