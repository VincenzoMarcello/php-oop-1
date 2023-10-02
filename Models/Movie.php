<?php

class Movie extends Production
{
    public $published_year;
    public $running_time;

    public function __construct(
        string $title,
        string $original_language,
        string $published_year,
        string $running_time
    ) {
        parent::__construct($title, $original_language);
        $this->published_year = $published_year;
        $this->running_time = $running_time;
    }

    public function getDetails()
    {
        return "
        <strong>Titolo:</strong> $this->title, <br>
        <strong>Lingua:</strong> $this->original_language, <br>
        <strong>Anno di uscita:</strong> $this->published_year, <br>
        <strong>Durata:</strong> $this->running_time, <br>";

    }
}