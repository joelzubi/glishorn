<?php
$sql = "SELECT
    CONCAT(
        Person.firstname,
        ' ',
        Person.lastname
    ) AS name
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
    Section.plural = ?";

$singular_sql = "SELECT
    singular
FROM
    Section
WHERE
    plural = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $section);
$singular_stmt = $conn->prepare($singular_sql);
$singular_stmt->bind_param("s", $section);

$section = "Klarinetten";
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    if ($result->num_rows = 1) {
        $singular_stmt->execute();
        $section = $singular_stmt->get_result()->fetch_assoc()["singular"];
    }

    echo "  <div class='container'>
                            <h3>$section</h3>
                            <ul class='list-group list-group-flush'>";
    while ($row = $result->fetch_assoc()) {
        echo "      <li class='list-group-item'>{$row['name']}</li>";
    }
    echo '      </ul>
                        </div>';
} else {
    echo "Keine Resultate";
}

$stmt->close();
$singular_stmt->close();