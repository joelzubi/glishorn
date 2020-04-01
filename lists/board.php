<?php
$titles = array(
    'Präsident',
    'Vize-Präsident',
    'Jugendmusik-Präsident',
    'Kassier',
    'Aktuar',
    'Materialverwalter',
    'UniformVerwalter'
);

$sql = "SELECT CASE WHEN
    Person.female = 1 THEN BoardPosition.title_female ELSE BoardPosition.title_male
END AS function,
CONCAT(
    Person.firstname,
    ' ',
    Person.lastname
) AS name
FROM
    (
        Person
    INNER JOIN Member ON Person.pid = Member.pid
    )
INNER JOIN(
        BoardMember
    INNER JOIN BoardPosition ON BoardMember.bid = BoardPosition.bid
    )
ON
    Person.pid = BoardMember.pid
WHERE
    BoardPosition.title_male = ?";

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