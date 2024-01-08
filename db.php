<?php
require_once __DIR__ . '/Models/movie.php';

$movies = [
    new Movie('Wish', 'it', 120, ['animation', 'comedy', 'family']),
    new Movie('Wish', 'eng', 120, ['animation', 'comedy', 'family']),
    new Movie('Il Ragazzo e L\'airone', 'it', 120, ['animation', 'anime', 'war']),
    new Movie('Il Ragazzo e L\'airone', 'jp', 120, ['animation', 'anime', 'war']),
    new Movie('Kong Fu Panda 4', 'it', 120, ['animation', 'kung-fu', 'comedy']),
    new Movie('Kong Fu Panda 4', 'eng', 120, ['animation', 'kung-fu', 'comedy']),
    new Movie('Inside Out 2', 'it', 120, ['animation', 'emotion', 'comedy']),
    new Movie('Inside Out 2', 'eng', 120, ['animation', 'emotion', 'comedy']),
];

?>