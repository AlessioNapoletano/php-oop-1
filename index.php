<?php
require_once __DIR__ . './models/Movie.php';

require_once __DIR__ . './db/db.php';

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
                <div class="col-4 mb-3">

                    <!--Movie -->
                    <div class="card my-card me-3" style="width: 18rem;">
                        <div class="wrapper-image">
                            <img src="<?php echo $movie1->getCoverMovie() ?>
                    " alt="<?php $movie1->getNameMovie() ?>" class="card-img-top">
                        </div>

                        <div class="card-body text-white">
                            <h5 class="card-title text-center"><?php echo $movie1->getNameMovie(); ?></h5>

                            <p class="card-text">
                                <span class="fw-bold">Genere: </span>
                                <?php foreach ($movie1->genre as $genre) {
                                    echo $genre . " ";
                                } ?>
                            </p>

                            <p class="card-text">
                                <span class="fw-bold">Voto: </span>
                                <?php echo $movie1->getVoteMovie(); ?>
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Movie -->
                <div class="col-4 mb-3">
                    <div class="card my-card me-3" style="width: 18rem;">
                        <div class="wrapper-image">
                            <img src="<?php echo $movie2->getCoverMovie() ?>
                    " alt="<?php $movie1->getNameMovie() ?>" class="card-img-top">
                        </div>

                        <div class="card-body text-white">
                            <h5 class="card-title text-center"><?php echo $movie2->getNameMovie(); ?></h5>

                            <p class="card-text">
                                <span class="fw-bold">Genere: </span>
                                <?php foreach ($movie2->genre as $genre) {
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

                <!-- Movie -->
                <div class="col-4 mb-3">
                    <!--Movie -->
                    <div class="card my-card">
                        <div class="wrapper-image">
                            <img src="<?php echo $movie3->getCoverMovie() ?>
                    " alt="<?php $movie1->getNameMovie() ?>" class="card-img-top">
                        </div>
                        <div class="card-body text-white">
                            <h5 class="card-title text-center"><?php echo $movie3->getNameMovie(); ?></h5>

                            <p class="card-text">
                                <span class="fw-bold">Genere: </span>
                                <?php foreach ($movie3->genre as $genre) {
                                    echo $genre . " ";
                                } ?>
                            </p>

                            <p class="card-text">
                                <span class="fw-bold">Voto: </span>
                                <?php echo $movie3->getVoteMovie(); ?>
                            </p>

                        </div>
                    </div>

                </div>

                <!-- Movie -->
                <div class="col-4 mb-3">
                    <div class="card my-card">
                        <div class="wrapper-image">
                            <img src="<?php echo $movie4->getCoverMovie() ?>
                    " alt="<?php $movie1->getNameMovie() ?>" class="card-img-top">
                        </div>
                        <div class="card-body text-white">
                            <h5 class="card-title text-center"><?php echo $movie4->getNameMovie(); ?></h5>

                            <p class="card-text">
                                <span class="fw-bold">Genere: </span>
                                <?php foreach ($movie4->genre as $genre) {
                                    echo $genre . " ";
                                } ?>
                            </p>

                            <p class="card-text">
                                <span class="fw-bold">Voto: </span>
                                <?php echo $movie4->getVoteMovie(); ?>
                            </p>

                        </div>
                    </div>

                </div>

                <!-- Movie -->
                <div class="col-4 mb-3">
                    <div class="card my-card">
                        <div class="wrapper-image">
                            <img src="<?php echo $movie5->getCoverMovie() ?>
                    " alt="<?php $movie1->getNameMovie() ?>" class="card-img-top">
                        </div>
                        <div class="card-body text-white">
                            <h5 class="card-title text-center"><?php echo $movie5->getNameMovie(); ?></h5>

                            <p class="card-text">
                                <span class="fw-bold">Genere: </span>
                                  <?php foreach ($movie5->genre as $genre) {
                                    echo $genre . " ";
                                } ?>
                            </p>

                            <p class="card-text">
                                <span class="fw-bold">Voto: </span>
                                <?php echo $movie5->getVoteMovie(); ?>
                            </p>

                        </div>
                    </div>

                </div>

                <!-- Movie -->
                <div class="col-4 mb-3">
                    <div class="card my-card">
                        <div class="wrapper-image">
                            <img src="<?php echo $movie6->getCoverMovie() ?>
                    " alt="<?php $movie1->getNameMovie() ?>" class="card-img-top">
                        </div>
                        <div class="card-body text-white">
                            <h5 class="card-title text-center"><?php echo $movie6->getNameMovie(); ?></h5>

                            <p class="card-text">
                                <span class="fw-bold">Genere: </span>
                                <?php foreach ($movie6->genre as $genre) {
                                    echo $genre . " ";
                                } ?>
                            </p>

                            <p class="card-text">
                                <span class="fw-bold">Voto: </span>
                                <?php echo $movie6->getVoteMovie(); ?>
                            </p>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </main>

</body>

</html>