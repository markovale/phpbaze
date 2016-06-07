<?php require('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Imenik s curama</title>
</head>

<body>
<h1>
    Imenik s curama
</h1>

<p>
    <?php
    $sql = "SELECT id, ime_cure, prezime_cure, broj_mobitela FROM cure";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo('<table>');
        while($row = $result->fetch_assoc()) {
            echo('<tr>');
            echo('<td>' . $row['id'] . '</td>');
            echo('<td>' . $row['ime_cure'] . '</td>');
            echo('<td>' . $row['prezime_cure'] . '</td>');
            echo('<td>' . $row['broj_mobitela'] . '</td>');
            echo('<td>' . '<a href ="delete.php?id='. $row['id'] . '"><img src="delete.png"></a>' . '</td>');
            echo('<td>' . '<a href ="edit.php?id='. $row['id'] . '"><img src="edit.png"></a>' . '</td>');
            echo('</tr>');
        }

        echo('</table>');
    } else {
        echo "Nema cura";
    }
    $conn->close();

    ?>

</p>
<p>
    <a href="unos.php">Unos novih cura</a>
</p>
</body>
</html>