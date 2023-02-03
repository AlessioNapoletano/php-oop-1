<?php
require_once __DIR__ . './models/Movie.php';

require_once __DIR__ . './db/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<!--
     è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
 -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>


    <link rel="icon" href="https://img.freepik.com/free-vector/flat-clapperboard-icon_1063-38.jpg">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./styles/style.css">
</head>


<body>

    <header>
        <h1 class="text-center">
            Movies
        </h1>
        <hr>
    </header>

    <main>

        <div class="wrapper d-flex">

            <!--Movie -->
            <div class="card me-3" style="width: 18rem;">
                <img src="<?php echo $movie1->getCoverMovie() ?>
                " alt="<?php $movie1->getNameMovie() ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $movie1->getNameMovie(); ?></h5>

                    <p class="card-text">
                        <span class="fw-bold">Genere: </span>
                        <?php foreach($movie1->genre as $genre) {
                        echo $genre . " ";
                    } ?>
                    </p>

                    <p class="card-text">
                        <span class="fw-bold">Voto: </span>
                        <?php echo $movie1->getVoteMovie(); ?>
                    </p>
                    
                </div>
            </div>

            <!--Movie -->
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $movie2->getCoverMovie() ?>
                " alt="<?php $movie2->getNameMovie() ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $movie2->getNameMovie(); ?></h5>

                    <p class="card-text">
                        <span class="fw-bold">Genere: </span>
                        <?php foreach($movie2->genre as $genre) {
                        echo $genre . " ";
                    } ?>
                    </p>

                    <p class="card-text">
                        <span class="fw-bold">Voto: </span>
                        <?php echo $movie2->getVoteMovie(); ?>
                    </p>
                    
                </div>
            </div>


        </div>

        <!--End Div Wrapper -->
        </div>




    </main>

</body>

</html>