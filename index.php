<?php
require __DIR__ . "/Models/Production.php";
require __DIR__ . "/Models/Movie.php";
require __DIR__ . "/Models/TvSerie.php";


$production = new Production("Titolo", "Lingua");
$movie = new Movie("Titolo", "Lingua", "Anno", "Durata");
$tv_serie = new TvSerie("Titolo", "Lingua", "Iniziata", "Finita", "Episodi", "Stagioni");


// var_dump($production);
// echo "<hr>";
// var_dump($movie);
// echo "<hr>";
// var_dump($tv_serie);

// echo $tv_serie->title;
// var_dump($production->title);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>PHP Object-oriented programming 1</title>
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">

                        <?php echo $production->getDetails() ?>

                    </div>
                </div>
            </div>
        </div>


    </div>

</body>

</html>