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
    $sql = "INSERT INTO cure (ime_cure, prezime_cure, broj_mobitela) VALUES ('" . $_POST['ime_cure'] . "', '" . $_POST['prezime_cure'] . "','" . $_POST['broj_mobitela'] . "')";
    $result = $conn->query($sql);
    echo('Cura je unesena!<br>');
    echo('<a href="index.php">Povratak na prikaz cura</a>');
    ?>
</p>
</body>
</html>