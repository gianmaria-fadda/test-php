<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test-php</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="testo" placeholder="inserisci qui il testo...">
        <input type="submit">
    </form>
    <?php
        echo $_POST['testo'];
    ?>
</body>
</html>

