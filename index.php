<?php
class Production
{
    public $title;
    public $original_language;
}

class Movie extends Production
{
    public $published_year;
    public $running_time;

}

class TvSerie extends Production
{
    public $aired_from_year;

    public $aired_to_year;

    public $number_of_episodes;

    public $number_of_seasons;
}