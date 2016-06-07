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
    echo ($_GET['id']);
    $sql = "SELECT id, ime_cure, prezime_cure, broj_mobitela FROM cure WHERE id=" . $_GET['id'];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
    } else {
        echo "Nema cura";
        die();
    }
    $conn->close();

    ?>
<form action="update.php" method="post">
    ime_cure:<br>
    <input type="text" name="ime_cure" value="<?php echo ($row['ime_cure']); ?> "><br>
    prezime_cure:<br>
    <input type="text" name="prezime_cure" value="<?php echo ($row['prezime_cure']); ?> "><br>
    broj_mobitela:<br>
    <input type="text" name="broj_mobitela" value="<?php echo ($row['broj_mobitela']); ?> "><br>
    <input type="hidden" name="id" value="<?php echo ($row['id']); ?> "><br>
    <input type="submit" value="Unesi curu">
</form>

</p>
</body>
</html>