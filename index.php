<?php
include_once "logic.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harry Potter : les persos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .death {
            width: 50px;
            height: 50px;
        }

        .house {
            width: 50px;
            height: 50px;
        }

        .card-img-top {
            height: 350px;
            object-fit: cover;
        }
    </style>


</head>

<body>
    <h1 class="text-center my-4">
        Personnages Harry Potter
    </h1>
    <p class="text-center mb-4 bg-primary text-white">
        Nombre de personnages affichés :
        <?= $nbChara ?>
    </p>
    <div class="container">
        <div class="row text-center">
            <?php foreach ($dataDecode as $chara): ?>
                <?php if (!empty($chara['image'])): ?>
                    <div class="col-md-3 mb-4">
                        <div class="card h-100 <?= getBorder($chara['gender']) ?> ">
                            <div class="position-relative">
                                <img src="<?= $chara['image'] ?>" class="card-img-top" alt="<?= $chara['name'] ?>">
                                <?php if (isset($chara['alive']) && $chara['alive'] === false): ?>
                                    <div class="position-absolute top-0 end-0 death">
                                        💀
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= $chara['name'] ?></h5>
                                <?php if (!empty($chara['house'])): ?>
                                    <img src="<?= getHouse($chara['house']) ?>" class="house rounded-circle"
                                        alt="Image des maisons">
                                <?php endif; ?>
                                <h6 class="card-text"><?= $chara['house'] ?></h6>
                                <p class="card-text"><?= $chara['dateOfBirth'] ?></p>
                                <?php if (!empty($chara['yearOfBirth'])): ?>
                                    <p class="card-text">
                                        Âge :
                                        <?= getAge($chara['yearOfBirth']) ?> ans
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>