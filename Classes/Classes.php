<?php
/* Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’ :
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà (vietato usare var_dump)
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies. Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. */
include_once __DIR__ . '/Genre.php';
class Movie
{
    public $title;
    public $genre;
    public $releaseYear;
    public $director;
    public $description;
    // typing
    /**
     * Construct Movies List
     *
     * @param string title of the film
     * @param Genre Class genre
     * @param integer year of release of the film
     * @param string name and surname of the director
     * @param string little description of the film
     */
    public function __construct(string $_title, Genre $_genre, int $_releaseYear, string $_director, string $_description)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->releaseYear = $_releaseYear;
        $this->director = $_director;
        $this->description = $_description;
    }
}

$movie_1 = new Movie('Ritorno al futuro', $westernGenre, 1985, 'Robert Zemeckis', 'Il diciottenne Marty ha come amico un bislacco scienziato che ha inventato una macchina per viaggiare nel tempo. Grazie ad essa Marty tornerà indietro nel tempo, fino al 1955.');
$movie_2 = new Movie('Il Signore degli Anelli', $actionGenre, 2001, 'Peter Jackson', 'Il Signore degli Anelli è una trilogia colossal fantasy co-scritta, diretta e co-prodotta dal regista neozelandese Peter Jackson, basata sull\'omonimo romanzo scritto da J. R. R.');

$listMovie = [$movie_1, $movie_2];

var_dump($listMovie);
