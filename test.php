<?php
$sql = "SELECT id, naziv, autor, godina FROM knjige";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    echo ('<table>');
    while($row = $result->fetch_assoc()) {
        echo('<tr>');
        echo('<tr>' . $row['id'] . ',' . '</td>');
        echo('<tr>' . $row['naziv'] . ',' . '</td>');
        echo('<tr>' . $row['autor'] . ',' . '</td>');
        echo('<tr>' . $row['godina'] . ',' . '</td>');
        echo('<tr>');
    }

    echo('</table>');
    $conn->close();
}
?>