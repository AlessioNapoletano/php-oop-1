<?php
require_once __DIR__ . '/models/Movie.php';

require_once __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>


    <link rel="icon" href="https://img.freepik.com/free-vector/flat-clapperboard-icon_1063-38.jpg">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./styles/style.css">
</head>


<body>

    <header>
        <h1 class="text-center text-light pt-2">
            Movies
        </h1>
    </header>

    <main class="py-5">

        <div class="container-lg d-flex justify-content-center">
            <div class="row">
                <!-- Movie -->

                <?php foreach ($movies as $movie) {?>
                <div class="col-4 mb-3">

                    <!--Movie -->
                    <div class="card my-card me-3" style="width: 18rem;">
                        <div class="wrapper-image">
                            <img src="<?php echo $movie->getCoverMovie() ?>
                    " alt="<?php $movie->getNameMovie() ?>" class="card-img-top">
                        </div>

                        <div class="card-body text-white">
                            <h5 class="card-title text-center"><?php echo $movie->getNameMovie(); ?></h5>

                            <p class="card-text">
                                <span class="fw-bold">Genere: </span>
                                <?php foreach ($movie->genre as $genre) {
                                    echo $genre . " ";
                                } ?>
                            </p>

                            <p class="card-text">
                                <span class="fw-bold">Voto: </span>
                                <?php echo $movie->getVoteMovie(); ?>
                            </p>

                            <p class="card-text">
                                <span class="fw-bold">Descrizione: </span>
                                <?php echo $movie->getDescriptionMovie(); ?>
                            </p>

                            <p class="card-text text-end">
                                <span class="fw-bold">
                                    <?php echo Movie::getType() ?>
                                </span>
                            </p>

                        </div>
                    </div>
                </div>

                <?php } ;?>

            </div>

        </div>
    </main>

</body>

</html>