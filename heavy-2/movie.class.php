<?php

// Versal initialbokstav för att markera att det är en class/objekt.
class Movie
{

    public function __construct($title, $actors, $director, $year)
    {
        $this->title = $title;
        $this->actors = $actors;
        $this->director = $director;
        $this->year = $year;
    }

    public function shortinfo()
    {
        return $this->title . ", by " . $this->director;
    }
}
