<?php
include_once __DIR__ . '/Classes/Movie.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">

</head>

<body>
    <h1 class="text-center">
        Movie List
    </h1>
    <main class="container">
        <div class="row">
            <?php foreach ($moviesList as $movie) { ?>
            <div class="col-6">
                <div class="card">
                    <img src="<?php echo $movie->image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: <?php echo $movie->getTitle()  ?></h5>
                        <p class="card-text">Regista: <?php echo $movie->getDirector() ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Genere: <?php echo implode(', ', $movie->getGenre()); ?></li>
                        <li class="list-group-item">Anno uscita: <?php echo $movie->getReleaseYear() ?></li>
                        <li class="list-group-item">Descrizione: <?php echo $movie->getDescription() ?></li>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>