<?php
class Production
{
    public $title;
    public $original_language;

    public function __construct(
        string $title,
        string $original_language
    ) {
        $this->setTitle($title);
        $this->setOgLanguage($original_language);
    }

    public function setTitle($title)
    {
        if (empty($title))
            return false;
        $this->title = $title;
    }

    public function setOgLanguage($original_language)
    {
        if (empty($original_language))
            return false;
        $this->original_language = $original_language;
    }

    public function getDetails()
    {
        return "
        <strong>Titolo:</strong> $this->title, <br>
        <strong>Lingua:</strong> $this->original_language, <br>";
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


var_dump($production);
echo "<hr>";
var_dump($movie);
echo "<hr>";
var_dump($tv_serie);

echo $tv_serie->title;
var_dump($production->title);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>