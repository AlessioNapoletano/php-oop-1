<?php
require_once __DIR__ . './models/Movie.php';

$movie1 = new Movie('Star Wars', 8, ['Adventure' , 'Fantasy']);
$movie2 = new Movie('Harry Potter', 9 , 'Fantasy');

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
            <div class="movie">
                <h2>
                    Dati Film
                </h2>

                <p>
                    Nome: <?php echo $movie1->getNameMovie(); ?>
                </p>

                <p>
                    Voto: <?php echo $movie1->getVoteMovie(); ?>
                </p>

                <p>
                    
                    Genere: 
                    <?php 
                        foreach ($movie1->genre as $genre) {
                            echo $genre . " ";
                        }
                    ?>
                </p>
            </div>


            <div class="movie">
            <h2>
                    Dati Film
                </h2>

                <p>
                    Nome: <?php echo $movie2 -> getNameMovie(); ?>
                </p>

                <p>
                    Voto: <?php echo $movie2 -> getVoteMovie(); ?>
                </p>

                <!-- <p>
                    Genere: <?php echo $movie2 -> getGenreMovie(); ?>
                </p> -->
            </div>

            </div>

            <!--End Div Wrapper -->
        </div>


        

    </main>

</body>

</html>