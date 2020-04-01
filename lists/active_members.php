<?php
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
) THEN CASE WHEN Person.female = 1 THEN ConductorTitle.title_female ELSE ConductorTitle.title_male
END ELSE ''
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
    Person.pid = Conductor.pid
ORDER BY
    Person.lastname,
    Person.firstname,
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