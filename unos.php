<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Imenik s curama</title>
</head>

<body style="background-color: aqua">
<h1 style="color: darkblue">
    Imenik s curama
</h1>
<h2 style="font-size: 16px">
    Unesite podatke!
</h2>

<p>
<form action="insert.php" method="post">
    ime_cure:<br>
    <input type="text" name="ime_cure"><br>
    prezime_cure:<br>
    <input type="text" name="prezime_cure"><br>
    broj_mobitela:<br>
    <input type="text" name="broj_mobitela"><br>
    <input type="submit" value="Unesi curu">
</form>
</p>



<p>
    <a href="index.php">Vrati na pocetnu </a>
</p>

</body>
</html>