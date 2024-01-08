<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/Models/movie.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($movies as $movie){ ?>
        <li>
            <h2><?php echo $movie->poster() ?></h2>
        </li>
        <?php } ?>
    </ul>
</body>
</html>
