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
    $sql ="UPDATE cure SET ime_cure='".$_POST['ime_cure']."', prezime_cure='".$_POST['prezime_cure']."', broj_mobitela='".$_POST['broj_mobitela']."' WHERE id=" . $_POST['id'];
    $result = $conn->query($sql);

    header('Location:index.php');
    ?>


</p>
</body>
</html>