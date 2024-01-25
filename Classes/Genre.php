<?php
class Genre
{
    public $type;

    /**
     * constructor of the genre type
     *
     * @param string genre of the film
     */
    public function __construct(string $_type)
    {
        $this->type = $_type;
    }
}

$commedyGenre = new Genre('Commedy');
$actionGenre = new Genre('Action');
$thrillerGenre = new Genre('Thriller');
$westernGenre = new Genre('Western');
