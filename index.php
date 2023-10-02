<?php
class Production
{
    public $title;
    public $original_language;

    public function __construct(
        string $title,
        string $original_language
    ) {
        $this->title = $title;
        $this->original_language = $original_language;
    }
}

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

}

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
}

$production = new Production("Titolo", "Lingua");
$movie = new Movie("Titolo", "Lingua", "Anno", "Durata");
$tv_serie = new TvSerie("Titolo", "Lingua", "Iniziata", "Finita", "Episodi", "Stagioni");


var_dump($production->title);
echo "<hr>";
var_dump($movie);
echo "<hr>";
var_dump($tv_serie);

echo $tv_serie->title;