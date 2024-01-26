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
class Movies
{
    public $title;
    public $genre;
    public $releaseYear;
    public $director;
    public $description;
    public $image;
    // typing
    /**
     * Construct Movies List
     *
     * @param string title of the film
     * @param Genres Class genre
     * @param integer year of release of the film
     * @param string name and surname of the director
     * @param string little description of the film
     */
    public function __construct(string $_title, array $_genre, int $_releaseYear, string $_director, string $_description, string $_image)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->releaseYear = $_releaseYear;
        $this->director = $_director;
        $this->description = $_description;
        $this->image = $_image;
    }
    //Method call a function Title;
    public function getTitle()
    {
        return $this->title;
    }
    public function getGenre()
    {
        return $this->genre;
    }
    public function getReleaseYear()
    {
        return $this->releaseYear;
    }
    public function getDirector()
    {
        return $this->director;
    }
    public function getDescription()
    {
        return $this->description;
    }
}

$moviesList = [
    $movie_1 = new Movies('Ritorno al futuro', ['Comedy', 'Action'], 1985, 'Robert Zemeckis', 'Il diciottenne Marty ha come amico un bislacco scienziato che ha inventato una macchina per viaggiare nel tempo. Grazie ad essa Marty tornerà indietro nel tempo, fino al 1955.', 'https://i.ebayimg.com/images/g/hn4AAOSwA-xiLcAy/s-l1600.jpg'),

    $movie_2 = new Movies('Il Signore degli Anelli', ['	fantastico, avventura, azione, epico, drammatico'], 2001, 'Peter Jackson', 'Il Signore degli Anelli è una trilogia colossal fantasy co-scritta, diretta e co-prodotta dal regista neozelandese Peter Jackson, basata sull\'omonimo romanzo scritto da J. R. R.', 'https://pad.mymovies.it/filmclub/2002/01/011/locandina.jpg'),

    $movie_3 = new Movies('Star Wars', ['azione, avventura, fantastico, fantascienza'], 1999, 'George Lucas', 'Guerre stellari è un franchise creato da George Lucas, che si sviluppa da una saga cinematografica iniziata nel 1977 col film Guerre stellari, sottotitolato retroattivamente Episodio IV - Una nuova speranza.', 'https://upload.wikimedia.org/wikipedia/it/thumb/d/db/Locandinafantasma.jpg/290px-Locandinafantasma.jpg'),

    $movie_4 = new Movies('Indiana Jones - I predatori dell\'arca perduta', ['Action', 'Fantasy'],     1981, 'George Lucas', 'L\'archeologo Indiana Jones affronta serpenti e nazisti per scovare l\'arca dell\'alleanza e le tavole di Mosè.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSy_uXayC3i4Vz7t46HKDss0C2AYAieF4zNcw&usqp=CAU')
];
