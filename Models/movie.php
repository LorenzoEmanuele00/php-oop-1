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

?>