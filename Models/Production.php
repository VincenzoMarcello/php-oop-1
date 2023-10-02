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