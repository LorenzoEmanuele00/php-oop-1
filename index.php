<?php

class Movie
{
    public $title;
    public $language;
    public $length;
    public $genre;

    function __construct($_title, $_language, $_length, $_genre) 
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->length = $_length;
        $this->genre = $_genre;
    }

    public function poster()
    {
        echo 'Titolo: ' . $this->title . ' ' . '- (Lingua: ' .  $this->language . ')';
    }
}

$movies = [
    new Movie('Wish', 'it', 120, ['animation', 'comedy', 'family']),
    new Movie('Il Ragazzo e L\'airone', 'jp', 120, ['animation', 'anime', 'war']),
];

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
