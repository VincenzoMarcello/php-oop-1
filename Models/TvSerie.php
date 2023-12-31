<?php
class TvSerie extends Production
{
    public $aired_from_year;

    public $aired_to_year;

    public $number_of_episodes;

    public $number_of_seasons;

    public function __construct(
        string $title,
        string $original_language,
        string $aired_from_year,
        string $aired_to_year,
        string $number_of_episodes,
        string $number_of_seasons
    ) {
        parent::__construct($title, $original_language);
        $this->aired_from_year = $aired_from_year;
        $this->aired_to_year = $aired_to_year;
        $this->number_of_episodes = $number_of_episodes;
        $this->number_of_seasons = $number_of_seasons;
    }

    public function getDetails()
    {
        return "
        <strong>Titolo:</strong> $this->title, <br>
        <strong>Lingua:</strong> $this->original_language, <br>
        <strong>Anno di inizio:</strong> $this->aired_from_year, <br>
        <strong>Anno di fine:</strong> $this->aired_to_year, <br>
        <strong>Episodi totali:</strong> $this->number_of_episodes, <br>
        <strong>Stagioni totali:</strong> $this->number_of_seasons, <br>";

    }
}