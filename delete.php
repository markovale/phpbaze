
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
    $sql = "DELETE FROM cure WHERE id=" . $_GET['id'];
    $result = $conn->query($sql);
    echo('Cura je obrisana!<br>');
    echo('<a href="index.php">Povratak na imenik s curama</a>');
    ?>
</p>
</body>
</html>